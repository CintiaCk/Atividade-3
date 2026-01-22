 <?php
// VERIFICAÇÃO DE METODO
if($_SERVER["REQUEST_METHOD"] === "POST"){

    $nome = $_POST["nome"];
    $tarefa = $_POST["tarefa"];
    $prazo = $_POST["prazo"];
    $setor = $_POST["setor"];
    

    // MENSAGEM
    $exelente = "Olá $nome <br> Setor: $setor <br> Desempenho: Exelente";
    $regular = "Olá $nome <br> Setor: $setor <br> Desempenho: Regular";
    $bonus = "Olá $nome <br> Setor: $setor <br> Desempenho: Funcionário elegivel para bônus";
    $insatisfatorio = "Olá $nome <br> Setor: $setor <br> Desempenho: Insatisfatório";

    // VERIFICANDO SE OS CAMPOS ESTAO PREENCHIDOS
    if($nome == "" || $tarefa == ""){
        echo "Preencha todos os campos corretamente.";

        
    }else{
        // CLASSIFICANDO DESEMPENHO
<<<<<<< HEAD
        if($tarefa >= 20 || $prazo <= 1){
            echo $exelente;
=======
        if($tarefa >= 20 || $prazo = 0){
            echo "Desempenho excelente";
>>>>>>> ajuste-regra
        }
        elseif($tarefa >= 10 && $tarefa < 19 && $prazo < 4){
            echo $regular;
        }
        elseif($tarefas > 25 || $prazo == 0){
            echo $bonus;
        }
        else{
            echo $insatisfatorio;
        }
        
    }
}

?>