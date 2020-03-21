<?php

/**
 * This file is part of FFI IDE Helper package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

return [
    'out'   => __DIR__ . '/src/FFI',
    'types' => [
        'Test'              => ['pointers' => 1],
        \FFI\CBool::class   => ['pointers' => 2],
        \FFI\CChar::class   => ['pointers' => 2],
        \FFI\CFloat::class  => ['pointers' => 2],
        \FFI\CInt::class    => ['pointers' => 2],
        \FFI\CPtr::class    => ['pointers' => 1],
        \FFI\CScalar::class => ['pointers' => 2],
        \FFI\CStruct::class => ['pointers' => 2],
    ],
];
