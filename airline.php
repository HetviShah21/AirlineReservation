<!-- header.html -->
<?php
include('config.php');
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyAirline</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="airline.css">
 </head>
 <body>
  <nav id="nav1" class="navbar ">
    <a class="navbar-brand" href="airline.html">MyAirLines</a>
  </nav>
  <div class="container">
  <form action="submit1.php" method="POST">
  <div class="form-class">
  <div>
    <label>Departure:</label>
    <select class="form-control" name="d_city" id="d_city" style="width: 40%;" required>
      <option value="">Select Departure City</option>
      <option value="Banglore">Banglore</option>
      <option value="Delhi">Delhi</option>
      <option value="Mumbai">Mumbai</option>
      <option value="Vadodara">Vadodara</option>
      <option value="Ahemdabad">Ahemdabad</option>
    </select>
  </div><br><br>

  <div>
    <label>Arrival:</label>
    <select class="form-control" name="a_city" id="a_city" style="width: 40%;" required>
      <option value="">Select Arrival City</option>
      <option value="Banglore">Banglore</option>
      <option value="Delhi">Delhi</option>
      <option value="Mumbai">Mumbai</option>
      <option value="Vadodara">Vadodara</option>
      <option value="Ahemdabad">Ahemdabad</option>
    </select>
  </div><br><br>

  <div>
    <label>Departure Date:</label>
    <input type="date" class="form-control" placeholder="Enter Departure Date" name="d_date" id="d_date" style="width: 40%;" required />
  </div><br><br>
  <div>
    <label>Arrival Date:</label>
    <input type="date" class="form-control" placeholder="Enter Arrival Date" name="a_date" id="a_date" style="width: 40%;" required />
  </div><br><br>
  <div>
  <button type="submit" id="submit" class="btn btn-primary">Submit</button>
  </div>
</div>
  </form>
  


</div>   
    <script>
      document.getElementById("form1").addEventListener("submit", function(e) {e.preventDefault();
        const errors = document.querySelectorAll(".error");
        errors.forEach(el => el.textContent = "");
        let isValid = true;
        const i1 = document.getElementById("d_city").value.trim();
        const i2 = document.getElementById("a_city").value.trim();
        if (!fullName) {document.getElementById("nameError").textContent = "Full Name is required."; isValid = false;}
        const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        if(!email||!emailPattern.test(email)){document.getElementById("emailError").textContent = "Enter a valid email address."; isValid = false;}
      });
  
   </script>   
   <footer class="text-dark text-center py-5 mt-5">
    <p class="mb-0">© 2025 Airline Reservation System</p>
  </footer>
 </body>
 </html>
