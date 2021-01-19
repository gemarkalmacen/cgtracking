{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'stocks/import', 'data' => []])

@section('title', __('staff/titles.stocks_import'))

@section('content')
<div class="card card-custom">
    <div class="card-header">
        <div class="card-title">
            <span class="card-icon">
                <i class="fas fa-layer-group"></i>
            </span>
            <h3 class="card-label">{{ __('staff/titles.stocks_import')  }}</h3>
        </div>
        <div class="card-toolbar">
        </div>
    </div>
    <div class="card-body">
        <form id="stocksImport" action="{!! route('staff.stocks.load') !!}" method="POST" enctype="multipart/form-data" class="frm" novalidate="novalidate">
            {!! @csrf_field() !!}
            @include ('staff.stocks.partials.import')
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
                        <th scope="col">Stock code</th>
                        <th scope="col">Cost code</th>
                        <th scope="col">Brand name</th>
                        <th scope="col">Message</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $imports['errors'] AS $val)
                        <tr>
                            <th scope="row">{{ $val['row'] }}</th>
                            <td>{{ $val['stock_code'] }}</td>
                            <td>{{ $val['cost_code'] }}</td>
                            <td>{{ $val['brand_name'] }}</td>
                            <td>{{ $val['message'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>
@endsection
