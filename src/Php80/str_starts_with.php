<?php

if (!function_exists('str_starts_with'))
{
  /**
   * @param string $haystack
   * @param string $needle
   *
   * @see     https://github.com/symfony/polyfill/tree/1.x/src/Php80
   * @author  Ayesh <https://github.com/Ayesh>
   * @license https://github.com/jonesiscoding/php-polyfills/blob/main/src/LICENSE
   *
   * @return bool
   */
  function str_starts_with(string $haystack, string $needle): bool
  {
    return 0 === strncmp($haystack, $needle, \strlen($needle));
  }
}
