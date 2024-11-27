<?php
require_once('connect_to_bd.php');
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);// включаем сообщения об ошибках
$d->set_charset("utf8mb4"); // задаем кодировку
$result = mysqli_query($d, "SELECT `p_fname` as firstname, `p_lname` as lastname, `p_date` as date_, `p_mail` as email_ 
FROM `participants`");
//`p_id`, `p_fname`, `p_lname`, `p_date`, `p_mail`
echo '<table id="table_1" class="table_1">'; //<thead><tr>
while($row = $result->fetch_assoc())// получаем все строки в цикле по одной
{
    echo '<tr>';
    echo '<td>'.$row['lastname'].'</td>' ;
    echo '<td>'.$row['firstname'].'</td>' ;
    echo '<td>'.$row['date_'].'</td>' ;
    echo '<td>'.$row['email_'].'</td>' ;
    echo '</tr>';   
}
echo '</table>';

?>