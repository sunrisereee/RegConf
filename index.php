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
		<p>Имя: <input type="text" id="name"></p>
		<p>Фамилия: <input type="text" id="surname"></p>
		<p>E-mail: <input type="E-mail" id="email"></p>
		<p>Дата: <input type="date" name="calendar" id="data_birthday"> </p>
        
        <p><button type="submit" id ="button_submit">Подтвердить</button></p>
        <p><button type="button" action="registered.php" id ="button_table" >Таблица участников</button></p>
	</p>
</form>

</main>



</body>
</html>
<script src="../send_reg.js"></script>
<?php
include('footer.php');
?>