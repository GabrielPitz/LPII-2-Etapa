<?php
    include "conexao.php"; //  Reaproveitamento de código

    if(isset($_POST['descricao'])) {
        //entrada
        $descricao = trim($_POST['descricao']); // É fundamental
        $preco = trim($_POST['preco']);
        $estoque = trim($_POST['estoque']);

        //processamento - inserindo dados no BD
        $sql = "insert into produto(descricao,preco,estoque) values ('$descricao', '$preco', '$estoque')";

        $cadastrar = mysqli_query($conexao, $sql);

        //saida feedback ao usuário
        if($cadastrar) {
            echo "
            <script>
                alert('Produto Cadastrado com Sucesso!');
                window.location = 'listar_produtos.php';
            </script>
            ";
        } else {
            echo "
                <p>Banco de dados Temporariamente fora do ar. Tente novamente mais tarde. Entre em contato com o administração do site para reportar o problema. </p>

                <p> Clique <a href='produtos.php' >aqui </a> para retornar ao formulário de cadastro </p>
            ";
        }

    } else { // Tratamento de erro e redirecionamento
        echo "
        <p> Esta é uma página de tratamento de dados </p>
        <p> Clique <a href='produtos.php' > aqui </a> para acessar o formulário de cadastro </p>
        ";
    }

?>