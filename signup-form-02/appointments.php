<!DOCTYPE html>
<html lang="en">
<?php
require_once "connect.php";

$getapp = "select * from appointmentso where aadhaar in (select aadhaar from issues where date=CURRENT_DATE())";
$getappstmt = $conn->query($getapp);
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

    <title>Sign Up #2</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body class="">

    <div class="contents order-2 order-md-1">

        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-12 py-5">
                    <h3>Appointments</h3>
                    <p class="mb-4">Todays Appointments.</p>
                    <div class="card-deck">
                        <?php $i = 0;
                        $c = 0;
                        foreach ($getappstmt as $row) : if ($i == 3) : if ($c != 0) {
                                    $c = 0;
                                    echo "</div></div>";
                                } ?>
                                <div class="col-md-12 py-5">
                                    <div class="card-deck">
                                    <?php $i = 0;
                                    $c += 1;
                                endif; ?>

                                    <div class="card border-primary mb-3" style="max-width: 18rem;">
                                        <div class="card-header"><?php echo $row['fname'] . ' ' . $row['lname'] ?></div>
                                        <div class="card-body text-primary">


                                            <?php $getissues = "select * from issues where aadhaar='" . $row['aadhaar'] . "' order by date desc";
                                            $getissuesstmt = $conn->query($getissues);
                                            $f = 1;
                                            foreach ($getissuesstmt as $issues) : if ($f) : ?>
                                                    <h3 class="card-title"><?php echo $issues['issue'] ?></h3>

                                                    <h5 class="card-text">Previus Issues:</h5>
                                            <?php endif;
                                                $f = 0;
                                                echo "<p class='card-text text-primary'>" . $issues['issue'] . '&emsp;&emsp;&emsp;(' . $issues['date'] . ")</p>";
                                            endforeach;
                                            ?>
                                            <hr />
                                            <div><?php echo "Age: " . $row['age'] . "<br/>Gender: " . $row['gender'] ?></div>
                                        </div>
                                    </div>

                                <?php $i += 1;
                            endforeach; ?>
                                    </div>
                                </div>
                    </div>
                    <button onclick="location.href = 'http://localhost/signup-form-02/signup-form-02/prevregister.php';" class="btn btn-outline-success">Back to Records</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>