<?php
require "header.php";
?>

<main>
    <div class="wrapper-main">
        <selection class="selection-default">
            <h1>signup</h1>
            <form class ="form-signup" action="includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="text" name="mail" placeholder="E-mail">
                <input type="password" name="pwd" placeholder="password">
                <!-- repeat the same password -->
                <input type="password" name="pwd-repeat" placeholder="Repeat password">
                <!-- <button type= "submit" name ="signup-submit">Signup</button> -->
            </form>
        </selection>
    </div>

</main>    

<?php
require "footer.php";
?>