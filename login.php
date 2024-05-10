<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="DynamicLayers">

    <title>Login</title>

    <?php include("./includes/link.php"); ?>
</head>

<body>
    <?php include("./includes/header.php"); ?>


   <div class="container-fluid set-bg-lo">
   <section class="contact_section bd-bottom padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-7 xs-padding sm-regi ">
                   <div>
                    <img src="./img/logi.png" class="sm-width" alt="@dued">
                   </div>
                </div>
                <div class="col-sm-6 col-lg-5 xs-padding">
                    <div class="contact_form login-form">
                        <h2 class="text-center text-white fw-bolder">Login Here</h2>
                        <p class="text-white text-center">Welcome to our platform! Please login below to access your account.</p>
                        <form action="#" method="post" class="form-horizontal">
                           
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input id="number" name="number" class="form-control" placeholder="UserName" required></input>
                                </div>
                                <div class="col-sm-12 mt-3">
                                    <input id="Password" name="address" class="form-control" placeholder="Password" required></input>
                                </div>
                               
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 d-flex justify-content-between ">
                                    <button id="submit"  class="button_1 bbb-login" type="submit">Login</button>
                                   
                                </div>
                            </div>
                            <div id="form-messages" class="alert" role="alert"></div>
                        </form>
                        <div class="col-sm-12 d-flex set-login ">
                                    <div class="col-lg-6 col-12 my-2">
                                    <a href="./registerNow.php"><button id="submit"  class="button_1 bbb-login" type="submit">Sign Up</button></a>
                                    </div>
                                    <div class="col-lg-6 col-12 my-2">
                                    <a href="./forget.php"><button id="submit"  class="button_1 btn-forget bbb-login" type="submit">Forget Password</button></a>
                                    </div>
                                </div>
                        
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