<body>

	<h1>2</h1>

	<form action="php4.php" method="post">

		<p>amount: <input type="text" name="amount" size="100" /></p>

		

		<p><input type="submit" value="CALCULATE" name="calc" /></p>

	</form>




<?php



if (isset($_POST['calc']))
{
$amount= $_POST['amount'];

echo "amount:" . $amount. "<br><br>";





function tax($amount)
{
return (15* $amount)/100;
}
$tax = tax($amount);
echo "tax:" . $tax ;

}

?>



</body>