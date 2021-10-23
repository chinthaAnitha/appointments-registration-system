<?php
if (isset($_POST['appoint'])) {
  require_once "connect.php";
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $aadhaar = $_POST['aadhaar'];
  $gender = $_POST['gender'];
  $issue = $_POST['issue'];
  $age = $_POST['age'];
  
  $addappo = "insert into appointmentso (fname,lname,mail,phone,aadhaar,gender,age) values('$fname','$lname','$email',$phone,$aadhaar,'$gender',$age)";
  if ($conn->prepare($addappo)->execute()) {
    $addissue="insert into issues (aadhaar,issue) values($aadhaar,'$issue')";
    if ($conn->prepare($addissue)->execute()){
    echo '<script>alert("success")</script>';
    header("Location:PrevRegister.php");
  }
    else {
      echo '<script>alert("failed")</script>';
    }
  } else {
    echo '<script>alert("failed")</script>';
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Style -->
  <link rel="stylesheet" href="css/style.css">

  <title>New Register</title>
</head>

<body>


  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQlm0v4iZfKF42kHsMffEA_MzX56kHPIShlA&usqp=CAU');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 py-5">
            <h3>Register</h3>
            <p class="mb-4">Register For Your Appointment.</p>
            <form action="Registration.php" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" class="form-control" placeholder="e.g. John" id="fname" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" class="form-control" placeholder="e.g. Smith" id="lname" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" class="form-control" placeholder="e.g. john@your-domain.com" id="email" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group first">

                    <label for="email">Gender</label>
                    <select  name="gender" id="pet-select" class="form-control" required>
                      <option value="">--Please choose an option--</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="Other">Other</option>

                    </select>

                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="lname">Phone Number</label>
                    <input type="text" name="phone" class="form-control" placeholder="+00 0000 000 0000" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="lname">Aadhaar</label>
                    <input type="number" name="aadhaar" class="form-control" placeholder="0000 0000 0000" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">

                  <div class="form-group last mb-3">
                    <label for="password">Medical Issue</label>
                    <input type="text" name="issue" class="form-control" placeholder="Fever" required>
                  </div>
                </div>
                <div class="col-md-6">

                  <div class="form-group last mb-3">
                    <label for="re-password">Age</label>
                    <input type="number" name="age" class="form-control" placeholder=""  required>
                  </div>
                </div>
              </div>



              <input type="submit" name="appoint" value="Register" class="btn px-5 btn-primary">

            </form>
          </div>
        </div>
      </div>
    </div>


  </div>



  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>