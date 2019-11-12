<?php
declare(strict_types=1);

interface TrieInterface
{
    public function add(string $word): ?int;
    public function check(string $word);
}