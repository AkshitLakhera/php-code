<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling in PHP</title>
</head>

<body>
    <h1>Form in PHP</h1>
    <h2>image upload</h2>
    <label for="image">Choose Image:</label>
    <input type="file" name="image" id="image" required>
    <br><br>
    <input type="submit" name="upload" value="Uploadimg">
    <!-- Insert Form -->
    <h2>Insert Data</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="email">Email:</label>
        <input type="email" name="email1" required>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" name="password1" required>
        <br><br>
        <input type="submit" name="insert" value="Submit">
    </form>

    <hr>

    <!-- Update Form -->
    <h2>Update Data</h2>
    <form action="" method="POST">
        <label for="email">Email:</label>
        <input type="email" name="update_email" required>
        <br><br>
        <label for="password">New Password:</label>
        <input type="password" name="update_password" required>
        <br><br>
        <input type="submit" name="update" value="Update">
    </form>

    <?php
    // Database connection
    $conn = mysqli_connect("localhost", "root", "Vihaan12@", "myformdb");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Insert Data
    if (isset($_POST['insert'])) {
        $email = $_POST['email1'];
        $password = $_POST['password1'];

        $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
        if (mysqli_query($conn, $sql)) {
            echo "<p>Data saved successfully!</p>";
        } else {
            echo "<p>Error: " . mysqli_error($conn) . "</p>";
        }
    }

    // Update Data
    if (isset($_POST['update'])) {
        $newemail = $_POST['update_email'];
        $newpassword = $_POST['update_password'];

        $sql = "UPDATE users SET password = '$newpassword' WHERE email = '$newemail'";
        if (mysqli_query($conn, $sql)) {
            echo "<p>Password updated successfully for email: $newemail</p>";
        } else {
            echo "<p>Error updating password: " . mysqli_error($conn) . "</p>";
        }
    }
    //showing data in screen
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // Display data in a table
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Email</th><th>Password</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["email"] . "</td><td>" . $row["password"] . "</td></tr>";
        }
        echo "<table/>";
    }


    // Close the database connection
    mysqli_close($conn);
    ?>
</body>

</html>