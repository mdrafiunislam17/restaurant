@extends("website.layouts.master")
@section("title", "Food Customer Login")
@section("content")

    <section class="mt-5 registration">
        <div class="container px-5">
            <div class="row">
                <div class="col-md-12">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="m-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session()->has("success"))
                        <div class="alert alert-success">
                            {{ session("success") }}
                        </div>
                    @endif

                    @if (session()->has("error"))
                        <div class="alert alert-danger">
                            {{ session("error") }}
                        </div>
                    @endif
                    <h1 class="text-center my-4">Customer Registration</h1>

                    <form action="{{ route('website.registration') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="name" class="col-sm-3 col-form-label text-right font-weight-bold">Name *</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="name" value="<?= old("name");?>" name="name"
                                       autofocus>
                            </div>
                        </div>


                        <div class="form-group row mb-4">
                            <label for="email" class="col-sm-3 col-form-label text-right font-weight-bold">Email *</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="email"
                                       value="<?= old("email"); ?>" name="email">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="password" class="col-sm-3 col-form-label text-right font-weight-bold">Password*
                            </label>
                            <div class="col-sm-6">
                                <input type="password" class="form-control" id="password" name="password">
                                <small class="form-text text-muted">Password minimum 6 digits</small>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="password_confirmation"
                                   class="col-sm-3 col-form-label text-right font-weight-bold">Confirm Password*
                            </label>
                            <div class="col-sm-6">
                                <input type="password" class="form-control" id="password_confirmation"
                                       name="password_confirmation">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="" class="col-sm-3 col-form-label text-md-end font-weight-bold"></label>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-primary w-100">Registration</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection


