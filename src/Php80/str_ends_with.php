<?php

if (!function_exists('str_ends_with'))
{
  /**
   * @param string $haystack
   * @param string $needle
   *
   * @see     https://github.com/symfony/polyfill/tree/1.x/src/Php80
   * @author Ayesh <https://github.com/Ayesh>
   * @author Space Possum <https://github.com/SpacePossum>
   * @license https://github.com/jonesiscoding/php-polyfills/blob/main/src/LICENSE
   *
   * @return bool
   */
  function str_ends_with(string $haystack, string $needle): bool
  {
    if ('' === $needle || $needle === $haystack)
    {
      return true;
    }

    if ('' === $haystack)
    {
      return false;
    }

    $needleLength = \strlen($needle);

    return $needleLength <= \strlen($haystack) && 0 === substr_compare($haystack, $needle, -$needleLength);
  }
}


