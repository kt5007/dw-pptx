<?php declare(strict_types=1); ?>
<body>
  <?php
    $addFunction = function($a, $b){
      return $a + $b;
    };
    $total = $addFunction(10, 20);

    $feeling = 'love';

    $combineString = function ($object) use ($feeling) {
      print 'I ' . $feeling . ' ' . $object . '<br>';
    };

    $combineString('you');

    $feeling = 'hate';
    $combineString('apple');

    $feeling = 'love';

    $combineString = function ($object) use (&$feeling) {
      print 'I ' . $feeling . ' ' . $object . '<br>';
    };

    $combineString('you');

    $feeling = 'hate';
    $combineString('apple');

  ?>
  <p>計算結果：<?=$total?></p>
</body>