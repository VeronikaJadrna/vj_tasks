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

<script>
documet.write("Hello World This Is JavaScript");

</script>
<noscript>
Please enable JavaScript to view this content,
</noscript>

<input type="button" onclick="hello()" value="Click">


<h2>3.4 Variable in php</h2>


<?php
$title1="PHP is interesting";
echo "<h2>" . $title1 . "</h2>";
?>

<script>
    //window.alert

    //window.alert("This will trigger an alert box");
    //window.alert(5+10);
    //document.wetie
    document.write("Hello I am here");
    </script>

<h2>3.5.Grades</h2>

<button onclick="add()">Click to add</button>
<hr>
<p id="place1" style="color: white; background-color: black;"></p>
<span id="place2" style="color: white; background-color: green;"></span>
<script>
document.getElementById("place1").innerHTML="This will go to place1";
document.getElementById("place2").innerHTML="This will go to span";
</script>

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


<h2>Changing background-color</h2>
<form>
    <input type="color" name="background" onchange="changeColor('background',this.value)" >
</form>

<?php include "footer.php"?>