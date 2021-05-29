@extends('doctor.partials.base')
@section('title', 'Payment History')
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
                <h6 class="mb-0">Payment History</h6>
            </div>

            <div class="table-responsive-sm">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">SL No.</th>
                            <th scope="col">Session#</th>
                            <th scope="col">Date</th>
                            <th scope="col" class="text-center">Invoice</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < 6; $i++)
                        <tr>
                            <td class="text-center">{{ $i + 1 }}</td>
                            <td>abc123</td>
                            <td>11 May, 2021</td>
                            <td class="text-center">
                                <a href="#" title="Invoice">
                                    <button type="button" class="btn btn-primary btn-sm">
                                        <i class="fas fa-receipt"></i>
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