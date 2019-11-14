<?php
require_once(dirname(__FILE__) . '/src/Yatrie.php');

$name = 'dic';
if (isset($argv[2])) {
    $name = $argv[2];
}

$dic = [
    dirname(__FILE__) . "/../{$name}_headers.txt",
    dirname(__FILE__) . "/../{$name}_nodes.txt.gz",
    dirname(__FILE__) . "/../{$name}_refs.txt.gz",
];
$trie = new Yatrie($dic);

if (empty($argv[1])) {
    exit("Please enter a word to search!");
}

$trie->add('chucknorris');

$res = $trie->check($argv[1]);
$res = $res !== false ? " found word: " . $argv[1] . " node_id: $res " : "not found: " . $argv[1];
echo "$res\n";
