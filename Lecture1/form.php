<!DOCTYPE html>
<html>
<body bgcolor="cyan">
<form method="post">
<fieldset>  
    <legend> MY APP</legend>
    Enter First Number:  
    &nbsp;&nbsp;&nbsp;<input type="number" name="number1" /><br><br>  
    Enter Second Number:  
    <input type="number" name="number2" /><br><br>  
    <input type="submit" name="submit" value="Add">  
</fieldset> 
</form>
<?php  
if(isset($_POST['submit'])) {  
    $number1 = $_POST['number1'];  
    $number2 = $_POST['number2'];  
    $sum = $number1 + $number2;     
    echo "The sum of $number1 and $number2 is: " . $sum;   
}  
?> 
</body>  
</html>
<?php
// The webpage displays a form with two input fields for entering numbers and a submit button labeled "Add".
?>