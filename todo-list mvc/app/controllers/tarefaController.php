<?php

require_once __DIR__ . '/../models/tarefa.php';

class TarefaController{
    private $tarefaModel;

    public function __construct(){
        $this->tarefaModel = new Tarefa();
    }

    ## criar

    public function criar () {
        if(isset($_POST['descricao']) && !empty(trim($_POST['descricao']))){
            $this->tarefaModel->criar($_POST('descricao'));
        }
        header(header: "location: index.php");
    }

}
?>