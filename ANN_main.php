<?php

/*
  Plugin Name: Annunci
  Description: Create a system standalone of announces
  Version: 1.0.0
  Author: Fabio Ros
 */

/* Definizione delle costanti */
include 'includes/basic.php';

/* Classe che crea le pagine nel menu admin */
include 'class/menu_pages.php';

/* Classe che crea la main class delle tabelle */

//include 'class/ANNC_TableClass.php';
//hook che intercetta l'attivazione del pugin che ha questo file come main file


function first_run() {
  createTable_ANN_users();
  createANNannunci();
  createANNfoto();
  createANNannunciCategoria();
  createANNannunciCategoriaCerniera();
  createANNCategorieUtente();
  setupLocationEnviroment();
}

register_activation_hook(__FILE__, 'first_run');

function createTable_ANN_users() {
  global $wpdb;
  $sql = "CREATE TABLE IF NOT EXISTS " . T_USERS . " ( 
      ID INT NOT NULL AUTO_INCREMENT, 
      Nick VARCHAR(100) NOT NULL,
      Password VARCHAR(100) NOT NULL, 
      Mail VARCHAR(100) NOT NULL, 
      Avatar VARCHAR(200) DEFAULT NULL, 
      IsActive BOOL NOT NULL DEFAULT FALSE,
      Categoria INT NOT NULL, 
      PRIMARY KEY (ID));";

  $isOk = $wpdb->query($sql);
  return $isOk;
}

function createANNannunci() {
  global $wpdb;

  $sql = "CREATE TABLE IF NOT EXISTS " . T_ANNUNCI . " ( " .
          "ID INT NOT NULL AUTO_INCREMENT, " .
          "Titolo VARCHAR(60) NOT NULL, " .
          "Testo VARCHAR(500) NOT NULL, " .
          "LocationReference INT NOT NULL, " .
          "Pubblicato BOOL NOT NULL DEFAULT FALSE, " .
          "AuthorID INT NOT NULL, " .
          "PRIMARY KEY (ID));";

  $isOk = $wpdb->query($sql);
  return $isOk;
}

function createANNfoto() {
  global $wpdb;

  $sql = "CREATE TABLE IF NOT EXISTS " . T_FOTO . " ( " .
          "ID INT NOT NULL AUTO_INCREMENT, " .
          "Titolo VARCHAR(60) NOT NULL, " .
          "path VARCHAR(500) NOT NULL, " .
          "AuthorID INT NOT NULL, " .
          "PRIMARY KEY (ID));";

  $isOk = $wpdb->query($sql);
  return $isOk;
}

function createANNannunciCategoria() {
  global $wpdb;

  $sql = "CREATE TABLE IF NOT EXISTS " . T_CATEGORIA_ANNUNCI . " ( " .
          "ID INT NOT NULL AUTO_INCREMENT, " .
          "Descrizione VARCHAR(60) NOT NULL, " .
          "IsActive BOOL NOT NULL DEFAULT TRUE, " .
          "AuthorID INT NOT NULL, " .
          "PRIMARY KEY (ID));";

  $isOk = $wpdb->query($sql);
  return $isOk;
}

function createANNannunciCategoriaCerniera() {
  global $wpdb;

  $sql = "CREATE TABLE IF NOT EXISTS " . T_CATEGORIA_ANNUNCI_CERNIERA . " ( " .
          "IDAnnuncio INT NOT NULL, " .
          "IDCategoria INT NOT NULL, " .
          "PRIMARY KEY (IDAnnuncio, IDCategoria));";

  $isOk = $wpdb->query($sql);
  return $isOk;
}

function createANNCategorieUtente() {
  global $wpdb;

  $sql = "CREATE TABLE IF NOT EXISTS " . T_CATEGORIA_UTENTI . " ( " .
          "ID INT NOT NULL AUTO_INCREMENT, " .
          "Descrizione VARCHAR(60) NOT NULL, " .
          "IsActive BOOL NOT NULL DEFAULT TRUE, " .
          "PRIMARY KEY (ID));";

  $isOk = $wpdb->query($sql);
  return $isOk;
}

function setupLocationEnviroment() {
//  $fileSQLpath = ABSPATH . 'wp-content/plugins/annunci/world.sql';
//  $sql = file_get_contents($fileSQLpath);
//
//  dbDelta($sql);
  
  //non si può per sistem timeout
}
?>