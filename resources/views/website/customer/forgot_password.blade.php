@extends("website.layouts.master")
@section("title", "Food Customer Login")
@section("content")

    <div class="banner-area d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-text">
                        <h1 class="text-center">Forgot Your Password</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container my-5">
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="m-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session()->has("error"))
                        <div class="alert alert-danger">
                            {{ session("error") }}
                        </div>
                    @endif

                    @if (session()->has("success"))
                        <div class="alert alert-success">
                            {{ session("success") }}
                        </div>
                    @endif

                    <form action="{{ route('website.customer.forgot_password') }}" method="post">
                        @csrf
                        <div class="form-group mb-4">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" name="email" value="{{ old("email") }}" class="form-control" id="email"
                                   autofocus>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Submit</button>

                        <div class="text-center mt-4">
                            <a href="{{ route('website.customer.login') }}" class="text-decoration-none">Customer Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>



@endsection


