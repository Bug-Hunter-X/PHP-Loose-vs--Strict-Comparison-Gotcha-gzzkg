function foo($a, $b) {
  // Use json_encode for comparing arrays or objects by value
  return json_encode($a) === json_encode($b);
}

//Example usage
$array1 = [1, 2, 3];
$array2 = [1, 2, 3];
$result = foo($array1, $array2); // returns true

$object1 = new stdClass();
$object1->name = 'John Doe';
$object2 = new stdClass();
$object2->name = 'John Doe';
$result = foo($object1, $object2); // returns true

//For simple data types, keep using === as intended.
$num1 = 10;
$num2 = 10;
if ($num1 === $num2) {
echo 'equal';
}
