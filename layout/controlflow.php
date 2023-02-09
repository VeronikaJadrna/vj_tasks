
<?php include "header.php"?>

<h2>4.1 Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:</h2>
<?php
$m = date("M");
if ($m == "Aug"){
    echo "It´s still holidays.<br>";
}
else {
    echo "This is $m so I dont have any holidays.<br>";
}

?>

<h2>4.2 Assign colour red to a variable name $color and check to print one the following responses (if else statement)</h2>

<?php
$color = "red";

if ($color == "red"){
    echo "The color is red.<br>";
} else 
    {
    echo "The color is not red.<br>";
    }
?>

<h2>4.3 Write a program to grade students based on their total score for a subject. Use variable to hold the total score. The grading scheme is: </h2>
<?php
$score = 60;

if($score > 80){
    echo "Excelent<br>";
}
else if ($score >70 && $score <=80)
{
    echo "Great<br>";
}
else if ($score >60 && $score <=70)
{
    echo "Good<br>";
}
else if ($score >50 && $score <=60)
{
    echo "Pass<br>";
}
else if ($score <= 50)
{
    echo "Fail<br>";
}
?>

<h2>4.4 Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting,)</h2>

<form action="controlflow.php" method="post">
    <div class="row">
    
    <div class="col">
    <input type="text" name="fname" placeholder="First Name" class="form-control"> </div>
  
    <div class="col">
    <input type="text" name="age" placeholder="age" class="form-control"></div>
    <input type="submit" value="submit">
    </div>

<?php 

$fname = $_POST["fname"];
$age = $_POST["age"];

$intAge = (int) $age;

if ( $intAge >= 18) {
    echo "$fname is eligible for voting.";

} else {
    echo "$fname is not eligible for voting.";
}



?>

<h2>4.5 In task 5, you used $_SERVER['HTTP_USER_AGENT']; to get the browser name. 
Use Switch statement with strops function to print the name of the browser as below: 
If someone is using Chrome it should print, you are using Goolge Chrome….
 </h2>

 
 $user_agent =  $_SERVER['HTTP_USER_AGENT'];
 echo $user_agent;

 
 
 if (strpos ($user_agent, 'Edg')==true){
     echo "You are using Microsoft Edge";
     
    }else if (strpos ($user_agent, 'Firefox')==true){
     echo "You are using Firefox";
    }else if (strpos ($user_agent, 'Chrome')==true){
        echo "You are using Chrome";
        
    }else {
     echo "Your browser could not be determined";
    }
?>

<?php include "footer.php"?>
