@extends('admin_master')
@section('home')

<!-- Header -->
<header class="ex-header bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 offset-xl-1 text-center">
                <h1>About Consa Tech</h1>
            </div>
        </div>
    </div>
</header>


<div class="ex-basic-1 pt-5 pb-5 ">
    <div class="container">
        <div class="row">

            <div class="col-xl-10 offset-xl-1">
            <h2 class="mt-5 mb-3 text-uppercase"  style="color: #174C46 !important;">who we are</h2> <hr size="5px">
            <p class="mb-5">CONSA Tech is based in Cambodia, which is founded in January 2022 and launched officially in January 2023. The founders of CONSA Tech are a Doctor of Chemical Science and Engineering, a Doctor of Medecine and Co-supported by passionate-young Cambodia engineers. The term "CONSA" means Consultation and its letter "O - Orange" represents vitamins or vitality enrich which are supplements that everyone needs for better growth. The symbol of "4 dots" inside the orange represents the four main services of CONSA Tech. The term "Tech" means technical, technology, and low price (for Khmer meaning).</p>
            <h2 class="mt-5 mb-3 text-uppercase"  style="color: #174C46 !important;">VISION AND MISSION</h2> <hr size="5px">
            <div class="text-box mb-5">
                <h3  style="color: '.$row_color['color'].' !important;">OUR VISION</h3>
                <p>Our journey is to become a leading technical incubation and innovation center for supporting food and cosmetics SME/Industry.</p>
            </div>
            <div class="text-box mb-5">
                <h3  style="color: '.$row_color['color'].' !important;">OUR MISSION</h3>
                <p>
                    <ul>
                        <li>Transform Cambodia Food & Cosmetic SMEs from tranditional practices to reach industry digitalization.</li>
                        <li>Build eco-system between Universities, SME/Industry, Service Providers and Goverment, in terms of technical and technology solution.</li>
                    </ul>
                </p>
            </div>
            <h2 class="mt-5 mb-3 text-uppercase"  style="color: #174C46 !important;">Our customers</h2> <hr size="5px">
                <div class="container-fluid p-0">
                    <center>
                        {{-- <img class="p-2" style="width:150px" src="./backend/assets/images/our_customer_image/'.$temp_image[$i].'" alt=""> --}}
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
