@extends('admin_layouts.admin_layout')

@section('title', ' Gallery')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="{{ route('admin.galleries.index') }}">Gallery</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Gallery</a></li>
                </ol>
            </div>
            <!-- row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Gallery</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($filenames as $data)
                                            <tr class="text-center">
                                                <th>{{ $data->id }}</th>
                                                <td><img src="{{ asset('assets/upload/images/gallery_img/' . $data->filename) }}" alt="Image" width="80px" height="40px"></td>
                                                <td>
                                                    <div>
                                                        <form action="{{ route('admin.galleries.destroy', $data) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')

                                                        <a href="{{ route('admin.galleries.edit', $data) }}"
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
