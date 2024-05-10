<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="DynamicLayers">

    <title>Contact Us</title>

    <?php include("./includes/link.php"); ?>
</head>

<body>
    <?php include("./includes/header.php"); ?>

<div class="container-fluid">
    
    <section class="contact_section bd-bottom padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 xs-padding sm-regi">
                   <div>
                    <img src="./img/register.png" alt="@dued">
                   </div>
                </div>
                <div class="col-sm-6 xs-padding">
                    <div class="contact_form">
                        <h2>Register Here</h2>
                        <p>Registering signifies intent, initiating personalized experiences, connections, and opportunities within a platform or website.</p>
                        <form action="#" method="post" class="form-horizontal">
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input id="number" name="number" class="form-control" placeholder="Phone Number" required></input>
                                </div>
                                <div class="col-sm-12 mt-3">
                                    <input id="address" name="address" class="form-control" placeholder="Address" required></input>
                                </div>
                               
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <button id="submit"  class="button_1" type="submit">Register</button>
                                </div>
                            </div>
                            <div id="form-messages" class="alert" role="alert"></div>
                        </form>
                    </div><!-- /.contact_form -->
                </div>
            </div>
        </div>
    </section><!-- /.Contact Section -->
</div>

   
    <?php include("./includes/footer.php"); ?>
   
    <?php include("./includes/script.php"); ?>

</body>

</html>