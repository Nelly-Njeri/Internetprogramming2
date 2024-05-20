<html>  
<body bgcolor="cyan">
<form method="post">
<fieldset>  
    <legend> MY APP</legend>
Enter Any Number:  
&nbsp;&nbsp;&nbsp;<input type="number" name="zu" /><br><br>    
<input  type="submit" name="submit" value="COMPUTE">  
</fieldset> 
</form>
<?php  
if(isset($_POST['submit']))  
{  
$zu = $_POST['zu'];    
$square =  $zu*$zu;     
echo "The square of $zu =: ".$square;   
}  
?> 
</body>  
</html>
<?php
// This creates a web form to calculate a person's age based on the current year and their year of birth.
?>