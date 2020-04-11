<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'its_event');
       
$sql = "SELECT * FROM eventt";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
    <tr>
    <th>ID</th>
    <th>nama</th>
    <th>deskripsi</th>
    <th>tanggal</th>
    <th>
    </th>Action</tr>";
    while($row = $result->fetch_assoc()) {
        echo 
        "<tr>
        <td>" . $row["id"]. "</td> 
        <td>" . $row["nama"]. "</td>
        <td>" . $row["deskripsi"].  "</td>
        <td>" . $row["tanggal"].  "</td>
        <td><a href='edit.php?edit=".$row["id"]."'>Edit</a></td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
     echo "<a href='input.php'>Buat Baru</a>";