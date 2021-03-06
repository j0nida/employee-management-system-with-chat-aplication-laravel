@extends('layouts.adminLayout')

@section('content')

    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h5 class="text-center mt-2">My Profile</h5>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col text-center mx-auto">
                                    <img src="{{ $user->photo }}" class="rounded-circle img-fluid" alt=""
                                        style="box-shadow: 2px 4px rgba(0,0,0,0.1)">
                                </div>
                            </div>
                            <table class="table profile-table table-hover">
                                <tr>
                                    <td>Full Name</td>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{ $user->email }}</td>
                                </tr>

                                <tr>
                                    <td>Role</td>
                                    <td>{{ $user->role }}</td>
                                </tr>

                                <tr>
                                    <td>Join Date</td>
                                    <td>{{ $user->created_at->format('d M, Y') }}</td>
                                </tr>
                            </table>
                        </div>
                        {{-- <div class="card-footer text-center">
                        <a href="{{ route('employee.profile-edit', $employee->id) }}" class="btn btn-flat btn-primary">Edit Profile</a>
                    </div> --}}
                    </div>
                </div>
            </div>

        </div>
    </section>


@endsection
