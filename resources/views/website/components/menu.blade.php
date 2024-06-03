<div class="heading_container heading_center">
    <h2 style="font-size: 50px;padding-top: 35px">
        Our Menu
    </h2>
</div>

<ul class="d-flex justify-content-center mt-4">
    @foreach ($categories as $category)
        <li class="mx-2">
            <a href="{{ route('website.menu', $category->slug) }}" class="btn btn-light" style="{{ $selectedCategory == $category->slug ? 'background:#ffbe33;color:white' :'' }}">
                {{ $category->name }}
            </a>
        </li>
    @endforeach
</ul>