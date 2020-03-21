<?php

/**
 * This file is part of FFI IDE Helper package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

$config = require ($argv[1] ?? __DIR__ . '/../config.php');

foreach ($config['types'] as $type => $info) {

    for ($i = 0; $i < ($info['pointers'] ?? 0); ++$i) {
        $name = get_class_name(get_class_name($type . str_repeat('Ptr', $i + 1)));

        $result = generate($type, $i);

        \file_put_contents($config['out'] . '/' . $name . '.php', $result);
    }
}

function get_namespace_name(string $fqn): ?string
{
    $parts = explode('\\', $fqn);

    if (count($parts) > 1) {
        array_pop($parts);

        return implode('\\', $parts);
    }

    return null;
}

function get_class_name(string $fqn): string
{
    $parts = explode('\\', $fqn);

    return array_pop($parts);
}

function generate(string $name, int $depth): string
{
    $depth = max(0, $depth);

    $mixin = $name . str_repeat('Ptr', $depth);
    $class = get_class_name($name . str_repeat('Ptr', $depth + 1));

    $namespace = get_namespace_name($name);

    ob_start();

    require __DIR__ . '/../resources/template.php';

    return (string)ob_get_clean();
}
