@extends('admin_layouts.admin_layout')

@section('title', ' All Sliders')

@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="{{ route('admin.sliders.index') }}">Sliders</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">All Sliders</a></li>
            </ol>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Sliders</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>image</th>
                                        <th>title</th>
                                        <th>Active</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sliders as $slider)
                                            <tr class="text-center">
                                                <th>{{ $slider->id }}</th>
                                                <td><img src="{{ asset('assets/upload/images/slider_img/' . $slider->image) }}" alt="slider image" width="130px" height="40px"></td>
                                                <td>{{ $slider->title }}</td>
                                                <td> {{ $slider->active == '1' ? 'Active' : 'Not Active' }}</td>

                                                <td>
                                                    <div>


                                                        <form action="{{ route('admin.sliders.destroy', $slider) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('delete')

                                                            <a href="{{ route('admin.sliders.edit', $slider) }}"
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
