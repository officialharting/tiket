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
                        <div class="card-header text-white">{{ __('Verify Your Email Address') }}</div>

                        <div class="card-body">
                            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you?') }}
                            {{ __('If you did not receive the email we will gladly send you another.') }}
                            @if (session('message'))
                            <div class="alert alert-success my-3" role="alert">
                                {{ session('message') }}
                            </div>
                            @endif
                            <div class="d-flex flex-column">
                                <form class="d-inline" method="POST" action="{{ route('verification.send') }}">
                                    @csrf
                                    <button type="submit"class="btn btn-primary my-4 ">
                                        {{ __('Resend Verification Email') }}
                                    </button>
                                </form>
                                <form class="d-inline" method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">
                                        {{ __('Logout') }}
                                    </button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

</x-admin-layout>
