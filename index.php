<?php
error_reporting(0);

$server = "localhost";
$username = "root";
$password = "";
$dbname = "telaverge";
$con = mysqli_connect($server, $username, $password, $dbname);
if (!$con) {
    die("Connection with the database failed due to" . mysqli_connect_error());
}
echo "Succcessfully connected";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Reservation</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <div>
        <div class="navcontainer">
            <nav>
                <a class="active" href="#home">Home</a>
                <a href="#contact">Contact</a>
                <a href="#service">Services</a>
                <a href="#about">Help</a>
                <i class='bx bx-user-circle' style='color:#fbf9f9'></i>
                <a href="#login" class="log">LogIn/SignUp </a>
            </nav>
            
        </div>
        <div class="container">
            <img src="Images\flight_background.jpg" alt="flight">
            <div class="content">
                <div class="trip">
                    <input type="radio" name="triptype" value="1way"><label><b>One Way</b></label>
                    <input type="radio" name="triptype" value="2way"><label><b>Round Trip</b></label>
                    <input type="radio" name="triptype" value="explore"><label><b>Explore</b></label>
                </div>
                <div class="details">
                        <form action="search.php" method="post">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" width="220px" height="50px">From</th>
                                    <th scope="col" width="220px">To</th>
                                    <th scope="col" width="240px">Departure</th>
                                    <th scope="col" width="200px">Return</th>
                                    <th scope="col" width="90px">Travellers</th>
                                    <th scope="col" width="130px">Class</th>
                                </tr>
                                <tr>
                                    <td><select name="from" id="from" required>
                                            <option>Select source</option>
                                            <option value="Kolkata">Kolkata</option>
                                            <option value="Banglore">Banglore</option>
                                            <option value="Delhi">Delhi</option>
                                        </select></td>
                                    <td><select name="to" id="to" required>
                                            <option>Destination</option>
                                            <option value="Kolkata">Kolkata</option>
                                            <option value="Banglore">Banglore</option>
                                            <option value="Delhi">Delhi</option>
                                        </select></td>
                                    <td><input type="date" class="time" id="flightdt" name="flightdt"
                                            min="<?php echo date('Y-m-d'); ?>" required></td>
                                    <td>
                                        <hr width="150px">
                                    </td>
                                    <td><input type="text" class="travel" id="travel" placeholder="No. of Travellers"
                                            required></td>
                                    <td> <select class="trc" name="coach" id="coach" required>
                                            <option>Select class</option>
                                            <option value="Business">Business</option>
                                            <option value="Economy">Economy</option>
                                            <option value="First">First</option>
                                        </select>
                                    </td>
                                </tr>
                            </thead>
                        </table>
                        <div>
                            <a href="/search.php" target="_blank">
                                <input type="submit" value="Submit" class="submit" name="submit"></a>
                            <!-- <button type="submit" class="search"><b>Search</b></button> -->
                        </div>
                    </form>
                    </div>
                </div>
            </div>

    </div>

</body>

</html>

<?php
    // Check if the form has been submitted
    if (isset($_POST['submit'])) {
        // Get form input values
        $From = $_POST['from'];
        $To = $_POST['to'];
        $Flightdt = $_POST['flighdt'];
        $Travel = $_POST['travel'];
        $Coach = $_POST['coach'];

        // Perform data insertion
        if (!empty($From) && !empty($To) && !empty($Flightdt) && !empty($Travel) && !empty($Coach)) {
            // Establish a database connection (replace with your database credentials)
            $conn = new mysqli("localhost", "your_username", "your_password", "your_database");

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "INSERT INTO `flight_details` (`Source`, `Destination`, `Departure`, `Traveller`, `Class`)
                    VALUES ('$From', '$To', '$Flightdt', '$Travel', '$Coach')";

            if ($conn->query($sql) === TRUE) {
                echo "Data inserted successfully.";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        } else {
            echo "Please fill in all fields.";
        }
    }
    ?>