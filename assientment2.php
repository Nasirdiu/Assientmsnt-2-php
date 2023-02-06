<?php

$tutionFee = 20000;

$calculator = (20000 <= $tutionFee) ? ($tutionFee * 25 / 100) :
((10000 <= $tutionFee && 20000 >= $tutionFee) ? $tutionFee * 20 / 100 :
    ((10000 >= $tutionFee && 7000 <= $tutionFee) ? $tutionFee * 15 / 100 :
        ((7000 >= $tutionFee) ? "invalid data" : false)));
echo "$calculator";
