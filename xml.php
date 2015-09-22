<?php
header("Content-type:text/xml");
mysql_connect("127.0.0.1","root","");
$result = mysql("employees","SELECT LastName,FirstName FROM Employees ORDER BY LastName,FirstName");

$i = 0;
echo '<data_mahasiswa>';
while ($i < mysql_numrows ($result)){
			$fields = mysql_fetch_row($result);
			echo "<nama>$fields[1]$fields[0]</nama>\r\n";
			$i++;
}
echo '</data_mahasiswa>';
mysql_close();
?>