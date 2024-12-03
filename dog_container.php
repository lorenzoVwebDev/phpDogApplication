<?php
class Dog_container {
  private string $app;
  private $dog_location;

/*   function __construct($value) {
    if(function_exists('get_properties')) {
      $this->app=$value;
    } else {
      exit;
    }
  } */

  public function set_app($value) {
    $this->app=$value;
  }

  public function get_dog_application() {
    $xmlDoc=new DOMDocument();
    if (file_exists('./xml-files/dog_applications.xml')) {
      $xmlDoc->load('./xml-files/dog_applications.xml');
      $searchNode=$xmlDoc->getElementsByTagName('type');

      foreach($searchNode as $searchNode) {
        
      }
      

    }
  }
}

$dog_cont = new Dog_container();

$dog_cont->get_dog_application();


?>