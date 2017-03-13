<?php

class Conexao
 {
 	public static $instance;

    public static function getInstance()
    {
        if(!isset(self::$instance)) {
    		$config = require('../config.php');

			$host   = $config['host'];
			$dbname = $config['dbname'];
			$user   = $config['user'];
			$pass   = $config['password'];

			try {
	            self::$instance = new PDO("mysql:host={$host};dbname={$dbname}", $user, $pass,

	 			array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

	            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	            self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);

			} catch(PDOException $e) {
				echo $e->getMessage(); //...
			}
        }

        return self::$instance;
    }

 }