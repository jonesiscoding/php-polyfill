<?php

if (!function_exists('array_first'))
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
  function array_first(array $array)
  {
    foreach($array as $value)
    {
      return $value;
    }

    return null;
  }
}
