<?php
Class Address {

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
            $stmt = $this->db->prepare("SELECT * from tour where id in (SELECT tourId from tour_address where addressId=:id)");
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
            $stmt = $conn->prepare("SELECT * from address");
            $stmt->execute();
            $addresses = $stmt->fetchAll(PDO::FETCH_CLASS);
            return $addresses;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function find($addressId) {
        try {
            $conn = $GLOBALS['conn'];
            $stmt = $conn->prepare("SELECT * from address where id=:id");
            $stmt->bindparam(":id", $addressId);
            $stmt->execute();
            
            $addresses = $stmt->fetchAll(PDO::FETCH_CLASS);
            foreach($addresses as $address)
           
            return $address;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}

?>
