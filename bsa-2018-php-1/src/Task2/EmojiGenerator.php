<?php declare(strict_types=1);

namespace Cryptocurrency\Task2;

class EmojiGenerator
{
    public function generate(): \Generator
    {
        $emoji = ['🚀', '🚃', '🚄', '🚅', '🚇'];

        foreach ($emoji as $emo) {
            yield $emo;
        }
    }
}