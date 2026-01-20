# PHP Polyfill

Polyfill code for commonly used PHP functions not present in older versions, in a library that is PHP 7.0
friendly for legacy applications.

Many polyfill functions are from [symfony/polyfills](https://github.com/symfony/polyfill) and are attributed in the 
PHPdoc to their contributors.

| Name              | Type      | PHP Version                                                     |
|-------------------|-----------|-----------------------------------------------------------------|
| `array_key_first` | Function  | [7.3](https://php.net/array_key_first)                          |
| `array_key_last`  | Function  | [7.3](https://php.net/array_key_last)                           |
| `is_countable`    | Function  | [7.3](https://php.net/is_countable)                             |
| `get_debug_type`  | Function  | [8.0](https://php.net/get_debug_type)                           |
| `str_contains`    | Function  | [8.0](https://php.net/str_contains)                             |
| `str_starts_with` | Function  | [8.0](https://php.net/str_starts_with)                          |
| `str_ends_with`   | Function  | [8.0](https://php.net/str_ends_with)                            |
| `Stringable`      | Interface | [8.0](https://php.net/stringable)                               |
| `ValueErrror`     | Class     | [8.0](https://php.net/valueerror)                               |
| `array_is_list`   | Function  | [8.1](https://php.net/array_is_list)                            |
| `json_validate`   | Function  | [8.3](https://www.php.net/manual/en/function.json-validate.php) |
| `array_first`     | Function  | [8.5](https://www.php.net/manual/en/function.array-first.php) |
| `array_last`      | Function  | [8.5](https://www.php.net/manual/en/function.array-last.php) |
