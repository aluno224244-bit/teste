<?php
session_start();

include("conexao.php");


if (isset($_POST['add_user'])) {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sql = "INSERT INTO utilizadores (nome, email, pass)
            VALUES ('$nome', '$email', '$pass')";

    mysqli_query($conn, $sql);

    echo "Utilizador adicionado com sucesso!<br>";
}



if (isset($_POST['remove_user'])) {

    $id = $_POST['id'];

    $sql = "DELETE FROM utilizadores WHERE id = '$id'";

    mysqli_query($conn, $sql);

    echo "Utilizador removido com sucesso!<br>";
}


if (isset($_POST['edit_user'])) {

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sql = "UPDATE utilizadores
            SET nome='$nome', email='$email', pass='$pass'
            WHERE id='$id'";

    mysqli_query($conn, $sql);

    echo "Utilizador editado com sucesso!<br>";
}




if (isset($_POST['add_product'])) {

    $produto = $_POST['produto'];
    $preco = $_POST['preco'];

    $sql = "INSERT INTO produtos (produto, preco)
            VALUES ('$produto', '$preco')";

    mysqli_query($conn, $sql);

    echo "Produto adicionado com sucesso!<br>";
}


if (isset($_POST['remove_product'])) {

    $id = $_POST['id'];

    $sql = "DELETE FROM produtos WHERE id='$id'";

    mysqli_query($conn, $sql);

    echo "Produto removido com sucesso!<br>";
}



if (isset($_POST['edit_product'])) {

    $id = $_POST['id'];
    $produto = $_POST['produto'];
    $preco = $_POST['preco'];

    $sql = "UPDATE produtos
            SET produto='$produto', preco='$preco'
            WHERE id='$id'";

    mysqli_query($conn, $sql);

    echo "Produto editado com sucesso!<br>";
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<style>
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        background: #000000;
        padding: 40px;
        color: #f8f8f8;
    }

    h1 {
        margin-top: 10px;
        margin-bottom: 20px;
        color: #ffffff;
    }

    form {
        background: white;
        padding: 25px;
        margin-bottom: 40px;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(255, 255, 255, 0.1);
        max-width: 500px;
    }

    input {
        width: 100%;
        padding: 12px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 16px;
        transition: 0.2s;
    }

    input:focus {
        border-color: #4a90e2;
        outline: none;
        box-shadow: 0 0 5px rgba(74, 144, 226, 0.4);
    }

    button {
        padding: 12px 18px;
        border: none;
        border-radius: 8px;
        background: #000000;
        color: white;
        font-size: 15px;
        cursor: pointer;
        margin-right: 10px;
        transition: 0.2s;
    }


    button[name="remove_user"],
    button[name="remove_product"] {
        background: #000000;
    }


    button[name="edit_user"],
    button[name="edit_product"] {
        background: #000000;
    }

</style>
<body>

    <h1>Utilizadores</h1>

    <form method="POST">

        <input type="text" name="nome" placeholder="Nome" required>

        <input type="email" name="email" placeholder="Email" required>

        <input type="password" name="pass" placeholder="Password" required>

        <button type="submit" name="add_user">
            Adicionar
        </button>

        <br><br>

        <input type="number" name="id" placeholder="ID">

        <button type="submit" name="remove_user">
            Remover
        </button>

        <button type="submit" name="edit_user">
            Editar
        </button>

    </form>

    <h1>Produtos</h1>

    <form method="POST">

        <input type="text" name="produto" placeholder="Produto" required>

        <input type="number" step="0.01" name="preco" placeholder="Preço" required>

        <button type="submit" name="add_product">
            Adicionar
        </button>

        <br><br>

        <input type="number" name="id" placeholder="ID">

        <button type="submit" name="remove_product">
            Remover
        </button>

        <button type="submit" name="edit_product">
            Editar
        </button>

    </form>

</body>
</html>
