@extends('patient.partials.base')
@section('title', 'Make New Appointment')
@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-6">
        <div class="card shadow border-0 p-4">
            <div class="mb-3">
                <h6 class="align-items-center mb-0">Find Your Doctor</h6>
                <span>History</span>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 mt-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-around mt-2">
                                <img src="{{ asset('frontend/images/doctors/01.jpg') }}" alt="" class="rounded-circle"
                                    style="width: 75px; height: 75px;">
                                <div>
                                    <h4>John Nonny</h4>
                                    <span class="badge badge-pill badge-primary">Divorce</span>
                                    <span class="badge badge-pill badge-primary">Depression</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-2 align-items-center">
                                <h5>500 BDT/Session</h5>
                                <a href="/book" type="button" class="btn btn-primary">Book</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-xl-4 col-lg-6 mt-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-around mt-2">
                                <img src="{{ asset('frontend/images/doctors/01.jpg') }}" alt="" class="rounded-circle"
                                    style="width: 75px; height: 75px;">
                                <div>
                                    <h4>John Nonny</h4>
                                    <span class="badge badge-pill badge-primary">Divorce</span>
                                    <span class="badge badge-pill badge-primary">Depression</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-2 align-items-center">
                                <h5>500 BDT/Session</h5>
                                <a href="/book" type="button" class="btn btn-primary">Book</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-xl-4 col-lg-6 mt-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-around mt-2">
                                <img src="{{ asset('frontend/images/doctors/01.jpg') }}" alt="" class="rounded-circle"
                                    style="width: 75px; height: 75px;">
                                <div>
                                    <h4>John Nonny</h4>
                                    <span class="badge badge-pill badge-primary">Divorce</span>
                                    <span class="badge badge-pill badge-primary">Depression</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-2 align-items-center">
                                <h5>500 BDT/Session</h5>
                                <a href="/book" type="button" class="btn btn-primary">Book</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
        </div>
    </div>
</div>
<!--end row-->

