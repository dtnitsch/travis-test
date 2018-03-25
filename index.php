<?php

require_once 'vendor/autoload.php';

$obj = new Controllers\DTN\Utils\Thingy();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Travis Testing</title>
</head>	
<body>

<h1><?php echo $obj->helloWorld(); ?></h1>

<pre>Uppercase Word: <?php echo $obj->uppercase("moo cow");?></pre>

</body>
</html>