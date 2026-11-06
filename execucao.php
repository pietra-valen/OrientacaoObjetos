<?php

/*//testar a conexão com o banco de dados
$conexao = Conexao::getConexao();
print_r($conexao);*/

require_once "modelo/ClientePF.php";
require_once "dao/ClienteDAO.php";

$clienteDAO = new ClienteDAO();

do{
    echo "=================CADASTRO DE CLIENTES==============\n";
    echo "1 - inserir cliente pessoa física\n";
    echo "2 - inserir cliente pessoa jurídica\n";
    echo "3 - listar clientes\n";
    echo "4 - buscar cliente\n";
    echo "5 - excluir cliente\n";
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

            $clienteDAO->inserir($clientePF);
            echo "Cliente pessoa física inserido com sucesso!\n";

            break;

        case 2:
            //inserir cliente pessoa jurídica
            $clientePJ = new ClientePJ();
            $clientePJ->setRazaoSocial(readline("Digite a razão social: "));
            $clientePJ->setNomeSocial(readline("Digite o nome social: "));
            $clientePJ->setCnpj(readline("Digite o CNPJ: "));
            $clientePJ->setEmail(readline("Digite o email: "));

            $clienteDAO->inserir($clientePJ);
            echo "Cliente pessoa jurídica inserido com sucesso!\n";

            break;

        case 3:
            //listar clientes1
            $clientes = $clienteDAO->listar();
            foreach($clientes as $c){
                echo $c . "\n";
            }
            break;

        case 4:
            break;

        case 5:
            break;
            
        case 0:
            echo "Saindo do sistema...\n";
            break;

        default:
            echo "Opção inválida!\n";
    }
}while($opc != 0);