<?php
Class Tour {

    public $id;
    public $name;
    public $dayTour;
    public $info;
    public $image;
    public $addressList;
    public $typeList;
    public $price;
    public $db;

    public function __construct($tour) {
        $this->id = $tour->id;
        $this->name = $tour->name;
        $this->dayTour = $tour->dayTour;
        $this->info = $tour->info;
        $this->image = $tour->image;
        $this->db = $GLOBALS['conn'];
        $this->addressList = $this->getAddress();
        $this->typeList = $this->getType();
        $this->price = $this->getPrice();
    }

    public function getAddress() {
        try {
            $stmt = $this->db->prepare("SELECT * from address where id in (SELECT addressId from tour_address where tourId=:id)");
            $stmt->bindparam(":id", $this->id);
            $stmt->execute();
         
            $this->addressList = $stmt->fetchAll(PDO::FETCH_CLASS);
            return $this->addressList;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getType() {
        try {
            $stmt = $this->db->prepare("SELECT * from type where id in (SELECT typeId from tour_type where tourId=:id)");
            $stmt->bindparam(":id", $this->id);
            $stmt->execute();
            $this->typeList = $stmt->fetchAll(PDO::FETCH_CLASS);
            return $this->typeList;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getPrice() {
        try {
            $stmt = $this->db->prepare("SELECT * from price where tourId=:id");
            $stmt->bindparam(":id", $this->id);
            $stmt->execute();
            $prices = $stmt->fetchAll(PDO::FETCH_CLASS);
            foreach ($prices as $price)
            return $price;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function findAll() {
        try {
            $conn = $GLOBALS['conn'];
            $stmt = $conn->prepare("SELECT * from tour");
            $stmt->execute();
            $tours = $stmt->fetchAll(PDO::FETCH_CLASS);
            return $tours;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function find($tourId) {
        try {
            $conn = $GLOBALS['conn'];
            $stmt = $conn->prepare("SELECT * from tour where id=:id");
            $stmt->bindparam(":id", $tourId);
            $stmt->execute();
            $tour = $stmt->fetch(PDO::FETCH_ASSOC);
            return $tour;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
     public function findByDay($day) {
        try {
            $conn = $GLOBALS['conn'];
            $stmt = $conn->prepare("SELECT * from tour where dayTour=:id");
            $stmt->bindparam(":id", $day);
            $stmt->execute();
            $tours = $stmt->fetchAll(PDO::FETCH_CLASS);
            return $tours;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}

?>
