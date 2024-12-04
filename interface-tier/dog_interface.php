<?php
declare(strict_types=1);
function error_check_dog_app($lab) {
  list($name_error, $breed_error, $color_error, $weight_error) = explode(',', (string)$lab);
  print $name_error == 'true' ? 'Name update successful<br/>' : 'Name update not successful <br/>';
  print $breed_error == 'true' ? ' Breed update successful<br/>' : 'Breed update not successful<br/>';
  print $color_error == 'true' ? 'Color update successful<br/>' : 'Color update not successful<br/>';
  print $weight_error = 'true' ? 'Weight update successful<br/>' : 'Weight update not successful<br/>';
}
?>