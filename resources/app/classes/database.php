<?php
  class Database {
    function connect() {
      try {
        $dbh = new PDO('mysql:host=localhost;dbname=myworkoutweek', 'root', '');
        return $dbh;
      } catch (PDOException $e) {
        print 'An error has been encountered...<br>' . $e->getMessage();
        exit;
      }
    }
    
    function select($query) {
      try {
        $dbh = new PDO('mysql:host=localhost;dbname=myworkoutweek', 'root', '');
        return $dbh->query($query);
      } catch (PDOException $e) {
        print 'An error has been encountered...<br>' . $e->getMessage();
        exit;
      }
    }
  }