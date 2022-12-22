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

    <style>
        input[id=ainz]{
            width: 15%;
            left: 42%;
            position: relative;
        }
        .table-bg{
            background: rgba(0,0,0,0.8);
            border-radius: 15px 15px 0 0;
            text-align: center;
            width: 1200px;
        }
        .out{
            position: relative;
            left: 95%;
        }
        .search-bar-container {
      color: white;
      padding: 10px;
      width: 100%;
      background-color:#303941 ;
    }

    .search-bar-container > #search-form {
      margin: 0px auto;
    }

    #search-form {
        height: fit-content;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        width: 100%;
        margin: 3px 0;
        width: 30vw;
    }

    #search-form > #search-input {
        flex: 4;
        border-radius: 15px;
        text-indent: 10px;
        height: 30px;

        margin-right: 10px;

        border: 1px solid lightgray;
    }

    #search-form > #search-button {
        flex: 1;
    }
        </style>
</head>
<body>
    <div class=snick>
    <h1> Consulta </h1><br><br>
    <div class="search-bar-container">
        <form id="search-form" action="consultar.php" action="GET">
            <input id="search-input" type="text" name="pesquisa">
            <input id="search-button" class="default-button" type="submit" value="Buscar">
            <label for = "filtro"> 
    
        </form> 
</div>
    <table border= 9 class="table text-white table-bg">
            <thead>
                <tr>
                <th scope="col"> Número da Sala </th>
                <th scope="col"> Descrição </th>
                <th scope="col"> Alterar </th>
                <th scope="col"> Excluir </th>
                </tr>
            </thead>
    <?php

        include_once('conexao.php');
        $pesquisa = false;  

        if(isset($_GET["pesquisa"])) {
            $pesquisa = $_GET["pesquisa"];
        }

        if($pesquisa) {
            $sql = "SELECT * FROM sala WHERE Num_Sala LIKE '%$pesquisa';";
        }else{
            $sql = "SELECT * FROM sala ;";
        }
        
        $result = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>" . $row['Num_Sala'] . "</td>";
                echo "<td>" . $row['dsc'] . "</td>";
                echo "<td>";
                echo "<a href=\"altera.php?id=".$row['Num_Sala'] . "\"><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                        <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                        <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                      </svg></a>";
                echo "<td>";
                echo "<a href=\"deletar.php?id=".$row['Num_Sala'] . "\"><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
                <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
              </svg></a>";
                echo "</td>";
                echo "</tr>";
            }
            echo "";
            echo "";
            echo "";
       
    ?>
    </table>
    </div>
</body>
</html>