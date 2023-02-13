@extends('admin_layouts.admin_layout')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="{{ route('students.index') }}">Students</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">All Student</a></li>
                </ol>
            </div>
            <!-- row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Students</h4>
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
                                        @foreach ($students as $student)
                                                <tr class="text-center">
                                                    <th>{{ $student->id }}</th>
                                                    <td> <a href="{{ route('students.show', $student) }}" class="text-primary">{{ $student->fname }} {{ $student->lname }}</a></td>
                                                    <td>{{ $student->email }} </td>
                                                    <td>{{ $student->country }}</td>
                                                    <td>{{ $student->gender }}</td>
                                                    <td>{{ $student->birthdate }}</td>
                                                    <td>{{ $student->phone }}</td>
                                                    @if (Str::length($student->notes) >= 10)
                                                        <td>{{ Str::substr($student->notes, 0, 10) }}...</td>
                                                    @else
                                                        <td>{{ $student->notes }}</td>
                                                    @endif

                                                    <td>
                                                        <div>


                                                            <form action="{{ route('students.destroy', $student) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('delete')

                                                                <a href="{{ route('students.edit', $student) }}"
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
