@extends("website.layouts.master")
@section("title", "food index")
@section("content")


    <style>

        .filters_menu {
            display: flex;
        }

        .filters_menu li {
            padding: 10px 30px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        .filters_menu li.active,
        .filters_menu li:hover {
            background-color: #007bff;
            color: #fff;
        }

        .filters_menu li:not(:last-child) {
            border-right: 1px solid #ddd;
        }
    </style>



    <section class="food_section layout_padding-bottom">
        <div class="container">
            <div class="heading_container heading_center">
                <h2 style="font-size: 50px;padding-top: 35px">
                    Our Menu
                </h2>
            </div>




            <ul class="filters_menu">
                @foreach ($categories as $category)
                    <li data-filter=".{{ $category->slug }}" class="{{ $selectedCategory == $category->slug ? 'active' : '' }}">
                        <a href="{{ route('website.menu', ['category' => $category->slug]) }}" style="text-decoration: none; color: inherit;">
                            {{ $category->name }}
                        </a>
                    </li>
                @endforeach
            </ul>

            <div class="filters-content">
                <div class="row grid">

                    @foreach ($menuItems as $menuItem)
                    <div class="col-sm-6 col-lg-4 all pizza {{ $menuItem->category->slug }}">
                        <div class="box">
                            <div>
                                <div class="img-box">
                                    <img src="{{ asset("storage/uploads/menuItems/$menuItem->image") }}" alt="{{ $menuItem->name }}">
                                </div>
                                <div class="detail-box">
                                    <h5>{{ $menuItem->name }}</h5>
                                    <p>{{ $menuItem->description }}</p>
                                    <div class="options">
                                        <h1>${{ $menuItem->price }}</h1>
                                        <a href="{{ route('website.shopDetails', ['id' => $menuItem->id]) }}">
                                            <i class="fa-solid fa-cart-shopping text-white"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
    </section>


@endsection


