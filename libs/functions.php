<?php
function slug(string $title): string
{
    return strtolower(str_replace(' ', '-', trim($title)));
}

function description($movie)
{
    global $descriptionCharacterLimit;
    return strlen($movie['description']) > $descriptionCharacterLimit ?
        substr(ucwords($movie['description']), 0, $descriptionCharacterLimit) . '...'
        : ucwords($movie['description']);
}

$descriptionCharacterLimit = 75;
?>