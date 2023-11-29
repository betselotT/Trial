<!DOCTYPE html>
<html>
<body>

<?php
class LibraryItem {
  public $title;
  public $author;
  public $available;

  function __construct($title, $author, $available) {
    $this->title = $title; 
    $this->author = $author; 
    $this->available = $available; 
  }
  function get_title() {
    return $this->title;
  }
  function get_author() {
    return $this->author;
  }
  function get_available() {
    return $this->available;
  }
  function checkOut() {
    $this->available = false;
    return $this->available;
  }
  function checkIn() {
    $this->available = true;
    return $this->available;
  }
}

class Book extends LibraryItem {
    public $ISBN;
}
  function get_ISBN() {
    return $this->ISBN;
  }

class DVD extends LibraryItem {
    public $duration;
}
  function get_duration() {
    return $this->duration;
  }

$newBook = new LibraryItem("A book", "Abebe", true);
if($newBook->checkIn()){
    echo $newBook->get_title();
    echo "<br>";
    echo $newBook->get_author();
} 
?>
 
</body>
</html>
