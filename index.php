
<?php
// phpinfo();
include "functions.php";
include_once 'header.php';
?>

    <form action="" method="post">
        <label for="name">name</label>
        <input type="text" name="name" id="name">  <br>
        <label for="name">Email</label>
        <input type="email" name="Email" id="name">  <br>
        <label for="image">Upload</label>
        <input type="file" name="image" id="image">  <br>
        <label for="password">Password</label>
        <input type="password" name="password" id ="password"> <br>
        <input type="submit" value="submit">
    </form>

    <?php
    
    include_once 'footer.php'; 
    ?>


