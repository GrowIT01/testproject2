<?php

class db {

  protected $connection;
  protected static $instance;

  public function __construct() {
    if ($this->connection === null) {
      $host = 'localhost';
      $user = 'root';
      $password = '';
      $database = 'blog';
      try {
        $this->connection = mysqli_connect($host, $user, $password, $database);
        mysqli_set_charset($this->connection, 'utf8');
      } catch (Exception $e) {
        exit("connection failed:" . $e->getMessage());
      }
    }
  }

  private static function get_instance() {
    if (!self::$instance) {
      self::$instance = new self();
    }

    return self::$instance;
  }

  public function get_connection() {

    $db = db::get_instance();

    return $db->connection;
  }

  public function execute_query($sql) {
    if ($this->get_connection()) {
      $con = $this->get_connection();
      try {
        mysqli_query($con, $sql);
        return true;
      } catch (Exception $e) {
        return false;
        exit("Connection failed:" . $e->getMessage());
      }
    }
  }

  public function select_query($sql) {
    if ($this->get_connection()) {
      $con = $this->get_connection();
      try {
        return mysqli_query($con, $sql);
      } catch (Exception $e) {
        exit("Connection failed:" . $e->getMessage());
      }
    }
  }

  public function single_query($r, $q) {
    if ($r && mysqli_num_rows($r) > 0) {

      $row = mysqli_fetch_array($r);
      $o = $row[$q];
      return $o;
    }

    return false;
  }
  
  public function foo(){
    echo'test';
  }

 

}

