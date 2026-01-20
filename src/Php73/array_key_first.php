<?php

if (!function_exists('array_key_first'))
{
  /**
   * Polyfill for the PHP v7.3 function of the same name.
   *
   * @param array $array
   *
   * @see     https://github.com/symfony/polyfill/tree/1.x/src/Php73
   * @author  Pierre du Plessis <https://github.com/pierredup>
   * @license https://github.com/jonesiscoding/php-polyfills/blob/main/src/LICENSE
   *
   * @return int|string|null
   */
  function array_key_first(array $array)
  {
    foreach($array as $key => $value)
    {
      return $key;
    }

    return null;
  }
}
