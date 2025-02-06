@extends('dashboard.layouts.main')

@section('content')
    <div class="pagetitle">
        <h1>Campaign</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item active">Campaign</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard ">
        <table class="mb-3">
            <tbody>
                <tr>
                    <td style="width: 200px">Template message</td>
                    <td><strong>promo_pointer_februari <span class="badge bg-secondary">Neutral</span></strong></td>
                </tr>
                <tr>
                    <td>Recipient list</td>
                    <td><strong>pointer_demo</strong></td>
                </tr>
                <tr>
                    <td>Sending time</td>
                    <td><strong>03 February 2025 at 14:39</strong></td>
                </tr>
                <tr>
                    <td>Sender detail</td>
                    <td><strong>Irene Anastasia Pangemanan</strong> (irene.anastasia@mekari.com)</td>
                </tr>
            </tbody>
        </table>
        <div class="row d-flex justify-content-around">
            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Read</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-check2-all"></i>
                                    </div>
                                    <div class="ps-4 pt-2">
                                        <h1 class="fw-bold" style="color: #012970">145</h1>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->

                    <!-- Revenue Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Revenue <span>| This Month</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-check2-all"></i>
                                    </div>
                                    <div class="ps-4 pt-2">
                                        <h1 class="fw-bold" style="color: #012970">35</h1>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Revenue Card -->

                    <!-- Customers Card -->
                    <div class="col-xxl-4 col-xl-12">

                        <div class="card info-card customers-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Customers <span>| This Year</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-check2"></i>
                                    </div>
                                    <div class="ps-4 pt-2">
                                        <h1 class="fw-bold" style="color: #012970">1323</h1>


                                    </div>
                                </div>

                            </div>
                        </div>

                    </div><!-- End Customers Card -->
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Datatables Customer</h5>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>

                                    <th scope="col">Customer name</th>
                                    <th scope="col">Customer number</th>
                                    <th scope="col">Creation date</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Farid</td>
                                    <td>6287127508254</td>
                                    <td>03 Feb 2025 at 14:39</td>
                                </tr>
                                <tr>
                                    <td>Irene</td>
                                    <td>6285777521888</td>
                                    <td>03 Feb 2025 at 14:39</td>
                                </tr>
                                <tr>
                                    <td>Dita</td>
                                    <td>6285285873912</td>
                                    <td>03 Feb 2025 at 14:39</td>
                                </tr>
                                <tr>
                                    <td>Agung</td>
                                    <td>6281284355076</td>
                                    <td>03 Feb 2025 at 14:39</td>
                                </tr>
                                <tr>
                                    <td>Albert</td>
                                    <td>6281290784970</td>
                                    <td>03 Feb 2025 at 14:39</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>
@endsection