<div class="row mt-4">
    <div class="col-xl-12 col-lg-6">
        <div class="card border-0 shadow rounded">
            <div class="row p-4">
                <div class="col-xl-3 col-lg-6 mt-2">
                    <select class="form-select w-auto" aria-label="Default select example">
                        <option selected>Select Option 1</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-xl-3 col-lg-6 mt-2">
                    <select class="form-select w-auto" aria-label="Default select example">
                        <option selected>Select Option 2</option>
                        <option value="1">Online</option>
                        <option value="2">Offline</option>
                    </select>
                </div>
                <div class="col-xl-3 col-lg-6 mt-2">
                    <label for="customRange1">Price Range</label>
                    <input type="range" class="form-range" id="customRange1">
                </div>
                <div class="col-xl-3 col-lg-6 mt-2">
                    <form action="">
                        <input type="text" name="" id="" placeholder="Search..." class="form-control">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-xl-3 col-lg-6">
        <div class="card team border-0 rounded shadow overflow-hidden">
            <div class="team-person position-relative overflow-hidden">
                <img src="{{ asset('frontend/images/doctors/01.jpg') }}" class="img-fluid" alt="">
                <ul class="list-unstyled team-like">
                    <li><a href="#" class="badge badge-pill badge-warning">New Doctor</a></li>
                </ul>
            </div>
            <div class="card-body">
                <ul class="list-unstyled mt-1 mb-0">
                    <li class="d-flex justify-content-center">
                        <ul class="list-unstyled mb-0">
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                        </ul>
                    </li>
                    <li class="d-flex justify-content-between">
                        <small class="ms-2 font-weight-bold">Name:</small>
                        <small class="text-muted ms-2">John Nonny</small>
                    </li>
                    <li class="d-flex justify-content-between">
                        <small class="ms-2 font-weight-bold">Degree:</small>
                        <small class="text-muted ms-2">FCPS, MBBS</small>
                    </li>
                    <li>
                        <small class="ms-2 font-weight-bold">Speciality:</small> <br>
                        <div class="d-flex justify-content-around">
                            <small class="badge badge-pill badge-primary">Divorce</small>
                            <small class="badge badge-pill badge-primary">Depression</small>
                        </div>
                    </li>
                    <li class="d-flex justify-content-between">
                        <small class="ms-2 font-weight-bold">Experience:</small>
                        <small class="text-muted ms-2">20 Years</small>
                    </li>
                </ul>
                <ul class="list-unstyled mt-2 mb-0 text-center">
                    <li class="list-inline-item"><h5>500 BDT/Session</h5>
                    </li>
                    <li class="list-inline-item"><a href="#" type/book"button" class="btn btn-primary btn-sm">Book</a>
                </li>
                </ul>
            </div>
        </div>
    </div>
    <!--end col-->
    <div class="col-xl-3 col-lg-6">
        <div class="card team border-0 rounded shadow overflow-hidden">
            <div class="team-person position-relative overflow-hidden">
                <img src="{{ asset('frontend/images/doctors/01.jpg') }}" class="img-fluid" alt="">
                <ul class="list-unstyled team-like">
                    <li><a href="#" class="badge badge-pill badge-warning">New Doctor</a></li>
                </ul>
            </div>
            <div class="card-body">
                <ul class="list-unstyled mt-1 mb-0">
                    <li class="d-flex justify-content-center">
                        <ul class="list-unstyled mb-0">
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                        </ul>
                    </li>
                    <li class="d-flex justify-content-between">
                        <small class="ms-2 font-weight-bold">Name:</small>
                        <small class="text-muted ms-2">John Nonny</small>
                    </li>
                    <li class="d-flex justify-content-between">
                        <small class="ms-2 font-weight-bold">Degree:</small>
                        <small class="text-muted ms-2">FCPS, MBBS</small>
                    </li>
                    <li>
                        <small class="ms-2 font-weight-bold">Speciality:</small> <br>
                        <div class="d-flex justify-content-around">
                            <small class="badge badge-pill badge-primary">Divorce</small>
                            <small class="badge badge-pill badge-primary">Depression</small>
                        </div>
                    </li>
                    <li class="d-flex justify-content-between">
                        <small class="ms-2 font-weight-bold">Experience:</small>
                        <small class="text-muted ms-2">20 Years</small>
                    </li>
                </ul>
                <ul class="list-unstyled mt-2 mb-0 text-center">
                    <li class="list-inline-item"><h5>500 BDT/Session</h5>
                    </li>
                    <li class="list-inline-item"><a href="#" type/book"button" class="btn btn-primary btn-sm">Book</a>
                </li>
                </ul>
            </div>
        </div>
    </div>
    <!--end col-->
    <div class="col-xl-3 col-lg-6">
        <div class="card team border-0 rounded shadow overflow-hidden">
            <div class="team-person position-relative overflow-hidden">
                <img src="{{ asset('frontend/images/doctors/01.jpg') }}" class="img-fluid" alt="">
                <ul class="list-unstyled team-like">
                    <li><a href="#" class="badge badge-pill badge-warning">New Doctor</a></li>
                </ul>
            </div>
            <div class="card-body">
                <ul class="list-unstyled mt-1 mb-0">
                    <li class="d-flex justify-content-center">
                        <ul class="list-unstyled mb-0">
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                        </ul>
                    </li>
                    <li class="d-flex justify-content-between">
                        <small class="ms-2 font-weight-bold">Name:</small>
                        <small class="text-muted ms-2">John Nonny</small>
                    </li>
                    <li class="d-flex justify-content-between">
                        <small class="ms-2 font-weight-bold">Degree:</small>
                        <small class="text-muted ms-2">FCPS, MBBS</small>
                    </li>
                    <li>
                        <small class="ms-2 font-weight-bold">Speciality:</small> <br>
                        <div class="d-flex justify-content-around">
                            <small class="badge badge-pill badge-primary">Divorce</small>
                            <small class="badge badge-pill badge-primary">Depression</small>
                        </div>
                    </li>
                    <li class="d-flex justify-content-between">
                        <small class="ms-2 font-weight-bold">Experience:</small>
                        <small class="text-muted ms-2">20 Years</small>
                    </li>
                </ul>
                <ul class="list-unstyled mt-2 mb-0 text-center">
                    <li class="list-inline-item"><h5>500 BDT/Session</h5>
                    </li>
                    <li class="list-inline-item"><a href="#" type/book"button" class="btn btn-primary btn-sm">Book</a>
                </li>
                </ul>
            </div>
        </div>
    </div>
    <!--end col-->
    <div class="col-xl-3 col-lg-6">
        <div class="card team border-0 rounded shadow overflow-hidden">
            <div class="team-person position-relative overflow-hidden">
                <img src="{{ asset('frontend/images/doctors/01.jpg') }}" class="img-fluid" alt="">
                <ul class="list-unstyled team-like">
                    <li><a href="#" class="badge badge-pill badge-warning">New Doctor</a></li>
                </ul>
            </div>
            <div class="card-body">
                <ul class="list-unstyled mt-1 mb-0">
                    <li class="d-flex justify-content-center">
                        <ul class="list-unstyled mb-0">
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                        </ul>
                    </li>
                    <li class="d-flex justify-content-between">
                        <small class="ms-2 font-weight-bold">Name:</small>
                        <small class="text-muted ms-2">John Nonny</small>
                    </li>
                    <li class="d-flex justify-content-between">
                        <small class="ms-2 font-weight-bold">Degree:</small>
                        <small class="text-muted ms-2">FCPS, MBBS</small>
                    </li>
                    <li>
                        <small class="ms-2 font-weight-bold">Speciality:</small> <br>
                        <div class="d-flex justify-content-around">
                            <small class="badge badge-pill badge-primary">Divorce</small>
                            <small class="badge badge-pill badge-primary">Depression</small>
                        </div>
                    </li>
                    <li class="d-flex justify-content-between">
                        <small class="ms-2 font-weight-bold">Experience:</small>
                        <small class="text-muted ms-2">20 Years</small>
                    </li>
                </ul>
                <ul class="list-unstyled mt-2 mb-0 text-center">
                    <li class="list-inline-item"><h5>500 BDT/Session</h5>
                    </li>
                    <li class="list-inline-item"><a href="#" type/book"button" class="btn btn-primary btn-sm">Book</a>
                </li>
                </ul>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->
@endsection