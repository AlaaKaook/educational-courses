@extends('admin_layouts.admin_layout')

@section('title', ' All Categories')

@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="{{ route('categories.index') }}">Categories</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">All Categories</a></li>
            </ol>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Categories</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>name</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                            <tr class="text-center">
                                                <th>{{ $category->id }}</th>
                                                <td> <a href="{{ route('categories.show', $category) }}" class="text-primary">{{ $category->name }}</a></td>

                                                @if (Str::length($category->description) >= 20)
                                                    <td>{{ Str::substr($category->description, 0, 20) }}...</td>
                                                @else
                                                    <td>{{ $category->description }}</td>
                                                @endif

                                                <td>
                                                    <div>


                                                        <form action="{{ route('categories.destroy', $category) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('delete')

                                                            <a href="{{ route('categories.edit', $category) }}"
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
