<?php
require_once("database.php");

/**
* class for user functions
*/
class News {

	public $id;
	public $title;
	public $url;

	public static function find_all() {
		// find all the users 
		return self::find_by_sql("SELECT * FROM news");
	}

	public static function find_by_id( $id=0) {
		global $database;
		$result_array = self::find_by_sql("SELECT * FROM news WHERE id={$id} LIMIT 1");
		return !empty($result_array) ? array_shift($result_array) : false;
	} 

	public static function find_by_sql( $sql="") {
		global $database;
		$result_set = $database->query($sql);
		$object_array = array();
		while ($row = $database->fetch_array($result_set)) {
			$object_array[] = self::instantiate($row);
		}
		return $object_array;
	}

	private static function instantiate( $record) {
		
		$object = new self;

		foreach ($record as $attribute => $value) {
			if ($object->has_attribute($attribute)) {
				$object->$attribute = $value;
			}
		}

		return $object;
	}

	private function has_attribute($attribute) {
		$object_vars = get_object_vars($this);
		return array_key_exists($attribute, $object_vars);
	}

	public function create() {
		global $database;

		// single quote all values
		$sql = "INSERT INTO news (title,url) VALUES ('".$database->escape_value($this->title) . "', '".$database->escape_value($this->url) . "');";
		if($database->query($sql)){	
			$this->id = $database->insert_id();
			return true;
		} else {
			return false;
		}
	}

}

?>