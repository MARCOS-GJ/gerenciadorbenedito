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
    .snick{
        width: 400px;
        padding: 1%;
    }
    c{
        position: relative;
        left: 35%;
    }
    </style>
</head>
<body>
    <?php

        include_once('conexao.php');

        $id = $_GET['id'];
        $sql ="SELECT * FROM patrimonio WHERE Cod_Pat= '$id'";
        $result = mysqli_query($conn, $sql);
        $sqlS ="SELECT * FROM sala";
        $resultS = mysqli_query($conn, $sqlS);

        echo "<div class=snick>";

        echo "<h1> Altreção de Dados </h1><br><br>";
        echo "<form action= 'update.php' method= 'post'>";

        echo "<c> Sala: <select name=num_sala>";
        while ($rowS=mysqli_fetch_array ($resultS)){
        echo "<option id=sl>". $rowS['Num_Sala'] ."</option>";
        }
        echo " </select></c> "; 
        while ($row=mysqli_fetch_array ($result)){
            
            echo "<input type=hidden name=num_pat value=\"".$row['Num_Pat']."\"><br>";
            echo "<input type=hidden name=cod_pat value=\"".$row['Cod_Pat']."\"><br>
                 <input type=hidden name=cod_func value=\"".$row['Cod_Func']."\"><br>";
            echo "<b>Tipo: <select name=Tipo>
                        <option value=\"".$row['Tipo']."\" id=sl> $row[Tipo] </option>
                        <option value=null id=sl> Nenhum </option>
                        <option value=Eletrônico id=sl> Eletrônico </option>
                        <option value=Mobília id=sl > Mobília </option>
                  </select></b>";
            echo "<a>Data:      <input type=date name=data value=\"".$row['Data_Tomb']."\"></a>
                  <br><br><br>
                  <div class='InputBox'>
                <input type=text name=resgi value=\"".$row['rsg']."\" id=el class=user required>
                <label for=el class=an> Registro </label>
                </div>
                <br><br>
                <div class=InputBox>
                        <input type=text name=status value=\"".$row['sts']."\" id=el class=user required>
                        <label for=el class=an> Status </label>
                  </div>
                  <br><br>
                  <div class=InputBox>
                        <input type=text name=desc value=\"".$row['dsc']."\" id=el class=user required>
                        <label for=el class=an> Descrição </label>
                  </div>
                  <br>";
            echo "<input class=sub type=submit  value=Alterar name=Cad id=bell onclick=\"location.href='../PHP_P/update.php'\">";
            echo "</form>";
        }
        echo "</div>"; 
    ?>
</body>
</html>