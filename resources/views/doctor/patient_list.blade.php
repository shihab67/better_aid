@extends('doctor.partials.base')
@section('title', 'Patient List')
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
            <div class="d-flex justify-content-between align-items-center p-2 border-bottom">
                <h6 class="mb-0">Patient List</h6>
            </div>

            <div class="table-responsive-sm">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">SL No.</th>
                            <th scope="col">Patient Name</th>
                            <th scope="col">Patient Image</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < 6; $i++) 
                        <tr style="vertical-align: baseline">
                            <td class="text-center">{{ $i + 1 }}</td>
                            <td>Jorina Khatun</td>
                            <td>
                                <img src="{{ asset('frontend/images/person.jpg') }}" alt="" class="rounded-circle"
                                    style="width: 70px; height: 70px;">
                            </td>
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
</div>
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