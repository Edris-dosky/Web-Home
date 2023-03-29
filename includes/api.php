<?php
class Api{


    public static function get_all($con){
        if($con === 0){
            return static::query_proccess("SELECT * FROM ".static::$table." ");
        }else{
            return static::query_proccess("SELECT * FROM ".static::$table." WHERE $con ");
        }
     }
 
     public static function get_by_id($userid){
         $single_data = static:: query_proccess("SELECT * FROM ".static::$table." WHERE `id` = '$userid'");
         return !empty($single_data) ? array_shift($single_data) : false ;
     }
 
     public static function query_proccess($sql){
         global $db; 
         $all_data = array();
         $result = $db->query($sql);
         while($row = mysqli_fetch_assoc($result)){
             $all_data[] = static::instant($row);
         }
         return $all_data ;
     }   
     
     public static function instant($columns){
        $class = new static;
        foreach ($columns as $property => $value) {
            if(array_key_exists($property,(get_object_vars(new static)))){
                $class->$property = $value ;
            }
        }
        return $class ;
    }
    
    public function properties(){
        $array =array();
        global $db ;
        foreach(static::$columns as $column){
            if(property_exists($this , $column)){
                $array[$column] = "'".$db->secure($this->$column)."'";
            }
        }
        return $array;
    }

    public function create(){
        global $db ;
        $pro = $this->properties();
        $db->query("INSERT INTO ".static::$table." (".implode(",",array_keys($pro)).") VALUES (".implode(",",array_values($pro)).")");
    }

    public function update(){
        global $db ;
        $array = array();
        $pro = $this->properties();
        $id = $db->secure($this->id);
        foreach ($pro as $key => $value) {
            $array[] = "`{$key}` = {$value}";
        }
         $db->query("UPDATE ".static::$table." SET ".implode(",",$array)." WHERE `id` = '$id' ");
        
    }
    
    public function delete(){
        global $db ;
        $id = $db->secure($this->id);
        $execute = $db->query("DELETE FROM ".static::$table." WHERE `id` = $id");
    }

}
$api = new Api();
?>