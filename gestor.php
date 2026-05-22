    <php
        session_start();

        include("conexao.php");


        $sql = "SELECT * FROM utilizadores";
        $result = mysqli_query($conn, $sql);


        if(isset($_POST['adicionar'])) {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $password = $_POST['pass'];

            $sql = "INSERT INTO utilizadores (nome, email, pass) VALUES ('$nome', '$email', '$pass')";
            $result = mysqli_query($conn, $sql);
            echo "Utilizador adicionado com sucesso!";
        }


        if(isset($_POST['remover'])) {
            $id = $_POST['id'];

            $sql = "DELETE FROM utilizadores WHERE id = '$id'";
            $result = mysqli_query($conn, $sql);
            echo "Utilizador removido com sucesso!";
        }

        if(isset($_POST['editar'])) {
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];

            $sql = "UPDATE utilizadores SET nome = '$nome', email = '$email', pass = '$pass' WHERE id = '$id'";
            $result = mysqli_query($conn, $sql);
            echo "Utilizador editado com sucesso!";
        }


        $sql = "SELECT * FROM produtos";
        $result = mysqli_query($conn, $sql);


        if(isset($_POST['adicionar'])) {
            $produto = $_POST['produto'];
            $preco = $_POST['preco'];

            $sql = "INSERT INTO produtos (produto, preco) VALUES ('$produto', '$preco')";
            $result = mysqli_query($conn, $sql);
            echo "Produto adicionado com sucesso!";
        }


        if(isset($_POST['remover'])) {
            $id = $_POST['id']; 

            $sql = "DELETE FROM produtos WHERE id = '$id'";
            $result = mysqli_query($conn, $sql);
            echo "Produto removido com sucesso!";
        }


        if(isset($_POST['editar'])) {
            $id = $_POST['id'];
            $produto = $_POST['produto'];
            $preco = $_POST['preco'];

            $sql = "UPDATE produtos SET produto = '$produto', preco = '$preco' WHERE id = '$id'";
            $result = mysqli_query($conn, $sql);
            echo "Produto editado com sucesso!";
        }
    ?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
    <style>
    </style>
</head>
<body>
    <h1>Users</h1>
    <div form method="post"> 
    <input type="text" name="nome" id="nome" placeholder="Adicionar utilizador">
    <input type="email" name="email" id="email">
    <input type="pass" name="pass" id="pass" >
    <button type="submit" name="adicionar" onclick="">Adicionar</button>
    <div>
        <input type="id">
        <button>Remover</button>
        <button>Editar</button>
    </div>
    </div>

    <h1>Produtos</h1>
    <div form method="post"> 
    <input type="text" name="produto" placeholder="Adicionar Produto">
    <input type="number" name="preco" id="preco" >
    <button type="submit" name="adicionar" onclick="">Adicionar</button>
    <div>
        <input type="id">
        <button >Remover</button>
        <button>Editar</button>
    </div>
    </div>
</body>
</html>
