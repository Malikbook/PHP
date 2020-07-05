<?php

namespace Core\Classes;

class DB{

	/**
	 * Object PDO.
	 */
	public static $DBH = null;
 
	/**
	 * Statement Handle.
	 */
	public static $STH = null;
 
	/**
	 * Executed SQL query
	 */
	public static $query = '';

	public function __construct($db_info){
		$this->info = $db_info;
	}

	public function connect(){
		if(!self::$DBH){
			try {
				self::$DBH = new \PDO($this->info['db'], $this->info['user'], $this->info['pass']);
				self::$DBH->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_WARNING);
			} catch (PDOException $e) {
				echo 'Connected err: ' . $e->getMessage();
			}

			return self::$DBH;
		}
	}

	public function get_info($select, $param = array()){
		self::$STH = $this->connect()->prepare($select);
		self::$STH->execute((array) $param);
		return $result = self::$STH->fetchAll(\PDO::FETCH_ASSOC);
		self::$DBH = null;  
	}
}

