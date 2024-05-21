<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (empty($_SESSION['uid'])) {
    header('location: logout.php');
} else {
    $uid = $_SESSION['uid'];
    $query = "SELECT FullName FROM tbluser WHERE ID = '$uid'";
    $result = mysqli_query($con, $query);
    if ($result) {
        $row = mysqli_fetch_array($result);
        $name = $row['FullName'];
    } else {
        // Handle database query error here
        $name = "Unknown User";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Welcome Page</title>
    <style>
        /* Body and Page Styles */
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .page-wrapper {
            background-color: #fff;
            margin: 20px auto;
            max-width: 800px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        /* Navigation Bar Styles */
        .navbar {
            background-color: lightblue;
            overflow: hidden;
            color:black;
        }

        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .navbar li {
            float: left;
        }

        .navbar li a {
            display: block;
            color: black;
            font-weight: bold;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar li a:hover {
            background-color: #555;
        }

        /* Card Styles */
        .card {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
        }

        /* Welcome Message Styles */
        .welcome-message {
            color: #333;
            font-size: 24px;
            text-align: center;
        }

        /* Logout Button Styles */
        .btn-logout {
            display: block;
            margin-top: 20px;
            text-align: center;
        }
        /* .content {
            color: #333;
            font-size: 16px;
            margin-top: 20px;
        } */
        .content {
                color: black;
                font-size: 16px;
                /* margin-top: 10px; */
                background-color: #f2f2f2; /* Background color */
                padding: 20px; /* Add some padding for better readability */
            }
        /* Style the headings and paragraphs within the content */
        .content h2 {
            font-size: 20px;
            font-weight: bold;
            margin-top: 10px;
        }

        .content p {
            margin-bottom: 10px;
        }


    </style>

</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <!-- <nav class="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="dashboard.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="contactus.php">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="projects.php">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                    <h3 style="color: blue; text-align: center;">Welcome, <?php echo $name; ?>!</h3>
                </ul>
            </nav> -->
            <?php include('navbar.php'); ?>
            <div class="card card-1">
                <div class="card-body">
                <div class="content">
                <h2>Smart Farming System</h2>
    <p>The Smart Farming System is an innovative and automated solution designed to enhance agricultural practices by integrating modern technologies. This system utilizes NodeMCU, DHT11 temperature and humidity sensor, soil moisture sensor, and an IoT-controlled motor to create a comprehensive smart farming environment.</p>

    <h2>Key Components:</h2>

    <ol>
        <li><strong>NodeMCU:</strong> NodeMCU is the brain of the system, serving as the central microcontroller responsible for data processing, sensor interfacing, and communication with the IoT platform.</li>
        <li><strong>DHT11 Sensor:</strong> The DHT11 sensor monitors ambient temperature and humidity levels within the farming environment. This data is crucial for assessing the overall climate conditions that affect crop growth.</li>
        <li><strong>Soil Moisture Sensor:</strong> The soil moisture sensor measures the moisture content in the soil. This information helps in determining the soil's hydration status, allowing for optimized irrigation control.</li>
        <li><strong>IoT Platform:</strong> The system is connected to an IoT platform that enables real-time monitoring and control over the internet. This connectivity allows farmers to remotely access and manage the farm parameters.</li>
        <li><strong>Motor Control:</strong> An IoT-controlled motor is integrated into the system for automated irrigation. The motor can be remotely activated or deactivated based on the real-time data received from the soil moisture sensor, ensuring efficient water usage and crop health.</li>
    </ol>

    <h2>Functionality:</h2>

    <ul>
        <li>The DHT11 sensor continuously monitors the temperature and humidity levels in the farming environment.</li>
        <li>The soil moisture sensor measures the moisture content in the soil, providing crucial data for irrigation management.</li>
        <li>NodeMCU processes sensor data and communicates with the IoT platform through a wireless connection.</li>
        <li>Farmers can remotely access the real-time data and receive alerts or notifications through the IoT platform.</li>
        <li>The IoT-controlled motor is activated or deactivated based on the soil moisture levels. If the soil moisture drops below a certain threshold, the motor is triggered to irrigate the crops.</li>
    </ul>

    <h2>Benefits:</h2>

    <ol>
        <li><strong>Efficient Water Usage:</strong> The system optimizes irrigation based on real-time soil moisture data, reducing water wastage and promoting sustainable farming practices.</li>
        <li><strong>Remote Monitoring:</strong> Farmers can monitor and control the farming environment from anywhere with internet access, improving overall farm management efficiency.</li>
        <li><strong>Crop Health:</strong> By ensuring optimal temperature, humidity, and soil moisture levels, the system contributes to better crop health and increased yield.</li>
        <li><strong>Automation:</strong> The automated motor control simplifies irrigation management, saving time and effort for farmers.</li>
    </ol>
     <img src="smart_farming.PNG" alt="Smart Farming System" width="650" height="350">
    <p>The Smart Farming System offers a holistic and technologically advanced solution to address the challenges in modern agriculture, promoting sustainable and efficient farming practices.</p>
                    </div>
                  <!-- body -->
                </div>
            </div>
        </div>
    </div>

    <!-- Your JavaScript and other body content go here -->
</body>

</html>
