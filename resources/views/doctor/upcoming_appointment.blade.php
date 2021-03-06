@extends('doctor.partials.base')
@section('title', 'Upcoming Appointments')
@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"
    integrity="sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0-alpha.2/jquery.mobile-1.4.0-alpha.2.min.css" />
<style>
    .timer {
        font-size: 1rem;
    }

    .icons {
        font-size: 27px;
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
        z-index: 499;
    }

    .tns-controls button {
        height: 25px;
        width: 25px;
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

    .tns-controls button:hover {
        box-shadow: 0 3px 5px 0 rgb(57 108 240 / 80%);
    }

    .tns-controls button:nth-child(1)::before {
        content: '\00AB';
        color: #fff;
        font-weight: bold;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .tns-controls button:nth-child(2)::before {
        content: '\00BB';
        color: #fff;
        font-weight: bold;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    @media only screen and (min-width:772px) {
        .sidebar-none {
            display: none;
        }
    }

    .sortable {
        list-style-type: none;
        padding: 0;
    }

    .sortable li {
        margin-bottom: 1.3em;
    }
</style>
@endpush
@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow border-0 p-4">
            <div class="mb-3">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-sm-3">
                        <h6 class="align-items-center mb-0">Appointments</h6>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-9">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="row">
                                    <div class="form-group">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>select slot</option>
                                            <option value="1">9-12 A.M.</option>
                                            <option value="2">6-9 P.M.</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="row">
                                    <div class="form-group">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>select time</option>
                                            <option value="1">9 A.M.</option>
                                            <option value="2">10 A.M.</option>
                                            <option value="3">12 A.M.</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card p-4 pb-2">
                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-sm-12 mt-4">
                        <div class="card border-0 shadow rounded">
                            <div class="d-flex justify-content-between p-2 border-bottom align-items-center">
                                <h6 class="mb-0">Slot 9-12 A.M.</h6>
                            </div>

                            <div class="table-responsive-sm">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-center">SL No.</th>
                                            <th scope="col">Patient Name</th>
                                            <th scope="col" class="text-center">Patient Image</th>
                                            <th scope="col">Date & Time</th>
                                            <th scope="col">Session Duration</th>
                                            <th scope="col">Package ID</th>
                                            <th scope="col">Category</th>
                                            <th scope="col" class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @for ($i = 0; $i < 2; $i++) 
                                        <tr style="vertical-align: baseline">
                                            <td class="text-center">{{ $i + 1 }}</td>
                                            <td>Jorina Khatun</td>
                                            <td class="text-center">
                                                <img src="{{ asset('frontend/images/person.jpg') }}" alt=""
                                                    class="rounded-circle" style="width: 70px; height: 70px;">
                                            </td>
                                            <td>11 May, 2021, 10:23 PM</td>
                                            <td>20 minutes</td>
                                            <td>Premium</td>
                                            <td>Cardiac</td>
                                            <td class="text-center">
                                                <a href="#" title="Accept">
                                                    <button type="button" class="btn btn-success btn-sm">
                                                        <i class="fas fa-check"></i>
                                                    </button>
                                                </a>
                                                <a href="#" title="Decline">
                                                    <button type="button" class="btn btn-danger btn-sm">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-xl-12 col-lg-12 mt-4">
                        <div class="card border-0 shadow rounded">
                            <div class="d-flex justify-content-between p-2 border-bottom align-items-center">
                                <h6 class="mb-0">Slot 6-9 P.M.</h6>
                            </div>

                            <div class="table-responsive-sm">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-center">SL No.</th>
                                            <th scope="col">Patient Name</th>
                                            <th scope="col" class="text-center">Patient Image</th>
                                            <th scope="col">Date & Time</th>
                                            <th scope="col">Session Duration</th>
                                            <th scope="col">Package ID</th>
                                            <th scope="col">Category</th>
                                            <th scope="col" class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @for ($i = 0; $i < 2; $i++) 
                                        <tr style="vertical-align: baseline">
                                            <td class="text-center">{{ $i + 1 }}</td>
                                            <td>Jorina Khatun</td>
                                            <td class="text-center">
                                                <img src="{{ asset('frontend/images/person.jpg') }}" alt=""
                                                    class="rounded-circle" style="width: 70px; height: 70px;">
                                            </td>
                                            <td>11 May, 2021, 10:23 PM</td>
                                            <td>20 minutes</td>
                                            <td>Premium</td>
                                            <td>Cardiac</td>
                                            <td class="text-center">
                                                <a href="#" title="Accept">
                                                    <button type="button" class="btn btn-success btn-sm">
                                                        <i class="fas fa-check"></i>
                                                    </button>
                                                </a>
                                                <a href="#" title="Decline">
                                                    <button type="button" class="btn btn-danger btn-sm">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    {{-- <div class="col-xl-6 col-lg-12 col-sm-12">
                        <div class="card p-4 pb-0">
                            <h6>Slot: 9-12 A.M.</h6>
                            <ul class="sortable">
                                @for ($i = 0; $i < 6; $i++) 
                                <li class="ui-state-default" id="slot1 - {{  $i }}">
                    <div class="card rounded">
                        <div class="card-body p-2 ">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="{{ asset('frontend/images/person.jpg') }}" alt=""
                                        style="width: 75px; height: 75px;">
                                </div>
                                <div class="col-md-6 d-flex justify-content-center">
                                    <p>Patient Name: Jorina Khatun</p>
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <span>SL: {{ $i }}</span>
                                        <h6>5:45 PM</h6>
                                        <span class="text-muted">Duration: 20 minutes</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </li>
                    @endfor
                    </ul>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-sm-12">
                <div class="card p-4 pb-0">
                    <h6>Slot: 6-9 P.M.</h6>
                    <ul class="sortable">
                        @for ($i = 0; $i < 6; $i++) <li class="ui-state-default" id="slot2 - {{ $i }}">
                            <div class="card rounded">
                                <div class="card-body p-2">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="{{ asset('frontend/images/person.jpg') }}" alt=""
                                                style="width: 75px; height: 75px;">
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-center">
                                            <p>Patient Name: Jorina Khatun</p>
                                        </div>
                                        <div class="col-md-4">
                                            <div>
                                                <span>SL: {{ $i }}</span>
                                                <h6>5:45 PM</h6>
                                                <span class="text-muted">Duration: 20 minutes</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </li>
                            @endfor
                    </ul>
                </div>
            </div> --}}
        </div>
        <!--end col-->
    </div>
</div>
</div>
</div>
<!--end row-->
{{-- <div class="row">
    <div class="col-xl-12 col-lg-12 mt-4">
        <div class="card border-0 shadow rounded">
            <div class="d-flex justify-content-between p-2 border-bottom align-items-center">
                <h6 class="mb-0">All Appointments</h6>
                <a href="">View All</a>
            </div>

            <div class="table-responsive-sm">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">SL No.</th>
                            <th scope="col">Date & Time</th>
                            <th scope="col">Patient Name</th>
                            <th scope="col" class="text-center">Patient Image</th>
                            <th scope="col">Session Duration</th>
                            <th scope="col">Package ID</th>
                            <th scope="col">Category</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < 6; $i++) <tr style="vertical-align: baseline">
                            <td class="text-center">{{ $i + 1 }}</td>
                            <td>11 May, 2021, 10:23 PM</td>
                            <td>Jorina Khatun</td>
                            <td class="text-center">
                                <img src="{{ asset('frontend/images/person.jpg') }}" alt="" class="rounded-circle"
                                    style="width: 70px; height: 70px;">
                            </td>
                            <td>20 minutes</td>
                            <td>Premium</td>
                            <td>Cardiac</td>
                            <td class="text-center">
                                <a href="#" title="View">
                                    <button type="button" class="btn btn-primary btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </a>
                            </td>
                            </tr>
                            @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--end col-->
</div> --}}
<!--end row-->
<br>
<br>
<br>
<br>
@endsection
@push('js')
<script src="http://code.jquery.com/mobile/1.4.0-alpha.2/jquery.mobile-1.4.0-alpha.2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"
    integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{-- Jquery Touch --}}
<script src="{{ asset('frontend/js/jquery.ui.touch-punch.min.js') }}"></script>

<script>
    $( function() {
        $('.sortable').sortable({    
            start: function(e, ui) {
        // puts the old positions into array before sorting
        var old_position = $(this).sortable('toArray');
    },
    update: function(event, ui) {
        // grabs the new positions now that we've finished sorting
        var new_position = $(this).sortable('toArray');
        var ids = $('.sortable li').map(function(i) { return this.id; }).get();
        console.log(ids);
    }    
    });
    $( ".sortable" ).disableSelection();
    } );
</script>
@endpush