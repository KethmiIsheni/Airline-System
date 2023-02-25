<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurora Airlines</title>

    <!--link- style sheets-->
<link rel="stylesheet" href="../css/tharun.css"></a>

    

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

<body bgcolor = #3598dc>
    <!--header section starts-->
<header>
    <div id="menu-bar" class="fas fa-bars"></div>
    <a href="#" class="logo"><span>A</span>urora</a>

    <nav class="navbar">
      <a href="../index.html">Home</a>
      <a href="../src/html/about us.html">About us</a>

      <div class="dropdown">
      <button class="dropbtn">Travel Information
          <i class="fa fa-caret-down"></i>
      </button>  
      <div class="dropdown-content">
          <li type="none"> <h1>checking</h1></li>
          <a href="../html/Online Mobile checking.html">online/mobile checking></a>
          <li type="none"><h1>Request</h1></li>
          <a href="../html/Seat selection.html">Seat selection</a>
          <a href="../html/Meals.html">Meals</a>
          <li type="none"><h1>Customer committment</h1></li>
          <a href="../html/customer service  plan.html">Customer service plan</a>
          <a href="../html/passenger rights.html">Passenger rights and regulations</a>
          <li type="none"><h1>Special Assistance</h1></li>
          <a href="../html/travel with children.html">Travel with children</a>
          <a href="../html/medical-information.html">medical Information</a>
          <li type="none"><h1>Charges and changes</h1></li>
          <a href="../html/cancellation and refunds.html">Cancellation and Refunds</a>
          <a href="../html/taxes and services.html">Taxes and services</a>



      </div></div>
  
  <div class="dropdown">
      <button class="dropbtn">Plan and Book
          <i class="fa fa-caret-down"></i>
      </button>  
      <div class="dropdown-content">
          <li type="none"> <h1>Booking</h1></li>
          <a href="../html/flight book.html">Book a flight </a>
          <a href="../html/flights.html">Choose a Ticket</a>
          <a href="../html/specialoffers.html">Special offer</a>
          <li type="none"> <h1>Payment Option</h1></li>
          <a href="../html/payment.html">Online and offline payment option</a>
          <a href="../html/voucher.html">Redeem your travel voucher</a>
          
      </div>
  </div>

      <a href="../html/Contact us.html">Contact Us</a>
      <a href="../html/feedback.html">Feedback</a>
  </nav>
    <div class="icons">
        <i class="fas fa-search" id ="search-btn"></i>
        <i class="fas fa-user" id ="login-btn"></i>
        
    </div>
       <form action=""class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here">
        <label for="search-bar" class="fas fa-search"></label>
       </form> 
        
</header>
<!--header section ends-->

<!--Image-->
    <div class = "image">
	<img src = "../images/Travel Info.png" att = "descriptive" width=100% height =283px >
</div>

<?php

$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];


    //create connection
    $conn = new mysqli ('localhost','root','','register');
    if ($conn->connect_error){
        die('connection failed:'.$conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into registration(firstName,lastname,Email,Password) values (?,?,?,?)");
        $stmt->bind_param("ssss",$firstName,$lastName,$email,$password);
        $stmt->execute();
        echo "<h1>Registration Successfully Done</h1>";
        $stmt->close();
        $conn->close();
    }



?>
<!--link js files-->
<script src="../js/home.js"></script>

</body>
</html>
