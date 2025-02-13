function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'target') {
      unset($arr[$key]);
      break;
    }
  }
  return $arr;
}

$array = ['a', 'b', 'target', 'c', 'd'];
$result = foo($array);
print_r($result); // Output: Array ( [0] => a [1] => b [3] => c [4] => d )

//The bug is that when using unset() inside a foreach loop on an array, the array index may not be correctly updated leading to unexpected behavior. 