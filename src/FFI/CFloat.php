<?php

/**
 * This file is part of FFI IDE Helper package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace FFI;

/**
 * @mixin CScalar
 */
final class CFloat extends CData
{
    /**
     * @var float
     */
    public float $cdata;

    private function __construct()
    {
    }
}