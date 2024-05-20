<html>  
<body bgcolor="cyan">
<form method="post">
<fieldset>  
    <legend> MY APP</legend>
Enter Current year:  
&nbsp;&nbsp;&nbsp;<input type="number" name="year" /><br><br>  
Enter Date of birth:  
<input type="number" name="dob" /><br><br>  
<input  type="submit" name="submit" value="COMPUTE AGE">  
</fieldset> 
</form>
<?php  
if(isset($_POST['submit']))  
{  
$year = $_POST['year'];  
$dob = $_POST['dob'];  
$age =  $year-$dob;     
echo "Current age = from $dob to $year=".$age;   
}  
?> 
</body>  
</html>
<?php
// This creates a web form to calculate a person's age based on the current year and their year of birth.
?>
