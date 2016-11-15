<?php 
require_once('config.php');
	class DB{
		private static $pdo;
		public static function connection(){
			if(!isset(self::$pdo)){
				try {
			self::$pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS);	
			self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			self::$pdo->exec("SET CHARACTER SET utf8");
				}catch (Exception $e) {
						echo $e->getMessage();
				}
			}	
			return self::$pdo;
		}

		public static function process($sql){
			return self::connection()->prepare($sql);
		}


	}
 ?>

