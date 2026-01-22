<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulário</h1>
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
        <input type="number" name="prazo" placeholder="Digite a quantidade de tarefas entregues fora do prazo">                                                                    <br><br>
        
        <!-- SETOR DO FUNCIONARIO -->
        <label for="setor">Setor do funcionário:</label><br>
        <input type="radio" name="setor_f" value="administrativo">
         <label for="setor">administrativo</label><br>
        <input type="radio" name="setor_f" value="rh">
         <label for="setor">rh</label><br>
        <input type="radio" name="setor_f" value="financeiro">
         <label for="setor">financeiro</label><br>
                        
        <!--BOTÃO-->
          
    <button>Enviar<a href="<?php include_once("calcula.php");?>"></a></button>

    </form>
</body>
</html>