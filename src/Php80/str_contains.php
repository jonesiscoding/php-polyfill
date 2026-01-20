<?php

if (!function_exists('str_contains'))
{
  /**
   * @param string $haystack
   * @param string $needle
   *
   * @see     https://github.com/symfony/polyfill/tree/1.x/src/Php80
   * @author  Ion Bazan <https://github.com/IonBazan>
   * @license https://github.com/jonesiscoding/php-polyfills/blob/main/src/LICENSE
   *
   * @return bool
   */
  function str_contains(string $haystack, string $needle): bool
  {
    return '' === $needle || false !== strpos($haystack, $needle);
  }
}
