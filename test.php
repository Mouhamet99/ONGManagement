<?php
$data = array(
    'a' => 'anglais',
    'b' => 'francais',
    'c' => 'espagnol'
);
$attributes = implode(',', array_map((fn($value): string => ':'.$value), $data));
print_r($attributes);
print_r(array_values($data));
print_r(array_keys($data));