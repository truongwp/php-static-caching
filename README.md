PHP caching class uses static variable to cache data during runtime

## Installation

Use composer to include the library:
`composer require truongwp/php-static-cache`

## Example

```php
$static_cache = new \Truongwp\StaticCache();

if ( $static_cache->has( 'key' ) ) {
	$value = $static_cache->get( 'key' );
} else {
	$value = do_something();
	$static_cache->set( 'key', $value );
}
```
