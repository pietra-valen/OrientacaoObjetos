<?php

/*
//testar a conexão com o banco de dados

$conexao = Conexao::getConexao();
print_r($conexao);*/

require_once "util/Conexao.php";
require_once "modelo/ClientePF.php";
require_once "modelo/ClientePJ.php";

do{
    echo "=================CADASTRO DE CLIENTES==============\n";
    echo "1 - inserir cliente pessoa física\n";
    echo "0 - sair\n";

    $opc = readline("Digite a opção desejada: ");

    switch($opc) {

        case 1:
            //inserir cliente pessoa física
            $clientePF = new ClientePF();
            $clientePF->setNomeCompleto(readline("Digite o nome completo: "));
            $clientePF->setNomeSocial(readline("Digite o nome social: "));
            $clientePF->setCpf(readline("Digite o CPF: "));
            $clientePF->setEmail(readline("Digite o email: "));
            break;
            
        case 0:
            echo "Saindo do sistema...\n";
            break;

        default:
            echo "Opção inválida!\n";
    }
}while($opc != 0);
