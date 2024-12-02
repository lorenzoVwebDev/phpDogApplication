<?php 
class Dog {
  //Properties
  private $dog_weight = 0;
  private $dog_breed = "no breed";
  private $dog_color = "no color";
  private $dog_name = "no name";
  private $error_message = "??";
  //Constructor
  function __constructor($properties_array) {
    $error_name = $this->set_dog_name($properties_array[0]) == TRUE ? 'TRUE,' : 'FALSE,';
    $error_breed = $this->set_dog_name($properties_array[1]) == TRUE ? 'TRUE,' : 'FALSE,';
    $error_color = $this->set_dog_color($properties_array[2]) == TRUE ? 'TRUE,' : 'FALSE,';
    $error_weight = $this->set_dog_color($properties_array[3]) == TRUE ? 'TRUE,' : 'FALSE,';

    $this->error_message = $error_name.$error_breed.$error_color.$error_weight;
  }
}