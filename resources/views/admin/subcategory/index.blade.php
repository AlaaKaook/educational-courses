@extends('admin_layouts.admin_layout')

@section('title', ' All Sub Categories')

@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="{{ route('admin.subcategories.index') }}">Sub Categories</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">All Sub Categories</a></li>
            </ol>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Sub Categories</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subcategories as $subcategory)
                                            <tr class="text-center">
                                                <th>{{ $subcategory->id }}</th>

                                                <td> <a href="{{ route('admin.subcategories.show', $subcategory) }}" class="text-primary">{{ $subcategory->name }}</a></td>

                                                <td>{{$subcategory->category->name}}</td>


                                                @if (Str::length($subcategory->description) >= 20)
                                                    <td>{{ Str::substr($subcategory->description, 0, 20) }}...</td>
                                                @else
                                                    <td>{{ $subcategory->description }}</td>
                                                @endif

                                                <td>
                                                    <div>


                                                        <form action="{{ route('admin.subcategories.destroy', $subcategory) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('delete')

                                                            <a href="{{ route('admin.subcategories.edit', $subcategory) }}"
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
