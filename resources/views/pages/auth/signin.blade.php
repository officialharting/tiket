<x-admin-layout title="Sign In">
    <div class="container-fluid position-relative d-flex p-0">
        <x-admin.spinner />

        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="{{ url('/') }}" class="">
                                <img alt="" height="40px"
                                    src="{{ asset('client/images-dj/logo-junji.png') }}" />
                            </a>
                            <h3>Sign In</h3>
                        </div>
                        @if (session()->has('status'))
                            <div class="alert alert-success my-3" role="alert">
                                {{ session()->get('status') }}
                            </div>
                        @endif
                        <form action="{{ Route('signin') }}" method="post">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control" id="floatingInput"
                                    placeholder="name@example.com" value="{{ old('email') }}">
                                <label for="floatingInput">Email address</label>
                                @error('email')
                                    <div class="text-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating mb-2">
                                <input type="password" name="password" class="form-control" id="floatingPassword"
                                    placeholder="Password">
                                <label for="floatingPassword">Password</label>
                                @error('password')
                                    <div class="text-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="d-flex align-items-center justify-content-end mb-4">
                                <a href="{{ url('forgot-password') }}">Forgot Password ?</a>
                            </div>
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
                            <p class="text-center mb-0">Don't have an Account ?
                                <a href="{{ route('signup') }}"> Sign Up</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

</x-admin-layout>
