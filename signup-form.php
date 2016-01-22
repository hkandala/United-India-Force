<i class="mdi-navigation-arrow-back"></i>
<h2>Register</h2>
<form class="signup-form" action="signupCheck.php" method="post">
    <div class="col six">
        <div class="input-field">
            <i class="mdi-action-account-circle prefix"></i>
            <input type="text" name="name" id="name" class="validate"/>
            <label for="name">Full Name</label>
        </div>
    </div>
    <div class="col six">
        <div class="input-field">
            <i class="mdi-communication-email prefix"></i>
            <input type="email" name="email" id="email" class="validate"/>
            <label for="email">Email ID</label>
        </div>
    </div>
    <div class="col six">
        <div class="input-field">
            <i class="mdi-action-lock prefix"></i>
            <input type="password" name="password" id="password" class="validate"/>
            <label for="password">Password</label>
        </div>
    </div>
    <div class="col six">
        <div class="input-field">
            <i class="mdi-action-lock prefix"></i>
            <input type="password" name="confirmpassword" id="confirmpassword" class="validate"/>
            <label for="confirmpassword">Confirm Password</label>
        </div>
    </div>
    <div class="col six">
        <div class="input-field">
            <i class="mdi-communication-message prefix"></i>
            <input type="text" name="age" id="age" class="validate"/>
            <label for="age">Age</label>
        </div>
    </div>
    <div class="col six">
        <div class="input-field">
            <i class="mdi-communication-phone prefix"></i>
            <input type="text" name="mobile" id="mobile" class="validate"/>
            <label for="mobile">Phone Number(+91)</label>
        </div>
    </div>
    <div class="col six">
        <div class="input-field">
            <i class="mdi-action-group-work prefix"></i>
            <input type="text" name="profession" id="profession" class="validate"/>
            <label for="profession">Profession</label>
        </div>
    </div>
    <div class="col six">
        <div class="input-field">
            <i class="mdi-social-location-city prefix"></i>
            <input type="text" name="city" id="city" class="validate"/>
            <label for="city">City</label>
        </div>
    </div>
    <div class="col six">
        <div class="input-field">
            <i class="mdi-maps-pin-drop prefix"></i>
            <input type="text" name="pincode" id="pincode" class="validate"/>
            <label for="pincode">Pincode</label>
        </div>
    </div>
    <div class="col six">
        <div class="loadingButton">
            <input type="submit" class="btn-large" value="Sign Up"/>
            <div class="preloader-wrapper small active">
                <div class="spinner-layer spinner-green-only">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p class="feedback"></p>
        </div>
    </div>
</form>

