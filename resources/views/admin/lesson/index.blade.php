@extends('admin_layouts.admin_layout')

@section('title', ' All Lessons')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="{{ route('admin.lessons.index') }}">Lessons</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">All Lessons</a></li>
                </ol>
            </div>
            <!-- row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Lessons</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Course</th>
                                            <th>Type</th>
                                            <th>Description</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($lessons as $lesson)
                                            <tr class="text-center">
                                                <th>{{ $lesson->id }}</th>
                                                {{-- <td> <a href="{{ route('courses.show', $course) }}" class="text-primary">{{ $course->name }} </a></td> --}}
                                                <td>{{ $lesson->name }}</td>
                                                <td>{{ $lesson->course->name }}</td>
                                                <td>{{ $lesson->course->type }}</td>
                                                <td>{{ $lesson->description }}</td>

                                                <td>
                                                    <div>
                                                        <form action="{{ route('admin.lessons.destroy', $lesson) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('delete')

                                                            <a href="{{ route('admin.lessons.edit', $lesson) }}"
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
