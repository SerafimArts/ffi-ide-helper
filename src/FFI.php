<?php

/**
 * This file is part of FFI IDE Helper package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use FFI\CData;

declare(strict_types=1);

/**
 * @mixin \FFI
 */
class FFI
{
    /**
     * Overriding this method fixes the bug of PhpStorm .phpstorm.meta.php
     *
     * {@inheritDoc}
     */
    public function new($type, bool $owned = true, bool $persistent = false): CData
    {
    }
}
