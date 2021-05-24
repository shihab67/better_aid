@extends('patient.partials.base')
@section('title', 'My Prescriptions')
@push('css')
<style>
    .icons{
     font-size: 27px;   
    }
</style>
@endpush
@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12">
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
                    <tr>
                        <td class="text-center">abc123</td>
                        <td>
                            <img src="{{ asset('frontend/images/doctors/01.jpg') }}" alt=""
                                class="rounded-circle" style="width: 30px; height: 30px;">
                        </td>
                        <td>11 May, 2021</td>
                        <td class="text-center">
                            <a href="#" data-bs-toggle="modal"
                                data-bs-target="#view-invoice"><i
                                    class="uil uil-clipboard-notes icons"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">abc123</td>
                        <td>
                            <img src="{{ asset('frontend/images/doctors/01.jpg') }}" alt=""
                                class="rounded-circle" style="width: 30px; height: 30px;">
                        </td>
                        <td>11 May, 2021</td>
                        <td class="text-center">
                            <a href="#" data-bs-toggle="modal"
                                data-bs-target="#view-invoice"><i
                                    class="uil uil-clipboard-notes icons"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">abc123</td>
                        <td>
                            <img src="{{ asset('frontend/images/doctors/01.jpg') }}" alt=""
                                class="rounded-circle" style="width: 30px; height: 30px;">
                        </td>
                        <td>11 May, 2021</td>
                        <td class="text-center">
                            <a href="#" data-bs-toggle="modal"
                                data-bs-target="#view-invoice"><i
                                    class="uil uil-clipboard-notes icons"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">abc123</td>
                        <td>
                            <img src="{{ asset('frontend/images/doctors/01.jpg') }}" alt=""
                                class="rounded-circle" style="width: 30px; height: 30px;">
                        </td>
                        <td>11 May, 2021</td>
                        <td class="text-center">
                            <a href="#" data-bs-toggle="modal"
                                data-bs-target="#view-invoice"><i
                                    class="uil uil-clipboard-notes icons"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">abc123</td>
                        <td>
                            <img src="{{ asset('frontend/images/doctors/01.jpg') }}" alt=""
                                class="rounded-circle" style="width: 30px; height: 30px;">
                        </td>
                        <td>11 May, 2021</td>
                        <td class="text-center">
                            <a href="#" data-bs-toggle="modal"
                                data-bs-target="#view-invoice"><i
                                    class="uil uil-clipboard-notes icons"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
@endsection