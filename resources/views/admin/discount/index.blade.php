@extends('admin_layouts.admin_layout')

@section('title', ' All Discounts')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="{{ route('admin.discounts.index') }}">Discounts</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">All Discounts</a></li>
                </ol>
            </div>
            <!-- row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Discounts</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Course</th>
                                            <th>Discount Code</th>
                                            <th>rate</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($discount_code as $dis_code)
                                                <tr class="text-center">
                                                    <th>{{ $dis_code->id }}</th>
                                                    <td>{{ $dis_code->course->name }} </td>
                                                    <td>{{ $dis_code->discount_code }}</td>
                                                    <td>{{ $dis_code->rate }}</td>

                                                    <td>
                                                        <div>


                                                            <form action="{{ route('admin.discounts.destroy', $dis_code) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('delete')

                                                                <a href="{{ route('admin.discounts.edit', $dis_code) }}"
                                                                    class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                                        class="fas fa-pencil-alt"></i></a>

                                                                <button type="submit"
                                                                    class="btn btn-danger shadow btn-xs sharp"><i
                                                                        class="fa fa-trash"></i></button>
                                                            </form>

                                                        </div>
                                                    </td>
                                                </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
