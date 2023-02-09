<?php include "header.php"?>

<h2>5.1Write a php script to display courses as list. </h2>

<?php
$courses = array("PHP", "HTML", "JavaScript", "CMS", "Project");
echo '<ul>';
echo '<li>' . implode( '</li><li>', $courses) . '</li>';
echo '</ul>';
?>


<h2>5.2 he unset() function is used to remove element from the array. The var_dump() function is used to dump information about a variable.  array_values() is an inbuilt function that returns all the values of an array and not the keys.
Delete an element from the array below:</h2>

<?php
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
unset($courses1[4]);
$len = count($courses1);
for ($i = 0; $i < $len; $i++) {
    echo "<br> $courses1[$i] <br>";
}

?>

<h2>5.3 Sort the following array:
a) ascending order sort by value
b) ascending order sort by Key
c) descending order sort by Value
d) descending order sort by Key
</h2>
<?php
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
asort($courses3);
$len = count($courses3);
for ($i = 0;$i< $len; $i++){
    echo "<br> $i: $courses[$i] <br>";
}


$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
ksort($courses3);
$len = count($courses3);
for ($i = 0;$i< $len; $i++){
    echo "<br> $i: $courses[$i] <br>";
}

$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
arsort($courses3);
$len = count($courses3);
for ($i = 0;$i< $len; $i++){
    echo "<br> $i: $courses[$i] <br>";
}
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
Krsort($courses3);
$len = count($courses3);
for ($i = 0;$i< $len; $i++){
    echo "<br> $i: $courses[$i] <br>";
}
?>

<h2>5.4
    <?php
$courses4=array("php", "html", "javascript", "cms", "project");

print_r(array_change_key_case($courses4, CASE_UPPER));
    ?>

<h2> 5.5List all your favorite colors and their hexadecimal equivalents. (associative arrays)</h2>
<?php
$colours = array("blue"=>"1", "pink"=>"2", "purple"=>"3", "green"=>"4");

foreach($colours as $x => $x_value){
    echo "<br> $x: $x_value <br>";
}
?>

<h2>5.6PHP script to calculate and display average temperature, five lowest and highest temperatures.</h2>
<?php

//Write comments to explain the following code (when asked):

echo "<hr><h2> Calculation average temperature: </h2>";
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";

// what is explode and what does the below code do? : 
//The explode() function breaks a string into an array.
$temp_array = explode(',', $month_temp);
$tot_temp = 0;

// What is count?
// counts all elements in an array
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
// what does sort do?
//sort arrays in ascending order
sort($temp_array);
echo "<br> List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>List of five highest temperatures :";
// explain the following loop
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}
?>


<?php include "footer.php"?>














?>