<?php

/** @noinspection PhpMultipleClassDeclarationsInspection */

if (\PHP_VERSION_ID < 80000)
{
  /**
   * Polyfill for the PHP v8 interface of the same name
   *
   * @see     https://github.com/symfony/polyfill/tree/1.x/src/Php80
   * @author  Nicolas Grekas <https://github.com/nicolas-grekas>
   * @license https://github.com/jonesiscoding/php-polyfills/blob/main/src/LICENSE
   */
  interface Stringable
  {
    /**
     * @return string
     */
    public function __toString();
  }
}
