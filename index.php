<?php
include('head.php');
include('header.php');
?>
<html>
<body>
 <main class="first_main">
    <form class="form_but" action="login.php" method="post">
    <button type="submit" class="button_login">Login</button>
    </form>
    <div class="wrapper">
        <div class="body_div">
            <?php
            require_once('scripts\message_view.php');
            ?>
        </div>
    </div>
</main>



</body>
</html>

<?php
include('footer.php');
?>