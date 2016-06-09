@extends('layouts.master')


@section('topscript')
    <link rel="icon" href="/img/LM.png">
    
    <title>Simple Simon</title>
    
    <link rel="stylesheet" href="/css/simplesimon.css">
    <!-- google font -->
    <link href='https://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
@stop


@section('body') 
<div class="container">
    <h1 id="title">Simple Simon</h1>
    <div id="twoBtns">
    <button id="startGame" class="start">Start</button>
    <!-- this is for the current level displayed -->
    <p><input type="text" id="level" class="currentLevel" readonly=""></p>
    <!-- this is a bootstrap button decide whether you want it or not -->
    <!-- <button type="button" id="startGame" class="start btn  btn-success">Start</button>     -->
    </div>
    

    <!-- this is the gameboard for the pads -->
    <div  class="gameboard">
        <div id="rred" class="red pad"></div>
        <div id="bblue" class="blue pad"></div>
        <div id="yyellow" class="yellow pad"></div>
        <div id="ggreen" class="green pad"></div>
    </div>
</div>

<!-- js begins /////////////////////////////////////////////////////////////////////////-->
 <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script>
"use strict";
      
     

    var compSequence = [];
    function startGame(){
        start();
        function start(){
            compSequence = [];
            pickRandom();
        }
        
    var userSequence = [];
        function pickRandom(){
            userSequence = [];

            var pads = $('.pad');
            var random = Math.floor(Math.random() * 4);
            compSequence.push(pads[random].id);
            begin();
        }


        // beginning the game 
        function begin() {

            $('#level').val("Level: " + compSequence.length);
            disable();
            
            var i = 0;
            var intS = setInterval(function () {
                padActivated(document.getElementById(compSequence[i]));
                i++;
                if (i >= compSequence.length) {
                    clearInterval(intS);
                    enable();
                }
            },1000);
        }


        function padActivated(element) {
            $(element).animate({
                opacity: 1,
            }, 400, function() {
                $(element).animate({
                    opacity: .2,
                }, 300);
            });
        }
// console.lo
        // this is the code that compares user sequence against comps
        function compare() {
            var mistake = false;
            // check if simon and user sequence are the same
            for (var i = 0; i < userSequence.length; i++) {
                if (compSequence[i] != userSequence[i]) {
                    mistake = true;
                    break;
                }
            }
            if  (mistake) {
              console.log("error")
              alert('You lost :(')
            } else if(userSequence.length == compSequence.length) {
                pickRandom();
            };
        }
        


        // functions for click events with user behavior
         function userClick() {
            userSequence.push(this.id);
            padActivated(this);
            compare();
        };


        function enable(){
            $('#rred').on('click', userClick);
            $('#bblue').on('click', userClick);
            $('#yyellow').on('click', userClick);
            $('#ggreen').on('click', userClick);
        }


        function disable(){
            $( '#rred').off('click');
            $('#bblue').off('click');
            $('#yyellow').off('click');
            $('#ggreen').off('click');
        }
    }

    $('#startGame').on('click', startGame);

    </script>
@stop