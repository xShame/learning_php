<?php
 
    // include('ninjas.php');
    // require('ninjas.php');

    // if(isset($_GET['submit'])){
    //     echo $_GET['email'];
    //     echo $_GET['title'];
    //     echo $_GET['ingredients'];
    // }
    if(isset($_POST['submit'])){
        echo htmlspecialchars($_POST['email']);
        echo htmlspecialchars($_POST['title']);
        echo htmlspecialchars($_POST['ingredients']);
    }

?>

<!DOCTYPE html>
<html lang="en">
    <?php include('templates/header.php'); ?>

    <section class="container grey-text">
        <h4 class="center">Add a Pizza</h4>
        <!-- <form action="add.php" method="GET" class="white"> -->
        <form action="add.php" method="POST" class="white">
            <label for="">Your Email:</label>
            <input type="text" name="email">
            <label for="">Pizza Title:</label>
            <input type="text" name="title">
            <label for="">Ingredients (comma seperated):</label>
            <input type="text" name="ingredients">

            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>
  
    <?php include('templates/footer.php'); ?>
</html>