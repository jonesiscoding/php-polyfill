<?php

if (!function_exists('get_debug_type'))
{
  /**
   * Polyfill for the PHP v8 function of the same name
   *
   * @param mixed $value
   *
   * @see     https://github.com/symfony/polyfill/tree/1.x/src/Php80
   * @author  Nicolas Grekas <https://github.com/nicolas-grekas>
   * @license https://github.com/jonesiscoding/php-polyfills/blob/main/src/LICENSE
   * @return string
   */
  function get_debug_type($value): string
  {
    switch (true)
    {
      case null === $value: return 'null';
      case \is_bool($value): return 'bool';
      case \is_string($value): return 'string';
      case \is_array($value): return 'array';
      case \is_int($value): return 'int';
      case \is_float($value): return 'float';
      case \is_object($value): break;
      case $value instanceof \__PHP_Incomplete_Class: return '__PHP_Incomplete_Class';
      default:
        if (null === $type = @get_resource_type($value))
        {
          return 'unknown';
        }

        if ('Unknown' === $type)
        {
          $type = 'closed';
        }

        return "resource ($type)";
    }

    $class = \get_class($value);

    if (false === strpos($class, '@'))
    {
      return $class;
    }

    return (get_parent_class($class) ?: key(class_implements($class)) ?: 'class').'@anonymous';
  }
}
