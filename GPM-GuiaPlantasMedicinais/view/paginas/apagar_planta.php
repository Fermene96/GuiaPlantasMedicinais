<?php
    
//$mysqli = new mysqli('localhost', 'root', '', 'gpm') or die(mysqli_error($mysqli));

/*if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM planta WHERE idPlanta=$id");
}*/
    require_once (__DIR__ .'/../../controller/ManterPlantaControl.php');
    require_once (__DIR__ .'/../../to/Planta.php');
    
    $apagarPlanta = new ManterPlantaControl();
    
    $planta = new Planta();
    $nome = new Planta();
    //$cultivo = new Planta();
    //$descricao = new Planta();
   
    
    //$id = $_GET["$id"];
    $planta->setId($_POST['id']);
    //$preparo->setPreparo($_POST['preparo']);
    //$cultivo->setCultivo($_POST['cultivo']);
    //$descricao->setDescricao($_POST['descricao']);
    $nome->setNome($_POST['nome']);
    //$edita = $id;
    $id = $planta;
    //$planta = $apagarPlanta->recuperarPlantaPorNome($nome->getNome())->getId();
    $apagarPlanta->removerPlanta($id);
    
    if($apagarPlanta->removerPlanta($id) != false){
        echo <<<HTML
        <center>
        <br><br><br>
            <form action="edita_planta.php" method="POST">
                
                <p> Planta apagada</p>
                <input type="submit" value="Voltar">
            </form>
        </center>
                <br><br>
            
HTML;
                
        } else {
            echo 'Erro ao apagar planta';
    }
    
    
        //echo "$descricao->getDescricao($planta)";
        /*if ($apagarPlanta->removerPlanta($id) != false){ 
        $planta = $apagarPlanta->recuperarPlantaPorNome($nome->getNome())->getId();    
        //$planta = $apagarPlanta->recuperarTodasPlantas($planta->getId());
        $planta = $apagarPlanta->removerPlanta($id);
        echo <<<HTML
        <center>
        <br><br><br>
            <form action="edita_planta.php" method="POST">
                
                <p> Planta apagada</p>
                <input type="submit" value="Voltar">
            </form>
        </center>
                <br><br>
            
HTML;
                
        } else {
            echo 'Erro ao apagar planta';
    }*/
    
    
        
