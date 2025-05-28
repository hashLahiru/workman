@extends('layouts.app')

@section('content')
    <style>
        @media (max-width: 768px) {
            .mt-15-sm {
                margin-top: 15px;
            }
        }
    </style>
    <!--=====================================-->
    <!--=            Banner Start           =-->
    <!--=====================================-->

    <section class="main-banner-wrap-layout1 bg-dark-overlay bg-common minus-mgt-90" data-bg-image="img/Home-HB.jpg"
        style="background-size: cover; background-position: center;">

        <div class="container">
            @if (session('success'))
                <div class="alert bgPrimary alert-dismissible fade show text-white" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"
                        style="background:none;border:none;font-size:1.5rem;line-height:1;color:#fff;position:absolute;top:0.75rem;right:1rem;">
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
            <div class="main-banner-box-layout1">
                <div class="row align-items-center">
                    <!-- Left side content -->
                    <div class="col-md-6">
                        <h1 class="display-4 font-weight-bold text-white">
                            Find Trusted <span style="color: #f79f1f;">Handymen</span> Near You
                        </h1>
                        <p class="text-white">Quick, reliable, and skilled professionals just a click away.</p>
                        <a href="/workman" class="btn-fill-xl color-light bgPrimary">Find a Workman</a>
                    </div>

                    <!-- Right side form -->
                    <div class="col-md-5">
                        <div class="contact-form-box mt-md-0 mt-4 rounded bg-white p-4 shadow">
                            <h4 class="font-weight-bold mb-1">Find a Workman ?</h4>
                            <p class="text-muted mb-1">Lorem ipsum dolor sit amet consectetur</p>
                            <form method="POST" action="{{ route('send.inquiry') }}">
                                @csrf
                                <div class="form-group">
                                    <select name="workman_type" class="form-control form-control-sm"
                                        style="border: 1px solid #000;" required>
                                        <option value="">Workman Type</option>
                                        <option value="Carpenter">Carpenter</option>
                                        <option value="Electrician">Electrician</option>
                                        <option value="Plumber">Plumber</option>
                                        <option value="Mason">Mason</option>
                                        <option value="Painter">Painter</option>
                                        <option value="Gardener">Gardener</option>
                                        <option value="Cleaner">Cleaner</option>
                                        <option value="Welder">Welder</option>
                                        <option value="Flooring">Flooring</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input name="name" type="text" class="form-control form-control-sm"
                                        style="border: 1px solid #000;" placeholder="Name" required>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <select name="district" class="form-control form-control-sm"
                                            style="border: 1px solid #000;" required>
                                            <option value="">District</option>
                                            <option value="Ampara">Ampara</option>
                                            <option value="Anuradhapura">Anuradhapura</option>
                                            <option value="Badulla">Badulla</option>
                                            <option value="Batticaloa">Batticaloa</option>
                                            <option value="Colombo">Colombo</option>
                                            <option value="Galle">Galle</option>
                                            <option value="Gampaha">Gampaha</option>
                                            <option value="Hambantota">Hambantota</option>
                                            <option value="Jaffna">Jaffna</option>
                                            <option value="Kalutara">Kalutara</option>
                                            <option value="Kandy">Kandy</option>
                                            <option value="Kegalle">Kegalle</option>
                                            <option value="Kilinochchi">Kilinochchi</option>
                                            <option value="Kurunegala">Kurunegala</option>
                                            <option value="Mannar">Mannar</option>
                                            <option value="Matale">Matale</option>
                                            <option value="Matara">Matara</option>
                                            <option value="Monaragala">Monaragala</option>
                                            <option value="Mullaitivu">Mullaitivu</option>
                                            <option value="Nuwara Eliya">Nuwara Eliya</option>
                                            <option value="Polonnaruwa">Polonnaruwa</option>
                                            <option value="Puttalam">Puttalam</option>
                                            <option value="Ratnapura">Ratnapura</option>
                                            <option value="Trincomalee">Trincomalee</option>
                                            <option value="Vavuniya">Vavuniya</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input name="area" type="text" class="form-control form-control-sm"
                                            style="border: 1px solid #000;" placeholder="Area" required>
                                    </div>
                                </div>
                                <div class="form-group mt-15-sm">
                                    <input name="contact_number" type="text" class="form-control form-control-sm"
                                        style="border: 1px solid #000;" placeholder="Contact Number" required>
                                </div>
                                <div class="form-group">
                                    <input name="address" type="text" class="form-control form-control-sm"
                                        style="border: 1px solid #000;" placeholder="Address" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="notes" class="form-control form-control-sm" style="border: 1px solid #000;"
                                        placeholder="Additional Notes" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-dark btn-sm btn-block">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=            About Start           =-->
    <!--=====================================-->
    <section class="about-wrap-layout1 mb-0 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-box-layout1">
                        <h2 class="item-title">About <span style="color: #f79f1f"> Workman</span> </h2>
                        <p>At workman, we take the stress out of finding trusted professionals for your everyday repairs and
                            installations. Whether you're a home owner, renter, or business owner, we connect you with
                            verified, local handymen who are skilled, timely, and affordable. </p>
                        <h3 class="item-title">We serve a wide range of <span style="color: #f79f1f"> Services</span>
                            including:</h3>
                        <ul>
                            <li>Plumbing and leak repair</li>
                            <li>Electrical fixes</li>
                            <li>Carpentry and furniture work</li>
                            <li>Painting and Decoration</li>
                            <li>Apliance repair and more...</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-box-layout2">
                        <div class="item-img">
                            <img src="img/Home-handyman.png" alt="About Us">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="counter-wrap-layout1 bg-attachment-fixed" data-bg-image="img/Home-P01.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 counter-box-layout1 d-flex flex-column align-items-center">
                    <div class="item-content">
                        <div class="counter-number">
                            <span>Get it Fixed</span>
                        </div>
                        <div class="counter-number">
                            <span>Select Your <span style="color:#f79f1f; ">Workman</span> Now</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 counter-box-layout1 d-flex flex-column align-items-center">
                    <a href="#" class="btn-fill-xl color-light bgPrimary">Find a Workman</a>
                </div>
            </div>
        </div>
    </section>
    <section class="about-wrap-layout1">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-lg-4 d-flex justify-content-start">
                    <div class="about-box-layout1">
                        <div class="item-icon d-flex align-items-center justify-content-center"
                            style="width: 100px; height: 100px; border-radius: 50%; background-color: #f79f1f; font-size: 2.5rem; color: #fff;">
                            <i class="fas fa-puzzle-piece"></i>
                        </div>
                        <br />
                        <h1 class="item-title">How it</h1>
                        <h1 class="item-title">Works</h1>
                        <p>Tmply dummy text of the printing and typesetting indust Lorem Ipsum has been theitry’s snce
                            simply dummy text of the printing.Phasellus enim libero, blandit vel sapien</p>
                    </div>
                </div>
                <hr />
                <div class="col-lg-5">
                    <div class="row mb-3">
                        <div class="col-md-5 col-sm-5 col-5">
                            <img src="img/find.jpg" alt="Product">
                        </div>
                        <div class="col-md-7 col-sm-7 col-7">
                            <h3 class="hiw-title mt-2">Find</h3>
                            <p class="hiw-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do dolore
                                magna
                                aliqua. In eu mi bibendum neque egestas…</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-5 col-sm-5 col-5">
                            <img src="img/inquire.jpg" alt="Product">
                        </div>
                        <div class="col-md-7 col-sm-7 col-7">
                            <h3 class="hiw-title mt-2">Inquire</h3>
                            <p class="hiw-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do dolore
                                magna
                                aliqua. In eu mi bibendum neque egestas…</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-5 col-sm-5 col-5">
                            <img src="img/get_service.jpg" alt="Product">
                        </div>
                        <div class="col-md-7 col-sm-7 col-7">
                            <h3 class="hiw-title mt-2">Get Service</h3>
                            <p class="hiw-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do dolore
                                magna
                                aliqua. In eu mi bibendum neque egestas…</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="counter-wrap-layout1 bg-attachment-fixed" data-bg-image="img/Home-P02.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 counter-box-layout1 d-flex flex-column align-items-center">
                    <div class="item-content">
                        <div class="counter-number">
                            <span>Are you a skilled worker?</span>
                        </div>
                        <div class="counter-number">
                            <span>Join <span style="color:#f79f1f; ">Workman</span> Today!</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 counter-box-layout1 d-flex flex-column align-items-center">
                    <a href="/contact" class="btn-fill-xl color-light bgPrimary">Join Now</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light py-5">
        <div class="container text-center">
            <h2 class="fw-bold" style="font-weight: 700;">What our customers say</h2>
            <p class="text-muted mb-5">
                Lorem ipsum dolor sitamet consectetur adipisicing elit ullamet consequatur <br class="d-none d-md-block">
                repellendus amet nemo dignissimos possimus eius fugiat
            </p>

            <div class="row g-4 justify-content-center">
                <!-- Testimonial 1 -->
                <div class="col-md-6 col-lg-5">
                    <div class="card h-90 border-0 shadow-sm">
                        <div class="card-body text-start">
                            <div class="mb-3">
                                <span class="d-inline-flex align-items-center justify-content-center text-white"
                                    style="width: 42px; height: 42px; border-radius: 50%; background-color: #f79f1f;">
                                    <i class="bi bi-quote fs-4"></i>
                                </span>
                            </div>
                            <p class="text-muted">
                                Lorem ipsum dolor sit amet, consectetur sadipscing elitr, sed diam nonumy eirmod
                                tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                accusam et justo duo dolores et ea rebum.
                            </p>
                        </div>
                    </div>

                    <div class="card-footer d-flex align-items-center mb-5 border-0">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" class="rounded-circle me-3"
                            width="50" height="50" alt="Customer" style="border: 4px solid #fff;">
                        <div class="pl-2">
                            <div class="fw-semibold">Oupsum dolor</div>
                            <small class="text-muted fst-italic">Creative Director</small>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="col-md-6 col-lg-5">
                    <div class="card h-90 border-0 shadow-sm">
                        <div class="card-body text-start">
                            <div class="mb-3">
                                <span class="d-inline-flex align-items-center justify-content-center text-white"
                                    style="width: 42px; height: 42px; border-radius: 50%; background-color: #f79f1f;">
                                    <i class="bi bi-quote fs-4"></i>
                                </span>
                            </div>
                            <p class="text-muted">
                                Sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                            </p>
                        </div>
                    </div>

                    <div class="card-footer d-flex align-items-center border-0">
                        <img src="https://randomuser.me/api/portraits/women/47.jpg" class="rounded-circle me-3"
                            width="50" height="50" alt="Customer" style="border: 4px solid #fff;">
                        <div class="pl-2">
                            <div class="fw-semibold mb-0">Oupsum dolor</div>
                            <small class="text-muted fst-italic">Creative Director</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap Icons CDN (for quote icon) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
@endsection
