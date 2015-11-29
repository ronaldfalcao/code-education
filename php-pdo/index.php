<?php
/**
 * Created by PhpStorm.
 * User: Ronald B.Falcão
 * Date: 29/11/2015
 * Time: 15:08
 */

    //Dados da conexão
    $db_user = "root";
    $db_pws = "root";
    $db_name = "interesse";

    //String de conexão
    $dsn = "mysql:host=localhost;dbname=".$db_name;

    $conexao = new \PDO($dsn, $db_user, $db_pws);

