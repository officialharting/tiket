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
                        <div class="card-header text-white">{{ __('Enter Your Password Reset') }}
                            @if (session()->has('status'))
                                <div class="alert alert-success my-3" role="alert">
                                    {{ session()->get('status') }}
                                </div>
                            @endif
                            <form action="{{ Route('password.update') }}" method="post">
                                @csrf
                                {{-- hidden --}}
                                <input type="hidden" name="email" value="{{ request()->email }}">
                                <input type="hidden" name="token" value="{{ request()->token }}">
                                {{-- End hidden --}}
                                <div class="form-floating my-3">
                                    <input type="password" name="password" class="form-control" id="floatingPassword"
                                        placeholder="Password">
                                    <label for="floatingPassword">Password</label>
                                </div>
                                @error('password')
                                    <div class="text-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="form-floating my-3">
                                    <input type="password" name="password_confirmation" class="form-control"
                                        id="floatingPassword" placeholder="Confirm Password">
                                    <label for="floatingPassword">Confirm Password</label>
                                </div>
                                <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Reset Password</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

</x-admin-layout>
