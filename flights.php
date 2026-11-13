<?php
include('config.php');
$query="select * from flights";
$data=mysqli_query($con,$query);
$result=mysqli_num_rows($data);
?>
<!-- flights.html placeholder -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Flight Search Results - AirlineRS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="airline.css">
</head>
<body>
  <nav id="nav1" class="navbar">
    <a class="navbar-brand" href="airline.html">MyAirLines</a>
  </nav>

  <div class="container my-5">
    <h2 class="mb-4">Available Flights</h2>
    <div class="card flight-card mb-3">
      <div class="card-body">
        <div class="row align-items-center">
          <?php $total=mysqli_fetch_assoc($data);?>
          <div class="col-md-3 text-center">
            <!-- <h5 class="card-title">Airlines</h5> -->
            <p class="mb-1"><strong>Flight:</strong>ABC23</p>
            <p class="mb-0"><strong>Airbus </strong>D20</p>
          </div>
          <div class="col-md-3 text-center">
            <p class="mb-1"><strong>From:</strong><?php echo $total['d_city']; ?></p>
            <p class="mb-0"><strong>To:</strong> <?php echo $total['a_city']; ?></p>
          </div>
          <div class="col-md-3 text-center">
            <p class="mb-1"><strong>Departure Date:</strong><?php echo $total['d_date']; ?></p>
            <p class="mb-0"><strong>Arrival Date:</strong> <?php echo $total['a_date']; ?></p>
          </div>
        
          <div class="col-md-3 text-center">
            <p class="mb-1"><strong>Departure Time:</strong><?php echo $total['d_time']; ?></p>
            <p class="mb-0"><strong>Arrival Time:</strong> <?php echo $total['a_time']; ?></p>
          </div></div>
          <div class="row align-items-center">
          <div class="col text-center">
            <h5>Total:<?php echo $total['rs']; ?>Rs</h5>
            <a href="booking.php?flightId=<?php echo $total['id']; ?>" class="btn btn-success">Book Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="text-center">
    <p class="mb-0">© 2025 Airline Reservation System</p>
  </footer> 

  <!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="scripts.js"></script>
  <script>
    $.get("backend/api.php?action=getFlights", function(res) {
  const data = JSON.parse(res);
  if (data.status === "success") {
    console.log("Flights:", data.data);
  }
});
  </script> -->
  </body>
</html> 

