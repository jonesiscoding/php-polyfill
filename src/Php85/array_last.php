<?php

if (!function_exists('array_last'))
{
  /**
   * @param array $array
   *
   * @see     https://github.com/symfony/polyfill/tree/1.x/src/Php85
   * @author  Ayesh <https://github.com/Ayesh>
   * @author  Nicolas Grekas <https://github.com/nicolas-grekas>
   * @license https://github.com/jonesiscoding/php-polyfills/blob/main/src/LICENSE
   *
   * @return mixed|null
   */
  function array_last(array $array)
  {
    return $array ? current(array_slice($array, -1)) : null;
  }
}
