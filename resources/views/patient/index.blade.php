@extends('patient.partials.base')
@section('title', 'Home')
@push('css')
<style>
    .icons {
        font-size: 27px;
    }
    @media only screen and (min-width:1281px) {
        .patient-img {
            height: 290px;
            width: 100%;
        }
    }
    @media (max-width:801px) { 
        .patient-img {
            height: 350px;
            width: 100%;
        } 
    }
</style>
@endpush
@section('content')
<div class="row">
    <div class="col-xl-3 col-lg-12 mb-4">
        <div class="card team border-0 rounded shadow overflow-hidden">
            <div class="team-person position-relative overflow-hidden">
                <img src="{{ asset('frontend/images/doctors/01.jpg') }}" class="img-fluid patient-img" alt="">
                <ul class="list-unstyled team-like">
                    <li><a href="#" class="badge badge-pill badge-success">Premium</a></li>
                </ul>
            </div>
            <div class="card-body">
                <ul class="list-unstyled mb-0">
                    <li class="d-flex justify-content-between">
                        <small class="ms-2 font-weight-bold">Name:</small>
                        <small class="text-muted ms-2">Jorina Khatun</small>
                    </li>
                    <li class="d-flex justify-content-between">
                        <small class="ms-2 font-weight-bold">Age:</small>
                        <small class="text-muted ms-2">25 years 5 months</small>
                    </li>
                    <li class="d-flex justify-content-between">
                        <small class="ms-2 font-weight-bold">Weight:</small>
                        <small class="text-muted ms-2">62 kg</small>
                    </li>
                    <li class="d-flex justify-content-between">
                        <small class="ms-2 font-weight-bold">Height:</small>
                        <small class="text-muted ms-2">5 ft 5 inches</small>
                    </li>
                    <li class="d-flex justify-content-between">
                        <small class="ms-2 font-weight-bold">Blood:</small>
                        <small class="text-muted ms-2">O-ve</small>
                    </li>
                </ul>
                <ul class="list-unstyled mb-0 text-center">
                    <li class="list-inline-item"><a href="#" type="button" class="btn btn-primary btn-sm">Update
                            Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--end col-->

    <div class="col-xl-6 col-lg-12 mb-4">
        <div class="card shadow border-0 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h6 class="align-items-center mb-0">Up Coming Appointment</h6>
                <a href="#">All Appointments</a>
            </div>
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="justify-content-around align-items-center">
                        <b class="m-0">Session</b> <br> <small>#abc123</small>
                    </div>
                    <div class="align-items-center">
                        <span class="badge badge-pill badge-primary badge-lg" style="float: right;">Offline</span> <br>
                        <span>Single Session</span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6>5:45 PM</h6>
                            <span>5 Aug, 2021</span>
                        </div>
                        <a href="#" type="button"
                            class="btn btn-primary d-flex justify-content-center align-items-center">Join
                            Meeting</a>
                    </div>
                    <div class="d-flex mt-2">
                        <img src="{{ asset('frontend/images/doctors/01.jpg') }}" alt="" class="rounded-circle"
                            style="width: 75px; height: 75px; margin-right: 2rem;">
                        <div>
                            <p>Doctor Name: John Nonny</p>
                            <p>speciality: <span class="badge badge-pill badge-primary">Divorce</span> <span
                                    class="badge badge-pill badge-primary">Depression</span></p>
                        </div>
                    </div>
                    <div class="d-flex mt-4">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam neque quisquam eius quis sunt
                            blanditiis magni natus dicta tenetur velit.</p>
                    </div>
                    <div class="d-flex justify-content-center mt-2">
                        <a href="#" type="button" class="btn btn-primary m-2">Reschedule</a>
                        <a href="#" type="button" class="btn btn-danger m-2">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->

    <div class="col-xl-3 col-lg-12 mb-4">
        <div class="card shadow border-0 p-4">
            <h6 class="align-items-center mb-0">Rate your doctor</h6>
            <div class="d-flex justify-content-between mt-4">
                <img src="{{ asset('frontend/images/doctors/01.jpg') }}" alt="" class="rounded-circle"
                    style="width: 60px; height: 60px;">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="mt-2">
                <b>Provide Rating</b>
                <ul class="list-unstyled mb-0">
                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                </ul>
            </div>
            <div class="mt-4">
                <b>Review</b> <br>
                <textarea name="" id="" rows="7" class="form-control"></textarea>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->
<div class="row">
    <div class="col-xl-6 col-lg-12">
        <div class="card border-0 shadow rounded mt-4 mb-4">
            <div class="p-4 row justify-content-center">
                <div class=" d-flex justify-content-center align-items-center col-xl-4 col-lg-12 mb-3">
                    <i class="fa fa-phone icons text-primary" style="margin-right: 6px;"></i> <a href="">018XXXXXXXX</a>
                </div>
                <div class=" d-flex justify-content-center align-items-center col-xl-4 col-lg-12 mb-3">
                    <i class="fa fa-envelope icons text-primary" style="margin-right: 6px;"></i> <a href="">abc@betteraid.com</a>
                </div>
                <div class=" d-flex justify-content-center align-items-center col-xl-4 col-lg-12 mb-3">
                    <i class="fab fa-whatsapp-square icons text-primary" style="margin-right: 6px;"></i> <a href="">wp.com/betteraid</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-12">
        <div class="card border-0 shadow rounded mt-4">
            <div class="p-4">
                <div class="client-review-slider">
                    <p>Ad for coupons/offers</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-6 col-lg-6 mt-4">
        <div class="card border-0 shadow rounded">
            <div class="d-flex justify-content-between p-2 border-bottom align-items-center">
                <h6 class="mb-0">E-Prescriptions</h6>
                <a href="">View All</a>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">Session#</th>
                        <th scope="col">Doctor</th>
                        <th scope="col">Date</th>
                        <th scope="col" class="text-center">Prescription</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 6; $i++)
                    <tr>
                        <td class="text-center">abc123</td>
                        <td>
                            <img src="{{ asset('frontend/images/doctors/01.jpg') }}" alt="" class="rounded-circle"
                                style="width: 30px; height: 30px;">
                        </td>
                        <td>11 May, 2021</td>
                        <td class="text-center">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#view-invoice"><i
                                    class="fas fa-file-prescription icons"></i></a>
                        </td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
    <!--end col-->

    <div class="col-xl-6 col-lg-6 mt-4">
        <div class="card border-0 shadow rounded">
            <div class="d-flex justify-content-between align-items-center p-2 border-bottom">
                <h6 class="mb-0">Invoices</h6>
                <a href="">View All</a>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">Session#</th>
                        <th scope="col">Date</th>
                        <th scope="col" class="text-center">Invoice</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 6; $i++)
                    <tr>
                        <td class="text-center">abc123</td>
                        <td>11 May, 2021</td>
                        <td class="text-center">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#view-invoice"><i
                                    class="fas fa-file-invoice-dollar icons"></i></a>
                        </td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->
@endsection