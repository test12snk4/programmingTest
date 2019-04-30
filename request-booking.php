<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "programming_test";

    // Create connection
    $conn = new mysqli($servername, $username, $password,$db);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected successfully";
?>
<html>
    <head></head>
    <body>
        <?php
        $sql = "SELECT * FROM classroom";
        $result = $conn -> query($sql);
        ?>
        <form action="post-booking.php" method="post">
            <div>
                <label>Classroom</label>
                <select name="selectClassroom">
                    <?php
                    if ($result->num_rows > 0) 
                    {
                        while($row = $result->fetch_assoc()) 
                        {
                        ?>
                        <option value="<?php echo $row["idClassroom"] ?>">
                                <?php echo $row["nameClassroom"] ?>
                            </option>
                        <?php
                        }
                    } 
                    ?>
                </select>
            </div>
            <div>
                    <label>Date</label>
                    <input type="date" name="dateBooking">
                </div>
            <div>
                <label>Time</label>
                <input type="time" name="timeStart">
                <input type="time" name="timeEnd">
            </div>
            <div>
                <label>Purpose</label>
                <input type="text" name="txtPurpose">
            </div>
            <div>
                <input type="submit" value="ok">
                <input type="reset" value="cancel">
                </div>
        </form>
    </body>
</html>