<?php
/**
 * Created by PhpStorm.
 * User: Leonardo
 * Date: 11/07/2019
 * Time: 2:27 PM
 */

class conexion
{
    public static function conectar(){
        $pdo = new PDO('mysql:host=localhost;dbname=;charset=utf8', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;

    }

}