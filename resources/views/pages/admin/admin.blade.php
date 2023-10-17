<x-admin-layout title="Admin">
    <div class="container-fluid position-relative d-flex p-0">

        <x-admin.spinner />

        <x-admin.sidebar menu="admin" />

        <!-- Content Start -->
        <div class="content">

            <x-admin.navbar />

            <!-- Data Tiket -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-content-start">
                        <a href="" class= "btn btn-success my-3"><i class="bi bi-plus-circle"></i> Add Admin</a>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Manage Admin</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col" class="text-center">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>Makassar Foodcourt Night</td>
                                    <td>3 Sep 2023</td>
                                    <td>Fort Rotterdam</td>
                                    <td>Rp. 5,000</td>
                                    <td>Paid</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td>Makassar Foodcourt Night</td>
                                    <td>3 Sep 2023</td>
                                    <td>Fort Rotterdam</td>
                                    <td>Rp. 5,000</td>
                                    <td>Paid</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td>Makassar Foodcourt Night</td>
                                    <td>3 Sep 2023</td>
                                    <td>Fort Rotterdam</td>
                                    <td>Rp. 5,000</td>
                                    <td>Paid</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                </tr>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td>Makassar Foodcourt Night</td>
                                    <td>3 Sep 2023</td>
                                    <td>Fort Rotterdam</td>
                                    <td>Rp. 5,000</td>
                                    <td>Paid</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                </tr>
                                <tr>
                                    <td class="text-center">5</td>
                                    <td>Makassar Foodcourt Night</td>
                                    <td>3 Sep 2023</td>
                                    <td>Fort Rotterdam</td>
                                    <td>Rp. 5,000</td>
                                    <td>Paid</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Data Tiket End -->
            <x-admin.footer />

        </div>
        <!-- Content End -->
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
</x-admin-layout>
