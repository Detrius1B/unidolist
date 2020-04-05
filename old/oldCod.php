<?php
$cookie_name = 'user';
$cookie_value = 'Lemancik';
setcookie($cookie_name, $cookie_value, time() + (86400 * 30)); // 86400с - день
$count = ($_COOKIE['count'] + 1) ?? 0;
setcookie('count', $count, 0x7FFFFFFF, '/');


class BerBerBerBerBer
{
	public $ola = '1pub';
	private $olaPrivate = '2pri';
	protected $olaProtected = '3pro';

	public function wtf(): void
	{
		echo $this->ola;
		echo $this->olaPrivate;
		echo $this->olaProtected;
	}
}


function dumperGet(&$obj, $leftSp = '')
{
	if (is_array($obj)) {
		$type = 'Array[' . count($obj) . ']';
	} elseif (is_object($obj)) {
		$type = 'Object';
	} elseif (is_bool($obj)) {
		return $obj ? 'true' : 'false';
	} else {
		return "\"$obj\"";
	}

	$buf = $type;
	$leftSp .= '   ';
	for (Reset($obj); list($k, $v) = each($obj);) {
		if ($k === 'GLOBALS') {
			continue;
		}
		$buf .= "\n$leftSp $k => " . dumperGet($v, $leftSp);
	}
	return $buf;
}

function dumper($obj)
{
	echo '<pre>' . htmlspecialchars(dumperGet($obj)) . '</pre>';
}

dumper($_POST);
echo '<hr>';
var_dump($_POST);
echo '<hr>';
print_r($_POST);
echo '<hr>';
echo '<br>';
echo '<hr>';

//var_dump($GLOBALS);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Studying</title>
</head>
<body>

<!--<p id="time"></p>-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
<!--<script type="text/javascript">-->
<!--    //let timestamp = '--><?php ////////=time();?><!--//';-->
<!--    //-->
<!--    //$(function () {-->
<!--    //    setInterval(updateTime, 1000);-->
<!--    //});-->
<!--    //-->
<!--    //function updateTime() {-->
<!--    //    $('#time').html(Date(timestamp));-->
<!--    //    timestamp++;-->
<!--    //}-->
<!--</script>-->

<form action="" method="post">
    Which do u know?<br/>
    <input type="hidden" name="known[PHP]" value="0">
    <input type="checkbox" name="known[PHP]" value="l">PHP<br/>

    <input type="hidden" name="known[Perl]" value="0">
    <input type="checkbox" name="known[Perl]" value="l">Perl<br/>

    <input type="submit" name="doGo" value="Go!">
</form>

<?php
//var_dump($_SERVER);
if (isset($_REQUEST['doGo'])) {
	echo '<hr>';
	foreach ($_REQUEST['known'] as $k => $v) {
		if ($v) {
			echo "You know $k!<br>";
		} else {
			echo "You don't know $k...<br>";
		}
	}
}
?>

<!--<form action="" method="POST">-->
<!--    <input type="hidden" name="email" value="admin@microsoft.com">-->
<!--    <h2>Пошли с админом гулять</h2>-->
<!--    <p><input type="text" name="text"></p>-->
<!--    <textarea name="NAME" wrap="soft" style="margin: 0; width: 166px; height: 86px;"></textarea><br>-->
<!--    <p><input type="submit" name="doSend" value="OTocnaTb"></p>-->
<!---->
<!--    <input type="image" src="img.jpg" width="50%"><br>-->
<!---->
<!--    <select name="selector">-->
<!--        <option value="" selected disabled hidden>--choose--</option>-->
<!--		--><?php //for ($i = 0; $i < 10; $i++): ?>
<!--            <option>--><? //= $i + 1 ?><!--</option>-->
<!--		--><?php //endfor; ?>
<!--    </select>-->
<!--    <hr>-->
<!---->
<!---->
<!--</form>-->
<?php


//var_dump($_COOKIE);
//echo '<hr>';
?>
</body>
</html>


















