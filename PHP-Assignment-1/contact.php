<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="contact.css" rel="stylesheet">
    <title>Contact Us</title>
</head>
<body>
    <header>
        <?php include 'header1.php'; ?>
    </header>
    <div class="container">
        <section>
            <div class="data">
                <h1>Thank you for contacting us regarding our website. We appreciate your interest and are excited to assist you with your inquiries.
                    Our team is dedicated to providing exceptional customer service and we will do our best to ensure that your experience with our website is both informative and enjoyable.
                    Please feel free to reach out to us with any further questions or concerns. We are always here to help.</h1>
                <h2>Thank you again for contacting us.</h2>
                <h3>Please check your information below.</h3>
            </div>
        </section>  
        <section>
            <div class="details">
                <?php
                    $servername = "localhost";
                    $username = "Harjot";
                    $password = "password";
                    $dbname = "user_info";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Check if form is submitted
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {

                        // Get the form data
                        $name = mysqli_real_escape_string($conn, $_POST["name"]);
                        $email = mysqli_real_escape_string($conn, $_POST["email"]);
                        $message = mysqli_real_escape_string($conn, $_POST["message"]);

                        // Prepare SQL query to insert data into the database
                        $sql = "INSERT INTO contact_form (name, email, message) VALUES ('$name', '$email', '$message')"; // replace 'your_table' with your actual table name

                        if ($conn->query($sql) === TRUE) {
                            echo "New record created successfully";
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }

                         $sql = "SELECT * FROM contact_form";
                        $result = $conn->query($sql);

                        
                        if ($result->num_rows > 0) {
                            // Output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "Name: " . $row["name"]. ", Email: " . $row["email"]. ", Message: " . $row["message"]. "<br>";
                            }
                        } else {
                            echo "No results found";
                        }
                    }

                    // Close connection
                    $conn->close();
                ?>
            </div>
        </section>
    </div>
    <footer>
        <small>
            <p>© Dream Stream. All Rights Reserved.</p>
        </small>
    </footer>
</body>
</html>