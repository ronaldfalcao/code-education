<?php
/**
 * Created by PhpStorm.
 * User: Ronald B.Falcão
 * Date: 29/11/2015
 * Time: 15:08
 */

    include_once 'config/Strings.php';
    include_once 'class/Erro.php';

    header('Content-Type: text/html; charset=utf-8');

    //String de conexão
    try{
        $conexao = new \PDO(DB_HOST.DB_NAME, DB_USER, DB_PWS);
    }
    catch (\PDOException $e){
        $erro = new \Mensagem\Erro();
        $erro->ExibirErroConexaoBancoDados($e);
    }
