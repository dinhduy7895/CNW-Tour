<?php
Class Type {

    public $id;
    public $name;
    public $tourList;
    public $db;

    public function __construct($tour) {
        $this->id = $tour->id;
        $this->name = $tour->name;
        $this->db = $GLOBALS['conn'];
        $this->tourList = $this->getTour();
    
    }

    public function getTour() {
        try {
            $stmt = $this->db->prepare("SELECT * from tour where id in (SELECT tourId from tour_type where typeId=:id)");
            $stmt->bindparam(":id", $this->id);
            $stmt->execute();
            $this->tourList = $stmt->fetchAll(PDO::FETCH_CLASS);
            return $this->tourList;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

   
    public function findAll() {
        try {
            $conn = $GLOBALS['conn'];
            $stmt = $conn->prepare("SELECT * from type");
            $stmt->execute();
            $types = $stmt->fetchAll(PDO::FETCH_CLASS);
            return $types;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function find($typeId) {
        try {
            $conn = $GLOBALS['conn'];
            $stmt = $conn->prepare("SELECT * from type where id=:id");
            $stmt->bindparam(":id", $typeId);
            $stmt->execute();
            $types = $stmt->fetchAll(PDO::FETCH_CLASS);
            foreach($types as $type)
            return $type;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}

?>
