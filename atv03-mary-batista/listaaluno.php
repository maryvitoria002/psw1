<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Lista de alunos</title>
</head>

<body>
    <header>
        <div id="logo">
           <h1>MASUPY</h1>
       </div>

       <div id="nav">

           <ul>
               
               <li><a href="index.php">Home</a> </li>
               <li><a href="cadaluno.php">Cadastrar alunos</a></li>
               <li><a href="listaaluno.php">Lista de alunos</a></li>
           
           </ul>

       </div>

       <div id="botaocontato">
               <a href="">Contate-nos</a>
        </div>
   </header>



   <table>
        <tr>
            <th>nome</th>
            <th>sobrenome</th>
        </tr>

   </table>

   <?php
        echo $_POST['nome'];
        echo $_POST['sobrenome'];
    ?>
</body>

</html>