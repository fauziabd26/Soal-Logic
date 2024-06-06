function custom_sort($arr) {
    $letters = array_filter($arr, function($x) {
        return is_string($x);
    });
    $numbers = array_filter($arr, function($x) {
        return is_int($x);
    });

    sort($letters, SORT_STRING);
    sort($numbers, SORT_NUMERIC);

    return array_merge($letters, $numbers);
}

$arr = [12, 9, 30, "A", "M", 99, 82, "J", "N", "B"];
$sorted_arr = custom_sort($arr);
print_r($sorted_arr);  // Output: ["A", "B", "J", "M", "N", 9, 12, 30, 82, 99]