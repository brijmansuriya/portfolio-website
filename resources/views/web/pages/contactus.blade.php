@extends('web.layout.master')
@section('content')
    <div role="main" class="main">
        @include('web.includes.topbar');
        <div class="container">
            <div class="row py-4">
                <div class="col-lg-6">
                    <h2 class="font-weight-bold text-8 mt-2 mb-0">Contact Us</h2>
                    <p class="mb-4">Feel free to ask for details, don't save any questions!</p>
     
                    <form class="contact-form" action="inquiry_save.php" method="POST">


                        <div class="form-row">
                            <div class="form-group col">

                                <input type="hidden" name="formkey" value="" />
                                <input type="hidden" name="fmrkey" value="" />
                                <label class="mb-1 text-2">Full Name</label>

                                <input type="text" value="" data-msg-required="Please enter your name."
                                    maxlength="100" class="form-control text-3 h-auto py-2"
                                    name="name_" required>
                            </div>
                            <div class="form-group col">
                                <label class="mb-1 text-2">Email Address</label>
                                <input type="email" value="" data-msg-required="Please enter your email address."
                                    data-msg-email="Please enter a valid email address." maxlength="100"
                                    class="form-control text-3 h-auto py-2" name="email_" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label class="mb-1 text-2">Phone</label>
                                <input type="text" value="" data-msg-required="Please enter the Phone."
                                    maxlength="100" class="form-control text-3 h-auto py-2"
                                    name="phone_" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label class="mb-1 text-2">Message</label>
                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="1"
                                    class="form-control text-3 h-auto py-2" name="message_" required></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <input type="submit" value="Send Message" class="btn btn-primary btn-modern"
                                    data-loading-text="Loading...">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
                        <h4 class="mt-2 mb-1">Our <strong>Office</strong></h4>
                        <ul class="list list-icons list-icons-style-2 mt-2">
                            <li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Address : </strong>
                                Ahemdabad - 360 311 Gujrat, India.
                            </li>
                            <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone : </strong><a
                                    href="tel:7817817575">+91 7817817575</a><br>
                                &nbsp;<a href="tel:8980893936" class="ml-5">+91 8980893936</a></li>
                            <li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email : </strong>
                                <a href="mailto:info@test.com">info@test.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="950">
                        <h4 class="pt-5">Business <strong>Hours</strong></h4>
                        <ul class="list list-icons list-dark mt-2">
                            <li><i class="far fa-clock top-6"></i> Monday - Friday - 9am to 5pm</li>
                            <li><i class="far fa-clock top-6"></i> Saturday - 9am to 2pm</li>
                            <li><i class="far fa-clock top-6"></i> Sunday - Closed</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d296039.74322448444!2d72.58652459873574!3d23.047343774216582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1671270466886!5m2!1sen!2sin"
                width="100%" height="450" style="border:0;margin-bottom: -56px;" allowfullscreen="" loading="lazy"
                class="mt-5"></iframe>

        </div>
    </div>
@endsection
