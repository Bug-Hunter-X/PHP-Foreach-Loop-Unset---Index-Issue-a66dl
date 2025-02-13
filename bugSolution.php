function foo(array &$arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'target') {
      unset($arr[$key]);
      break;
    }
  }
  return $arr;
}

//Correct the issue by passing array by reference
$array = ['a', 'b', 'target', 'c', 'd'];
$result = foo($array);
print_r($result); // Output: Array ( [0] => a [1] => b [3] => c [4] => d )

//Alternatively, use a while loop or a for loop to avoid the problem
function foo2(array $arr) {
    $i = 0;
    while ($i < count($arr)) {
        if ($arr[$i] === 'target') {
            array_splice($arr, $i, 1);
            break;
        }
        $i++;
    }
    return $arr;
}
$array = ['a', 'b', 'target', 'c', 'd'];
$result = foo2($array);
print_r($result); // Output: Array ( [0] => a [1] => b [2] => c [3] => d )