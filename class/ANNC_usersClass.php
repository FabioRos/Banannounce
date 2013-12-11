<?php

/**
 * Classe che gestisce gli utenti del portale in modo stand alone
 * utilizza anche le funzionalità di wp, quali login, ... inserendo anche un utente base 
 * con privilegi di subscriber(?) ma con pochissime informazioni per snellire
 * i metadati della tabella wp_usermeta, quello che mi serve lo memorizzo sulle mie tabelle.
 * 
 *  
 * @author Fabio
 */
class ANN_users {

  private static $table_name_static = 'ANN_users';
  public $id;
  public $nick;
  private$password;
  public $mail;
  public $avatar;
  private$active = FALSE;

  public function __construct() {
    
  }

  public static function getAllUsers() {
    global $wpdb;
    $sql = "SELECT * FROM " . self::$table_name_static . " ;";
    echo $sql;
    $array = $wpdb->get_results($sql);
    return $array;
  }

  public static function createUser($userdata) {
    try {
      wp_update_user($userdata);
    } catch (Exception $exc) {
      wp_insert_user($userdata);
    }
  }


//END CLASS
}

?>
