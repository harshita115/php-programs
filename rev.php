<?Php
echo "<form name=f1 method=post action=''>
<input type=text name=t1><input type=submit value='Submit'></form>";
@$t1=$_POST['t1']; // Collect the string as entered by user
if(strlen($t1) > 1 ){ // If the length of the string is more than 1
echo "Welcome $t1<br>
Your name in reverse : ".strrev($t1);
}
?>