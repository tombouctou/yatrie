<?php
require_once(dirname(__FILE__) . '/src/Yatrie.php');

$t = new Yatrie();
$ww[] = 'hello';
$ww[] = 'world';
$ww[] = 'chucknorris';
$ww[] = 'chuck';

foreach ($ww as $w) {
    $t->add($w);
}

$ww[] = 'chu';

foreach ($ww as $w) {
    $res = $t->check($w);
    if(false === $res){
        print "$w failed\n";
    }
}