<?php
	
	$string1="PHP parses a file by looking for <br/> one of the special tags that tells it to start interpreting the text as PHP code. The parser then executes 			all of the code it finds until it runs into a PHP closing <br/> tag.";

	$string2="PHP does not require (or support) explicit type definition in variable declaration; a variable's type is determined by the context in which the 			variable is used.";

	echo "1.occurance of PHP from string 1<br /><br />Ans : ";
	echo substr_count($string1,"PHP"); 
	echo "<br /><br />";

	echo "2.position where PHP occures in the string 1<br /><br />Ans : ";
	echo strpos($string1,"PHP");
	echo "<br /><br />";

	echo "3.Create array of words in string 1<br /><br />Ans : ";
	$string3 = explode(' ',$string1);
	echo '<pre>';
	print_r($string3);
	echo '</pre>';
	echo "<br /><br />";

	echo "4.Capitalise string 1<br/><br/>Ans : ";
	$upperstr=strtoupper ( $string1 );
	echo $upperstr;
	echo "<br /><br />";

	echo "5.Combine two strins<br/><br/>Ans : ";
	$combinedstr=$string1.$string2;
	echo $combinedstr;
	echo "<br /><br />";

	echo "6.Echo string 1 & 2 using heredoc<br/><br/>Ans : ";
	echo <<<EOD
	string 1:
	"$string1"
	<br /><br /> string 2:
	"$string2"
EOD;
	echo "<br /><br />";

	echo "7.Print current date<br/><br/>Ans : ";
	echo date("d-m-Y");
	echo "<br /><br />";

	echo "8.print 12th Jan 2012<br/><br/>Ans : ";	
	echo(date("jS M Y",mktime(0,0,0,1,12,2012)));
	echo "<br /><br />";

	echo "9.add 7 days in current date<br/><br/>Ans : ";
	$addSevenDays = mktime(0,0,0,date("m"),date("d")+7,date("Y"));
	echo date("d-m-Y", $addSevenDays);
	echo "<br /><br />";

	echo "10. Cut the string 1 into 4 parts & print it.<br/><br/>Ans :";
	$length=strlen($string1);
	$quarter=$length/4;
	echo "first part:".substr($string1,0,$quarter);
	echo "<br/>";
	echo "second part:".substr($string1,$quarter,$quarter*2);
	echo "<br/>";
	echo "third part:".substr($string1,$quarter*2,$quarter*3);
	echo "<br/>";
	echo "fourth part:".substr($string1,$quarter*3,$length);
	echo "<br/>";
	echo "<br /><br />";

	echo "11.Divide the string 1 by occurances of '.'<br/><br/>Ans : ";
	$tokens = explode(".", $string1);

	$reverse = array_reverse($tokens);
	echo '<pre>';
	print_r($reverse);
	echo '</pre>';
	echo "<br /><br />";

	echo "12.Remove the HTML characters<br/><br/>Ans : ";
	echo strip_tags($string1);
	echo "<br /><br />";

	echo "13.Print the 'PHP' word from string 1 by traversing it using string functions<br/><br/>Ans :";
	$token = strtok($string1, " ");              
	    $cnt=1;
	    while ($token !== false) {
	    
	      if((strcmp($token,"PHP"))==0)
	      {
		  echo "PHP $cnt time occur in string1";
		  $cnt=$cnt+1;
		  echo '<br/>';
	       }
	     $token = strtok(" \n\t");
	    }
	echo "<br /><br />";

	echo "14.Find the length of string<br/><br/>Ans : ";
	echo "length of string1=".strlen($string1);
	echo "<br />";
	echo "length of string2=".strlen($string2);
	echo "<br /><br />";

	echo "16.Global varibles provided by PHP<br/><br/>Ans : ";
	echo "Global varibles provided by PHP<br/>Superglobals<br/>GLOBALS<br/>SERVER<br/>_GET<br/>_POST<br/>_FILES<br/>_REQUEST<br/>_SESSION<br/>_ENV<br/>		_COOKIE<br/>php_errormsg<br/>HTTP_RAW_POST_DATA<br/>http_response_header<br/>argc<br/>argv";
	echo "<br /><br />";

	echo "19.Compare two dates<br/><br/>Ans : ";
	$days = (strtotime("12-5-2011") - strtotime("12-4-2010")) / (60 * 60 * 24);
	echo "Difference bettween two dates=";
	print $days; 
	echo "<br /><br />";

	echo "20.Print date after 20 days from current date<br/><br/>Ans : ";
	$addTwentyDays = mktime(0,0,0,date("m"),date("d")+20,date("Y"));
	echo date("d-m-Y", $addTwentyDays);
	echo "<br /><br />";

	echo "21.Print date in array format<br/><br/>Ans : ";
	print_r(getdate());
	echo "<br /><br />";
	
	


	
?>
