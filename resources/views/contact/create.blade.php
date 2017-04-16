@extends('template')

@section('title','Contact')

@section('content')
    
 	<a name="alertValidate"></a>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Create Contact</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" action="#" method="POST" role="form" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name" id="name" value="{{ old('name') }}">
                                <p class="help-block text-danger" id="nameHelp"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="email">Email Address</label>
                                <input type="text" class="form-control" placeholder="Email Address" name="email" id="email" value="{{ old('email') }}">
                                <p class="help-block text-danger" id="emailHelp"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="phone">Phone Number</label>
                                <input type="text" class="form-control" placeholder="Phone Number" name="phone" id="phone" value="{{ old('phone') }}">
                                <p class="help-block text-danger" id="phoneHelp"></p>
                            </div>
                        </div>
                        {{csrf_field()}}
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="fsorm-group col-xs-12 text-center">
                                <button type="button" class="btn btn-primary btn-lg" id="submitBtn" onclick="validation_form()">Send</button>
                               <!--  <button type="button" class="btn btn-primary btn-lg" onclick="js_clear()">Clear</button> -->
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
            // var name = document.getElementById("name").value;
            // var email = document.getElementById("email").value;
            // var phone = document.getElementById("phone").value;

            // if(name == "" || email == "" || phone == ""){
            //     if(name == "")
            //         document.getElementById("nameHelp").innerHTML = "Please inform your name correctly.";
            //     else
            //         document.getElementById("nameHelp").innerHTML = "";

            //     if(email == "")
            //         document.getElementById("emailHelp").innerHTML = "Please inform your email correctly.";
            //     else 
            //         document.getElementById("emailHelp").innerHTML = "";

            //     if(phone == "")
            //         document.getElementById("phoneHelp").innerHTML = "Please inform your phone-number correctly.";
            //     else
            //         document.getElementById("phoneHelp").innerHTML = "";
            // }
                
            // else{
                document.getElementById("contactForm").action = "/contacts";
                document.getElementById("submitBtn").type = "submit";
                document.getElementById("contactForm").submit();
            //}
                

        }

    </script>
@endsection