@extends('index')
{{-- component parameter --}}
@section('title', 'Product')
@section('page_title', 'Product Data')
@section('user_name', 'Administrator')
{{-- main data parameter --}}
@section('content')
    @if($action == 'view')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <h4 class="m-b-30 m-t-0">
                            <a href="" class="btn btn-success"><i class="mdi mdi-plus"></i> Add Product</a>
                        </h4>
                        <table id="datatable-custom-table" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Product Name</th>
                                <th>Supplier</th>
                                <th>Qty</th>
                                <th class="action">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- End Row -->
    @endif
    @isset($product_id)
        <p>Product id exists : {{ $product_id }}</p>
    @endisset
@endsection
@push('custom_js')
    <script>
        var ajaxUrl = '/api/v1/supplier/get'; 
        var ajaxApiToken = 'Bearer 7f9d683f2ec94ab9614ff204ac2be5591d7c84a3710895c0c477d3bb9f3ef2d93b3562ec94b2f0859c2e9122a70845da1d26193f2bb10f7743ddd0338394ea69';
        var ajaxOutputColumn = ["result_order","supplier_name","supplier_phone","supplier_address","result_action"];
        var ajaxAction = '<a href="#" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i> edit</a> <a href="#" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> delete</a>';
    </script>
    <script src="/assets/customjs/data/jsDataController.js"></script>
@endpush