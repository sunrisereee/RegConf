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

    <div class="block" id="header">
		<h1>Страница регистрации на конференцию</h1>
	</div>

	<div class="block" id = "block1">
	<p>
		<p>Имя: <input type="text"></p>
		<p>Фамилия: <input type="text"></p>
		<p>E-mail: <input type="E-mail"></p>
		<p>Дата: <input type="date" name="calendar">
	   <input type="submit" value="Отправить"></p>
	</p>
	</div>

</main>



</body>
</html>

<?php
include('footer.php');
?>