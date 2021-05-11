@extends('patient.partials.base')
@section('title', 'Book')
@section('content')
<!-- Start Hero -->
<div class="row mb-5">
    <div class="col-12">
        <div class="card border-0 shadow rounded p-4">
            <ul class="nav nav-pills nav-justified flex-column flex-sm-row rounded shadow overflow-hidden bg-light"
                id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link rounded-0 active" id="overview-tab" data-bs-toggle="pill" href="#pills-overview"
                        role="tab" aria-controls="pills-overview" aria-selected="false">
                        <div class="text-center pt-1 pb-1">
                            <h4 class="title fw-normal mb-0">Overview</h4>
                        </div>
                    </a>
                    <!--end nav link-->
                </li>
                <!--end nav item-->

                <li class="nav-item">
                    <a class="nav-link rounded-0" id="review-tab" data-bs-toggle="pill" href="#pills-review" role="tab"
                        aria-controls="pills-review" aria-selected="false">
                        <div class="text-center pt-1 pb-1">
                            <h4 class="title fw-normal mb-0">Reviews</h4>
                        </div>
                    </a>
                    <!--end nav link-->
                </li>
                <!--end nav item-->
            </ul>
            <!--end nav pills-->

            <div class="tab-content mt-2" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-overview" role="tabpanel"
                    aria-labelledby="overview-tab">
                    <div class="d-flex mt-3 justify-content-between p-4">
                        <div class="d-flex">
                            <img src="{{ asset('frontend/images/doctors/01.jpg') }}" alt=""
                                style="width: 150px; height: 150px;">
                            <div>
                                <h5 class="mb-1">Dr. John Nonny</h5>
                                <a href="#" class="text-primary">Gynecologist</a>, <a href="#"
                                    class="text-primary">Ph.D</a>
                            </div>
                        </div>
                        <div class="card border-0 p-3 rounded shadow">
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
                        <div class="card border-0 p-3 rounded shadow">
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

                    <ul class="list-unstyled mt-4">
                        <li class="mt-1"><i class="uil uil-arrow-right text-primary"></i> Women's health services</li>
                        <li class="mt-1"><i class="uil uil-arrow-right text-primary"></i> Pregnancy care</li>
                        <li class="mt-1"><i class="uil uil-arrow-right text-primary"></i> Surgical procedures</li>
                        <li class="mt-1"><i class="uil uil-arrow-right text-primary"></i> Specialty care</li>
                        <li class="mt-1"><i class="uil uil-arrow-right text-primary"></i> Conclusion</li>
                    </ul>

                </div>
                <!--end teb pane-->

                <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="review-tab">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 mt-4 pt-2 text-center">
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
                            <!--end carousel-->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
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
                            <input name="name" id="name2" type="text" class="form-control" placeholder="Patient Name :">
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Departments</label>
                            <select class="form-control department-name select2input">
                                <option value="EY">Eye Care</option>
                                <option value="GY">Gynecologist</option>
                                <option value="PS">Psychotherapist</option>
                                <option value="OR">Orthopedic</option>
                                <option value="DE">Dentist</option>
                                <option value="GA">Gastrologist</option>
                                <option value="UR">Urologist</option>
                                <option value="NE">Neurologist</option>
                            </select>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Doctor</label>
                            <select class="form-control doctor-name select2input">
                                <option value="CA">Dr. Calvin Carlo</option>
                                <option value="CR">Dr. Cristino Murphy</option>
                                <option value="AL">Dr. Alia Reddy</option>
                                <option value="TO">Dr. Toni Kovar</option>
                                <option value="JE">Dr. Jessica McFarlane</option>
                                <option value="EL">Dr. Elsie Sherman</option>
                                <option value="BE">Dr. Bertha Magers</option>
                                <option value="LO">Dr. Louis Batey</option>
                            </select>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Your Email <span class="text-danger">*</span></label>
                            <input name="email" id="email2" type="email" class="form-control"
                                placeholder="Your email :">
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Your Phone <span class="text-danger">*</span></label>
                            <input name="phone" id="phone2" type="tel" class="form-control" placeholder="Your Phone :">
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label"> Date : </label>
                            <input name="date" type="text" class="flatpickr flatpickr-input form-control"
                                id="checkin-date">
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="input-time">Time : </label>
                            <input name="time" type="text" class="form-control timepicker" id="input-time"
                                placeholder="03:30 PM">
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label">Comments <span class="text-danger">*</span></label>
                            <textarea name="comments" id="comments2" rows="4" class="form-control"
                                placeholder="Your Message :"></textarea>
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