<!DOCTYPE html>
<html lang="en">
<?php
require_once "connect.php";
$getapp="select* from appointmentso";
$getappstmt=$conn->query($getapp);
?>
<head>
  <meta charset="utf-8">
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Style -->
  <link rel="stylesheet" href="css/style.css">

  <title>Prev Register</title>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>


  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2"
      style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQlm0v4iZfKF42kHsMffEA_MzX56kHPIShlA&usqp=CAU');">
    </div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12 py-5">
            <h3>Register</h3>
            <p class="mb-4">Register For Your Appointment.</p>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First Name</th>
                  <th scope="col">Last Name</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Email</th>
                  <th scope="col">Aadhaar</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Age</th>
                  

                </tr>
              </thead>
              <tbody id="dvContent">
              <?php $i=1; foreach ($getappstmt as $row) : ?>
                <tr>
                <td><?php echo $i?></td>
                <td><?php echo $row['fname']?></td>
                <td><?php echo $row['lname']?></td>
                <td><?php echo $row['phone']?></td>
                <td><?php echo $row['mail']?></td>
                <td><?php echo $row['aadhaar']?></td>
                <td><?php echo $row['gender']?></td>
                <td><?php echo $row['age']?></td>
                
              </tr>
                <?php $i+=1;endforeach;?>
              </tbody>
            </table>
            <div class="row">
            <div class="col-3">
            <button onclick="location.href = 'http://localhost/signup-form-02/signup-form-02/registration.php';" class="btn btn-outline-primary">New Person</button>
            </div>
            <div class="col-4">
            <button onclick="location.href = 'http://localhost/signup-form-02/signup-form-02/extendop.php';" class="btn btn-outline-secondary">Old Person</button>
            </div>
            <div class="col-5" align="right">
            <button  onclick="location.href = 'http://localhost/signup-form-02/signup-form-02/appointments.php';" class="btn btn-outline-success">Show appointments</button>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
</script>

<!--       
Script to get JSON file and display its content 
<script >
    $(document).ready(function() {
           
      var i = 1;
            $.getJSON('appointments.json', function(app) {
              for(i=1;i<=app.appointments.length;i++){
              $("#dvContent").append("<tr></tr>");
              $("<td></td>").html(i).appendTo("#dvContent ");
              $("<td></td>").html(app.appointments[i-1].firstName).appendTo("#dvContent");
              $("<td></td>").html(app.appointments[i-1].lastname).appendTo("#dvContent");
              $("<td></td>").html(app.appointments[i-1].phone).appendTo("#dvContent");
              $("<td></td>").html(app.appointments[i-1].email).appendTo("#dvContent");
              $("<td></td>").html(app.appointments[i-1].aadhaar).appendTo("#dvContent");
              $("<td></td>").html(app.appointments[i-1].gender).appendTo("#dvContent");
              $("<td></td>").html(app.appointments[i-1].age).appendTo("#dvContent");
              $("<td></td>").html(app.appointments[i-1].issue).appendTo("#dvContent");
              }
            });
      
        
    });
    function add(){
      $.getJSON('appointments.json', function(app) {
        var pat={"firstName":"vyshnavi",
        "lastname":"M",
        "aadhaar":"384739247602",
        "email":"Ramya",
        "phone":"6485920468",
        "gender":"Female",
        "issue":"Eye site",
        "age":"21"};
        app.appointments.push(pat);
        
var newData = JSON.stringify(app);
jQuery.post('savedata.php', {
    newData: newData
}, function(response){
    // response could contain the url of the newly saved file
})
      });
      
    }
  </script>
<!-- <script>
  $(document).ready(function () {
    var i = 1;
    $.ajax({
      type: "GET",
      url: "appointments.json",
      dataType: "json",
      success: function (xml) {
        $(xml).find('appointments').each(function () {
          $("#dvContent").append("<tr></tr>");
          var fname = $(this).find('firstName').text();
          var lname = $(this).find('lastname').text();
          var phone = $(this).find('phone').text();
          var email = $(this).find('email').text();
          var aadhaar = $(this).find('aadhaar').text();
          var gender = $(this).find('gender').text();
          var age = $(this).find('age').text();
          var issue = $(this).find('issue').text();
          $("<td></td>").html(i).appendTo("#dvContent ");
          $("<td></td>").html(fname).appendTo("#dvContent ");
          $("<td></td>").html(lname).appendTo("#dvContent ");
          $("<td></td>").html(phone).appendTo("#dvContent ");
          $("<td></td>").html(email).appendTo("#dvContent ");
          $("<td></td>").html(aadhaar).appendTo("#dvContent ");
          $("<td></td>").html(gender).appendTo("#dvContent ");
          $("<td></td>").html(age).appendTo("#dvContent ");
          $("<td></td>").html(issue).appendTo("#dvContent ");

          i += 1;
        });
      },
      error: function () {
        alert("An error occurred while processing XML file.");
      }
    });
    
  });
  function add(){
    $.ajax({
      type: "GET",
      url: "convertjson.xml",
      dataType: "xml",
      success: function (xml) {
        
    $.find("app").append("<appointments><firstName>vyshnavi</firstName><lastname>M</lastname><aadhaar>384739247602</aadhaar><email>Vyshnavi@gmail.com</email><phone>6485920468</phone><gender>Female</gender><issue>Eye site</issue><age>21</age></appointments>");
    
    alert("Success");
      }});
  }

 
</script> --> 