<?php
  class Conexion {
    public static function Conectar() {
      define ('servidor', 'localhost');
      define ('database', 'vuetify_db');
      define ('usuario', 'root');
      define ('password', '');

      $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND =>
      'SET NAMES utf8');

      try {

        $conexion = new PDO("mysql:host=".servidor."; dbname=".database,
        usuario, password, $opciones);

        // echo "Conexion Exitosa...<br>";

        return $conexion;

      } catch (Exception $e) {

          die("Error al conectar". $e->getMessage());
      }



    }
  }
?>
