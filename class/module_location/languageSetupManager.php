<?php

class LanguageSetupManager {

  public function __construct() {
    $this->manager();
  }

  public function manager() {

    global $wpdb;
    $sql = " SELECT Name FROM Country; ";
    $result = $wpdb->get_results($sql);//non va per qualche motivo misterioso che sono troppo stanco per cercare
    echo $result;
    echo "pippo";
  }

}

echo 'asd';
$instance = &new LanguageSetupManager();
?>
