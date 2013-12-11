<?php

class ANN_Annunci {

  private static $table_name_static = T_ANNUNCI;
  public $id;
  public $nick;
  private $password;
  public $mail;
  public $avatar;
  private $active = FALSE;

  public function __construct() {
    
  }

  

  public static function getAllAnnunci() {
    global $wpdb;
    $sql = "SELECT * FROM " . self::$table_name_static . " ;";
    echo $sql;
    $array = $wpdb->get_results($sql);
    return $array;
  }

  public static function createAnnuncio($data) {
    
  }

//END CLASS
}

?>
