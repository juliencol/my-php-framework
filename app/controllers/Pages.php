<?php  
class Pages extends Controller {
    public function __construct() {
     
    }

    public function index() {
      $this->view('pages/home', ['title' => 'welcome']);
    }

    public function about() {
      $this->view('pages/about');
    }
  }
?> 
