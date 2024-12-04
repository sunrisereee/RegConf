<?php
include('head.php');
include('header.php');
require_once('scripts\connect_to_bd.php');

?>
<html>
<body>
 <main class="first_main">
    <div class="block" id="header">
		<h1>Страница регистрации на конференцию</h1>
	</div>

	<form class="block" method="POST" id ="block1">
	<p>
		<p>Имя: <input type="text" name="name" id="name"></p>
		<p>Фамилия: <input type="text" name="surname" id="surname"></p>
		<p>E-mail: <input type="E-mail" name="email" id="email"></p>
		<p>Дата: <input type="date" name="data_birthday" id="data_birthday"> </p>
        
        <p><button type="submit" id ="button_submit">Подтвердить</button></p>
	</p>
</form>
<form class="form_but" action="registered.php" method="post">
	<p><button type="submit" id ="button_table" >Таблица участников</button></p>
</form>

</main>
<script src="send_reg.js"></script>


</body>
</html>

<?php
include('footer.php');
?>