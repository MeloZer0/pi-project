<?php
class Actions{
    // INSERIR NA BASE DE DADOS
    public function insert($ref, $fields){
        include('config.php');
        $pushData = $database->getReference($ref)->push($fields);

        header('Location: admin.php?msg=inserted');
    }

    // SELECT DA BASE DE DADOS
    public function select($ref){
        include('config.php');
        $getData = $database->getReference($ref)->getValue();

        return $getData;
    }

    // DELETE DA BASE DE DADOS
    public function delete($ref, $key){
        include('config.php');
        $database->getReference($ref)->getChild($key)->remove();

        header('Location: admin.php?msg=deleted');
    }

    // UPDATE NA BASE DE DADOS
    // public function update($ref,$key,$data){
    //     include('config.php');
    //     $database->getReference($ref)->getChild($key)->update($data);

    //     header('Location: admin.php?msg=updated');
    // }
}
?>