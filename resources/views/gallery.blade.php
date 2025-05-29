@extends('layouts.app')

@section('content')
    <section class="main-banner-wrap-layout1 bg-dark-overlay bg-common minus-mgt-90" data-bg-image="img/Workmen-HB.jpg">
        <div class="container">
            <div class="main-banner-box-layout1">
                <h1 class="ah-headline item-title">
                    <span class="ah-words-wrapper">
                        <b class="is-visible">
                            See our previous work on our <span style="color: #f79f1f">Gallery</span>
                        </b>
                    </span>
                </h1>
                <div class="item-subtitle">
                    Quick, reliable, and skilled professionals just a click away.
                </div>
            </div>
        </div>
    </section>
    <section class="gallery-section py-5" style="background: url('img/gallery-bg.jpg') no-repeat center center/cover;">
        <div class="container">

            <!-- Repeat this block for each project -->
            <div class="row align-items-center mb-5">
                <div class="col-12">
                    <h2 class="item-title text-center">Project Title 1</h2>
                </div>
                <div class="col-md-6">
                    <div id="carousel1" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner rounded shadow">
                            <div class="carousel-item active">
                                <img src="img/Mason.jpg" class="d-block w-100" alt="Slide 1">
                            </div>
                            <div class="carousel-item">
                                <img src="img/Mason.jpg" class="d-block w-100" alt="Slide 2">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel1"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel1"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 mt-md-0 mt-4">
                    <p class="text-muted">
                        Another detailed description explaining this project. Describe materials used, skills applied, etc.
                    </p>
                </div>
            </div>

            <!-- Duplicate and update the following blocks for more projects -->
            <div class="row align-items-center mb-5">
                <hr />
                <div class="col-12">
                    <h2 class="item-title text-center">Project Title 1</h2>
                </div>
                <div class="col-md-6">
                    <div id="carousel2" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner rounded shadow">
                            <div class="carousel-item active">
                                <img src="img/Mason.jpg" class="d-block w-100" alt="Slide 1">
                            </div>
                            <div class="carousel-item">
                                <img src="img/Mason.jpg" class="d-block w-100" alt="Slide 2">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel2"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel2"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 mt-md-0 mt-4">
                    <p class="text-muted">
                        Another detailed description explaining this project. Describe materials used, skills applied, etc.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <style>
        .carousel-control-prev,
        .carousel-control-next {
            border: none;
            background: rgba(0, 0, 0, 0.2);
            /* Light transparent background */
            width: 40px;
            height: 40px;
            top: 50%;
            transform: translateY(-50%);
            border-radius: 50%;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-size: 60% 60%;
            filter: brightness(0) invert(1);
            /* Make icons white */
        }

        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            background: rgba(0, 0, 0, 0.4);
            /* Slightly darker on hover */
        }

        @media (max-width: 768px) {

            .carousel-control-prev,
            .carousel-control-next {
                width: 30px;
                height: 30px;
            }
        }
    </style>
@endsection
