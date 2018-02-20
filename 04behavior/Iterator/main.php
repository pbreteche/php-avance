<?php
namespace behavior\Iterator;


require __DIR__ . '/../../vendor/autoload.php';


$fruits = new Collection(['apple', 'banana', 'cherry']);

$iterator = new CollectionIterator($fruits);

foreach ($iterator as $fruit) {
    echo $fruit . "\n";
}

$iterator->rewind();

while ($iterator->valid()) {
    echo $iterator->current() . "\n";
    $iterator->next();
}
