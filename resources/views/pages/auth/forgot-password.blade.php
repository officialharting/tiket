<x-admin-layout title="Sign In">
    <div class="container-fluid position-relative d-flex p-0">
        <x-admin.spinner />

        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-center mb-3">
                            <a href="{{ url('signin') }}" class="">
                                <img alt="" height="40px"
                                    src="{{ asset('client/images-dj/logo-junji.png') }}" />
                            </a>
                        </div>
                        <div class="card-header text-white">{{ __('Enter Your Email for Password Reset') }}</div>
                        <div class="card-body">
                            {{ __('Need to reset your password? Enter your email below to receive instructions for the reset process.') }}
                            @if ($errors->any())
                                <div class="alert alert-danger my-3" role="alert">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if (session()->has('status'))
                                <div class="alert alert-success my-3" role="alert">
                                    {{ session()->get('status') }}
                                </div>
                            @endif
                            <form action="{{ Route('password.email') }}" method="post">
                                @csrf
                                <div class="form-floating my-3">
                                    <input type="email" name="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com" value="{{ old('email') }}">
                                    <label for="floatingInput">Email address</label>
                                </div>
                                <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Request Password
                                    Reset</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

</x-admin-layout>
