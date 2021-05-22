@extends('patient.partials.base')
@section('title', 'Make New Appointment')
@push('css')
<style>
    .tns-controls {
        outline: none;
        display: flex;
        justify-content: flex-end;
    }

    .tns-controls {
        margin: 0;
        padding: 0;
        list-style: none;
        position: absolute;
        left: 0;
        width: 100%;
        top: 50%;
        transform: translatey(-50%);
        display: flex;
        align-items: center;
        justify-content: space-between;
        z-index: 499 !important;
    }

    .tns-controls button {
        padding: 5px 5px;
        height: 50px;
        width: 50px;
        margin: -10px;
        outline: none;
        text-decoration: none;
        font-size: 13px;
        -webkit-transition: all 0.3s;
        transition: all 0.3s;
        border-radius: 50%;
        background-color: #2260f1 !important;
        border: 1px solid #2260f1 !important;
        color: transparent;
        opacity: 0.8;
    }
    .tns-controls button:hover{
        box-shadow: 0 3px 5px 0 rgb(57 108 240 / 80%);
    }
    .tns-controls button:nth-child(1)::before{
        content: '\00AB';
        color: #fff;
        font-size: 25px;
        font-weight: bold;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .tns-controls button:nth-child(2)::before{
        content: '\00BB';
        color: #fff;
        font-size: 25px;
        font-weight: bold;
        display: flex;
        justify-content: center;
        align-items: center;
    }


    .icons {
        font-size: 27px;
    }

    @media only screen and (min-width:767px) {
        .team {
            height: 600px;
            width: 300px;
        }
    }

    .tns-controls {
        margin: 0;
        padding: 0;
        list-style: none;
        position: absolute;
        left: 0;
        width: 100%;
        top: 50%;
        transform: translatey(-50%);
        display: flex;
        align-items: center;
        justify-content: space-between;
        z-index: 9999;
    }

    .controls:focus {
        outline: none;
    }

    .controls li:hover {
        cursor: pointer;
    }
</style>
@endpush
@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-sm-12">
        <div class="card shadow border-0 p-4">
            <div class="mb-3">
                <h6 class="align-items-center mb-0">Find Your Doctor</h6>
            </div>
            <div class="row">
                <span>History</span>
                <div class="slider-range-four">
                    <div class="col-xl-4 col-lg-6 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between mt-2">
                                    <img src="{{ asset('frontend/images/doctors/01.jpg') }}" alt=""
                                        class="rounded-circle" style="width: 75px; height: 75px;">
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
                    <div class="col-xl-4 col-lg-6 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between mt-2">
                                    <img src="{{ asset('frontend/images/doctors/01.jpg') }}" alt=""
                                        class="rounded-circle" style="width: 75px; height: 75px;">
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
                    <div class="col-xl-4 col-lg-6 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between mt-2">
                                    <img src="{{ asset('frontend/images/doctors/01.jpg') }}" alt=""
                                        class="rounded-circle" style="width: 75px; height: 75px;">
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
                    <div class="col-xl-4 col-lg-6 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between mt-2">
                                    <img src="{{ asset('frontend/images/doctors/01.jpg') }}" alt=""
                                        class="rounded-circle" style="width: 75px; height: 75px;">
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
                    <div class="col-xl-4 col-lg-6 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between mt-2">
                                    <img src="{{ asset('frontend/images/doctors/01.jpg') }}" alt=""
                                        class="rounded-circle" style="width: 75px; height: 75px;">
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
                </div>
                <!--end col-->
            </div>
        </div>
    </div>
</div>
<!--end row-->

<div class="row mt-4">
    <div class="col-xl-12 col-lg-12 col-sm-12">
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
    <div class="col-md-6 col-lg-5 col-xl-3 col-sm-12 col-12 mb-4">
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
                    <li class="d-flex justify-content-center">
                        <small class="text-muted ms-2">John Nonny</small>
                    </li>
                    <li class="d-flex justify-content-center">
                        <small class="text-muted ms-2">FCPS, MBBS</small>
                    </li>
                    <li>
                        <div class="d-flex">
                            <small class="badge badge-pill badge-primary m-1">Divorce</small>
                            <small class="badge badge-pill badge-primary m-1">Depression</small>
                        </div>
                    </li>
                    <li class="d-flex justify-content-around">
                        <small class="ms-2 font-weight-bold">Experience:</small>
                        <small class="text-muted ms-2">20 Years</small>
                    </li>
                </ul>
                <ul class="list-unstyled mt-2 mb-0 text-center">
                    <li class="list-inline-item">
                        <h5>500 BDT/Session</h5>
                    </li> <br>
                    <li class="list-inline-item"><a href="#" type/book"button" class="btn btn-primary btn-md">Book</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--end col-->
    <div class="col-md-6 col-lg-5 col-xl-3 col-sm-12 col-12 mb-4">
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
                    <li class="d-flex justify-content-center">
                        <small class="text-muted ms-2">John Nonny</small>
                    </li>
                    <li class="d-flex justify-content-center">
                        <small class="text-muted ms-2">FCPS, MBBS</small>
                    </li>
                    <li>
                        <div class="d-flex">
                            <small class="badge badge-pill badge-primary m-1">Divorce</small>
                            <small class="badge badge-pill badge-primary m-1">Depression</small>
                        </div>
                    </li>
                    <li class="d-flex justify-content-around">
                        <small class="ms-2 font-weight-bold">Experience:</small>
                        <small class="text-muted ms-2">20 Years</small>
                    </li>
                </ul>
                <ul class="list-unstyled mt-2 mb-0 text-center">
                    <li class="list-inline-item">
                        <h5>500 BDT/Session</h5>
                    </li> <br>
                    <li class="list-inline-item"><a href="#" type/book"button" class="btn btn-primary btn-md">Book</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--end col-->
    <div class="col-md-6 col-lg-5 col-xl-3 col-sm-12 col-12 mb-4">
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
                    <li class="d-flex justify-content-center">
                        <small class="text-muted ms-2">John Nonny</small>
                    </li>
                    <li class="d-flex justify-content-center">
                        <small class="text-muted ms-2">FCPS, MBBS</small>
                    </li>
                    <li>
                        <div class="d-flex">
                            <small class="badge badge-pill badge-primary m-1">Divorce</small>
                            <small class="badge badge-pill badge-primary m-1">Depression</small>
                        </div>
                    </li>
                    <li class="d-flex justify-content-around">
                        <small class="ms-2 font-weight-bold">Experience:</small>
                        <small class="text-muted ms-2">20 Years</small>
                    </li>
                </ul>
                <ul class="list-unstyled mt-2 mb-0 text-center">
                    <li class="list-inline-item">
                        <h5>500 BDT/Session</h5>
                    </li> <br>
                    <li class="list-inline-item"><a href="#" type/book"button" class="btn btn-primary btn-md">Book</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--end col-->
    <div class="col-md-6 col-lg-5 col-xl-3 col-sm-12 col-12 mb-4">
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
                    <li class="d-flex justify-content-center">
                        <small class="text-muted ms-2">John Nonny</small>
                    </li>
                    <li class="d-flex justify-content-center">
                        <small class="text-muted ms-2">FCPS, MBBS</small>
                    </li>
                    <li>
                        <div class="d-flex">
                            <small class="badge badge-pill badge-primary m-1">Divorce</small>
                            <small class="badge badge-pill badge-primary m-1">Depression</small>
                        </div>
                    </li>
                    <li class="d-flex justify-content-around">
                        <small class="ms-2 font-weight-bold">Experience:</small>
                        <small class="text-muted ms-2">20 Years</small>
                    </li>
                </ul>
                <ul class="list-unstyled mt-2 mb-0 text-center">
                    <li class="list-inline-item">
                        <h5>500 BDT/Session</h5>
                    </li> <br>
                    <li class="list-inline-item"><a href="#" type/book"button" class="btn btn-primary btn-md">Book</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->
@endsection