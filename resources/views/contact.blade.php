@extends('template')

@section('title','Contact')

@section('content')
 	<section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contact Me</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" action="/contact" method="GET" role="form" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name" id="name">
                                <p class="help-block text-danger" id="nameHelp"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" name="email" id="email">
                                <p class="help-block text-danger" id="emailHelp"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="phone">Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" name="phone" id="phone">
                                <p class="help-block text-danger" id="phoneHelp"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="fsorm-group col-xs-12 text-center">
                                <button type="button" class="btn btn-success btn-lg" id="submitBtn" onclick="validation_form()">Send</button>
                                <button type="button" class="btn btn-primary btn-lg" onclick="js_clear()">Clear</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        function js_clear(){
            document.location = "/contact/clearSession";
        }

        function validation_form(){
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var phone = document.getElementById("phone").value;

            if(name == "" || email == "" || phone == ""){
                // alert("Please inform correctly.");
                if(name == "")
                    document.getElementById("nameHelp").innerHTML = "Please inform your name correctly.";
                else
                    document.getElementById("nameHelp").innerHTML = "";

                if(email == "")
                    document.getElementById("emailHelp").innerHTML = "Please inform your email correctly.";
                else 
                    document.getElementById("emailHelp").innerHTML = "";

                if(phone == "")
                    document.getElementById("phoneHelp").innerHTML = "Please inform your phone-number correctly.";
                else
                    document.getElementById("phoneHelp").innerHTML = "";
            }
                
            else{
                document.getElementById("contactForm").action = "/contact/getText";
                document.getElementById("submitBtn").type = "submit";
                document.getElementById("contactForm").submit();
            }
                

        }
    </script>
@endsection