<?php

/**
 * This file is part of FFI IDE Helper package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @generated 2020-03-21T22:19:31+00:00
 */

declare(strict_types=1);

namespace FFI;

/**
 * This file is needed only for the IDE's autocomplete. The "final" modifier
 * allows to remove autocomplete as inherited classes.
 *
 * @mixin \FFI\CIntPtr
 * @mixin \FFI\CPtr
 */
final class CIntPtrPtr extends \FFI\CData implements \ArrayAccess
{
    /**
     * Constructor must be closed: Thus, the class will not be displayed as
     * available for creation through the "new" operator in the IDE.
     */
    private function __construct()
    {
    }

    /**
    * {@inheritDoc}
    * @deprecated This method is virtual and is used only for autocomplete in IDE
    */
    private function offsetGet($offset): \FFI\CIntPtr
    {
    }

    /**
    * {@inheritDoc}
    * @deprecated This method is virtual and is used only for autocomplete in IDE
    * @param CData|\FFI\CIntPtr $value
    * @param int $offset
    */
    private function offsetSet($offset, $value): void
    {
    }
}
