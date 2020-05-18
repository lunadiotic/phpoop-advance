<?php
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
// Even value
$out = array_filter($array, function ($item) {
    return ($item % 2 == 0);
});
print_r($out);
print_r($array);

// Odd Value
$filterFunc = function ($item) {
    return ($item % 2 == 1);
};
$out = array_filter($array, $filterFunc);
print_r($out);
