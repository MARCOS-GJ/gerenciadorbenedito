<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/BD_3.css">
</head>
<body>
    <?php

    include_once('conexao.php');

    if (!$conn) {
         die("conexao Falhou: " . mysqli_connect_error());
    }

    $nome = $_POST['nomer'];
    $email = $_POST['emailr'];
    $senha = $_POST['senhar'];

    do {
        $codF = rand(00001, 99999);
        $CF = $codF;
        $sqlC = "SELECT * FROM funcionario 
                WHERE Cod_Func = $CF";
    }while(mysqli_query($conn, $sqlC)->num_rows);
    $sql = "INSERT INTO funcionario (Cod_Func, Nome, Email, Senha) 
            VALUES ('$CF', '$nome', '$email', '$senha')";

    if (mysqli_query($conn, $sql)) {
        echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Usuário cadastrado com sucesso !')
                window.location.href='../Inicial_HTML/login.html';
               </SCRIPT>");
    } else {
        echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Usuário não cadastrado !')
                window.location.href='../Inicial_HTML/register.html';
               </SCRIPT>");
    }

    ?>
</body>
</html> 