
<?php 
   $title = "Homepage";
   include 'code snippets/header.php' 
?>

    <h1>Hello HTML- PHP Primer</h1>

    <?php 
    echo 'Rowell Fross PHP';
    echo '<br/>';
    echo 'Second Line in PHP';
    ?>

<?php 
   $name = 'Rowell Fross';
   $age = '30';
   echo '<br/>';
   echo $name;
   echo '<h1> My Name Is: '.$name.' </h1>';
   
   echo '<h1> My Age Is: '.$age.' </h1>';

   echo "<h1> My Name is: $name </h1>";

?>
<button type="button" class="btn btn-info"> CLICK ME </button>

<?php require 'code snippets/footer.php' ?>
