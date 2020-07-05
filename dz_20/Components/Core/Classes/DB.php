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

	// --------------

















	// private static $dsn = 'mysql:dbname=Windows_dz;host=localhost';
	// private static $user = 'Alex';
	// private static $pass = '162428';
 
	// /**
	//  * Object PDO.
	//  */
	// public static $dbh = null;
 
	// /**
	//  * Statement Handle.
	//  */
	// public static $sth = null;
 
	// /**
	//  * Executed SQL query
	//  */
	// public static $query = '';
 
	// /**
	//  * CONNECT TO BD
	//  */
	// public static function getDbh()
	// {	
	// 	if (!self::$dbh) {
	// 		try {
	// 			self::$dbh = new PDO(
	// 				self::$dsn, 
	// 				self::$user, 
	// 				self::$pass
	// 			);
	// 			self::$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	// 		} catch (PDOException $e) {
	// 			exit('Error connecting to database: ' . $e->getMessage());
	// 		}
	// 	}
 
	// 	return self::$dbh; 
	// }
 
	// /**
	//  * Adding to a table
	//  */
	// public static function add($query, $param = array())
	// {
	// 	self::$sth = self::getDbh()->prepare($query);
	// 	return (self::$sth->execute((array) $param)) ? self::getDbh()->lastInsertId() : 0;
	// }
	
	// /**
	//  * Query execution
	//  */
	// public static function set($query, $param = array())
	// {
	// 	self::$sth = self::getDbh()->prepare($query);
	// 	return self::$sth->execute((array) $param);
	// }
	
	// /**
	//  * get only string 
	//  */
	// public static function getRow($query, $param = array())
	// {
	// 	self::$sth = self::getDbh()->prepare($query);
	// 	self::$sth->execute((array) $param);
	// 	return self::$sth->fetch(PDO::FETCH_ASSOC);		
	// }
	
	// /**
	//  * get All string
	//  */
	// public static function getAll($query, $param = array())
	// {
	// 	self::$sth = self::getDbh()->prepare($query);
	// 	self::$sth->execute((array) $param);
	// 	return self::$sth->fetchAll(PDO::FETCH_ASSOC);	
	// }
	
	// /**
	//  * get Value.
	//  */
	// public static function getValue($query, $param = array(), $default = null)
	// {
	// 	$result = self::getRow($query, $param);
	// 	if (!empty($result)) {
	// 		$result = array_shift($result);
	// 	}
 
	// 	return (empty($result)) ? $default : $result;	
	// }
	
	// /**
	//  * Getting a table column
	//  */
	// public static function getColumn($query, $param = array())
	// {
	// 	self::$sth = self::getDbh()->prepare($query);
	// 	self::$sth->execute((array) $param);
	// 	return self::$sth->fetchAll(PDO::FETCH_COLUMN);	
	// }
}

