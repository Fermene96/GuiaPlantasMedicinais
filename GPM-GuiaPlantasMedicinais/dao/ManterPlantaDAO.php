<?php


    require_once (__DIR__ .'/../to/Planta.php');
    require_once (__DIR__ .'/../controller/IManterPlantaDAO.php');

/**
 * Description of ManterPlantaDAO
 *
 * @author ferna
 */
class ManterPlantaDAO implements IManterPlantaDAO{
    
    public function cadastrarPlanta($planta){
        
            try {
                $pdo = new PDO('mysql:host=localhost;dbname=gpm', "root", "");
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
                $stmt = $pdo->prepare('INSERT INTO planta(nome, descricao, foto, preparo, cultivo) VALUES'
                    . '(:nomePlanta, :descricao, :foto, :preparo, :cultivo)');
                $stmt->execute(array(
                    ':nomePlanta' => $planta->getNome(),
                    ':descricao' => $planta->getDescricao(),
                    ':foto' => $planta->getFoto(),
                    ':preparo' => $planta->getPreparo(),
                    ':cultivo' => $planta->getCultivo()
                ));
                echo 'Cadastrado com sucesso!';
        } catch (PDOException $e) {
            return 'Erro ao cadastrar PLANTA!: ' . $e->getMessage();
        }
    }
    
    public function atualizarPlanta($planta){
        
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=gpm', "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $stmt = $pdo->prepare('UPDATE planta SET nome, descricao, preparo, cultivo WHERE idPlanta=:id');
            $stmt->execute(array(
                ':id' => $planta->getId(),
                ':nomePlanta' => $planta->getNome(),
                ':descricao' => $planta->getDescricao(),
                ':preparo' => $planta->getPreparo(),
                ':cultivo' => $planta->getCultivo()
            ));
        } catch (PDOException $e) {
            return 'Erro ao atualizar Planta: ' . $e->getMessage();
        }
    }
    
    public function removerPlanta($id){
        
        try {
        $pdo = new PDO('mysql:host=localhost;dbname=gpm', "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $stmt = $pdo->prepare('DELETE FROM planta WHERE idPlanta=". $id ."');
        if($stmt->execute()){
            if($stmt->rowCount() > 0){
                return true;
            } else {
                return false;
            }
            
        }
        } catch (PDOException $e) {
            return 'Erro ao remover planta: ' . $e->getMessage();
        }
    }
    
    public function recuperarPlantaPorNome($nome){
            $pdo = new PDO('mysql:host=localhost;dbname=gpm', "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $consulta = $pdo->query("SELECT '$nome' FROM planta WHERE nome LIKE '%". $nome ."%' LIMIT 5");
            
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                $planta = new Planta();
                $planta->setId($linha["idPlanta"]);
                $planta->setNome($linha["nome"]);
                $planta->setFoto($linha["foto"]);
                $planta->setDescricao($linha["descricao"]);
                $planta->setPreparo($linha["preparo"]);
                $planta->getCultivo($linha["cultivo"]);
                return $planta;
            }
            return 0;
        
    }

        public function recuperarTodasPlantas(){
        
      
        $pdo = new PDO('mysql:host=localhost;dbname=gpm', "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $consulta = $pdo->query('SELECT * FROM planta');
        
        $plantas = array();
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                $planta = new Planta();
                $planta->setId($linha["idPlanta"]);
                $planta->setNome($linha["nome"]);
                $planta->setFoto($linha["foto"]);
                $planta->setDescricao($linha["descricao"]);
                $planta->setPreparo($linha["preparo"]);
                $planta->setCultivo($linha["cultivo"]);
                array_push($plantas, $planta);
            }
            return $plantas;
        
    }
}
