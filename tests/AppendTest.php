<?php

use Passionator\StringOperations\StringClass;

it('can append string', function () {

    $str = StringClass::string("Test")->append(" is successful!");
    expect($str)->toEqual("Test is successful!");
});
