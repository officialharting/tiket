<x-admin-layout title="Event">
    <div class="container-fluid position-relative d-flex p-0">

        <x-admin.spinner />

        <x-admin.sidebar menu="event" />

        <!-- Content Start -->
        <div class="content">

            <x-admin.navbar />

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Add New Event</h6>
                            <form method="post" action="" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="creator" class="col-sm-2 col-form-label">Creator</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="creator" name="creator">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="date" class="col-sm-2 col-form-label">Start Date</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="date" name="date">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="location" class="col-sm-2 col-form-label">Location</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="location" name="location">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="formFile" class="col-sm-2 form-label">Image</label>
                                    <div class="col-sm-10">
                                        <input class="form-control bg-dark" type="file" id="formFile" name="image">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="description" name="description"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Create Event</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <x-admin.footer />

        </div>
        <!-- Content End -->
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
</x-admin-layout>
