
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Buy Your Way to a Better Education!</title>
    <link href="./buyagrade.css" type="text/css" rel="stylesheet" />
</head>

<body>
<?php if(isset($_REQUEST["name"]) && isset($_REQUEST["cardNumber"]) && isset($_REQUEST["section"])&& isset($_REQUEST["cardType"])){?>
<?php
$name=$_REQUEST["name"];
$section=$_REQUEST["section"];
$cardNumber=$_REQUEST["cardNumber"];
$cardType=$_REQUEST["cardType"];
$fp = fopen('suckers.txt', 'a');
$data=$name.";".$section.";".$cardNumber.";".$cardType."\n";
fwrite($fp, $data);
fclose($fp);
?>
<h1>Thanks, sucker!</h1>

<p>Your information has been recorded.</p>

<dl>
    <dt>Name</dt>
    <dd>
        <?= $_REQUEST["name"]?>
    </dd>

    <dt>Section</dt>
    <dd>
        <?= $_REQUEST["section"] ?>
    </dd>

    <dt>Credit Card</dt>
    <dd>
        <?= $_REQUEST["cardNumber"] ?>
        (<?= $_REQUEST["cardType"] ?>)
    </dd>
    <dt>Here are all the suckers who have submitted here:</dt>
    <pre>
        <?= file_get_contents("suckers.txt")?>
    </pre>

</dl>
<?php } else { ?>
    <h1>Sorry</h1>
    <p>You didn't fill out the form completely.  <a href="buyagrade.html">Try again?</a></p>
<?php } ?>
</body>
</html>