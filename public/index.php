<?php

    include( './../config/Database.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    ss


    <?php

class ShareModel extends Database
{
    public function test(){
        $this->query( "SELECT * FROM posts");
        $rows = $this->fetchAll();
        return print_r($rows);
    }
}

$test = new ShareModel();
$test->test();

    ?>
</body>
</html>