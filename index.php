<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- FORM -->
    <form action="calcula.php" method="post" enctype = "multipart/form-data">
        <!-- NOME -->
        <label for="nome">Nome:</label>
        <input type="text" name="nome" placeholder="Digite seu nome">                                                                                                       <br><br>

        <!-- DESEMPENHO -->
        <label for="tarefa">Tarefas entregues:</label>
        <input type="number" name="tarefa" placeholder="Digite a quantidade de tarefas entregues">                                                                                                   <br><br>

        <!-- PRAZO -->
        <label for="prazo">Entregue fora do prazo?</label>
        <input type="number" name="prazo" placeholder="Digite a quantidade de tarefas entregues fora do prazo">  
                            
        <!--BOTÃO-->
          
    <a href="<?php include_once("calcula.php");?>"><input type="submit" name = "enviar"> </a>

    </form>
</body>
</html>