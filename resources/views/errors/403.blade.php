<x-admin-layout>
    <x-admin.spinner />
    <!-- 403 Start -->
    <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
        <div class="col-md-6 text-center p-4">
            <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
            <h1 class="display-1 fw-bold">403</h1>
            <h1 class="mb-4">{{ $exception }}</h1>
            <a class="btn btn-primary rounded-pill py-3 px-5" href="{{ url('/') }}">Go Back To Home</a>
        </div>
        <x-admin.footer/>
    </div>
    <!-- 403 End -->

</x-admin-layout>
