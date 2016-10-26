<?php
// If it's going to need the database, then it's 
// probably smart to require it before we start.
require_once(LIB_PATH.DS.'database.php');

class DatabaseObject {
	
//	protected static $table_name = "users";
//        protected static $db_fields = array('id', 'username', 'password', 'first_name', 'last_name');


        //Common database methods
//	public function find_all() {
//            return self::find_by_sql("SELECT * FROM ".  $this->table_name);
//	}
//        
//        //How to have the function which uses the static variable child object and call it from a 
//        //function from the parent object so the function gets the called child' variable' static value
//
//	public static function find_by_id($id=0) {
//            $result_array = static::find_by_sql("SELECT * FROM ".self::table_name." WHERE id={$id} LIMIT 1");
//            return !empty($result_array) ? array_shift($result_array) : false;
//	}
//
//	public static function find_by_sql($sql="") {
//            global $database;
//            
//            $result_set = $database->query($sql);
//            $object_array = array();
//            while ($row = $database->fetch_array($result_set)) {
//            $object_array[] = static::instantiate($row);
//	}
//            return $object_array;
//	}
//
//	private static function instantiate($record) {
//	// Could check that $record exists and is an array
//	$class_name = get_called_class();
//	$object = new $class_name;
//	// Simple, long-form approach:
//	// $object->id 		= $record['id'];
//	// $object->username 	= $record['username'];
//	// $object->password 	= $record['password'];
//	// $object->first_name  = $record['first_name'];
//	// $object->last_name 	= $record['last_name'];
//
//	// More dynamic, short-form approach:
//	foreach($record as $attribute=>$value){
//	if($object->has_attribute($attribute)) {
//	$object->$attribute = $value;
//	}
//	}
//	return $object;
//	}
//
//	private function has_attribute($attribute) {
//	// get_object_vars returns an associative array with all attributes 
//	// (incl. private ones!) as the keys and their current values as the value
//	$object_vars = static::attributes();
//	// We don't care about the value, we just want to know if the key exists
//	// Will return true or false
//	return array_key_exists($attribute, $object_vars);
//	}
//        
//        protected function attributes() {
//            //retuns an array of attribute kets and values
//            $attributes = array();
//            foreach(self::db_fields as $field){
//                if(property_exists($this, $field)){
//                    $attributes[$field] = $this->$field;
//                } 
//            }
//            return $attributes;
//        }
//        
////        protected function sanitized_attributes() {
////            global $database;
////            
////            $clean_attributes = array();
////            
////            foreach($this->attributes() as $key=>$value){
////                $clean_attributes[] = $database->escape_value($value);
////            }
////            return $clean_attributes;
////        }
////        
////        //replaced with a custom save()
////        public function save(){
////            //A new record won't have an id yet
////            return isset($this->id) ? $this->update() : $this->create();
////        }
//
//        public function create(){
//            global $database;
//            
//            $attributes = $this->attributes();
//            $attributes = array_slice($attributes, 1);
//            
//            $sql = "INSERT INTO ".self::table_name." ("; //self:: replaced with this->
//            $sql .= join(", ", array_keys($attributes));
//            $sql .= ") VALUES (' ";
//            $sql .= join("', '", array_values($attributes));
//            $sql .= "')";
//            
//            if($database->query($sql)) {
//                $this->id =  $database->insert_id();
//                return true;
//            } else {
//                return false;
//            }
//        }
//        
//        public function update(){
//            global $database;
//            
//            $attributes = $this->attributes();
//            $attribute_pairs = array();
//            foreach($attributes as $key=>$value){
//                $attribute_pairs[] = "{$key}='{$value}'";
//            }
//            
//            $sql = "UPDATE ".  self::table_name." SET "; //self:: replaced with this->
//            $sql .= join(", ", $attribute_pairs);
//            $sql .= " WHERE id=".$database->escape_value($this->id);
//            
//            $database->query($sql);
//            return ($database->affected_rows() == 1) ? true : false;
//        }
//        
//        public function delete(){
//            global $database;
//            
//            $sql = "DELETE FROM ".self::table_name;
//            $sql .= " WHERE id=".$database->escape_value($this->id);
//            $sql .= " LIMIT 1";
//            
//            $database->query($sql);
//            return ($database->affected_rows() == 1) ? true : false;
//        }
//
//	
}
	
?>