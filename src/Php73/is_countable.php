<?php

if (!function_exists('is_countable'))
{
  /**
   * @param mixed $value
   *
   * @see     https://github.com/symfony/polyfill/tree/1.x/src/Php73
   * @author  Pierre du Plessis <https://github.com/pierredup>
   * @license https://github.com/jonesiscoding/php-polyfills/blob/main/src/LICENSE
   *
   * @return bool
   */
  function is_countable($value)
  {
    /** @noinspection PhpConditionAlreadyCheckedInspection */
    return is_array($value) || $value instanceof Countable || $value instanceof ResourceBundle || $value instanceof SimpleXmlElement;
  }
}
