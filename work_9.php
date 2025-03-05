<?php

$numbers = [1, 2, 3, 4, 5];

if (array_search(3, $numbers)) {
    print_r(array_search(3, $numbers));
    print("\n");
    print('- Это индекс числа');
} else {
    print('Этого числа нет в массиве...');
}

