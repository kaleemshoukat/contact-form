@extends('layouts.master')

@section('content')
    {{-- Make all of the content in the center of page--}}
    <div class="d-flex justify-content-around mt-5 mb-5">
        {{-- Card began--}}
        <div class="col-md-8 card fromCard">
            {{-- Tab of form--}}
            <ul class="tab">
                <li>
                    <a href="javascript:void(0)" id="grayTheme">Gray Theme</a>
                </li>
                <li>
                    <a href="javascript:void(0)" id="redTheme">Red Theme</a>
                </li>
                <li>
                    <a href="javascript:void(0)" id="greenTheme">Green Theme</a>
                </li>
            </ul>
            {{--end tab--}}

            {{--Card Title--}}
            <h3 class="text-center mt-3 formTitle">Contact Form</h3>
            <div class="col-md-12 p-4">
                <form autocomplete="off" enctype="multipart/form-data" id="contactFrom">
                    @csrf
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                        </div>
                        <input id="name" name="name" type="text" placeholder="Name" class="form-control">
                    </div>

                    <div class="input-group mt-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>
                        <input id="email" name="email" type="text" placeholder="Email" class="form-control">
                    </div>

                    <div class="input-group mt-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-envelope-open-text"></i>
                            </span>
                        </div>
                        <input id="subject" name="subject" type="text" placeholder="Subject" class="form-control">
                    </div>

                    <div class="input-group mt-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-phone"></i>
                            </span>
                        </div>
                        <input id="mobileNo" name="mobileNo" type="text" placeholder="03351234567" class="form-control">
                    </div>

                    <div class="input-group mt-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-comment-dots"></i>
                            </span>
                        </div>
                        <textarea id="messages" name="messages" cols="30" rows="4" placeholder="Message" class="form-control"></textarea>
                    </div>
                    <span id="count"></span>

                    <div class="input-group mt-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i id="randNumber">{{ substr(md5(uniqid(mt_rand(), true)) , 0, 5)}}</i>
                            </span>
                        </div>
                        <input id="code" name="code" type="text" placeholder="Enter Code" class="form-control">
                    </div>

                    <div class="mt-4">
                        <input id="termsCheckBox" name="termsCheckBox" type="checkbox">
                        I Accept
                        <a href="#" data-toggle="modal" data-target="#termsConditionsModal">
                            Terms & Conditions.
                        </a>
                    </div>

                    <div class="mt-4">
                        <button type="submit" id="submitContactForm" class="float-right formBtn">
                            <i class="far fa-paper-plane mr-1"></i> Send
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--Terms & Conditions Modal -->
    <div class="modal fade" id="termsConditionsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title formTitle" id="exampleModalLabel">Terms & Conditions</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body termsConditionBody">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                        type and scrambled it to make a type specimen book. It has survived not only five centuries, but
                        also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in
                        the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                        with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                    <p>
                        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
                        Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in
                        their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                    </p>
                    <p>
                        It is a long established fact that a reader will be distracted by the readable content of a page when
                        looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                        of letters, as opposed to using 'Content here, content here', making it look like readable English. Many
                        desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a
                        search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved
                        over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="float-right formBtn" id="AcceptConditionsBtn" data-dismiss="modal">
                        <i class="fas fa-user-check"></i> Accept
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!--Model Popup Thankyou-->
    <div class="modal fade" id="thankYouModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
                </div>
                <div class="modal-body">
                    <div class="thank-you-pop">
                        <img src="{{asset('images/Green-Round-Tick.png')}}" alt="Green-Round-Tick">
                        <h1>Thank You!</h1>
                        <p>Your submission is received and we will contact you soon.</p>
{{--                        <p>Email will not be sent as this is for demo purpose.</p>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Model Popup Error-->
    <div class="modal fade" id="errorModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
                </div>
                <div class="modal-body">
                    <div class="thank-you-pop">
                        <img src="{{asset('images/Red-Cross-Mark.png')}}" alt="Green-Round-Tick">
                        <h1>oops..!</h1>
                        <p>Something went wrong while submitting your request.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Details -->
    <div class="col-md-12 mb-5">
        <div class="text-center formTitle">
            <h2>Features</h2>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-3 card input-group p-3 text-center featureCard">
                <i class="fab fa-laravel fa-5x mb-2"></i>
                <h4 class="formTitle">PHP Laravel JQuery Ajax</h4>
            </div>
            <div class="col-md-3 card input-group p-3 text-center featureCard">
                <i class="fas fa-cogs fa-5x mb-2"></i>
                <h4 class="formTitle">Easy Customization</h4>
            </div>
            <div class="col-md-3 card input-group p-3 text-center featureCard">
                <i class="fas fa-mobile-alt fa-5x mb-2"></i>
                <h4 class="formTitle">Fully Responsive</h4>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-md-3 card input-group p-3 text-center featureCard">
                <i class="fab fa-bootstrap fa-5x mb-2"></i>
                <h4 class="formTitle">Bootstrap 4</h4>
            </div>
            <div class="col-md-3 card input-group p-3 text-center featureCard">
                <i class="fas fa-check-circle fa-5x mb-2"></i>
                <h4 class="formTitle">Jquery Validation</h4>
            </div>
            <div class="col-md-3 card input-group p-3 text-center featureCard">
                <i class="fas fa-toolbox fa-5x mb-2"></i>
                <h4 class="formTitle">Jquery Bootstrap Validation Tooltip</h4>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-md-3 card input-group p-3 text-center featureCard">
                <i class="fas fa-laptop-code fa-5x mb-2"></i>
                <h4 class="formTitle">Clean Code</h4>
            </div>
            <div class="col-md-3 card input-group p-3 text-center featureCard">
                <i class="fas fa-file-pdf fa-5x mb-2"></i>
                <h4 class="formTitle">Well Documented</h4>
            </div>
            <div class="col-md-3 card input-group p-3 text-center featureCard">
                <i class="fas fa-info-circle fa-5x mb-2"></i>
                <h4 class="formTitle">Customer Support</h4>
            </div>
        </div>
    </div>


    <!-- bootstrap spinner-->
    <div class="spinner">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

<!--
    <p>
        Laravel Ajax Contact Form is a jQuery Ajax based form with jquery validations. The validation errors
        are shown in the form of tooltip. Email is sent using gmail SMTP. You can easily integrate the Contact
        form to your existing web page by including some files.
    </p>

    <h4>Themes:</h4>
    It has three themes:
    <ul>
        <li>Gray Theme</li>
        <li>Red Theme</li>
        <li>Green Theme</li>
    </ul>

    <h4>Main Features:</h4>
    <ul>
        <li>Use of <b>jquery, Ajax</b> -No page reloads!</li>
        <li>Use of gmail <b>SMTP</b> to send email</li>
        <li>Reply to option implemented</li>
        <li>Success message popup</li>
        <li>Error message popup</li>
        <li>Accept Terms & condition popup</li>
        <li>Jquery <b>validations</b></li>
        <li>Show validation errors in tooltips</li>
        <li><b>No Database</b> required</li>
        <li><b>CSRF</b> Protection</li>
        <li>Fully Responsive</li>
        <li>Use of bootstrap <b>Spinner</b></li>
        <li>It can be implemented on all versions of laravel</li>
        <li>Built using html5, css3, bootstrap 4, jquery, ajax, laravel 6</li>
    </ul>
    <p>Click <a href="http://codeattain.com/contactForm" target="_blank">Here</a> for <b>Demo</b>.</p>

    <h4>Characteristics</h4>
    <ul>
        <li>Clean Code</li>
        <li>Customer Support</li>
        <li>Well Documented</li>
        <li>Easy Customization</li>
    </ul>

    <h4>Support</h4>
    <p>
        You may email via contact form if you have any questions about this.<br>
        You may refer to our documentation (Help.pdf) on how to integrate this to your website.
    </p>

-->


    <script>

        $("#messages").keyup(function(){
            if ($(this).val().length >= 100){
                $("#count").removeClass("text-primary");
                $("#count").addClass("text-success");
            }
            else{
                $("#count").removeClass("text-success");
                $("#count").addClass("text-primary");
            }
            $("#count").text("Words: "+($(this).val().split(" ").length)+", Characters: " + ($(this).val().length) + " (Min 100 Characters required)");
        });

        $('#AcceptConditionsBtn').click(function () {
            $('#termsCheckBox').attr( 'checked', true);
        });

        $('#submitContactForm').click(function() {
            var randNumber =$("#randNumber").text();
            //custom functions for jquery validator
            $.validator.addMethod("lettersAndSpacesOnly", function(value, element) {
                return this.optional(element) || value == value.match(/^[a-zA-Z ]*$/);
            });
            $.validator.addMethod("checkCode", function(value, element) {
                return this.optional(element) || value == value.match(randNumber);
            });

            //for less than 1200px screen error position adjustment is left
            var position;
            if ($(window).width() <= 1200) {
                position = 'top';
            }
            else {
                position = 'right';
            }

            $("#contactFrom").validate({
            //give errors class name to the errors generated
            errorClass: 'errors',

                rules: {    //set rules
                    name: {
                        required: true,
                        lettersAndSpacesOnly: true,
                        maxlength: 64,
                        minlength: 3
                    },
                    subject: {
                        required: true,
                        minlength: 3
                    },
                    mobileNo: {
                        required: true,
                        digits: true,
                        maxlength: 11,
                        minlength: 11
                    },
                    messages: {
                        required: true,
                        minlength: 100
                    },
                    code: {
                        required: true,
                        checkCode: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    termsCheckBox: "required"
                },
                messages: {  //set messages
                    name: {
                        required: "*Name is required.",
                        lettersAndSpacesOnly: "*Name can contain only alphabets & spaces.",
                        maxlength: "*Name exceeded the maximum length of 64 characters.",
                        minlength: "*Name should be atleat 3 characters."
                    },
                    subject: {
                        required: "*Subject is required.",
                        minlength: "*Subject should be atleat 3 characters."
                    },
                    mobileNo: {
                        required: "*Mobile Number is required.",
                        digits: "*Please enter valid Mobile Number",
                        minlength: "*Mobile number field accept only 11 digits",
                        maxlength: "*Mobile number field accept only 11 digits",
                    },
                    messages: {
                        required: "*Message is required.",
                        minlength: "*Subject should be atleat 100 characters."
                    },
                    code: {
                        required: "*Code is required.",
                        checkCode: "*Code is not correct."
                    },
                    email: {
                        required: "*Email is required.",
                        email: "*Email is not valid."
                    },
                    termsCheckBox: "*Please accept Terms & Conditions."
                },
                tooltip_options: {              //tooltip error placement //default tooltip is at top
                    name: {placement:position},
                    subject: {placement:position},
                    mobileNo: {placement:position},
                    messages: {placement:position},
                    code: {placement:position},
                    email: {placement:position},
                    termsCheckBox: {placement:'bottom'},
                },

                submitHandler: function (form) {
                    $('.spinner').show();

                    var name=$('#name').val();
                    var subject=$('#subject').val();
                    var email=$('#email').val();
                    var mobileNo=$('#mobileNo').val();
                    var messages=$('#messages').val();

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        type: "POST",
                        url: '{{url('/submitContactForm')}}',
                        // processData: false,
                        // contentType: false,
                        // cache: false,
                        dataType: 'json',
                        data: {name:name, subject:subject, email:email, mobileNo:mobileNo, messages:messages},


                        success: function(data) {
                            // data=JSON.parse(data);
                            if(data=='success'){
                                $('.spinner').hide();
                                $('#contactFrom')[0].reset();
                                $('#count').text('');
                                $('#thankYouModal').modal("show");
                                setTimeout(function() {$('#thankYouModal').modal('hide');}, 5000);
                            }
                            else{
                                $('.spinner').hide();
                                $('#errorModal').modal("show");
                            }
                        },
                        error: function(data) {
                            $('.spinner').hide();
                            $('#errorModal').modal("show");
                        }
                    });
                    return false;
                }
            });
        });


        //Theme changing
        $( document ).ready(function() {
            $('#grayTheme').css({"color": "#EB3B5B", "border-bottom": "2px solid #EB3B5B"});
        });

        $('#grayTheme').click(function () {
            $(this).css({"color": "#EB3B5B", "border-bottom": "2px solid #EB3B5B"});
            $('#redTheme').css({"color": "gray", "border-bottom": "1px solid #DBE6F0"});
            $('#greenTheme').css({"color": "gray", "border-bottom": "1px solid #DBE6F0"});

            $('.input-group, .fromCard, #termsCheckBox').css('box-shadow','0 .5rem 1rem rgba(0,1,0,.15)');
            $('.input-group-text > i, .formTitle, .input-group > i').css('color', 'gray');
            $('.formBtn').css('background-color', 'gray');
        });

        $('#redTheme').click(function () {
            $(this).css({"color": "#EB3B5B", "border-bottom": "2px solid #EB3B5B"});
            $('#grayTheme').css({"color": "gray", "border-bottom": "1px solid #DBE6F0"});
            $('#greenTheme').css({"color": "gray", "border-bottom": "1px solid #DBE6F0"});

            $('.input-group, .fromCard, #termsCheckBox').css('box-shadow','0 .5rem 1rem rgba(180,66,70,0.5)');
            $('.input-group-text > i, .formTitle, .input-group > i').css('color', '#F2495F');
            $('.formBtn').css('background-color', '#F2495F');
        });

        $('#greenTheme').click(function () {
            $(this).css({"color": "#EB3B5B", "border-bottom": "2px solid #EB3B5B"});
            $('#grayTheme').css({"color": "gray", "border-bottom": "1px solid #DBE6F0"});
            $('#redTheme').css({"color": "gray", "border-bottom": "1px solid #DBE6F0"});

            $('.input-group, .fromCard, #termsCheckBox').css('box-shadow','0 .5rem 1rem rgba(35,150,70,0.42)');
            $('.input-group-text > i, .formTitle, .input-group > i').css('color', '#0AC083');
            $('.formBtn').css('background-color', '#0AC083');
        });
    </script>
@endsection
