<?php
class Dog_container {
  public string $app;
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
    if (file_exists("C:/Users/loren/Desktop/functionals/Information Technology Courses/WebDevelopment/phpExcercises/dogApplication/xml-files/dog_applications.xml")) {

      $xmlDoc->load("C:/Users/loren/Desktop/functionals/Information Technology Courses/WebDevelopment/phpExcercises/dogApplication/xml-files/dog_applications.xml"
);
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

  function create_object($properties) {
    $dog_loc=$this->get_dog_application();
    if(($dog_loc==false)||(!file_exists($dog_loc))) {
      return false;
    } else {
      if (require_once($dog_loc)) {
        print 'true';
      };
      $class_array=get_declared_classes();
      $last_position=count($class_array)-1;
      $class_name=$class_array[$last_position];
      $object=new $class_name($properties);
      return $object;
    } 
  }
}
?>