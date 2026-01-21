 <?php
// VERIFICAÇÃO DE METODO
if($_SERVER["REQUEST_METHOD"] === "POST"){

    $nome = $_POST["nome"];
    $tarefa = $_POST["tarefa"];
    $prazo = $_POST["prazo"];

    // VERIFICANDO SE OS CAMPOS ESTAO PREENCHIDOS
    if($nome == "" || $tarefa == ""){
        echo "Preencha todos os campos corretamente.";

        
    }else{
        // CLASSIFICANDO DESEMPENHO
        if($tarefa >= 20 || $prazo <= 1){
            echo "Desempenho excelente";
        }
        elseif($tarefa >= 10 && $tarefa < 19 && $prazo < 4){
            echo "Desempenho regular";
        }
        elseif($tarefas > 25 || $prazo == 0){
            echo "Funcionário elegivel para bônus";
        }
        else{
            echo "Desempenho insatisfatório";
        }
        
    }
}

?>