function addToDisplay(value) {
            document.getElementById('display').value += value;
        }

        // Function to clear the display
        function clearDisplay() {
            document.getElementById('display').value = '';
        }

        // Function to calculate the result
        function calculate() {
            try {
                let result = eval(document.getElementById('display').value);
                document.getElementById('display').value = result;
            } catch (error) {
                document.getElementById('display').value = 'Error';
            }
        }