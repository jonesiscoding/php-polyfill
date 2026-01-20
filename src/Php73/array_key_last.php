<?php

if (!function_exists('array_key_first'))
{
  /**
   * Polyfill for the PHP v7.3 function of the same name.
   *
   * @param array $array
   *
   * @see     https://github.com/symfony/polyfill/tree/1.x/src/Php73
   * @author  Jérémy Derussé <https://github.com/jderusse>
   * @license https://github.com/jonesiscoding/php-polyfills/blob/main/src/LICENSE
   *
   * @return int|string
   */
  function array_key_last(array $array)
  {
    return key(array_slice($array, -1, 1, true));
  }
}
