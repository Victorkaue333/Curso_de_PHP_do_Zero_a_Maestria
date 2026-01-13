<?php

function teste() {
    $a = 0;
    $a++;

    echo "$a <br>";
}

teste();
teste();
teste();


function testestatic() {
    static $a = 0;
    $a++;

    echo "$a <br>";
}

testestatic();
testestatic();
testestatic();
