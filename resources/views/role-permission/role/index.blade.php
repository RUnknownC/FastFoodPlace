<x-app-web-layout>

    @include('role-permission.nav-links')

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">

                @if (session('status'))
                    <div class="alert alert-succes">{{ session('status') }}</div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4>Roles
                            <a href="{{ url('roles/create')}}" class="btn btn-primary float-end" style="background-color: black; color: white;">Add role</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thred>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thred>
                            <tbody>
                                @foreach ($roles as $role)
                                <tr>
                                    <td>{{ $role->id }}</td>
                                    <td>{{ $role->name}}</td>
                                    <td>
                                        <a href ="{{ url('roles/'.$role->id.'/give-permissions') }}" class="btn btn-success" style="background-color: black; color: white;">
                                            Add / Edit Role Permission
                                        </a>

                                        <a href="{{ url('roles/'.$role->id.'/edit') }}" class="btn btn-success" style="background-color: black; color: white;">Edit</a>
                                        <a href="{{ url('roles/'.$role->id.'/delete')}}" class="btn btn-danger mx-2">Delete</a>
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

</x-app-web-layout>