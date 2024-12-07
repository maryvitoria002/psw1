<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Cadastrar aluno</title>
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

   <div class="centro">

        <div id="centro1">
            <img src="" alt="">
        </div>

        <div id="centro2">
            
            <form action="listaaluno.php" method="post">
            <div id="linhaform">
                 <div class="nomediv">
                  <label for="nome">Nome:</label>
                   <input type="text" id="nome" name="nome" placeholder="Ex: Mary" required>
                    </div>

                <div class="nomediv">
                    <label for="sobrenome">Sobrenome:</label>
                     <input type="text" id="sobrenome" name="sobrenome" placeholder="Ex: Batista" required>
                </div>
            </div><br>

            <p> <input type="submit" value="Enviar!"/> </p>
            </form>
        </div>
   </div>
</body>
</html>