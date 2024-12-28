function foo($a, $b) {
  if ($a === $b) {
    return true;
  } else {
    return false;
  }
}

// This will produce a warning, because strict comparison is used with a non-scalar value
$result = foo([1, 2], [1, 2]);

// This will not produce a warning. Although the arrays are equal in content, they are distinct objects in memory.
$result = foo([1, 2], [1, 2]);

//This comparison will fail if using ===
$a = new stdClass();
$b = new stdClass();
$a->value = 1;
$b->value = 1;

if ($a === $b) { // This will always be false.
  echo 'equal';
}else{
  echo 'not equal';
}

//This will succeed
if ($a == $b) { // This will always be false.
  echo 'equal';
}else{
  echo 'not equal';
}