<?php
class Api{

    public static function get_all($con){
        if($con === 0){
            return static::query_proccess("SELECT * FROM ".static::$table." ");
        }else{
            return static::query_proccess("SELECT * FROM ".static::$table." WHERE $con ");
        }
     }
     public static function get_num_row($con){
         global $db; 
         $sql = ("SELECT * FROM ".static::$table." WHERE $con ");
         $result = $db->query($sql);
         return mysqli_num_rows($result);
     }
 
     public static function get_one($con){
         $single_data = static:: query_proccess("SELECT * FROM ".static::$table." WHERE $con");
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
        $execute = $db->query("INSERT INTO ".static::$table." (". implode(", ",array_keys($pro)).") VALUES (".implode(", " ,array_values($pro)) .")");
        return $execute ? true : false ;
    }

    public function update(){
        global $db ;
        $array = array();
        $pro = $this->properties();
        $post_id = $db->secure($this->post_id);
        foreach ($pro as $key => $value) {
            $array[] = "`{$key}` = {$value}";
        }
        $execute = $db->query("UPDATE ".static::$table." SET ".implode(",",$array)." WHERE `post_id` = '$post_id' ");
        return $execute ? true : false ;
    }
    
    public function delete(){
        global $db ;
        $post_id = $db->secure($this->post_id);
        $execute = $db->query("DELETE FROM ".static::$table." WHERE `post_id` = $post_id");
        return $execute ? true : false ;
    }

}
$api = new Api();
?>