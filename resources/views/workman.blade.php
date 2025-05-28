@extends('layouts.app')

@section('content')
    <!--=====================================-->
    <!--=            Banner Start           =-->
    <!--=====================================-->
    <section class="main-banner-wrap-layout1 bg-dark-overlay bg-common minus-mgt-90" data-bg-image="img/Workmen-HB.jpg">
        <div class="container">
            <div class="main-banner-box-layout1">
                <h1 class="ah-headline item-title">
                    <span class="ah-words-wrapper">
                        <b class="is-visible">
                            Browse Our <span style="color: #f79f1f">Skilled</span> Workmen
                        </b>
                    </span>
                </h1>
                <div class="item-subtitle">
                    Quick, reliable, and skilled professionals just a click away.
                </div>
            </div>
        </div>
    </section>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <section class="bg-light py-5">
        <div class="container">
            <div class="mb-5 text-center">
                <h2 class="fw-bold">Our Skilled Workmen</h2>
            </div>

            <div class="row g-4 mb-4">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 position-relative">
                        <div class="position-relative">
                            <img src="img/Carpenter.jpg" class="card-img-top" alt="Carpenter">

                            <!-- Badge inside image container -->
                            <span
                                class="position-absolute badge rounded-circle bg-orange d-flex flex-column justify-content-center align-items-center text-white"
                                style="
                                    font-size: 14px;
                                    width: 70px;
                                    height: 70px;
                                    bottom: 10px;
                                    right: 10px;
                                    z-index: 2;
                                ">
                                <span style="font-size: 30px;">20</span>
                                <span style="font-size: 10px;">Workers</span>
                            </span>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title mb-1" style="font-weight: 800;">Carpenter</h5>
                            <p class="card-text text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod tempor incididunt ut labore.</p>
                            <hr class="mt-0 pb-4" />
                            <a href="#" class="btn color-light bgPrimary inquire-btn mb-2" data-bs-toggle="modal"
                                data-bs-target="#workmanModal" data-workman="Carpenter">Inquire Now</a>
                            <p class="text-small pb-0" style="font-size: 0.85em; font-style: italic;">All prices display per
                                day</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 position-relative">
                        <div class="position-relative">
                            <img src="img/Electrician.jpg" class="card-img-top" alt="Electrician">

                            <!-- Badge inside image container -->
                            <span
                                class="position-absolute badge rounded-circle bg-orange d-flex flex-column justify-content-center align-items-center text-white"
                                style="
                                  font-size: 14px;
                                  width: 70px;
                                  height: 70px;
                                  bottom: 10px;
                                  right: 10px;
                                  z-index: 2;
                              ">
                                <span style="font-size: 30px;">20</span>
                                <span style="font-size: 10px;">Workers</span>
                            </span>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title mb-1" style="font-weight: 800;">Electrician</h5>
                            <p class="card-text text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod tempor incididunt ut labore.</p>
                            <hr class="mt-0 pb-4" />
                            <a href="#" class="btn color-light bgPrimary inquire-btn mb-2" data-bs-toggle="modal"
                                data-bs-target="#workmanModal" data-workman="Electrician">Inquire Now</a>
                            <p class="text-small pb-0" style="font-size: 0.85em; font-style: italic;">All prices display per
                                day</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 position-relative">
                        <div class="position-relative">
                            <img src="img/Plumber.jpg" class="card-img-top" alt="Plumber">

                            <!-- Badge inside image container -->
                            <span
                                class="position-absolute badge rounded-circle bg-orange d-flex flex-column justify-content-center align-items-center text-white"
                                style="
                                font-size: 14px;
                                width: 70px;
                                height: 70px;
                                bottom: 10px;
                                right: 10px;
                                z-index: 2;
                            ">
                                <span style="font-size: 30px;">20</span>
                                <span style="font-size: 10px;">Workers</span>
                            </span>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title mb-1" style="font-weight: 800;">Plumber</h5>
                            <p class="card-text text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod tempor incididunt ut labore.</p>
                            <hr class="mt-0 pb-4" />
                            <a href="#" class="btn color-light bgPrimary inquire-btn mb-2" data-bs-toggle="modal"
                                data-bs-target="#workmanModal" data-workman="Plumber">Inquire Now</a>
                            <p class="text-small pb-0" style="font-size: 0.85em; font-style: italic;">All prices display per
                                day</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4 mb-4">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 position-relative">
                        <div class="position-relative">
                            <img src="img/Mason.jpg" class="card-img-top" alt="Mason">
                            <span
                                class="position-absolute badge rounded-circle bg-orange d-flex flex-column justify-content-center align-items-center text-white"
                                style="
                                  font-size: 14px;
                                  width: 70px;
                                  height: 70px;
                                  bottom: 10px;
                                  right: 10px;
                                  z-index: 2;
                              ">
                                <span style="font-size: 30px;">20</span>
                                <span style="font-size: 10px;">Workers</span>
                            </span>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title mb-1" style="font-weight: 800;">Mason</h5>
                            <p class="card-text text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod tempor incididunt ut labore.</p>
                            <hr class="mt-0 pb-4" />
                            <a href="#" class="btn color-light bgPrimary inquire-btn mb-2" data-bs-toggle="modal"
                                data-bs-target="#workmanModal" data-workman="Mason">Inquire Now</a>
                            <p class="text-small pb-0" style="font-size: 0.85em; font-style: italic;">All prices display
                                per
                                day</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 position-relative">
                        <div class="position-relative">
                            <img src="img/Painter.jpg" class="card-img-top" alt="Painter">
                            <span
                                class="position-absolute badge rounded-circle bg-orange d-flex flex-column justify-content-center align-items-center text-white"
                                style="
                                font-size: 14px;
                                width: 70px;
                                height: 70px;
                                bottom: 10px;
                                right: 10px;
                                z-index: 2;
                            ">
                                <span style="font-size: 30px;">20</span>
                                <span style="font-size: 10px;">Workers</span>
                            </span>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title mb-1" style="font-weight: 800;">Painter</h5>
                            <p class="card-text text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                do
                                eiusmod tempor incididunt ut labore.</p>
                            <hr class="mt-0 pb-4" />
                            <a href="#" class="btn color-light bgPrimary inquire-btn mb-2" data-bs-toggle="modal"
                                data-bs-target="#workmanModal" data-workman="Painter">Inquire Now</a>
                            <p class="text-small pb-0" style="font-size: 0.85em; font-style: italic;">All prices display
                                per
                                day</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 position-relative">
                        <div class="position-relative">
                            <img src="img/Gardener.jpg" class="card-img-top" alt="Gardener">
                            <span
                                class="position-absolute badge rounded-circle bg-orange d-flex flex-column justify-content-center align-items-center text-white"
                                style="
                              font-size: 14px;
                              width: 70px;
                              height: 70px;
                              bottom: 10px;
                              right: 10px;
                              z-index: 2;
                          ">
                                <span style="font-size: 30px;">20</span>
                                <span style="font-size: 10px;">Workers</span>
                            </span>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title mb-1" style="font-weight: 800;">Gardener</h5>
                            <p class="card-text text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                do
                                eiusmod tempor incididunt ut labore.</p>
                            <hr class="mt-0 pb-4" />
                            <a href="#" class="btn color-light bgPrimary inquire-btn mb-2" data-bs-toggle="modal"
                                data-bs-target="#workmanModal" data-workman="Gardener">Inquire Now</a>
                            <p class="text-small pb-0" style="font-size: 0.85em; font-style: italic;">All prices display
                                per
                                day</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 position-relative">
                        <div class="position-relative">
                            <img src="img/Cleaner.jpg" class="card-img-top" alt="Cleaner">
                            <span
                                class="position-absolute badge rounded-circle bg-orange d-flex flex-column justify-content-center align-items-center text-white"
                                style="
                                font-size: 14px;
                                width: 70px;
                                height: 70px;
                                bottom: 10px;
                                right: 10px;
                                z-index: 2;
                            ">
                                <span style="font-size: 30px;">20</span>
                                <span style="font-size: 10px;">Workers</span>
                            </span>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title mb-1" style="font-weight: 800;">Cleaner</h5>
                            <p class="card-text text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                do
                                eiusmod tempor incididunt ut labore.</p>
                            <hr class="mt-0 pb-4" />
                            <a href="#" class="btn color-light bgPrimary inquire-btn mb-2" data-bs-toggle="modal"
                                data-bs-target="#workmanModal" data-workman="Cleaner">Inquire Now</a>
                            <p class="text-small pb-0" style="font-size: 0.85em; font-style: italic;">All prices display
                                per
                                day</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 position-relative">
                        <div class="position-relative">
                            <img src="img/Velder.jpg" class="card-img-top" alt="Welder">

                            <!-- Badge inside image container -->
                            <span
                                class="position-absolute badge rounded-circle bg-orange d-flex flex-column justify-content-center align-items-center text-white"
                                style="
                              font-size: 14px;
                              width: 70px;
                              height: 70px;
                              bottom: 10px;
                              right: 10px;
                              z-index: 2;
                          ">
                                <span style="font-size: 30px;">20</span>
                                <span style="font-size: 10px;">Workers</span>
                            </span>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title mb-1" style="font-weight: 800;">Welder</h5>
                            <p class="card-text text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                do
                                eiusmod tempor incididunt ut labore.</p>
                            <hr class="mt-0 pb-4" />
                            <a href="#" class="btn color-light bgPrimary inquire-btn mb-2" data-bs-toggle="modal"
                                data-bs-target="#workmanModal" data-workman="Welder">Inquire Now</a>
                            <p class="text-small pb-0" style="font-size: 0.85em; font-style: italic;">All prices display
                                per
                                day</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 position-relative">
                        <div class="position-relative">
                            <img src="img/Flooring.jpg" class="card-img-top" alt="Flooring">

                            <!-- Badge inside image container -->
                            <span
                                class="position-absolute badge rounded-circle bg-orange d-flex flex-column justify-content-center align-items-center text-white"
                                style="
                            font-size: 14px;
                            width: 70px;
                            height: 70px;
                            bottom: 10px;
                            right: 10px;
                            z-index: 2;
                        ">
                                <span style="font-size: 30px;">20</span>
                                <span style="font-size: 10px;">Workers</span>
                            </span>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title mb-1" style="font-weight: 800;">Flooring</h5>
                            <p class="card-text text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                do
                                eiusmod tempor incididunt ut labore.</p>
                            <hr class="mt-0 pb-4" />
                            <a href="#" class="btn color-light bgPrimary inquire-btn mb-2" data-bs-toggle="modal"
                                data-bs-target="#workmanModal" data-workman="Flooring">Inquire Now</a>
                            <p class="text-small pb-0" style="font-size: 0.85em; font-style: italic;">All prices display
                                per
                                day</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="workmanModal" tabindex="-1" aria-labelledby="workmanModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="workmanModalLabel">Inquire Workman</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="modal-body">
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
                        <div class="form-group">
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const inquireButtons = document.querySelectorAll('.inquire-btn');
            const workmanSelect = document.querySelector('#workmanModal select[name="workman_type"]');

            inquireButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const workman = this.getAttribute('data-workman');
                    if (workmanSelect) {
                        workmanSelect.value = workman;
                    }
                });
            });
        });
    </script>

    <style>
        .bg-orange {
            background-color: #f97316 !important;
        }
    </style>
@endsection
