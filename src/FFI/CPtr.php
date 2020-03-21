<?php

/**
 * This file is part of FFI IDE Helper package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FFI;

declare(strict_types=1);

/**
 * Class CPtr
 */
final class CPtr extends CData implements \ArrayAccess
{
    private function __construct()
    {
    }

    /**
     * {@inheritDoc}
     * @deprecated This method is virtual and is used only for autocomplete in IDE
     * @throws \Error Cannot use object of type FFI\CData as array
     */
    private function offsetExists($offset)
    {
        throw new \Error('Cannot use object of type FFI\CData as array');
    }

    /**
     * {@inheritDoc}
     * @deprecated This method is virtual and is used only for autocomplete in IDE
     * @throws \Error Cannot use object of type FFI\CData as array
     */
    private function offsetUnset($offset)
    {
        throw new \Error('Cannot use object of type FFI\CData as array');
    }

    /**
     * {@inheritDoc}
     * @deprecated This method is virtual and is used only for autocomplete in IDE
     * @return CData|CPtr
     */
    private function offsetGet($offset): CData
    {
    }

    /**
     * {@inheritDoc}
     * @deprecated This method is virtual and is used only for autocomplete in IDE
     * @param CData|CPtr $value
     * @param int $offset
     */
    private function offsetSet($offset, $value)
    {
    }
}
