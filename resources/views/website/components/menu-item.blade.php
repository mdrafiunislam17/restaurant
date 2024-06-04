<div class="col-sm-6 col-lg-4 all pizza {{ $menuItem->category->slug }}">
    <div class="box">
        <div>
            <div class="img-box">
                <img src="{{ asset("storage/uploads/menuItems/$menuItem->image") }}" alt="{{ $menuItem->name }}">
            </div>
            <div class="detail-box">
                <h5><a class="text-white" href="{{route('website.shopDetails', ['id' => $menuItem->id])}}">{{ $menuItem->name }}</a></h5>
                <p>{{ $menuItem->description }}</p>
                <div class="options">
                    <h3>${{ $menuItem->price }}</h3>
                    <a href="{{ route('website.cartShopDetails', ['id' => $menuItem->id]) }}">
                        <i class="fa-solid fa-cart-shopping text-white"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
