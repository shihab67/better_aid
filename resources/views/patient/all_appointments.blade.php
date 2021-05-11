@extends('patient.partials.base')
@section('title', 'All Appointments')
@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-6">
        <div class="card shadow border-0 p-4">
            <div class="d-flex justify-content-between mb-3">
                <h6 class="align-items-center mb-0">Up Coming Appointment</h6>
                <a href="#" type="button" class="btn btn-primary btn-sm">Make Appointment +</a>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="d-flex justify-content-around">
                                <p>Session# abc123</p>
                            </div>
                            <div>
                                <span class="badge badge-pill badge-primary badge-sm">Offline</span>
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
                            <div class="d-flex justify-content-between mt-2">
                                <img src="{{ asset('frontend/images/doctors/01.jpg') }}" alt="" class="rounded-circle"
                                    style="width: 75px">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus,
                                    provident.</p>
                            </div>
                            <div class="d-flex justify-content-center mt-4">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                            <div class="d-flex justify-content-around mt-2">
                                <a href="#" type="button" class="btn btn-primary">Reschedule</a>
                                <a href="#" type="button" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-xl-6 col-lg-6">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="d-flex justify-content-around">
                                <p>Session# abc123</p>
                            </div>
                            <div>
                                <span class="badge badge-pill badge-primary badge-sm">Offline</span>
                                <span>Session 05</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h6>5:45 PM</h6>
                                    <span>5 Aug, 2021</span>
                                </div>
                               <div class="d-flex justify-content-around">
                                    <i class="mdi mdi-clock icons mr-3"></i> <span class="text-muted">15:30:39</span>
                               </div>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <img src="{{ asset('frontend/images/doctors/01.jpg') }}" alt="" class="rounded-circle"
                                    style="width: 75px">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus,
                                    provident.</p>
                            </div>
                            <div class="d-flex justify-content-center mt-4">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                            <div class="d-flex justify-content-around mt-2">
                                <a href="#" type="button" class="btn btn-primary">Reschedule</a>
                                <a href="#" type="button" class="btn btn-danger">Cancel</a>
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

<div class="row">
    <div class="col-xl-12 col-lg-6 mt-4">
        <div class="card border-0 shadow rounded">
            <div class="p-4 border-bottom">
                <h6 class="mb-0">Previous Appointments</h6>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Date & Time</th>
                        <th scope="col">Doctor</th>
                        <th scope="col">Session#</th>
                        <th scope="col">Package ID</th>
                        <th scope="col">Category</th>
                        <th scope="col">E-Prescription</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>11 May, 2021, 10:23 PM</td>
                        <td>John Nonny</td>
                        <td>abc123</td>
                        <td>Premium</td>
                        <td>Cardiac</td>
                        <td>
                            <a href="#" class="btn btn-icon btn-primary" data-bs-toggle="modal"
                                data-bs-target="#view-invoice"><i class="uil uil-clipboard-notes icons"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>11 May, 2021, 10:23 PM</td>
                        <td>John Nonny</td>
                        <td>abc123</td>
                        <td>Premium</td>
                        <td>Cardiac</td>
                        <td>
                            <a href="#" class="btn btn-icon btn-primary" data-bs-toggle="modal"
                                data-bs-target="#view-invoice"><i class="uil uil-clipboard-notes icons"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>11 May, 2021, 10:23 PM</td>
                        <td>John Nonny</td>
                        <td>abc123</td>
                        <td>Premium</td>
                        <td>Cardiac</td>
                        <td>
                            <a href="#" class="btn btn-icon btn-primary" data-bs-toggle="modal"
                                data-bs-target="#view-invoice"><i class="uil uil-clipboard-notes icons"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>11 May, 2021, 10:23 PM</td>
                        <td>John Nonny</td>
                        <td>abc123</td>
                        <td>Premium</td>
                        <td>Cardiac</td>
                        <td>
                            <a href="#" class="btn btn-icon btn-primary" data-bs-toggle="modal"
                                data-bs-target="#view-invoice"><i class="uil uil-clipboard-notes icons"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>11 May, 2021, 10:23 PM</td>
                        <td>John Nonny</td>
                        <td>abc123</td>
                        <td>Premium</td>
                        <td>Cardiac</td>
                        <td>
                            <a href="#" class="btn btn-icon btn-primary" data-bs-toggle="modal"
                                data-bs-target="#view-invoice"><i class="uil uil-clipboard-notes icons"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->
@endsection