<script>
    $(document).ready(function () {
        $('.signup-block .mdi-navigation-arrow-back').click(function () {
            $('#login .modal-content .login-block').show();
            $('#login .progress').hide();
            $('#login .modal-content .signup-block').hide();
        });
        $(".signup-form").submit(function(e) {
            e.preventDefault();
            return signUpValidate();
        });

        $(".signup-block #name").blur(function () {
            if(!nameValidate()) {
                $(".signup-block #name").addClass("invalid").removeClass("valid");
            } else {
                $(".signup-block #name").addClass("valid").removeClass("invalid");
            }
        });
        $(".signup-block #email").blur(function () {
            if(!emailValidate()) {
                $(".signup-block #email").addClass("invalid").removeClass("valid");
            } else {
                $(".signup-block #email").addClass("valid").removeClass("invalid");
            }
        });
        $(".signup-block #password").blur(function () {
            if(!passwordValidate()) {
                $(".signup-block #password").addClass("invalid").removeClass("valid");
            } else {
                $(".signup-block #password").addClass("valid").removeClass("invalid");
            }
        });
        $(".signup-block #confirmpassword").blur(function () {
            if(!confirmPasswordValidate()) {
                $(".signup-block #confirmpassword").addClass("invalid").removeClass("valid");
            } else {
                $(".signup-block #confirmpassword").addClass("valid").removeClass("invalid");
            }
        });
        $(".signup-block #age").blur(function () {
            if(!ageValidate()) {
                $(".signup-block #age").addClass("invalid").removeClass("valid");
            } else {
                $(".signup-block #age").addClass("valid").removeClass("invalid");
            }
        });
        $(".signup-block #mobile").blur(function () {
            if(!mobileValidate()) {
                $(".signup-block #mobile").addClass("invalid").removeClass("valid");
            } else {
                $(".signup-block #mobile").addClass("valid").removeClass("invalid");
            }
        });
        $(".signup-block #profession").blur(function () {
            if(!professionValidate()) {
                $(".signup-block #profession").addClass("invalid").removeClass("valid");
            } else {
                $(".signup-block #profession").addClass("valid").removeClass("invalid");
            }
        });
        $(".signup-block #city").blur(function () {
            if(!cityValidate()) {
                $(".signup-block #city").addClass("invalid").removeClass("valid");
            } else {
                $(".signup-block #city").addClass("valid").removeClass("invalid");
            }
        });
        $(".signup-block #pincode").blur(function () {
            if(!pincodeValidate()) {
                $(".signup-block #pincode").addClass("invalid").removeClass("valid");
            } else {
                $(".signup-block #pincode").addClass("valid").removeClass("invalid");
            }
        });
    });

    function nameValidate() {
        var letters = /^[a-z ,.'-]+$/i;
        var name = $(".signup-block #name").val();
        return letters.test(name);
    }

    function emailValidate() {
        var mail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,4}))$/;
        var em = $(".signup-block #email").val();
        return mail.test(em);
    }

    function passwordValidate() {
        var pass = $(".signup-block #password").val();
        return (pass.length >= 5);
    }

    function confirmPasswordValidate() {
        var pass = $(".signup-block #confirmpassword").val();
        if (pass.length >= 5) {
            return (pass === $(".signup-block #password").val());
        } else {
            return false;
        }
    }

    function ageValidate() {
        var numbers = /[^0-9]/;
        var cont = $(".signup-block #age").val();
        return (!numbers.test(cont));
    }

    function mobileValidate() {
        var numbers = /[^0-9]/;
        var cont = $(".signup-block #mobile").val();
        return (cont.length == 10 && !numbers.test(cont) && cont.charAt(0) != "0");
    }

    function professionValidate() {
        var pass = $(".signup-block #profession").val();
        return (pass.length >= 2);
    }

    function cityValidate() {
        var pass = $(".signup-block #city").val();
        return (pass.length >= 2);
    }

    function pincodeValidate() {
        var numbers = /[^0-9]/;
        var cont = $(".signup-block #pincode").val();
        return (cont.length == 6 && !numbers.test(cont));
    }

    function signUpValidate () {
        if(!nameValidate()) {
            $(".signup-block #name").addClass("invalid").removeClass("valid");
        }
        if(!emailValidate()) {
            $(".signup-block #email").addClass("invalid").removeClass("valid");
        }
        if(!passwordValidate()) {
            $(".signup-block #password").addClass("invalid").removeClass("valid");
        }
        if(!confirmPasswordValidate()) {
            $(".signup-block #confirmpassword").addClass("invalid").removeClass("valid");
        }
        if(!ageValidate()) {
            $(".signup-block #age").addClass("invalid").removeClass("valid");
        }
        if(!mobileValidate()) {
            $(".signup-block #mobile").addClass("invalid").removeClass("valid");
        }
        if(!professionValidate()) {
            $(".signup-block #profession").addClass("invalid").removeClass("valid");
        }
        if(!cityValidate()) {
            $(".signup-block #city").addClass("invalid").removeClass("valid");
        }
        if(!pincodeValidate()) {
            $(".signup-block #pincode").addClass("invalid").removeClass("valid");
        }
        if(nameValidate() && emailValidate() && passwordValidate() && confirmPasswordValidate() && ageValidate() && mobileValidate() && professionValidate() && cityValidate() && pincodeValidate()) {
            var signUpObj = {
                name: $(".signup-block #name").val(),
                email: $(".signup-block #email").val(),
                password: $(".signup-block #password").val(),
                age: $(".signup-block #age").val(),
                mobile: $(".signup-block #mobile").val(),
                profession: $(".signup-block #profession").val(),
                city: $(".signup-block #city").val(),
                pincode: $(".signup-block #pincode").val()
            };
            $(".signup-form .loadingButton .preloader-wrapper").fadeIn('fast');
            $.post('signupCheck.php', signUpObj, function(response) {
                if(response == "You have successfully registered") {
                    $(".signup-form .loadingButton .preloader-wrapper").fadeOut('fast');
                    $('.signup-form .feedback').html("You have successfully registered.");
                    setTimeout(function () {
                        $('#login .modal-content .login-block').show();
                        $('#login .progress').hide();
                        $('#login .modal-content .signup-block').hide();
                    }, 1000);
                } else if(response != '') {
                    $(".signup-form .loadingButton .preloader-wrapper").fadeOut('fast');
                    $('.signup-form .feedback').html(response);
                } else {
                    $(".signup-form .loadingButton .preloader-wrapper").fadeOut('fast');
                    $('.signup-form .feedback').html('Unknown Error, Please try again');
                }
            }).fail(function() {
                $(".signup-form .loadingButton .preloader-wrapper").fadeOut('fast');
                $('.signup-form .feedback').html('Unable to connect to the network');
            });
        }

        return (nameValidate() && emailValidate() && passwordValidate() && confirmPasswordValidate() && ageValidate() && mobileValidate() && professionValidate() && cityValidate() && pincodeValidate());
    }
</script>