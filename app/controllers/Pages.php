<?php

class Pages extends Controller{

  public function __construct(){
  }

  public function index(){
    $this->view('pages/index');
  }
  
  public function Register(){
    $this->view('pages/Register');
  }

}