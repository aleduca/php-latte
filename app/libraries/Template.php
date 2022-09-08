<?php

namespace app\libraries;

use Latte\Engine;

class Template
{
    public static function render(string $template, array $data = [])
    {
        $latte = new Engine;
        $latte->setTempDirectory(VIEWS . 'cache');

        $latte->addFilter('shortify', function (string $s, int $len = 10): string {
            var_dump($len);

            return mb_substr($s, 0, $len);
        });

        $latte->addFunction('shortify', function (string $s, int $len = 10): string {
            var_dump($len);

            return mb_substr($s, 0, $len);
        });

        $latte->render(VIEWS . $template . '.latte', $data);
    }
}
