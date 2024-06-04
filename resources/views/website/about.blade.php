@extends("website.layouts.master")
@section("title", "Food About")
@section("content")



<section class="about_section layout_padding">
<div class="container  ">

    <section class="py-3 py-md-5">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
                <div class="col-12 col-lg-6 col-xl-7">
                    <img src="{{asset('asset/images/about-img.png')}}" alt="" width="70%" height="400px">
                </div>
                <div class="col-12 col-lg-6 col-xl-5">
                    <div class="row justify-content-xl-center">
                        <div class="col-12 col-xl-11">
                            <h2 class="mb-3">  We are about to take off ?</h2>
                            <p class="lead fs-4 text-secondary mb-3">We help people to build incredible brands and
                                superior products. Our perspective is to furnish outstanding captivating services.</p>
                            <p class="mb-5">We are a fast-growing company, but we have never lost sight of our
                                core values. We believe in collaboration, innovation, and customer satisfaction.
                                We are always looking for new ways to improve our products and services.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
