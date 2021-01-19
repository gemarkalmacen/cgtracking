{{-- Send data to layout defining the current page and data  --}}
@extends('layouts.staff.main', ['page' => 'subcategories/tree', 'data' => []])
@section('title',__('staff/titles.categories_view'))

@section('content')

    <!--begin::Card-->
    <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-icon">                    
                    <span class="card-icon">
                        <i class="fas fa-layer-group"></i>
                    </span>
                    <h3 class="card-label">Tree view</h3> 
                </h3>
            </div>
        </div>
        <div class="card-body">        
            <div id="kt_tree_1" class="tree-demo">
                <ul>               
                    @foreach( $treeview AS $categories )
                        <li  data-jstree='{ "opened" : true }'>
                            <a href="javascript:;">{{ $categories->name }} </a>
                            @include ('staff.subcategories.partials.level',['subcategories' => $categories->subcategories])                           
                        </li>
                    @endforeach            
                </ul>
            </div>         
        </div>
        <div class="card-footer">
            <div class="kt-form__actions">
                <button type="button"
                        onclick="window.location.href='{{ route('staff.subcategories.index') }}'"
                        class="btn btn-secondary">{{ __('staff/buttons.cancel') }}
                </button>
            </div>
        </div>
    </div>
    <!--end::Card-->
@endsection


@section('plugin_css')
<link href="{{ url('staff/assets/plugins/custom/jstree/jstree.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('plugin_script')
<script src="{{ url('staff/assets/plugins/custom/jstree/jstree.bundle.js') }}"></script>
@endsection