<section class="py-3 py-md-5">
    <div class="container">
        <!-- Categories and Menu Items Section -->
        <!-- Include your categories and menu items section here -->

        <!-- About Section -->
        @foreach($about as $abouts)
            <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
                <div class="col-12 col-lg-6 col-xl-7">
                    <img class="rounded-lg" src="{{ asset('storage/uploads/about/' . $abouts->image) }}"
                         width="100%" height="60%" alt="{{ $abouts->name }}" >
                </div>
                <div class="col-12 col-lg-6 col-xl-5">
                    <div class="row justify-content-xl-center">
                        <div class="col-12 col-xl-11">
                            <h2 class="mb-3">{{ $abouts->name }}</h2>
                            <p class="lead fs-4 text-secondary mb-3">{{ $abouts->title }}</p>
                            <p class="mb-5">{{ $abouts->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
