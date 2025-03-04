<?php

use Passionator\StringOperations\StringClass;

it('can reverse string', function () {

    $str = StringClass::string("Test")->reverse();
    expect($str)->toEqual("tseT");
});
