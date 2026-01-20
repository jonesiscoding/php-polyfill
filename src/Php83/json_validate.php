<?php

if (!function_exists('json_validate'))
{
  /**
   * Polyfill for the PHP v8.3 function of the same name
   *
   * @param string $json
   * @param int    $depth
   * @param int    $flags
   *
   * @see     https://github.com/symfony/polyfill/tree/1.x/src/Php83
   * @author  Ion Bazan <https://github.com/IonBazan>
   * @license https://github.com/jonesiscoding/php-polyfills/blob/main/src/LICENSE
   *
   * @return bool
   */
  function json_validate(string $json, int $depth = 512, int $flags = 0): bool
  {
    // See https://www.php.net/manual/en/function.json-decode.php
    $jsonMaxDepth = 0x7FFFFFFF;

    if (0 !== $flags && \defined('JSON_INVALID_UTF8_IGNORE') && \JSON_INVALID_UTF8_IGNORE !== $flags)
    {
      $err = 'json_validate(): Argument #3 ($flags) must be a valid flag (allowed flags: JSON_INVALID_UTF8_IGNORE)';
    }

    if (empty($err) && $depth <= 0)
    {
      $err = 'json_validate(): Argument #2 ($depth) must be greater than 0';
    }

    if (empty($err) && $depth > self::JSON_MAX_DEPTH)
    {
      $err = sprintf('json_validate(): Argument #2 ($depth) must be less than %d', $jsonMaxDepth);
    }

    if (!empty($err))
    {
      if (class_exists('\ValueError'))
      {
        throw new \ValueError($err);
      }
      else
      {
        throw new \Error($err);
      }
    }

    json_decode($json, true, $depth, $flags);

    return \JSON_ERROR_NONE === json_last_error();
  }
}
