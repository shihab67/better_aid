@extends('patient.partials.base')
@section('title', 'My Payments')
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
                            <a href="#" data-bs-toggle="modal"
                                data-bs-target="#view-invoice"><i
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