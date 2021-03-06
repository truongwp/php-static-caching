<?php
/**
 * PHP Static Caching
 *
 * @package Truongwp
 */

namespace Truongwp;

/**
 * Class StaticCache
 */
class StaticCache {

	/**
	 * Cached data.
	 *
	 * @var array
	 */
	protected static $data = array();

	/**
	 * Checks if cache key is set.
	 *
	 * @param  string $key Cache key.
	 * @return bool
	 */
	public function has( $key ) {
		return isset( self::$data[ $key ] );
	}

	/**
	 * Sets value.
	 *
	 * @param string $key   Cache key.
	 * @param mixed  $value Cache value.
	 */
	public function set( $key, $value ) {
		self::$data[ $key ] = $value;
	}

	/**
	 * Gets value.
	 *
	 * @param  string $key Cache key.
	 * @return mixed
	 */
	public function get( $key ) {
		if ( isset( self::$data[ $key ] ) ) {
			return self::$data[ $key ];
		}

		return null;
	}

	/**
	 * Gets all cached data.
	 *
	 * @return array
	 */
	public function get_all() {
		return self::$data;
	}

	/**
	 * Deletes cached data.
	 *
	 * @param string $key Cache key.
	 */
	public function delete( $key ) {
		if ( isset( self::$data[ $key ] ) ) {
			unset( self::$data[ $key ] );
		}
	}

	/**
	 * Clears all cached data.
	 */
	public function clear() {
		self::$data = array();
	}
}
