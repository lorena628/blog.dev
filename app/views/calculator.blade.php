<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="/img/LM.png">
        
        <title>Calculator project...</title>
        <link rel="stylesheet" href="/css/calculator.css">

    </head>
    <body>
    <div id="header">
    <h1>Your basic calculator... </h1>
    </div>
    <div id="calculator">
        <div class="inputs">
        <form method="POST">
            <input id="left-operand" readonly></input>
            <input id="operator" readonly></input>
            <input id="right-operand" readonly></input>
            <input id="random" readonly></input>
        </form>
        </div>


        <div class="row1">
            <button class="numbers" data-number="1">1</button>
            <button class="numbers" data-number="2">2</button>
            <button class="numbers" data-number="3">3</button>
            <button class="operators" data-operand="+">+</button>
        </div>


        <div class="row2">
            <button class="numbers" data-number="4">4</button>
            <button class="numbers" data-number="5">5</button> 
            <button class="numbers" data-number="6">6</button>
            <button class="operators" data-operand="-">-</button>
        </div>
            

        <div class="row3">
            <button class="numbers" data-number="7">7</button>
            <button class="numbers" data-number="8">8</button>
            <button class="numbers" data-number="9">9</button>
            <button class="operators" data-operand="*">*</button>
        </div>


        <div class="row4">
            <button id="clear">C</button>
            <button id="btn0" class="numbers" data-number="0">0</button>
            <button id="equals">=</button>
            <button class="operators" data-operand="/">/</button>
        </div>    
     
    </div>
    <script type="text/javascript">
    // (function() {
    "use strict";

    var inputOne = document.getElementById("left-operand");
    var inputTwo = document.getElementById("right-operand");
    var inputMiddle = document.getElementById("operator");


    //clicking numbers
    var numberClicked = function (event) {

        if (document.getElementById("left-operand").value != "" && document.getElementById("operator").value != "") {
            inputTwo.value += this.getAttribute("data-number");
        }
        else {
            inputOne.value += this.getAttribute("data-number");
        }
    }
    var numberButtons = document.getElementsByClassName("numbers");
    //console.log(numberButtons);
        for (var i=0; i < numberButtons.length; i++) {
            numberButtons[i].addEventListener('click', numberClicked);
    }



    var operantClicked = function (event) {
        inputMiddle.value = this.getAttribute("data-operand");
    }
    var operantButtons = document.getElementsByClassName("operators");
    //console.log(operantButtons);
        for (var i=0; i < operantButtons.length; i++) {
            operantButtons[i].addEventListener('click', operantClicked);
    }


    //total in left operand
    var total = document.getElementById("left-operand");
    var result = function (event) {
        switch (operator.value) {
            case "+":
            inputOne.value=(parseInt(inputOne.value) + parseInt(inputTwo.value));
                break; 
            case "-":
            inputOne.value=(parseInt(inputOne.value) - parseInt(inputTwo.value));
                break;
            case "*":
            inputOne.value=(parseInt(inputOne.value) * parseInt(inputTwo.value));
                break;
            case "/":
            inputOne.value=(parseInt(inputOne.value) / parseInt(inputTwo.value));
                break;
            default:
            inputOne.value("null");
            }
    }


    //equals
    var equals = document.getElementById("equals");
    var equalsoutput = function (event) {
        inputTwo.value = "";
        inputMiddle.value= "";
    }
    equals.addEventListener('click', result);
    equals.addEventListener('click', equalsoutput);



    //clear
    var erase = document.getElementById("clear");
    var clearClick = function (event) {
        inputOne.value = "";
        inputTwo.value = "";
        inputMiddle.value= "";
    }
    var redo = document.getElementsByClassName("inputs");
    clear.addEventListener('click', clearClick);

    // })();

    </script>

    </body>
</html>