<?php

/**
 * @noinspection PhpMultipleClassDeclarationsInspection
 */

if (\PHP_VERSION_ID < 80000)
{
  /**
   * Polyfill for the PHP v8 error class of the same name
   *
   * @see     https://github.com/symfony/polyfill/tree/1.x/src/Php80
   * @author  Ion Bazan <https://github.com/IonBazan>
   * @license https://github.com/jonesiscoding/php-polyfills/blob/main/src/LICENSE
   */
  class ValueError extends Error
  {
  }
}
