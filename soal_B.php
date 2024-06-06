function pattern_count($text, $pattern) {
    $count = 0;
    $pattern_length = strlen($pattern);
    for ($i = 0; $i <= strlen($text) - $pattern_length; $i++) {
        if (substr($text, $i, $pattern_length) == $pattern) {
            $count++;
        }
    }
    return $count;
}

echo pattern_count("palindrom", "ind") . "\n";  // Output: 1
echo pattern_count("abakadabra", "ab") . "\n";  // Output: 2
echo pattern_count("hello", "") . "\n";  // Output: 0
echo pattern_count("ababab", "aba") . "\n";  // Output: 2
echo pattern_count("aaaaaa", "aa") . "\n";  // Output: 5
echo pattern_count("hell", "hello") . "\n";  // Output: 0
