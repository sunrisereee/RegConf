<?php
require_once('scripts\connect_to_bd.php');
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);// включаем сообщения об ошибках
$d->set_charset("utf8mb4"); // задаем кодировку
$result = mysqli_query($d, "SELECT `p_fname`, `p_lname`, `p_date`, `p_mail` FROM `participants` WHERE 1");

echo '<table id="table_1" class="table_1">'; //<thead><tr>
while($row = $result->fetch_assoc())// получаем все строки в цикле по одной
{
    echo '<tr>';
    echo '<td>'.$row['p_fname'].'</td>' ;
    echo '<td>'.$row['p_lname'].'</td>' ;
    echo '<td>'.$row['p_date'].'</td>' ;
    echo '<td>'.$row['p_mail'].'</td>' ;
    echo '</tr>';   
}
echo '</table>';

?>