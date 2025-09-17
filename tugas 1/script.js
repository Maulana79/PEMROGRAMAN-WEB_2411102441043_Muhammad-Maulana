        const displayElement = document.getElementById('display');
        const buttons = document.querySelectorAll('.calc-btn');
        const muteButton = document.getElementById('mute-btn');

        const sounds = {
            click: document.getElementById('click-sound'),
            operator: document.getElementById('operator-sound'),
            equals: document.getElementById('equals-sound'),
            error: document.getElementById('error-sound'),
            clear: document.getElementById('clear-sound')
        };
        let isMuted = false; 

        let currentInput = '0';
        let previousInput = '';
        let operator = null;
        let awaitingNextInput = false; 

        function playSound(soundKey) {
            if (!isMuted && sounds[soundKey]) {
                sounds[soundKey].currentTime = 0; 
                sounds[soundKey].play().catch(e => console.warn("Sound play error:", e)); 
            }
        }
        
        function updateDisplay() {
            let displayValue = currentInput;
            const maxDisplayLength = 15; 
            if (displayValue.length > maxDisplayLength) {
                if (!isNaN(parseFloat(displayValue))) {
                    displayValue = parseFloat(displayValue).toExponential(maxDisplayLength - 7); 
                } else { 
                    displayValue = displayValue.substring(0, maxDisplayLength);
                }
            }
            displayElement.textContent = displayValue;

            if (displayValue.length > 10 && displayValue.length <= maxDisplayLength) {
                displayElement.style.fontSize = "1.5rem";
            } else if (displayValue.length > maxDisplayLength) { 
                displayElement.style.fontSize = "1.3rem";
            }
            else {
                displayElement.style.fontSize = "2rem"; 
            }
        }

        function handleNumber(number) {
            playSound('click');
            if (awaitingNextInput) {
                currentInput = number;
                awaitingNextInput = false;
            } else {
                currentInput = currentInput === '0' ? number : currentInput + number;
            }
        }

        function handleOperator(nextOperator) {
            playSound('operator');
            if (operator && !awaitingNextInput) {
                calculate();
            } else if (currentInput === "Error") { 
                return;
            }
            
            previousInput = currentInput; 
            operator = nextOperator;
            awaitingNextInput = true; 
        }

        function handleDecimal() {
            playSound('click');
            if (awaitingNextInput) { 
                currentInput = '0.';
                awaitingNextInput = false;
                return;
            }
            if (!currentInput.includes('.')) {
                currentInput += '.';
            }
        }

        function handleDelete() {
            playSound('click');
            if (awaitingNextInput || currentInput === "Error") return; 

            if (currentInput.length > 1) {
                currentInput = currentInput.slice(0, -1);
            } else {
                currentInput = '0'; 
            }
        }
        
        function handleClear() {
            playSound('clear');
            currentInput = '0';
            previousInput = '';
            operator = null;
            awaitingNextInput = false;
        }

        function calculate() {
            if (!operator || previousInput === '' || awaitingNextInput) { 
                return;
            }
            
            let result;
            const prev = parseFloat(previousInput);
            const current = parseFloat(currentInput);

            if (isNaN(prev) || isNaN(current)) {
                currentInput = "Error";
                playSound('error');
                updateDisplay();
                operator = null; 
                previousInput = '';
                awaitingNextInput = false; 
                return;
            }

            switch (operator) {
                case 'add': result = prev + current; break;
                case 'subtract': result = prev - current; break;
                case 'multiply': result = prev * current; break;
                case 'divide':
                    if (current === 0) {
                        currentInput = "DIV/0!";
                        playSound('error');
                        updateDisplay();
                        operator = null;
                        previousInput = '';
                        awaitingNextInput = false; 
                        return;
                    }
                    result = prev / current;
                    break;
                default: return;
            }
            
            result = parseFloat(result.toPrecision(12)); 

            currentInput = result.toString();
            playSound('equals');
            operator = null; 
            previousInput = ''; 
            awaitingNextInput = false; 
        }

        buttons.forEach(button => {
            button.addEventListener('click', () => {
                button.classList.add('ring-2', 'ring-offset-2', 'ring-offset-gray-800');
                if (button.classList.contains('btn-number')) button.classList.add('ring-cyan-400');
                else if (button.classList.contains('btn-operator')) button.classList.add('ring-purple-400');
                else if (button.classList.contains('btn-function')) button.classList.add('ring-red-400');
                else if (button.classList.contains('btn-equals')) button.classList.add('ring-green-400');

                setTimeout(() => {
                    button.classList.remove('ring-2', 'ring-offset-2', 'ring-offset-gray-800', 'ring-cyan-400', 'ring-purple-400', 'ring-red-400', 'ring-green-400');
                }, 150);


                const action = button.dataset.action;
                const number = button.dataset.number;
                const op = button.dataset.operator;

                if (number) handleNumber(number);
                if (op) handleOperator(op);
                if (action === 'decimal') handleDecimal();
                if (action === 'clear') handleClear();
                if (action === 'delete') handleDelete();
                if (action === 'equals') {
                    if (operator && previousInput !== '') {
                        calculate();
                    } else {
                        if (currentInput !== "Error" && currentInput !== "DIV/0!") playSound('click');
                    }
                }
                updateDisplay();
            });
        });

        document.addEventListener('keydown', (event) => {
            let targetButton;
            if (event.key === 'Enter') { 
                targetButton = document.querySelector(`.calc-btn[data-key-alt="Enter"]`);
            } else if (event.key === 'Backspace') { 
                targetButton = document.querySelector(`.calc-btn[data-action="delete"]`);
            } else if (event.key.toLowerCase() === 'c' || event.key === 'Escape') { 
                targetButton = document.querySelector(`.calc-btn[data-action="clear"]`);
            }
            else {
                targetButton = document.querySelector(`.calc-btn[data-key="${event.key}"]`);
            }
            
            if (targetButton) {
                event.preventDefault(); 
                targetButton.click(); 
                targetButton.classList.add('scale-110', 'shadow-xl');
                 setTimeout(() => targetButton.classList.remove('scale-110', 'shadow-xl'), 150);
            }
        });


        muteButton.addEventListener('click', () => {
            isMuted = !isMuted;
            muteButton.textContent = isMuted ? "SOUND: OFF" : "SOUND: ON";
            muteButton.style.color = isMuted ? "#ff7777" : "#77ffff"; 
            if (!isMuted) playSound('click'); 
        });


        updateDisplay();
        muteButton.textContent = isMuted ? "SOUND: OFF" : "SOUND: ON";
        muteButton.style.color = isMuted ? "#ff7777" : "#77ffff";