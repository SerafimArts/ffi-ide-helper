<?='<?php' . "\n"?>

/**
 * This file is part of FFI IDE Helper package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @generated <?=date(\DATE_RFC3339) . "\n"?>
 */

declare(strict_types=1);

<?php if ($namespace): ?>
namespace <?=$namespace?>;

<?php endif; ?>
/**
 * This file is needed only for the IDE's autocomplete. The "final" modifier
 * allows to remove autocomplete as inherited classes.
 *
 * @mixin \<?=$mixin . "\n"?>
 * @mixin \FFI\CPtr
 */
final class <?=$class?> extends \FFI\CData implements \ArrayAccess
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
    private function offsetGet($offset): \<?=$mixin . "\n"?>
    {
    }

    /**
    * {@inheritDoc}
    * @deprecated This method is virtual and is used only for autocomplete in IDE
    * @param CData|\<?=$mixin?> $value
    * @param int $offset
    */
    private function offsetSet($offset, $value): void
    {
    }
}
