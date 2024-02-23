<?php
// include 'db.include.php';
 //DB Connection Details
// create connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error) {
die("Connect failed: " . $conn->connect_error);
}



$name = $_POST['name'];
$age = $_POST['Age'];
$day = $_POST['Day'];


//Create the SQL Statement
$sql = "SELECT Name, Age, Day FROM registration WHERE Name = '$name' AND Age = $age AND Day = '$day'";
//Fun the SQL Statement in the Server
$result = $conn->query($sql);


// if ($result->num_rows > 0) {
//     // echo "<div style='word-spacing: 10px;'>";
//     echo "<table style='width: 100%; border-collapse: collapse;'>";
//     echo "<tr><th>Name</th><th>Age</th><th>Day</th></tr>";
// while($row = $result->fetch_assoc()) {
// $Name[] = $row["Name"];
// $Age[] = $row["Age"];
// $Day[] = $row["Day"];

if ($result->num_rows > 0) {
    // Output the specific record
    echo "<table border='1'>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Day</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["Name"]."</td>
                <td>".$row["Age"]."</td>
                <td>".$row["Day"]."</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No results found for the specified criteria";
}


// -------------------------------------------


// }

// echo "</table>";
// $no = $result->num_rows;
// } else {
// print_r("no result found");
// }

$conn->close();
}
?>

