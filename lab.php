<?php
require_once('dog-class.php');
$lab = new Dog;

// --------------Set Methods------------------------------
$dog_error_message = $lab->set_dog_name("Fred");
print $dog_error_message == TRUE ? "Name update successful</br>" : "Name update not successful</br>";

$dog_error_message = $lab->set_dog_weight(5);
print $dog_error_message == TRUE ? 'Weight update successful<br />' : 'Weight update not 
successful<br />';
$dog_error_message = $lab->set_dog_breed('Lab');
print $dog_error_message == TRUE ? 'Breed update successful<br />' : 'Breed update not 
successful<br />';
$dog_error_message = $lab->set_dog_color('Yellow');
print $dog_error_message == TRUE ? 'Color update successful<br />' : 'Color update not 
successful<br />';
$dog_error_message = $lab->set_dog_gender('Female');
print $dog_error_message == TRUE ? 'Gender update successful<br />' : 'Gender update not 
successful<br />';


// -----------------Get Methods------------------------------------------
print $lab->get_dog_name() . "<br/>";
print $lab->get_dog_weight() . "<br />";
print $lab->get_dog_breed() . "<br />";
print $lab->get_dog_color() . "<br />";
print $lab->get_dog_gender() . "<br />";
$dog_properties = $lab->get_properties();
list($dog_weight, $dog_breed, $dog_color, $dog_gender) = explode(',', $dog_properties);
print "Dog weight is $dog_weight. Dog breed is $dog_breed. Dog color is $dog_color. Dog gender is $dog_gender";


?>