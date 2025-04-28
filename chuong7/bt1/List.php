<?php
include 'Connection.php';
$table = $_GET['table'];

$result = $conn->query("SELECT * FROM $table");

echo "<table border='1'>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    foreach($row as $col) {
        echo "<td>$col</td>";
    }
    echo "</tr>";
}
echo "</table>";
$conn->close();
?>
