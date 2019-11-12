<?php
require_once(dirname(__FILE__) . '/src/Yatrie.php');

$dic = [
    dirname(__FILE__) . '/../dic_headers.txt',
    dirname(__FILE__) . '/../dic_nodes.txt.gz',
    dirname(__FILE__) . '/../dic_refs.txt.gz'
];
$trie = new Yatrie($dic);

if (empty($argv[1])) {
    exit("Please enter a word to search!");
}


$res = $trie->check($argv[1]);
$res = $res !== false ? " found word: " . $argv[1] . " node_id: $res " : "not found: " . $argv[1];
echo "$res\n";
