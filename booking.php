<?php
    $servername = "localhost";
    $username = "username";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected successfully";
?>
<html>
    <head></head>
    <body>
        
        <div>
            <table>
                <tr>
                    <th>Classroom</th>
                    <th>Reserver</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td></td>
                </tr>
            </table>
        </div>
    </body>
</html>