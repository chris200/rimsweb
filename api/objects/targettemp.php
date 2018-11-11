<?php
class Targettemp{

    // database connection and table name
    private $conn;
    private $table_name = "targettemperaturelog";
    public $index;
    public $targettemperature;
    public $timestamp;




    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    // read products
function read(){

      // select all query
      $query = "SELECT
                   p.indexID, p.timestamp, p.targettemperature
              FROM
                  " . $this->table_name . " p
                  order by
                  p.timestamp DESC  limit 0,1";

      // prepare query statement

      $stmt = $this->conn->prepare($query);

      // execute query
      $stmt->execute();
//print_r($stmt);
      return $stmt;
  }





// create product
  function create(){

      // query to insert record
      $query = "INSERT INTO
                  " . $this->table_name . "
              SET

                  targettemperature=:targettemperature";

      // prepare query
      //print_r("$query");
      //print_r($query);
      $stmt = $this->conn->prepare($query);

      // sanitize
      $this->targettemperature=htmlspecialchars(strip_tags($this->targettemperature));
    //  $this->price=htmlspecialchars(strip_tags($this->price));
    //  $this->description=htmlspecialchars(strip_tags($this->description));
    //  $this->category_id=htmlspecialchars(strip_tags($this->category_id));
    //  $this->created=htmlspecialchars(strip_tags($this->created));

      // bind values
      $stmt->bindParam(":targettemperature", $this->targettemperature);
      //$stmt->bindParam(":price", $this->price);
    //  $stmt->bindParam(":description", $this->description);
      //$stmt->bindParam(":category_id", $this->category_id);
    //  $stmt->bindParam(":created", $this->created);
print_r($stmt);
      // execute query
      if($stmt->execute()){
          return true;
      }

      return false;

  }





}
