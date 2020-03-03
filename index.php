<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Report a Crime!</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">

<?php if((isset($_SESSION['validlogin'])&&$_SESSION['validlogin']=="failure")) { ?> /* Your (php) way of checking that the form has been submitted */

            $(function() {                       // On DOM ready
                $('#myModal').modal('show');     // Show the modal
            });

<?php unset($_SESSION['validlogin']);} ?>                                    /* /form has been submitted */

        </script>
          <script type="text/javascript">

            <?php if((isset($_SESSION['validregister']))) { ?> /* Your (php) way of checking that the form has been submitted */

            $(function() {                       // On DOM ready
                $('#myModal').modal('show');     // Show the modal
            });


<?php unset($_SESSION['validregister']);} ?>                                    /* /form has been submitted */

        </script>
        
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <?php
        require('commons/navigation.php');
    ?>
    <div class="container" style="margin: 20px auto">
    <!-- Heading Row -->
        <div class="row">
            <div class="col-md-4" style="text-align: center">
                <img src="img/rplogo.jpg" alt="h"/>
                <h1>Welcome</h1>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-8">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="width: 100%">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                      </ol>

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
                            <div class="item active">
                              <img src="img/being1.jpg" alt="...">
                            </div>
                            <div class="item">
                              <img src="img/img10.jpg" alt="...">
                            </div>
                            <div class="item">
                              <img src="img/img2.jpg" alt="...">
                            </div>
                        
                     </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  </a>
                </div>
            </div>
            <!-- /.col-md-8 -->
        </div>
    </div>
        <!-- /.row -->



    <!-- Page Content -->
    <div class="container">
        <div class="jumbotron">
            <div class="row" style="text-align: center">
                <h1>Online Crime Reporting</h1>
                <p><a class="btn btn-primary btn-lg">Learn more</a></p>
            </div>
        </div>
    </div>
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12" style="text-align:center">
                <h1 class="page-header">
                    Choose the Category for Report Submission
                </h1>
            </div>
            <div class="col-md-4" style="border: 2px solid #D9534F; padding: 0px; border-radius: 5px" >
                <div class="panel panel-default" style="margin: 0px">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Victim</h4>
                    </div>
                    <div class="panel-body">
                        <p>Victim text</p>
                        <?php if(isset($_SESSION['loggedin'])){  ?>
                        <a href="victim.php" class="btn btn-default"  style="background-color: #D9534F;color: white">Report</a>
                        <?php } else { ?>
                         <a href="#" id="victimbutton" class="btn btn-default"  style="background-color: #D9534F;color: white">Report</a>
                             <script>
                                 $( "#victimbutton").click(function() {
                                    $('#myModal').modal('show');
                            });
                            </script>
                         <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="border: 2px solid #57B157; padding: 0px; border-radius: 5px">
                <div class="panel panel-default" style="margin: 0px">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> Witness</h4>
                    </div>
                    <div class="panel-body">
                        <p>Witness text</p>
                        <?php if(isset($_SESSION['loggedin'])){  ?>
                        <a href="witness.php" class="btn btn-default" style="background-color: #57B157; color: white">Report</a>
                        <?php } else { ?>
                         <a href="#" id="witnessbutton" class="btn btn-default" style="background-color: #57B157; color: white">Report</a>
                         <script>
                                 $( "#witnessbutton").click(function() {
                                    $('#myModal').modal('show');
                            });
                            </script>
                         <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4"  style="border: 2px solid #296394; padding: 0px; border-radius: 5px;">
                <div class="panel panel-default" style="margin: 0px">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i> Threatened Victim</h4>
                    </div>
                    <div class="panel-body">
                        <p>Threatened victim text</p>
                        <?php if(isset($_SESSION['loggedin'])){  ?>
                        <a href="tvictim.php" class="btn btn-default" style="background-color: #296394;color: white">Report</a>
                         <?php } else { ?>
                         <a href="#" id="threatenedvictimbutton"class="btn btn-default" style="background-color: #296394;color: white">Report</a>
                         <script>
                                 $( "#threatenedvictimbutton").click(function() {
                                    $('#myModal').modal('show');
                            });
                            </script>
                         <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Modern Business Features</h2>
            </div>
            <div class="col-md-6">
                <p>Bootstrap</p>
                <ul>
                    <li><strong></strong>
                    </li>
                    <li>jQuery v1.11.0</li>
                    <li>Font Awesome v4.1.0</li>
                    <li>Working PHP contact form with validation</li>
                    <li>Unstyled page elements for easy customization</li>
                    <li>HTML pages</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="http://placehold.it/700x450" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="#">Call to Action</a>
                </div>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Rajasthan Police 2015</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
    <script>
    function checkPass()
    {
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match.
        //Set the color to the good color and inform
        //the user that they have entered the correct password
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
        }
    }  
</script>
</body>

</html>
