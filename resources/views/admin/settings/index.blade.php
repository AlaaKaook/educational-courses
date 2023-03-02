@extends('admin_layouts.admin_layout')

@section('title', ' Settings')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="{{ route('admin.settings.index') }}">Settings</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Settings</a></li>
                </ol>
            </div>
            <!-- row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Settings</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Logo</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Search</th>
                                            <th>About</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($settings as $setting)
                                            <tr class="text-center">
                                                <th>{{ $setting->id }}</th>
                                                <td><img src="{{ asset('assets/upload/images/logo/' . $setting->logo) }}" alt="Logo" width="130px" height="40px"></td>
                                                <td>{{ $setting->email }}</td>
                                                <td>{{ $setting->phone }}</td>

                                                @if (Str::length($setting->search) >= 10)
                                                    <td>{{ Str::substr($setting->search, 0, 10) }}...</td>
                                                @else
                                                    <td>{{ $setting->search }}</td>
                                                @endif

                                                @if (Str::length($setting->about) >= 10)
                                                    <td>{{ Str::substr($setting->about, 0, 10) }}...</td>
                                                @else
                                                    <td>{{ $setting->about }}</td>
                                                @endif

                                                <td>
                                                    <div>


                                                        <form action="{{ route('admin.settings.destroy', $setting) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('delete')

                                                            <a href="{{ route('admin.settings.edit', $setting) }}"
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
