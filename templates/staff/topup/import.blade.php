{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'topup/import', 'data' => []])

@section('title', __('staff/titles.reference-otc_payroll-import'))

@section('content')
<div class="card card-custom">
    <div class="card-header">
        <div class="card-title">
            <span class="card-icon">
                <i class="fas fa-layer-group"></i>
            </span>
            <h3 class="card-label">{{ __('staff/titles.reference-otc_payroll-import')  }}</h3>
        </div>
        <div class="card-toolbar">
        </div>
    </div>
    <div class="card-body">
        <form id="topupImport" action="{!! route('staff.topup.topupload') !!}" method="POST" enctype="multipart/form-data" class="frm" novalidate="novalidate">
            {!! @csrf_field() !!}
            @include ('staff.topup.partials.import')
        </form>
        <div class="separator separator-dashed my-10"></div>
        @if( !empty($imports['totalRow']) )
            <div class="alert alert-info" role="alert">Total rows read : {{ $imports['totalRow'] }} </div>
        @endif
        @if( !empty($imports['insert']) AND  empty($imports['errors']) )
            <div class="alert alert-success" role="alert">Successfully inserted : There are {{ $imports['insert'] }} rows inserted!.  </div>
        @endif
        @if( !empty($imports['errors']) )
            <div class="alert alert-danger" role="alert">List of errors in the file</div>
            <table class="table table-hover table-striped">
                <caption>List of errors</caption>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Message</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $imports['errors'] AS $index => $val)
                        <tr>
                            <th scope="row">{{ $index }}</th>
                            <td>{{ $val['message'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>
@endsection
