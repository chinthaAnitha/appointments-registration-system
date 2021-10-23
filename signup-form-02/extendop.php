<?php 
if (isset($_POST['addissue'])) {
  require_once "connect.php";
  $aadhaar = $_POST['aadhaar'];
  $issue = $_POST['issue'];
  
 $addissue="insert into issues (aadhaar,issue) values($aadhaar,'$issue')";
 if ($conn->prepare($addissue)->execute())
 echo '<script>alert("success")</script>';
 header("Location:PrevRegister.php");
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

    <title>Sign Up #2</title>
</head>

<body>
    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2"
            style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQlm0v4iZfKF42kHsMffEA_MzX56kHPIShlA&usqp=CAU');">
        </div>
        <div class="contents order-2 order-md-1">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7 py-5">
                        <h3>Add Your Issue</h3>
                        <p class="mb-4">Add New issue for existing patient.</p>
                        <form action="extendop.php" method="post" onsubmit="check()" name="checkaadhaar">
                            <div class="row">
                                <div class="col-md-6">
                              
                                  <div class="form-group last mb-6">
                                    <label for="password">Medical Issue</label>
                                    <input type="text" name="issue" class="form-control" placeholder="Fever" id="password" required>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group first">
                                    <label for="lname">Aadhaar</label>
                                    <input type="number" name="aadhaar" class="form-control" placeholder="0000 0000 0000" required>
                                  </div>
                                </div>
                              </div>
                              <input type="submit" name="addissue" value="ADD" class="btn px-5 btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>