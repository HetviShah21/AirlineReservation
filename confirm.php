<?php
include('config.php');
$query="select * from register";
$data=mysqli_query($con,$query);
$result=mysqli_num_rows($data);
$query1="select * from flights";
$data1=mysqli_query($con,$query1);
$result1=mysqli_num_rows($data1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Flight Ticket</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #74ebd5, #ACB6E5);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .ticket {
      background: #fff;
      border-radius: 20px;
      width: 380px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.2);
      overflow: hidden;
    }
    .ticket-header {
      background: #4a90e2;
      color: #fff;
      padding: 20px;
      text-align: center;
      font-size: 24px;
      font-weight: bold;
      letter-spacing: 1px;
    }
    .ticket-body {
      padding: 20px;
    }
    .ticket-info {
      margin-bottom: 15px;
    }
    .label {
      font-weight: 600;
      color: #888;
      font-size: 12px;
      text-transform: uppercase;
    }
    .value {
      font-size: 16px;
      font-weight: bold;
      color: #333;
    }
    .ticket-footer {
      background: #f9f9f9;
      text-align: center;
      padding: 15px;
      font-size: 12px;
      color: #666;
    }
  </style>
</head>
<body>

<div class="ticket">
  <div class="ticket-header">
    ✈️MyAirlines
  </div>
  <div class="ticket-body">
    <div class="ticket-info">
    <?php
        $total=mysqli_fetch_assoc($data);
        $total1=mysqli_fetch_assoc($data1);
        
    ?>
      <div class="label">Passenger</div>
      <div class="value"><?php echo $total['p_name']; ?></div>
    </div>
    <div class="ticket-info">
      <div class="label">Flight</div>
      <div class="value">ABC23</div>
    </div>
    <div class="ticket-info">
      <div class="label">From</div>
      <div class="value"><?php echo $total1['d_city']; ?></div>
    </div>
    <div class="ticket-info">
      <div class="label">To</div>
      <div class="value"><?php echo $total1['a_city']; ?></div>
    </div>
    <div class="ticket-info">
      <div class="label">Departure</div>
      <div class="value"><?php echo $total1['d_date'];?>    <?php echo $total1['d_time']; ?>AM</div>
    </div>
    <div class="ticket-info">
      <div class="label">Arrival</div>
      <div class="value"><?php echo $total1['d_date'];?>   <?php echo $total1['d_time']; ?>AM</div>
    </div>
    <div class="ticket-info">
      <div class="label">Seat</div>
      <div class="value"><?php echo $total['p_seatno']; ?></div>
    </div>
  </div>
</div>

</body>
</html>
