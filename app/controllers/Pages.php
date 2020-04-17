<?php  
class Pages {
    public function __construct() {
     
    }

    public function index() {
      echo "Home page";
    }

    public function about($id) {
      echo $id;
    }
  }
?> 
