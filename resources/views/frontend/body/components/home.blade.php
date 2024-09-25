@extends('admin_master')
@section('home')

<!-- Header -->
<header id="header" class="header">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-xl-12 main_slide">
                <div id="carouselExampleControls" class="carousel slide carousel-fade sub_slide h-100 w-100" data-bs-ride="carousel" style="border-radius: 10px;overflow: hidden;">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://www.consatech-cambodia.com/backend/assets/images/home/+z_image_service_1_11174-1_5.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://www.consatech-cambodia.com/backend/assets/images/home/+z_image_service_1_976104-test4.jpeg" class="d-block w-100" alt="...">
                    </div>
                </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="col-lg-12 col-xl-12">
                <div class="row">
                    <div class="col-lg-12 center_index">
                        <div class="text-container">
                            <div class="row d-flex align-items-center justify-content-center">
                                <div class="section-title col-2 d-flex align-items-center justify-content-center" style="cursor: pointer;">ភាសាខ្មែរ</div> &nbsp;&nbsp;&nbsp;
                                <div class="section-title col-2 d-flex align-items-center justify-content-center" style="cursor: pointer;">English</div>
                            </div>

                            <h1 class="h1-large text-center">ONE-STOP SERVICE</h1>
                            <p class="p-large text-center">High responsibility - Quality - Reliability - Honest - Low price</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn-solid-lg" href="./contact.php">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-xl-12">
                <div class="row">
                    <div class="col-lg-6 center_index mb-3">
                        <img src="{{ asset('images/left.png') }}" class="w-100 img_border_radius" alt="" style="border: 1px solid #174C46;">
                    </div>
                    <div class="col-lg-6 center_index mb-3">
                        <img src="{{ asset('images/right.png') }}" class="w-100 img_border_radius" alt="" style="border: 1px solid #174C46;">
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>


<!-- Projects -->
<div id="projects" class="filter">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="h2-heading">Our Activities</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="grid">
                    <div class="element-item development">
                        <img class="img-fluid" src="https://www.consatech-cambodia.com/backend/assets/images/news_banner/45853-1_1.jpg" alt="alternative">
                        <p><strong style="font-size: 22px;color: #174c46;">សេវាកម្មសិក្សាស្រាវជ្រាវ និងអភិវឌ្ឍន៍ផលិតអាហារ និងគ្រឿងសម្អាង</strong> <br> </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
