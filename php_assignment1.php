<?php
	
	$string1="PHP parses a file by looking for <br/> one of the special tags that tells it to start interpreting the text as PHP code. The parser then executes 			all of the code it finds until it runs into a PHP closing <br/> tag.";

	$string2="PHP does not require (or support) explicit type definition in variable declaration; a variable's type is determined by the context in which the 			variable is used.";

	
	echo "Ans 4: ";
	$upperstr=strtoupper ( $string1 );
	echo $upperstr;
	echo "<br /><br />";

	echo "Ans 5: ";
	$combinedstr=$string1.$string2;
	echo $combinedstr;
	echo "<br /><br />";
	
	echo "Ans 6: ";
	echo <<<EOD
	"PHP parses a file by looking for <br/> one of the special tags that tells it to start interpreting the text as PHP code. The parser then executes 		all of the code it finds until it runs into a PHP closing <br/> tag.";
	<br /><br />
	"PHP does not require (or support) explicit type definition in variable declaration; a variable's type is determined by the context in which the 		variable is used.";
EOD;

	echo "<br /><br />";
	echo "Ans 7: ";
	echo date("d-m-Y");
	echo "<br /><br />";

	echo "Ans 8: ";
	echo date("jS M Y");
	echo "<br /><br />";
	echo "Ans 9: ";
	$addSevenDays = mktime(0,0,0,date("m"),date("d")+7,date("Y"));
	echo date("d-m-Y", $addSevenDays);
	echo "<br /><br />";
	echo "Ans 19: ";
	$days = (strtotime("12-5-2011") - strtotime("12-4-2010")) / (60 * 60 * 24);
	print $days; 
	echo "<br /><br />";
	echo "Ans 20: ";
	$addTwentyDays = mktime(0,0,0,date("m"),date("d")+20,date("Y"));
	echo date("d-m-Y", $addTwentyDays);
	echo "<br /><br />";
	echo "Ans 21: ";
	print_r(getdate());
	echo "<br /><br />";
	
	


	
?>
