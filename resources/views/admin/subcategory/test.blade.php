@extends('admin_layouts.admin_layout')

@section('title', ' Create Sub Category')

@section('content')


<div class="content-body">
    <div class="container-fluid">
        <div class="col-xl-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Select Size</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form>
                            <select class="default-select form-control wide mb-3">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                            <select class="default-select form-control wide mb-3">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                            <select class="default-select form-control wide">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div></div>

@endsection