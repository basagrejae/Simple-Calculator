<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Calculator</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div id="calculator">
    <input class="display" id="display" readonly>
    <div class="buttons" id="buttons">
      <button class="btn gray" onclick="appendToDisplay('+')">+</button>
      <button class="btn" onclick="appendToDisplay('7')">7</button>
      <button class="btn" onclick="appendToDisplay('8')">8</button>
      <button class="btn" onclick="appendToDisplay('9')">9</button>
      <button class="btn orange" onclick="appendToDisplay('-')">-</button>
      <button class="btn" onclick="appendToDisplay('4')">4</button>
      <button class="btn" onclick="appendToDisplay('5')">5</button>
      <button class="btn" onclick="appendToDisplay('6')">6</button>
      <button class="btn orange" onclick="appendToDisplay('*')">*</button>
      <button class="btn" onclick="appendToDisplay('1')">1</button>
      <button class="btn" onclick="appendToDisplay('2')">2</button>
      <button class="btn" onclick="appendToDisplay('3')">3</button>
      <button class="btn orange" onclick="appendToDisplay('/')">/</button>
      <button class="btn zero" onclick="appendToDisplay('0')">0</button>
      <button class="btn" onclick="appendToDisplay('.')">.</button>
      <button class="btn orange" onclick="calculate()">=</button>
      <button class="btn gray" onclick="clearDisplay()">C</button>
    <!-- <div class="display" id="display">0</div>
    <div class="buttons">
      <button class="btn gray">C</button>
      <button class="btn gray">±</button>
      <button class="btn gray">%</button>
      <button class="btn orange">÷</button>

      <button class="btn">7</button>
      <button class="btn">8</button>
      <button class="btn">9</button>
      <button class="btn orange">×</button>

      <button class="btn">4</button>
      <button class="btn">5</button>
      <button class="btn">6</button>
      <button class="btn orange">−</button>

      <button class="btn">1</button>
      <button class="btn">2</button>
      <button class="btn">3</button>
      <button class="btn orange">+</button>

      <button class="btn zero">0</button>
      <button class="btn">.</button>
      <button class="btn orange">=</button>
    </div> -->
    </div>
  </div>

  <script src="index.js"></script>
</body>
</html>