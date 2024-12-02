<?php 
class Dog {
  //Properties IMPORTANT (set the properties private after the development process)
  public $dog_weight = 0;
  public $dog_breed = "no breed";
  public $dog_color = "no color";
  public $dog_name = "no name";
  public $error_message = "??";
  //Constructor
  function __construct($properties_array) {
    $error_name = $this->set_dog_name($properties_array[0]) == TRUE ? 'TRUE,' : 'FALSE,';
    $error_breed = $this->set_dog_breed($properties_array[1]) == TRUE ? 'TRUE,' : 'FALSE,';
    $error_color = $this->set_dog_color($properties_array[2]) == TRUE ? 'TRUE,' : 'FALSE,';
    $error_weight = $this->set_dog_weight($properties_array[3]) == TRUE ? 'TRUE,' : 'FALSE,';

    $this->error_message = $error_name.$error_breed.$error_color.$error_weight;
  }

  public function to_string() {
    return $this->error_message;
  }

  public function set_dog_name($value) {
    $error_message = TRUE;
    (ctype_alpha($value) && (strlen($value) <= 20)) ? $this->dog_name = $value : $error_message = FALSE;
    return $error_message;
  }

  public function set_dog_weight($value) {
    $error_message = TRUE;
    (is_numeric($value) && ($value>0 && $value<=120)) ? $this->dog_weight=$value : $error_message = FALSE;
    return $error_message;
  }

  
  
}

$properties_array = array(
  0 => 'lorenzo',
  3 => 45
);

print $properties_array[3];

$dog = new Dog($properties_array);

echo $dog->dog_name;


