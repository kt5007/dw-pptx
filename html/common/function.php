<?php
date_default_timezone_set('Asia/Tokyo');

function getTodayTitle(){
  $weeks = [
    '日', //0
    '月', //1
    '火', //2
    '水', //3
    '木', //4
    '金', //5
    '土', //6
  ];
  $weekNum = date('w');
  $title = date('Y年n月j日') . $weeks[$weekNum] . '曜日' . PHP_EOL .'明け方の御言葉';
  return $title; 
}

$samplePhrases = '1改行で1スライド作成されます。';

