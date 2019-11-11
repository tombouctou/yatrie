<?php
require_once(dirname(__FILE__) . '/src/Yatrie.php');
require_once(dirname(__FILE__) . '/etc/bmark.php');

$t = new Yatrie();
$ww[] = 'hello';
$ww[] = 'world';

foreach ($ww as $w) {
//    list($mask,$ref_id) = $t->node_get(0);
//    $m = decbin($mask);
//    print "$m $ref_id\n";
    $t->trie_add($w);
}
foreach ($ww as $w) {
    $res = $t->trie_check($w);
    if(false === $res){
        print "$w failed\n";
    }
}

//var_dump($t->nodes);
//var_dump($t->refs);