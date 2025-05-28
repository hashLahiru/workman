@extends('layouts.app')
@section('content')
    <!--=====================================-->
    <!--=            Banner Start           =-->
    <!--=====================================-->
    <section class="main-banner-wrap-layout1 bg-dark-overlay bg-common minus-mgt-90" data-bg-image="img/Contact-us-HB.jpg">
        <div class="container">
            <div class="main-banner-box-layout1">
                <h1 class="ah-headline item-title">
                    <span class="ah-words-wrapper">
                        <b class="is-visible">
                            Have <span style="color: #f79f1f">Questions? </span> Let's Talk
                        </b>
                    </span>
                </h1>
                <div class="item-subtitle">
                    We connect you to hundred of clients looking for your talent.
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding-equal-70">
        <div class="container">
            <div class="contact-page-box-layout1 light-shadow-bg">
                <div class="light-box-content">
                    <div class="row">
                        <div class="col-md-6 bgPrimary" style="padding: 20px; border-radius: 4%;">
                            <div class="contact-form-box">
                                <h3 class="item-title mt-4">Drop us a line</h3>
                                <form method="POST" action="{{ route('send.contact') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" placeholder="Name *" class="form-control" name="name"
                                            data-error="Name field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" placeholder="Email *" class="form-control" name="email"
                                            data-error="email field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Subject *" class="form-control" name="subject"
                                            data-error="Subject field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <textarea placeholder="Message *" class="textarea form-control" name="message" id="form-message" rows="6"
                                            cols="20" data-error="Message field is required" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group form-check d-flex align-items-center mb-3">
                                        <input type="checkbox" class="form-check-input mb-0 me-2 mt-0" id="privacyPolicy"
                                            name="privacy_policy" required>
                                        <label class="form-check-label mb-0 mt-0" for="privacyPolicy">
                                            I agree to the privacy policy
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="submit-btn"
                                            style="background-color: black; border-radius: 5px;">SUBMIT</button>
                                    </div>
                                    <div class="form-response"></div>
                                </form>
                            </div>
                            @if (session('success'))
                                <div class="alert alert-dismissible fade show" role="alert"
                                    style="background-color : white; color:#f79f1f;">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                                        aria-label="Close"
                                        style="background:none;border:none;font-size:1.5rem;line-height:1;color:#000;position:absolute;top:0.75rem;right:1rem;">
                                        &times;
                                    </button>
                                </div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
                                        style="background:none;border:none;font-size:1.5rem;line-height:1;position:absolute;top:0.75rem;right:1rem;">
                                        &times;
                                    </button>
                                </div>
                            @endif
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-5 d-flex align-items-center pt-5">
                            <div class="contact-info ps-md-5">
                                <h3 class="item-title mb-4">Contact Information</h3>
                                <p class="text-muted mb-4">Get in touch for expert guidance on Everything!</p>
                                <div class="d-flex align-items-start mb-3">
                                    <img src="media/contact/marker.png" alt="Location Marker" class="me-3 mt-2"
                                        style="width: 30px; height: 30px;">
                                    <div class="ml-3">
                                        <h4 class="fw-bold mb-0" style="font-weight:800;">Address</h4>
                                        <p class="mb-0 mt-0 pt-0">455/B/1 Peradeniya Road,Kandy, Sri Lanka</p>
                                    </div>
                                </div>
                                <hr class="mb-2 pb-3" />
                                <div class="d-flex align-items-start mb-3">
                                    <img src="media/contact/telephone.png" alt="Location Marker" class="me-3 mt-2"
                                        style="width: 30px; height: 30px;">
                                    <div class="ml-3">
                                        <h4 class="fw-bold mb-0" style="font-weight:800;">Phone</h4>
                                        <p class="mb-0 mt-0 pt-0">+94 76 366 5409 / +81 80-9688-7761</p>
                                    </div>
                                </div>
                                <hr class="mb-2 pb-3" />
                                <div class="d-flex align-items-start mb-3">
                                    <img src="media/contact/email.png" alt="Location Marker" class="me-3 mt-2"
                                        style="width: 30px; height: 30px;">
                                    <div class="ml-3">
                                        <h4 class="fw-bold mb-0" style="font-weight:800;">Email</h4>
                                        <p class="mb-0 mt-0 pt-0">nakayoshilanka2023@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div id="googleMap" class="google-map" style="width: 100%; height: 415px;"></div>
        </div>
    </section>
@endsection
