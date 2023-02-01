<!DOCTYPE html>
<?php 
$title = "Excercise 1";
include "header.php"?>
    <h2>3.1. Write a simple PHP script to print your information (Name and your groupID)</h2>

    
<?php
echo "Veronika Jadrna<br>";
echo "BBCAP22";
?>

<h2>3.2 Write PHP code to display the folowing message</h2>

<?php 
echo "Hello World! My name is \"Veronika\"";
?>

<h2>3.3 Write the PHP in to display the current date.</h2>

<?php
echo date('d.M.y');?>


<h2>3.4 Variable in php</h2>


<?php
$title1="PHP is interesting";
echo "<h1>" . $title1 . "</h1>";
?>

<h2>3.5.Grades</h2>
<?php
$g1 = 5;
$g2 = 4;
$g3 = 5;

echo "
<table>
<tr>
<th> S.N.</th>
<th>Name</th>
<th>Grade</th>
</tr>
<tr>
<td> 1 </td><td> Pekka </td><td> $g1 </td>
</tr>
<tr>
<td> 2 </td><td> Johanna </td><td> $g2 </td>
</tr>
<tr>
<td> 3 </td><td> John </td><td> $g3 </td>
</tr>
</table>
"
?>


<h2>Screenshot</h2>

<img src="screenshot.PNG" alt="screenshot">;

<?php include "footer.php"?>