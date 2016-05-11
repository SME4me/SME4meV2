<?php
use PDOException;

    class Database{
      public $connect = NULL;
      public $row = NULL;

      try
      {

        $this->public function __construct($dbaccount)
        {
          require_once 'dbConfig.php';
          
          $this->connect = new PDO($dsn, $dbuser, $dbpass);
          $this->connect = setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $this->conncet = exec("SET CHARACTER SET utf-8");
        }
      }
      catch (PDOException $e) {
          // TODO: Handling.
          echo "Database connectoion Error :" . $e->getMessage();
      }

      public function select_query($selectquery, $selectvalue = array()){
        try{
            $select = "$selectquery";
            $stmt = $this->connect->prepare($select);
            $stmt->execute($selectvalue);
            $this->row = $this->rowCount();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
          $this->connect = null;
        }
        catch (PDOException $e) {
            // TODO: Handling.
            echo "select connection Error : " . $e->getMessage();
        }
      }

      public function select($selectquery){
        try{
            $select = $selectquery;
            $stmt = $this->connect->prepare($select);
            $stmt->execute();
            $this->row = $this->rowCount();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
          $this->connect = null;
        }
        catch (PDOException $e) {
            // TODO: Handling.
            echo "select Error : " . $e->getMessage();
        }
      }

      public function insert($insertquery, $insertvalue = arrary()){
        try{
            $insert = $insertquery;
            $stmt = $this->connect->prepare($insert);
            $result = $stmt->execute($insertvalue);
            return $result;
            $this->connect = null;
          }
        catch (PDOException $e) {
            // TODO: Handling.
            echo "insert Error : ". $e->getMessage();
        }
      }

      public function delete($deletequery, $deletevalue = array()){
        try{
            $delete = $deletequery;
            $stmt = $this->connect->prepare($delete);
            $stmt->execute($deletevalue);
            $this->connect = null;
        }
        catch (PDOException $e) {
            // TODO: Handling.
            echo "delete Error : " . $e->getMessage();
        }
      }

       public function update($updatequery, $updatevalue = array()){
         try{
             $update = $updatequery;
             $stmt = $this->connect->prepare($update);
             $stmt->execute($updatevalue);
             $this->row = $stmt->rowCount();
             $this->connect = null;
         }
         catch (PDOException $e) {
             // TODO: Handling.
             echo "update Error : " . $e->getMessage();
         }
       }

    }
?>
