@extends('patient.partials.base')
@section('title', 'Book')
@push('css')
<style>
    @media only screen and (min-width:767px) {
        .divider {
            background-color: #000;
            height: 320px;
            width: 3px;
        }
    }

    .radio-toolbar input[type="radio"] {
        opacity: 0;
        position: fixed;
        width: 0;
    }

    .radio-toolbar label {
        display: inline-block;
        background-color: #ddd;
        padding: 6px 12px;
        font-family: sans-serif, Arial;
        font-size: 14px;
        border: 2px solid #444;
        border-radius: 90px;
    }

    .radio-toolbar label:hover {
        background-color: #215AEE;
        color: #fff;
    }

    .radio-toolbar input[type="radio"]:focus+label {
        border: 2px solid #215AEE;
    }

    .radio-toolbar input[type="radio"]:checked+label {
        background-color: #215AEE;
        border-color: #215AEE;
        color: #fff;
    }
</style>
@endpush
@section('content')
<!-- Start Hero -->
<div class="row mb-5">
    <div class="col-12">
        <div class="card border-0 shadow rounded p-4">
            <div class="tab-content mt-2" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-overview" role="tabpanel"
                    aria-labelledby="overview-tab">
                    <div class="d-flex mt-3 justify-content-between p-4 doctor row">
                        <div class="d-flex col-md-4 col-sm-12 col-lg-4 mt-4">
                            <img src="{{ asset('frontend/images/doctors/01.jpg') }}" alt=""
                                style="width: 150px; height: 150px;">
                            <div>
                                <h5 class="mb-1">Dr. John Nonny</h5>
                                <a href="#" class="text-primary">Gynecologist</a>, <a href="#"
                                    class="text-primary">Ph.D</a>
                            </div>
                        </div>
                        <div class="card border-0 p-3 rounded shadow col-md-3 col-sm-12 col-lg-3 mt-4">
                            <h6>Time Table</h6>
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex justify-content-between my-1">
                                    <p class="text-muted mb-0"><i
                                            class="ri-time-fill text-primary align-middle h5 mb-0"></i> Monday</p>
                                    <p class="text-primary mb-0"><span class="text-dark">Time:</span> 8.00 - 20.00
                                    </p>
                                </li>
                                <li class="d-flex justify-content-between my-1">
                                    <p class="text-muted mb-0"><i
                                            class="ri-time-fill text-primary align-middle h5 mb-0"></i> Tuesday</p>
                                    <p class="text-primary mb-0"><span class="text-dark">Time:</span> 8.00 - 20.00
                                    </p>
                                </li>
                                <li class="d-flex justify-content-between my-1">
                                    <p class="text-muted mb-0"><i
                                            class="ri-time-fill text-primary align-middle h5 mb-0"></i> Wednesday
                                    </p>
                                    <p class="text-primary mb-0"><span class="text-dark">Time:</span> 8.00 - 20.00
                                    </p>
                                </li>
                                <li class="d-flex justify-content-between my-1">
                                    <p class="text-muted mb-0"><i
                                            class="ri-time-fill text-primary align-middle h5 mb-0"></i> Thursday</p>
                                    <p class="text-primary mb-0"><span class="text-dark">Time:</span> 8.00 - 20.00
                                    </p>
                                </li>
                                <li class="d-flex justify-content-between my-1">
                                    <p class="text-muted mb-0"><i
                                            class="ri-time-fill text-primary align-middle h5 mb-0"></i> Friday</p>
                                    <p class="text-primary mb-0"><span class="text-dark">Time:</span> 8.00 - 20.00
                                    </p>
                                </li>
                                <li class="d-flex justify-content-between my-1">
                                    <p class="text-muted mb-0"><i
                                            class="ri-time-fill text-primary align-middle h5 mb-0"></i> Saturday</p>
                                    <p class="text-primary mb-0"><span class="text-dark">Time:</span> 8.00 - 18.00
                                    </p>
                                </li>
                                <li class="d-flex justify-content-between my-1">
                                    <p class="text-muted mb-0"><i
                                            class="ri-time-fill text-primary align-middle h5 mb-0"></i> Sunday</p>
                                    <p class="text-primary mb-0"><span class="text-dark">Time:</span> 8.00 - 14.00
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="card border-0 p-3 rounded shadow col-md-3 col-sm-12 col-lg-3 mt-4 ml-4">
                            <h6>Price Chart</h6>
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex justify-content-between my-1">
                                    <p class="text-muted mb-0"><span class="text-dark">Single Session: </span></p>
                                    <p class="text-primary mb-0">500
                                    </p>
                                </li>
                                <li class="d-flex justify-content-between my-1">
                                    <p class="text-muted mb-0"><span class="text-dark">5 Session Package: </span></p>
                                    <p class="text-primary mb-0">200
                                    </p>
                                </li>
                                <li class="d-flex justify-content-between my-1">
                                    <p class="text-muted mb-0"><span class="text-dark">10 Session Package: </span></p>
                                    <p class="text-primary mb-0">4000
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div>

                    </div>
                    <p class="text-muted mt-4">A gynecologist is a surgeon who specializes in the female reproductive
                        system, which includes the cervix, fallopian tubes, ovaries, uterus, vagina and vulva. Menstrual
                        problems, contraception, sexuality, menopause and infertility issues are diagnosed and treated
                        by a gynecologist; most gynecologists also provide prenatal care, and some provide primary care.
                    </p>

                    <h6>Specialties: </h6>

                    <div class="row justify-content-around">
                        <div class="col-md-5">
                            <ul class="list-unstyled mt-4">
                                <li class="mt-1"><i class="uil uil-arrow-right text-primary"></i> Women's health
                                    services</li>
                                <li class="mt-1"><i class="uil uil-arrow-right text-primary"></i> Pregnancy care</li>
                                <li class="mt-1"><i class="uil uil-arrow-right text-primary"></i> Surgical procedures
                                </li>
                                <li class="mt-1"><i class="uil uil-arrow-right text-primary"></i> Specialty care</li>
                                <li class="mt-1"><i class="uil uil-arrow-right text-primary"></i> Conclusion</li>
                            </ul>
                        </div>
                        <div class="col-md-2">
                            <div class="divider"></div>
                        </div>
                        <div class="col-md-5">
                            <div class="client-review-slider">
                                <div class="tiny-slide text-center">
                                    <p class="text-muted h6 fw-normal fst-italic">" It seems that only fragments of the
                                        original text remain in the Lorem Ipsum texts used today. The most well-known
                                        dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th
                                        century. "</p>
                                    <img src="frontend/images/client/01.jpg"
                                        class="img-fluid avatar avatar-small rounded-circle mx-auto shadow my-3" alt="">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <h6 class="text-primary">- Thomas Israel <small class="text-muted">C.E.O</small>
                                    </h6>
                                </div>
                                <!--end customer testi-->

                                <div class="tiny-slide text-center">
                                    <p class="text-muted h6 fw-normal fst-italic">" The advantage of its Latin origin
                                        and the relative meaninglessness of Lorum Ipsum is that the text does not
                                        attract attention to itself or distract the viewer's attention from the layout.
                                        "</p>
                                    <img src="frontend/images/client/02.jpg"
                                        class="img-fluid avatar avatar-small rounded-circle mx-auto shadow my-3" alt="">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <h6 class="text-primary">- Carl Oliver <small class="text-muted">P.A</small></h6>
                                </div>
                                <!--end customer testi-->

                                <div class="tiny-slide text-center">
                                    <p class="text-muted h6 fw-normal fst-italic">" There is now an abundance of
                                        readable dummy texts. These are usually used when a text is required purely to
                                        fill a space. These alternatives to the classic Lorem Ipsum texts are often
                                        amusing and tell short, funny or nonsensical stories. "</p>
                                    <img src="frontend/images/client/03.jpg"
                                        class="img-fluid avatar avatar-small rounded-circle mx-auto shadow my-3" alt="">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <h6 class="text-primary">- Barbara McIntosh <small class="text-muted">M.D</small>
                                    </h6>
                                </div>
                                <!--end customer testi-->

                                <div class="tiny-slide text-center">
                                    <p class="text-muted h6 fw-normal fst-italic">" According to most sources, Lorum
                                        Ipsum can be traced back to a text composed by Cicero in 45 BC. Allegedly, a
                                        Latin scholar established the origin of the text by compiling all the instances
                                        of the unusual word 'consectetur' he could find "</p>
                                    <img src="frontend/images/client/04.jpg"
                                        class="img-fluid avatar avatar-small rounded-circle mx-auto shadow my-3" alt="">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <h6 class="text-primary">- Christa Smith <small class="text-muted">Manager</small>
                                    </h6>
                                </div>
                                <!--end customer testi-->

                                <div class="tiny-slide text-center">
                                    <p class="text-muted h6 fw-normal fst-italic">" It seems that only fragments of the
                                        original text remain in the Lorem Ipsum texts used today. The most well-known
                                        dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th
                                        century. "</p>
                                    <img src="frontend/images/client/05.jpg"
                                        class="img-fluid avatar avatar-small rounded-circle mx-auto shadow my-3" alt="">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <h6 class="text-primary">- Dean Tolle <small class="text-muted">Developer</small>
                                    </h6>
                                </div>
                                <!--end customer testi-->

                                <div class="tiny-slide text-center">
                                    <p class="text-muted h6 fw-normal fst-italic">" It seems that only fragments of the
                                        original text remain in the Lorem Ipsum texts used today. One may speculate that
                                        over the course of time certain letters were added or deleted at various
                                        positions within the text. "</p>
                                    <img src="frontend/images/client/06.jpg"
                                        class="img-fluid avatar avatar-small rounded-circle mx-auto shadow my-3" alt="">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <h6 class="text-primary">- Jill Webb <small class="text-muted">Designer</small></h6>
                                </div>
                                <!--end customer testi-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--end teb pane-->
            </div>
            <!--end tab content-->
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card border-0 shadow rounded overflow-hidden p-4">
            <div class="mb-3">
                <h4 class="align-items-center mb-0">Book Appointment</h4>
            </div>
            <form>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label">Patient Name <span class="text-danger">*</span></label>
                            <input name="name" id="name2" type="text" class="form-control">
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Reason For Appointment (Summary) <span
                                    class="text-danger">*</span></label>
                            <textarea name="" id="" rows="10" class="form-control"></textarea>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-md-4">
                        <div class="mb-3">
                            <div class="row">
                                <label class="form-label">Booking Type <span class="text-danger">*</span></label>
                                <select class="form-control doctor-name select2input">
                                    <option value="">Select booking type</option>
                                    <option value="CR">Single Session</option>
                                    <option value="AL">6 Session Package</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Appointment Date <span class="text-danger">*</span></label>
                            <input name="email" id="email2" type="date" class="form-control">
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Session Time <span class="text-danger">*</span></label>
                            <select class="form-control doctor-name select2input">
                                <option value="">Select session time</option>
                                <option value="CR">20 minutes</option>
                                <option value="CR">40 minutes</option>
                                <option value="CR">60 minutes</option>
                            </select>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label"> Available Time Slots <span class="text-danger">*</span></label>
                            <div class="radio-toolbar">
                                <input type="radio" id="radioApple" name="radioFruit" value="apple">
                                <label for="radioApple">4:00 - 4:20</label>

                                <input type="radio" id="radioBanana" name="radioFruit" value="banana">
                                <label for="radioBanana">4:20 - 5:00</label>

                                <input type="radio" id="radioOrange" name="radioFruit" value="orange">
                                <label for="radioOrange">5:00 - 5:20</label>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-lg-12">
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Book An Appointment</button>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </form>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->
@endsection