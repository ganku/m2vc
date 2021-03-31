<?php

class Database {

  private static function con() {
      try
      {
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=ganesh;charset=utf8', 'root', '');
        //$pdo = new PDO("mysql:host=".self::$host.";$dbname=".self::$dbname.";charset=utf8", self::$username, self::$password);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
      } catch (PDOException $e)
      {return $e; }
  }

  public static function query($query, $params = array()) {
    $stmt = self::con()->prepare($query);
    $stmt->execute($params);
    $data = $stmt->fetchAll();
    return $data;
  }

}