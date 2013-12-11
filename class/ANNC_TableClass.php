<?php

class ANNC_TablesClass { //clase che gestisce TUTTI gli includes per le classi delle tabelle

  public function __construct() {
   $this->createANN_UsersTable();
   $this->createANN_AnnunciTable();
  }

  private function createANN_UsersTable() {
    require_once plugin_dir_path(__FILE__) . 'ANNC_userClass.php';
  }

//  private function createANN_CategorieUsersTable() {
//    //require_once  plugin_dir_path(__FILE__) . 'ANNC_CategorieUsersClass.php';
//  }

  private function createANN_AnnunciTable() {
    require_once plugin_dir_path(__FILE__) . 'ANNC_AnnunciClass.php';
  }

//  private function createANN_CategorieAnnunciTable() {
////    require_once  plugin_dir_path(__FILE__) . 'ANNC_CategorieAnnunciClass.php';
//  }
//
//  private function createANN_FotoTable() {
////    require_once  plugin_dir_path(__FILE__) . 'ANNC_FotoClass.php';
//  }
//
//  private function createLocationStructure() {
////    require_once  plugin_dir_path(__FILE__) . 'ANNC_LocationClass.php';
//  }

}

//Istanzio il main object
//$mainInstance = new ANNC_TablesClass();
