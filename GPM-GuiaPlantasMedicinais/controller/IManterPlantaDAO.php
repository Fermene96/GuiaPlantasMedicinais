<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IManterPlantaDAO
 *
 * @author ferna
 */
interface IManterPlantaDAO {
   
    public function cadastrarPlanta($planta);
    
    public function atualizarPlanta($planta);
    
    public function removerPlanta($id);
    
    public function recuperarPlantaPorNome($nome);
    
    public function recuperarTodasPlantas();
}
