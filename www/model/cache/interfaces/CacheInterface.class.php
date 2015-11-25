<?php
namespace model\cache\interfaces;

interface CacheInterface {
	/**
	 * get cache interface
	 * @param string $cache_id
	 */
	public function getCache($cache_id);
	/**
	 * set cache iterface
	 * @param string $cache_id
	 * @param object $result
	 * @param int $timeout
	 */
	public function setCache($cache_id, $result, $timeout);
	/**
	 * delete cache interface
	 * @param string $cache_id
	 */
	public function deleteCache($cache_id);
	/**
	 * flush interface
	 */
	public function flush();
	/**
	 * replace interface
	 * @param string $cache_id
	 * @param object $result
	 * @param int $timeout
	 */
	public function replace($cache_id, $result, $timeout=null);
}