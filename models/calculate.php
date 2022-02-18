<?php
$operations = [
  [
    'name' => "sum",
    'symbol' => '+',
  ],
  [
    'name' => "diff",
    'symbol' => '-',
  ],
  [
    'name' => "mult",
    'symbol' => '*',
  ],
  [
    'name' => "div",
    'symbol' => '/',
  ],
];

function sum($x, $y) {
  return ($x + $y);
}

function diff($x, $y) {
  return ($x - $y);
}

function mult($x, $y) {
  return ($x * $y);
}

function div($x, $y) {
  if ($y == 0) {
    return "Ошибка деления - на ноль делить нельзя!";     
  }
  return ($x / $y);
}

function math($x, $y, $operation) {
  switch ($operation) {
    case 'sum':
      return sum($x, $y);
      break;

    case 'diff':
      return diff($x, $y);
      break;

    case 'mult':
      return mult($x, $y);

    case 'div':
      return div($x, $y);
      break;
  }
}

