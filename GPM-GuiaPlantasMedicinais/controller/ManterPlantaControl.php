<?php

require_once (__DIR__ .'/../to/Planta.php');
require_once (__DIR__ .'/../dao/ManterPlantaDAO.php');
require_once (__DIR__ .'/../view/IManterPlantaControl.php');

/**
 * Description of ManterPlantaControl
 *
 * @author ferna
 */
class ManterPlantaControl implements IManterPlantaControl{
    
    public function cadastrarPlanta($planta) {
        $manterPlantaDAO = new ManterPlantaDAO();
        return $manterPlantaDAO->cadastrarPlanta($planta);
    }
    
    public function atualizarPlanta($planta) {
        $manterPlantaDAO = new ManterPlantaDAO();
        return $manterPlantaDAO->atualizarPlanta($planta);
    }
    
    public function removerPlanta($id) {
        $manterPlantaDAO = new ManterPlantaDAO();
        return $manterPlantaDAO->removerPlanta($id);
    }
    
    public function recuperarPlantaPorNome($nome) {
        $manterPlantaDAO = new ManterPlantaDAO();
        return $manterPlantaDAO->recuperarPlantaPorNome($nome);
    }
    
    public function recuperarTodasPlantas() {
        $manterPlantaDAO = new ManterPlantaDAO();
        return $manterPlantaDAO->recuperarTodasPlantas();
    }
    
}
