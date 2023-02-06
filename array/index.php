<?php

$cats = [
    'Anton',
    'Aria',
    'Axel',
    'Aron',
    'Bety',
    'Bruno',
    'Coco',
    'Carlota',
    'Cosmo',
    'Cooper',
    'Cassy'
];

$worked1 = array_filter($cats, function ($cat) {
    return strlen($cat) < 5;
});

$worked2 = array_filter($cats, function ($cat) {
    return strlen($cat) >= 5;
});

$worked3 = array_map(function ($cat) {
    return strtoupper($cat);
}, $cats);



var_dump($worked1);
var_dump($worked2);
var_dump($worked3);