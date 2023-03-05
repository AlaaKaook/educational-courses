@extends('admin_layouts.admin_layout')

@section('title', 'Messages')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="{{ route('admin.messages.index') }}">Messages</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Messages</a></li>
                </ol>
            </div>
            <!-- row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Messages</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>From Email</th>
                                            <th>To Email</th>
                                            <th>Message</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($messages as $message)
                                                <tr class="text-center">
                                                    <th>{{ $message->id }}</th>

                                                    <td> <a href="{{ route('admin.messages.show', $message) }}" class="text-primary">{{ $message->name }}</a></td>

                                                    <td>{{ $message->from_email }}</td>
                                                    <td>{{ $message->to_email }}</td>

                                                    @if (Str::length($message->content) >= 15)
                                                        <td>{{ Str::substr($message->content, 0, 15) }}...</td>
                                                    @else
                                                        <td>{{ $message->content }}</td>
                                                    @endif

                                                    <td>
                                                        <div>


                                                            <form action="{{ route('admin.messages.destroy', $message) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('delete')

                                                                {{-- <a href="{{ route('admin.messages.edit', $message) }}"
                                                                    class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                                        class="fas fa-pencil-alt"></i></a> --}}

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
