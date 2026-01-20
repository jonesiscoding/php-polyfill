<?php

if (!function_exists('array_is_list'))
{
  /**
   * Polyfill for the PHP v8.1 function of the same name.
   *
   * @param array $array
   *
   * @see     https://github.com/symfony/polyfill/tree/1.x/src/Php81
   * @author  Maximilian Bösing <https://github.com/boesing>
   * @author  Nicolas Grekas <https://github.com/nicolas-grekas>
   * @license https://github.com/jonesiscoding/php-polyfills/blob/main/src/LICENSE
   *
   * @return bool
   */
  function array_is_list(array $array): bool
  {
    if ([] === $array || $array === array_values($array))
    {
      return true;
    }

    $nextKey = -1;

    foreach ($array as $k => $v)
    {
      if ($k !== ++$nextKey)
      {
        return false;
      }
    }

    return true;
  }
}
