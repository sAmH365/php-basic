<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WEB</title>
</head>
<body>
<h1><a href="index.php">WEB</a></h1>
<!--<ol>-->
<!--    <li><a href="index.php?id=HTML">HTML</a></li>-->
<!--    <li><a href="index.php?id=CSS">CSS</a></li>-->
<!--    <li><a href="index.php?id=JavaScript">JavaScript</a></li>-->
<!--    <li><a href="index.php?id=PHP">PHP</a></li>-->
<!--</ol>-->

<ol>
<?php
    $list = scandir('./data');
    for($i=0; $i<count($list); $i++) {
        if($list[$i] != "." && $list[$i] != "..") {
?>
            <li><a href="index.php?id=<?= $list[$i] ?>"><?= $list[$i] ?></a></li>
<?php
        }
    }
?>
</ol>


<h2>
<?php
    if (isset($_GET['id'])) {
        echo $_GET['id'];
    } else {
        echo "Welcome";
    }
?>
</h2>
<?php
    if(isset($_GET['id'])) {
        echo file_get_contents("data/".$_GET['id']);
    } else {
        echo "Hello, PHP";
    }
?>
</body>
</html>
<?php
