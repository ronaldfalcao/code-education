<?php
/**
 * Created by PhpStorm.
 * User: Ronald
 * Date: 29/11/2015
 * Time: 15:40
 */

    namespace Mensagem;

    include_once 'config/Mensagens.php';


    class Erro
    {
        function inserirCaixaErro($MSG){
            echo '<div class="caixaErro">'.$MSG.'</div>';
        }

        function ExibirErroConexaoBancoDados($e){

            switch ($e->getCode()) {
                case 1045:
                    inserirCaixaErro(MSG_1045);
                    break;

                case 1049:
                    echo MSG_1049;
                    break;

                case 2002:
                    echo MSG_2002;
                    break;

                default:
                    echo "[ERRO] Ocorreu um erro na conexão com o banco de dados.";
            }
        }
    }