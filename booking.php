
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book your Ticket</title>
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
  <div class="container">
    <form action="submit.php" method="post">
        <div>
          <div>
            <label>Enter Name</label>
            <input type="text" class="form-control" name="p_name" id="p_name" style="width: 40%;" required>
          </div><br><br>
          <div>
            <label>Enter email</label>
            <input type="email" class="form-control" name="p_email" id="p_email" style="width: 40%;" required>
          </div><br><br>
          <div>
            <label>Enter Mobile number</label>
            <input type="tel" class="form-control" name="p_mobno" id="p_mobno" style="width: 40%;" required />
          </div><br><br>
          <div>
            <label>Choose Your Seat number</label>
            <input type="number" class="form-control" name="p_seatno" id="p_seatno" style="width: 40%;" required />
          </div><br><br>
          <div>
            <button type="submit" id="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>
      </div>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script>
    // Vanilla JavaScript validation
    // document.getElementById("form2").addEventListener("submit", function(e) {
    //     e.preventDefault(); // Prevent default form submission

    //     const errors = document.querySelectorAll(".error");
    //     errors.forEach(el => el.textContent = ""); // Clear previous errors

    //     let isValid = true;

    //     // Get form field values
    //     const nm = document.getElementById("nm").value.trim();
    //     const em = document.getElementById("em").value.trim();

    //     // Validate Full Name
    //     if (!nm) {
    //         document.getElementById("nameError").textContent = "Full Name is required.";
    //         isValid = false;
    //     }

    //     // Validate Email
    //     const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    //     if (!em || !emailPattern.test(em)) {
    //         document.getElementById("emailError").textContent = "Enter a valid email address.";
    //         isValid = false;
    //     }

    //     // Validate Mobile Number (if applicable)
    //     const mb = document.getElementById("mb").value.trim();
    //     if (!mb) {
    //         document.getElementById("mobileError").textContent = "Mobile number is required.";
    //         isValid = false;
    //     }

    //     // Validate Surname (if applicable)
    //     const sn = document.getElementById("sn").value.trim();
    //     if (!sn) {
    //         document.getElementById("surnameError").textContent = "Surname is required.";
    //         isValid = false;
    //     }

    //     // If the form is valid, submit via AJAX
    //     if (isValid) {
            // jQuery AJAX submission
            $(document).ready(function () {
                $("#userForm").submit(function (event) {
                    event.preventDefault();
                    let formData = $(this).serialize(); // Serialize form data

                    $.ajax({
                        url: "submit.php", // PHP file to handle the form data
                        type: "POST",
                        data: formData,
                        success: function (response) {
                            alert(response); // Display success message
                            $("#response").text(response); // Show response in the element with id 'response'
                            $("#form2")[0].reset(); // Reset form fields
                        },
                        error: function () {
                            $("#response").text("Error submitting form."); // Display error message if submission fails
                        }
                    });
                });
            });
    //     }
    // });
</script>


     <footer class="text-center">
      <p class="mb-0">© 2025 Airline Reservation System</p>
     </footer>
</body>
</html>