<?php
require_once('connect_to_bd.php');
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);// включаем сообщения об ошибках
$d->set_charset("utf8mb4"); // задаем кодировку
$result = mysqli_query($d, "SELECT sm.Message_text as message_, au.User_login as user_ FROM `message` as sm, `about_user` as au 
WHERE sm.User_ID = au.User_ID");

echo '<table id="table_1" class="table_1">'; //<thead><tr>
while($row = $result->fetch_assoc())// получаем все строки в цикле по одной
{
    echo '<tr>';
    echo '<td>'.$row['user_'].'</td>' ;
    echo '<td>'.$row['message_'].'</td>' ;
    echo '</tr>';   
}
echo '</table>';

?>