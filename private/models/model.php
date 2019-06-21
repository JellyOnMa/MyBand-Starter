<?php

//Homepage Functions
function Headline(){
    $connection = dbConnect();

    $statement = $connection->query('SELECT * FROM info WHERE id = 1');

    $results = [];

    while ($response = $statement->fetch(PDO::FETCH_ASSOC)) {
        $results[] = $response;
    }

    return $results;
}

function about_text(){
    $connection = dbConnect();

    $statement = $connection->query('SELECT * FROM info WHERE id = 2');

    $results = [];

    while ($response = $statement->fetch(PDO::FETCH_ASSOC)) {
        $results[] = $response;
    }

    return $results;
}

function gallery(){
    $connection = dbConnect();

    $statement = $connection->query('SELECT * FROM gallery' );

    $results = [];

    while ($response = $statement->fetch(PDO::FETCH_ASSOC)) {
        $results[] = $response;
    }

    return $results;
}

function contact(){
    $connection = dbConnect();

    $statement = $connection->query('SELECT * FROM contact' );

    $results = [];

    while ($response = $statement->fetch(PDO::FETCH_ASSOC)) {
        $results[] = $response;
    }

    return $results;
}


?>
