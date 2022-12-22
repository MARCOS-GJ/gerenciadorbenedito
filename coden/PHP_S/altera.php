<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <script src="https://kit.fontawesome.com/7fd362441c.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <link rel="stylesheet" href="../CSS/desing.css">
    <link rel="stylesheet" href="../css/home.css">
</head>
<body>
    
</body>
</html>


<?php
        require_once('../Inicial_PHP/home.php');
        echo nav();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/desing.css">

    <style>
    input[id=bell]{
        width: 50%;
        left: 25%;
        position: relative;
    }  
    .out{
            position: relative;
            left: 95%;
        }
    </style>
</head>
<body>
    <?php

        include_once('conexao.php');

        $id = $_GET['id'];
        $sql ="SELECT * FROM sala WHERE Num_Sala= '$id'";
        $result = mysqli_query($conn, $sql);

        echo "<div class=snick>";
        echo "<a class='out' href='../PHP_S/lista.php'><svg xmlns='http://www.w3.org/2000/svg' width='32' height='32' fill='currentColor' class='bi bi-box-arrow-left' viewBox='0 0 16 16'>
            <path fill-rule='evenodd' d='M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z'/>
            <path fill-rule='evenodd' d='M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z'/>
            </svg></a>";
        while ($row=mysqli_fetch_array ($result)){
            echo "<h1> Altreção de Dados </h1><br>";
            echo "<form action=update.php method=post>";
            echo "<input type=hidden name=nums value=\"".$row['Num_Sala']."\"><br>";
            echo "<div class=InputBox>
                        <input type=number name=num_sala value=\"".$row['Num_Sala']."\" id=el class=user required>
                        <label for=el class=an> Número da Sala </label>
                  </div>
                  <br><br>
                  <div class=InputBox>
                        <input type=text name=desc value=\"".$row['dsc']."\" id=el class=user required>
                        <label for=el class=an> Descrição </label>
                  </div>
                  <br>";

            echo "<input class=sub type=submit  value=Alterar name=Cad id=bell onclick=\"location.href='update.php'\">";
            echo "</form>";
        }
        echo "</div>"; 
    ?>
</body>
</html>