<!--    Approach-1 (php within HTML)
    *********Program-6***************** 
    Write a PHP program to keep track of the number of visitors visiting the web page and to display this count of visitors, with proper headings. -->
<?php 
    $user = "YourName";
?>
<!DOCTYPE html>
<html>
<head> <title> program 6 </title></head> 
<body style="background: blue; color: white;">
    <h2 style="text-align:center;"> <?php echo $user; ?>,Welcome to Sample PHP Script </h2>
    <h2>This Program displays the number page visits</h2>
<?php  
    print "<h3> REFRESH PAGE </h3>";
    $name="counter.txt";

    $file = fopen($name,"r");   
    $hits = fscanf($file,"%d"); 
    fclose($file); 
    $hits[0]++; 

    $file = fopen($name,"w");
    fprintf($file,"%d",$hits[0]);
    fclose($file);

    print "Total number of views: ".$hits[0];
?>
</body>
</html>

