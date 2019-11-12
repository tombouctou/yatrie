<?php
require_once(dirname(__FILE__) . '/src/Yatrie.php');

$t = new Yatrie();
$ww[] = 'hello';
$ww[] = 'world';

foreach ($ww as $w) {
    $t->add($w);
}
foreach ($ww as $w) {
    $res = $t->check($w);
    if(false === $res){
        print "$w failed\n";
    }
}