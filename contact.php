<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="DynamicLayers">

    <title>Contact Us</title>

    <?php include ("./includes/link.php"); ?>
</head>

<body>
    <?php include ("./includes/header.php"); ?>

    <section class="page_header padding">
        <div class="display-table">
            <div class="table-cell">
                <div class="container">
                    <div class="page_content">
                        <h2>Contact <span>With Us</span></h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Contact</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Page Header -->

    <section class="contact_section bd-bottom padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 xs-padding">
                    <div class="contact_info">
                        <h2>Contact Information</h2>
                        <p>
                            Please provide your contact information</p>
                        <ul>
                            <li><i class="ti-mobile"></i><span>Call Us:</span><a class="text-dark"
                                    href="tel:+91 9123146478">+91 9123146478</a></li>
                            <li><i class="ti-envelope"></i><span>Mail:</span> <a class="text-dark" href="mailto:
                            support@angelonealgo.net">support@angelonealgo.net</a>
                            </li>
                            <li class="d-flex">
                                <div>
                                    <i class="ti-location-arrow"></i>
                                </div>
                                <div>
                                    <span>Address:</span>ABB Building, IT Park , Industrial Estate,4th Cross Road, Chord
                                    Rd, Rajajinagar, Bengaluru, Karnataka 560010
                            </li>
                    </div>
                    </ul>
                </div>

                <div class="col-sm-6 xs-padding">
                    <div class="contact_form">
                        <h2>Send Us Message</h2>
                        <p>Please don’t hesitate to chat with me just drop a line.</p>
                        <form action="./formhandler.php" method="post" class="form-horizontal">
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Name"
                                        required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email"
                                        required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="text" id="number" name="number" class="form-control"
                                        placeholder="Phone Number" required></input>
                                </div>
                                <div class="col-sm-12 mt-3">
                                    <textarea id="message" name="message" class="form-control" placeholder="Message"
                                        required></textarea>
                                </div>
                                <div class="col-sm-12 mt-3">
                                    <div class="outer-box">
                                        <div class="inner-box1 d-flex justify-content-around  align-items-center ">
                                            <span class="text-primary">Enter Captcha:-</span>
                                            <div class="captcha-box-in d-flex align-items-center ">
                                                <div class="in-colo">
                                                    <span id="first"></span>
                                                    <span id="plus">+</span>
                                                    <span id="second"></span>
                                                </div>
                                                <div class="set-pa "> <a id="reffffff"><i
                                                            class="fa-solid fa-arrows-rotate"></i></a></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-3">
                                    <input type="text" id="num" placeholder="Enter Captcha Here" class="set-sum"
                                        onkeyup="myFunction()" />
                                </div>


                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <button id="submit" name="submit" onclick="return valdate()" class="button_1"
                                        type="submit">Send Message</button>
                                </div>
                            </div>
                            <div id="form-messages" class="alert" role="alert"></div>
                        </form>
                    </div><!-- /.contact_form -->
                </div>
            </div>
        </div>
    </section><!-- /.Contact Section -->
    <!-- map start -->
    <div class="container-fluid my-lg-5 my-2">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31101.18057383954!2d77.53285848018383!3d12.994378705747055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3df0226ab33d%3A0xbbee72dccc9ab3a9!2sABB%20India%20Limited!5e0!3m2!1sen!2sin!4v1715258535225!5m2!1sen!2sin"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- map end -->


    <?php include ("./includes/footer.php"); ?>
    <script>


        var firstNu = document.getElementById("first");
        var num1 = (firstNu.innerHTML = Math.floor(Math.random() * 100));
      
        var secNum = document.getElementById("second");
        var num2 = (secNum.innerHTML = Math.floor(Math.random() * 10));
      
        console.log("Before Replacing num1="+num1+"num2="+num2);

        // Create a function to update the value of the variable
        // function refresh() {
        //     var num1 = (firstNu.innerHTML = Math.floor(Math.random() * 100));
        //     alert(num1);
        //     var num2 = (secNum.innerHTML = Math.floor(Math.random() * 100));
        //     alert(num2);

        // }



        // When the button is clicked, the changeVariable function will be called, which will update the value of myVariable to 10.

        function myFunction() {
            var userInput = document.getElementById("num");

            // var inputValu = parseInt(userInput.value);
            var inputValu = userInput.value;

            console.log(typeof inputValu);
            return inputValu;
        }


        console.log("type of inputValu", typeof inputValu);

        var storeRandomValue = parseInt(num1) + parseInt(num2);
        console.log("added", storeRandomValue);


        function valdate() {
            var Name = document.getElementById("name").value;
            var Email = document.getElementById("email").value;
            var Number = document.getElementById("number").value;
            var Message = document.getElementById("message").value;
            var namePattern = /^[A-Za-z\s\-]+$/;
            var phoneRegex = /^\d{10}$/;
            var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;


            var dued = myFunction();
            var clickRefreshbtn = document.getElementById("reffffff");
            if (clickRefreshbtn.addEventListener("click", () => {
                var num1Rep = Math.floor(Math.random() * 100);
                var num2Rep = Math.floor(Math.random() * 100);

                firstNu.innerHTML = num1Rep;
                secNum.innerHTML = num2Rep;

                num1 = num1Rep;
                num2 = num2Rep;
                var addedRefreshButton = parseInt(num1) + parseInt(num2);
                console.log("After Replacing num1="+num1+"num2="+num2);
                console.log("Addition of Refresh Number="+addedRefreshButton);
                console.log("type of refresh 1 function",typeof num1);
                console.log("type of refresh 2 function",typeof num2);
                return addedRefreshButton;
            }));

            console.log("type of after replacing inputValu"+typeof inputValu);
            if (!Name) {
                alert("Please Enter Name");
                return false;
            } else if (!namePattern.test(Name)) {
                alert("Enter Only Alphabets Name");
                return false;
            } else if (!Email) {
                alert("Enter Email Id");
                return false;
            } else if (!emailRegex.test(Email)) {
                alert("Enter Valid Email");
                return false;
            } else if (!Number) {
                alert("Please Enter Phone Number");
                return false;
            } else if (!phoneRegex.test(Number)) {
                alert("Enter Correct Number");
                return false;
            } else if (!Message) {
                alert("Enter Message");
                return false;
            } else if (!(Message.length > 3)) {
                alert("Please Enter More Than 3 Letters");
                return false;
            } else if (!dued) {
                alert("Please Enter Captcha");
                return false;
            } else if (namePattern.test(dued)) {
                alert("Enter Only Number");
                return false;
            }
            else if (dued != storeRandomValue || dued !=addedRefreshButton) {
                alert("Enter Correct Captcha");
                return false;
            }
        }
    </script>

    <?php include ("./includes/script.php"); ?>

</body>

</html>