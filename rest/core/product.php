<?php

class Product
{
    private $conn;
    private $table = 'products';

    public $id;
    public $name;
    public $price;
    public $stock;
    public $created_at;

    public function __construct($db)
    {
        $this->conn = $db;
    }
    public function get_all()
    {
        $sql = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt;
    }
    public function get_one()
    {
        $sql = "SELECT * FROM " . $this->table . " WHERE id=:id";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":id", $this->id);

        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->name = $row['name'];
        $this->price = $row['price'];
        $this->stock = $row['stock'];
        $this->created_at = $row['created_at'];
    }
    public function create()
    {
        $sql = "INSERT INTO " . $this->table . " SET name=:name, price=:price, stock=:stock";
        //id 자동 증가
        //create_at 현재시간
        $stmt = $this->conn->prepare($sql);
        // < > &lt; &gt;
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->price = htmlspecialchars(strip_tags($this->price));
        $this->stock = htmlspecialchars(strip_tags($this->stock));

        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":price", $this->price);
        $stmt->bindParam(":stock", $this->stock);

        if($stmt->execute()){
            return true;
        }
        echo "ERROR MSG ". $stmt->error .".". PHP_EOL;
        return false;
    }
}
