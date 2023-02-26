<tt><h2>
<?php
	echo ">>check if number is prime or not.<hr/>method-1:<br/>"; 
	{
	$flag = false;
	for($i = 2; $i <= $num/2; $i++)
		{
			if($num % $i == 0)
			{
				$flag = true;
				break;
			}
		}
		if($flag)
		{
			echo $num ." is not a prime number";
		}
		else
		{
			echo $num ." is a prime number";
		}
	}echo "<hr/>";
	echo "method-2:<br/>"; 
	{
		$count = 0;
		for($i = 1; $i <= $num; $i++)
		{
			if($num % $i == 0)
			{
				$count++;
			}
		}
		//if count == 2 so that a is only get mod = 0 at /1 and /itself
		if($count == 2)
		{
			echo $num." is a prime number";
		}
		else
		{
			echo $num." is not a prime number";
		}
	}echo "<hr/>>>prime numbers between 1 to ".$num.": ";
	{
		echo "<table border=1 style= \"border-collapse: collapse;, font-size: 100px;\"><tt>";
		for($i = 1; $i <= $num; $i++)
		{
			$count = 0;
			//loop no:2 checks loop no:1's variable i is prime or not
			for($j = 1; $j <= $i; $j++)
			{
				if($i % $j == 0)
				{
					$count++;
				}
			}
			if($count==2)
			{
				echo "<th style= \"font-size: 1.5em	;\">".$i."</th>";
			}
		}
	}echo "</table><hr/>>>first ".$num." prime numbers: ";
	{
		$count = 0;
		$tempnum = 2;
		echo "<table border=1 style= \"border-collapse: collapse;\"><tt>";
		while($count != $num)
		{
			$flag = true;
			for($i = 2; $i <= $tempnum/2; $i++)
			{
				if($tempnum % $i == 0)
				{
					$flag = false;
					break;
				}
			}
			if($flag)
			{
				$count++;
				echo "<th style= \"font-size: 1.5em	;\">".$tempnum."</th>";
			}
			$tempnum++;
		}
	}
	echo "<hr/><br>Github:<a href=\"https://github.com/aadityaa-23\">aadityaa-23</a>"
?>
</html>
