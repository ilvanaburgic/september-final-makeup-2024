<?php

class ExamDao
{

  private $conn;

  /**
   * constructor of dao class
   */
  public function __construct(){ 
    try { 
      $host = "127.0.0.1";
      $dbname = "final-ilvana";
      $username = "root";
      $password = "12nana123";
      $port = "3306";
  
      $dsn = "mysql:host=$host;port=$port;dbname=$dbname"; 
      $this->conn = new PDO($dsn, $username, $password); 
      
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        echo "Connected successfully"; 
      } catch(PDOException $e) { 
        echo "Connection failed: " . $e->getMessage(); 
      } 
    }

  public function login($data) {}

  public function film_performance_report() {}

  public function delete_film($film_id) {}

  public function edit_film($film_id, $data) {}

  public function get_customers_report() {}

  public function get_customer_rental_details($customer_id) {}
}
