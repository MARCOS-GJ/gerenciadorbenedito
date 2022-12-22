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
    session_start();

        include_once('conexao.php');
        
        if (!$conn) {

            die("conexao Falhou: " . mysqli_connect_error());
        }

        $email = $_GET['emaill'];
        $senha = $_GET['senhal'];

        $sql = "SELECT * FROM funcionario WHERE Email= '$email' AND Senha='$senha'";

        if (($r = mysqli_query($conn, $sql))->num_rows != 0) {
            echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Login efetuado !')
                    window.location.href='../Inicial_HTML/home.html';
                   </SCRIPT>");
            $_SESSION['id'] = $r->fetch_assoc()['Cod_Func'];
        } else {
            echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Login não efetuado !')
                    window.location.href='../Inicial_HTML/login.html';
                   </SCRIPT>");
            
        }

    ?>
</body>
</html>