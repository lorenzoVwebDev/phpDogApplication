<?php
class Dog_container {
  private string $app;
  private $dog_location;

  function __construct($value) {
    if(function_exists('get_properties')) {
      $this->app=$value;
    } else {
      exit;
    }
  }

  public function set_app($value) {
    $this->app=$value;
  }

  public function get_dog_application() {
    $xmlDoc=new DOMDocument();
    if (file_exists("./xml-files/dog_applications.xml")) {
      $xmlDoc->load("./xml-files/dog_applications.xml");
      $typeNodes=$xmlDoc->getElementsByTagName("type");
      foreach($typeNodes as $searchNodes) {
        $id=$searchNodes->getAttribute('ID');
        if($id==$this->app) {
          $location=$searchNodes->getElementsByTagName('location');
          $file=$location->item(0)->nodeValue;
          return $file;
        }
      }
    }
  }
}

$dog_cont = new Dog_container('breeds');

print $dog_cont->get_dog_application();


?>