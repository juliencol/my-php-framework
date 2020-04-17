<?php  
class Pages extends Controller {
    public function __construct() {
      $this->postModel = $this->model('Post');
    }

    public function index() {
      $data = ['title' => 'welcome'];
      $this->view('pages/home', $data);
    }

    public function about() {
      $data = ['title' => 'welcome'];
      $this->view('pages/about', $data);
    }
  }
?> 
