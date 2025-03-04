<?php

use Spatie\StringReverse\StringReverseClass;

it('can reverse string', function () {

    $str = StringReverseClass::string("Test")->reverse();
    expect($str)->toEqual("tseT");
});
