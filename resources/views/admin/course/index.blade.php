@extends('admin_layouts.admin_layout')

@section('title', ' All Courses')

@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="{{ route('admin.courses.index') }}">courses</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">All courses</a></li>
            </ol>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Courses</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Sub Category</th>
                                        <th>Teacher</th>
                                        <th>Cost</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($courses as $course)
                                            <tr class="text-center">
                                                <th>{{ $course->id }}</th>
                                                <td> <a href="{{ route('admin.courses.show', $course) }}" class="text-primary">{{ $course->name }} </a></td>
                                                <td>{{ $course->category->name }}</td>
                                                <td>{{ $course->subcategory->name }}</td>
                                                <td>{{ $course->teacher->fname }} {{ $course->teacher->lname }}</td>
                                                <td>{{ $course->cost }}</td>

                                                <td>
                                                    <div>


                                                        <form action="{{ route('admin.courses.destroy', $course) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('delete')

                                                            <a href="{{ route('admin.courses.edit', $course) }}"
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
