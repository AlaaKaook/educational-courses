@extends('admin_layouts.admin_layout')

@section('title', ' All Teachers')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="{{ route('admin.teachers.index') }}">Teachers</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">All Teachers</a></li>
                </ol>
            </div>
            <!-- row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Teachers</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Country</th>
                                            <th>Gender</th>
                                            <th>Birthdate</th>
                                            <th>Phone</th>
                                            <th>Notes</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($teachers as $teacher)
                                                <tr class="text-center">
                                                    <th>{{ $teacher->id }}</th>
                                                    <td> <a href="{{ route('admin.teachers.show', $teacher) }}" class="text-primary">{{ $teacher->fname }} {{ $teacher->lname }}</a></td>
                                                    <td>{{ $teacher->email }} </td>
                                                    <td>{{ $teacher->country }}</td>
                                                    <td>{{ $teacher->gender }}</td>
                                                    <td>{{ $teacher->birthdate }}</td>
                                                    <td>{{ $teacher->phone }}</td>
                                                    @if (Str::length($teacher->notes) >= 10)
                                                        <td>{{ Str::substr($teacher->notes, 0, 10) }}...</td>
                                                    @else
                                                        <td>{{ $teacher->notes }}</td>
                                                    @endif

                                                    <td>
                                                        <div>


                                                            <form action="{{ route('admin.teachers.destroy', $teacher) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('delete')

                                                                <a href="{{ route('admin.teachers.edit', $teacher) }}"
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
