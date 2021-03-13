<?php
class Livros extends model {

    public function getAll() {
        $array = array();

        $sql = "SELECT * FROM livros";
        $sql = $this->db->query($sql);

        

        if($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        
        return $array;
    }

    public function getInfo($id){
        $array = array();

        $sql = "SELECT * FROM livros WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }
        
        return $array;

    }

    public function add($autor, $titulo, $categoria, $capa, $sinopse) {
        if($this->emailExists($email) == false) {
            $sql = "INSERT INTO livros 
            (autor, titulo, categoria, capa, sinopse) 
            VALUES (:autor, :titulo, :categoria, :capa, :sinopse)";

            $sql = $this->db->prepare($sql);
            $sql->bindValue(":autor", $autor);
            $sql->bindValue(":titulo", $titulo);
            $sql->bindValue(":categoria", $categoria);
            $sql->bindValue(":capa", $capa);
            $sql->bindValue(":sinopse", $sinopse);
            $sql->execute();

            return true;
        } else {
            return false;
        }
    }

    private function titleExists($titulo) {
        $sql = "SELECT * FROM livros WHERE titulo = :titulo";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":titulo", $titulo);
        $sql->execute();

        if($sql->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function edit($autor, $titulo, $categoria, $capa, $sinopse) {
        $sql = "UPDATE livros SET 
        autor = :autor, 
        titulo = :titulo, 
        categoria = :categoria, 
        capa = :capa, 
        sinopse = :sinopse
        WHERE id = :id";
        
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":email", $email);
        $sql->execute();
    }

    public function delete($id) {
        $sql = "DELETE FROM livros WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();


    }
 
}