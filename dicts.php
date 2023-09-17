<?php
$dict1 = ["code" => "код", "programming" => "програмування", "apartment" => "житло", "cat" => "кіт"];
$dict2 = ["cat" => "кішка", "dog" => "собака", "parrot" => "папуга", "code" => "кодекс"];
$dicts = array_merge_recursive($dict1, $dict2);

print_r($dicts);