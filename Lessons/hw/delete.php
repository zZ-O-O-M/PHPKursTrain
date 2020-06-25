<?php

include_once('functions.php');
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];
    if (is_numeric($id)) {
        $success = removeArticle($id);
    }

    if ($success) {
        echo "Selected article was removed!";
    } else {
        echo "Error!";
    }
}


?>
<br>
<hr>
<a href="index.php">Move to main page</a>