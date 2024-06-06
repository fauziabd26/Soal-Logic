function count_letters($text) {
    $letter_count = [];
    for ($i = 0; $i < strlen($text); $i++) {
        $char = $text[$i];
        if (ctype_alpha($char)) {
            if (isset($letter_count[$char])) {
                $letter_count[$char]++;
            } else {
                $letter_count[$char] = 1;
            }
        }
    }
    ksort($letter_count);
    return $letter_count;
}

print_r(count_letters("Hello World"));  // Output: ["H" => 1, "W" => 1, "d" => 1, "e" => 1, "l" => 3, "o" => 2, "r" => 1]
print_r(count_letters("Bismillah"));  // Output: ["B" => 1, "a" => 1, "h" => 1, "i" => 2, "l" => 2, "m" => 1, "s" => 1]
print_r(count_letters("MasyaAllah"));  // Output: ["A" => 1, "M" => 1, "a" => 3, "h" => 1, "l" => 2, "s" => 1, "y" => 1]