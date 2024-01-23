<?php

function getMessage()
{
    if(isset($_GET['name']))
        $message = $_GET['name'];
    else
        $message = "";
    return 'Hello '. $message. '!';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Infrastructure</title>
</head>
<body>
<h1><?= getMessage()?></h1>
 <form action="index.php" type="get">
     <input name="name">
     <button>say hello</button>
 </form>
</body>
</html>