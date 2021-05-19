@extends('layouts.master')

@section('content')
    {{-- Make all of the content in the center of page--}}
    <div class="d-flex justify-content-around mt-5">
        {{-- Card began--}}
        <div class="col-md-8 card fromCard">
            {{-- Tab of form--}}
            <ul class="tab">
                <li>
                    <a @if(request()->is('/')) class="active" @endif href="{{url('/')}}">Gray</a>
                </li>
                <li>
                    <a href="#">Red</a>
                </li>
                <li>
                    <a href="#">Green</a>
                </li>
                <li>
                    <a href="#">Corner Rounded</a>
                </li>
                <li>
                    <a href="#">Corner Square</a>
                </li>
            </ul>
            {{--end tab--}}

            {{--Card Title--}}
            <h3 class="text-center mt-3 formTitle">Contact Form</h3>
            <div class="col-md-12 p-4">
                <form method="POST" action="{{url('/submitContactForm')}}" enctype="multipart/form-data" id="contactFrom">
                    @csrf
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                        </div>
                        <input id="name" name="name" type="text" placeholder="Name" class="form-control">
                    </div>
                    <span id="nameError" class="inputError"></span>

                    <div class="input-group mt-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>
                        <input id="email" name="email" type="text" placeholder="Email" class="form-control">
                    </div>
                    <span id="emailError" class="inputError"></span>

                    <div class="input-group mt-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-envelope-open-text"></i>
                            </span>
                        </div>
                        <input id="subject" name="subject" type="text" placeholder="Subject" class="form-control">
                    </div>
                    <span id="subjectError" class="inputError"></span>

                    <div class="input-group mt-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-phone"></i>
                            </span>
                        </div>
                        <input id="mobileNo" name="mobileNo" type="text" placeholder="03351234567" class="form-control">
                    </div>
                    <span id="mobileNoError" class="inputError"></span>

                    <div class="input-group mt-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-comment-dots"></i>
                            </span>
                        </div>
                        <textarea id="message" name="message" cols="30" rows="4" placeholder="Message" class="form-control"></textarea>
                    </div>
                    <span id="count"></span>
                    <span id="messageError" class="inputError"></span>

                    <div class="input-group mt-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i id="randNumber">{{ substr(md5(uniqid(mt_rand(), true)) , 0, 5)}}</i>
                            </span>
                        </div>
                        <input id="code" name="code" type="text" placeholder="Enter Code" class="form-control">
                    </div>
                    <span id="codeError" class="inputError"></span>

                    <div class="mt-4">
                        <input id="termsCheckBox" name="termsCheckBox" type="checkbox">
                        I Accept
                        <a href="#" data-toggle="modal" data-target="#termsConditionsModal">
                            Terms & Conditions.
                        </a>
                    </div>
                    <span id="termsCheckBoxError" class="inputError"></span>

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

    <script>
        $("#message").keyup(function(){
            if ($(this).val().length > 100){
                $("#count").removeClass("text-primary");
                $("#count").addClass("text-success");
            }
            else{
                $("#count").removeClass("text-success");
                $("#count").addClass("text-primary");
            }
            $("#count").text("Words: "+($(this).val().split(" ").length)+" Characters: " + ($(this).val().length) + " /100");
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

            $("#contactFrom").validate({
                //give errors class name to the errors generated
                errorClass: 'errors',
                //set rules
                rules: {
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
                    message: {
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
                messages: {
                    name: {
                        required: "*Name is required.",
                        lettersAndSpacesOnly: "*Name can contain only alphabets.",
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
                    message: {
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

                //to set the custom location of errors otherwise they appear on default location
                errorPlacement: function(error, element) {
                    if (element.attr("name") == "name" ) {
                        error.appendTo("#nameError");
                    }
                    else if (element.attr("name") == "email" ) {
                        error.appendTo("#emailError");
                    }
                    else if (element.attr("name") == "subject" ) {
                        error.appendTo("#subjectError");
                    }
                    else if (element.attr("name") == "mobileNo" ) {
                        error.appendTo("#mobileNoError");
                    }
                    else if (element.attr("name") == "message" ) {
                        error.appendTo("#messageError");
                    }
                    else if (element.attr("name") == "code" ) {
                        error.appendTo("#codeError");
                    }
                    else if (element.attr("name") == "termsCheckBox" ) {
                        error.appendTo("#termsCheckBoxError");
                    }
                },
                submitHandler: function (form) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        type: "POST",
                        url: "{{url('/submitContactForm')}}",
                        data: new FormData(),

                        success: function() {
                            alert('works');
                        },
                        error: function() {
                            alert('failed');
                        }
                    });
                    return false;
                }
            });
        });
    </script>
@endsection
