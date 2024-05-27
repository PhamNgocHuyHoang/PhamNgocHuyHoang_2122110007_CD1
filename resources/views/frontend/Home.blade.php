@extends('layouts.site')
@section('title', 'Trang Chủ')


@section('content')
    <div>
        <x-slider />

        {{-- <div class="row-cat-pro"> --}}
{{--
            <div class="col-3">
                <h2>Category Products</h2>


                <section class="product-category">
                    <h2> Category 1</h2>
                    <ul class="sub-category-list">
                        <li>
                            <h3> Category 1.1</h3>
                        </li>
                        <li>
                            <h3> Category 1.2</h3>
                        </li>
                    </ul>
                </section>

                <section class="product-category">
                    <h2> Category 2</h2>
                    <ul class="sub-category-list">
                        <li>
                            <h3> Category 2.1</h3>
                        </li>
                        <li>
                            <h3> Category 2.2</h3>
                        </li>
                    </ul>
                </section>

                <section class="product-category">
                    <h2> Category 3</h2>
                    <ul class="sub-category-list">
                        <li>
                            <h3> Category 3.1</h3>
                        </li>
                        <li>
                            <h3> Category 3.2</h3>
                        </li>
                    </ul>
                </section>
            </div> --}}
            <div class="    ">
                <!-- Products Start -->
                <div class="container-fluid pt-5 pb-3">
                    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span
                            class="bg-secondary pr-3">New Products</span></h2>
                    <div class="row px-xl-5">

                        <x-productcard />
                        <x-productcard />
                        <x-productcard />
                        <x-productcard />
                        <x-productcard />
                        <x-productcard />
                        <x-productcard />
                        <x-productcard />
                    </div>
                </div>
                <!-- Products End -->


                <!-- Products Start -->
                <div class="container-fluid pt-5 pb-3">
                    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span
                            class="bg-secondary pr-3">Sale Products</span></h2>
                    <div class="row px-xl-5">
                        <x-productcard />
                        <x-productcard />
                        <x-productcard />
                        <x-productcard />
                        <x-productcard />
                        <x-productcard />
                        <x-productcard />
                        <x-productcard />
                    </div>
                </div>
                <!-- Products End -->



            {{-- </div>  --}}
        </div>
        <section class="post-new">

            <div class="post-row">
                <div class="post-main">
                    <h2>Main Post</h2>
                    <div class="post">
                        <img src="./img/carousel-1.jpg">
                        <h3>Main Post Title</h3>
                        <p>We regularly research to ensure that these retail prices represent realistic prices on comparable
                            items, but nothing can replace your own comparison shoppingWe regularly research to ensure that
                            these
                            retail prices represent realistic prices on comparable items, but nothing can replace your own
                            co .
                            Notwithstanding the comparable retail price information provided, if this is an important factor
                            for you
                            in your purchasing decision, we recommend you also conduct your own individual research.</p>
                    </div>
                </div>
                <div class="post-sidebar">
                    <h2>Related Posts</h2>
                    <x-postcard />
                    <x-postcard />
                    <x-postcard />

                </div>
            </div>
        </section>

    </div>

@endsection
@section('header')
    <link rel="stylesheet" href="home.css">
@endsection
