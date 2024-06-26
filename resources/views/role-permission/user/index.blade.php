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
                        <h4>Users
                            <a href="{{ url('users/create')}}" class="btn btn-primary float-end" style="background-color: black; color: white;" >Add User</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thred>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Roles</th>
                                    <th>Action</th>
                                </tr>
                            </thred>
                            <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if (!empty($user->getRoleNames()))
                                    @foreach($user->getRoleNames() as $rolename)
                                    <label class="badge" style="background-color: black; color: white;">{{$rolename}}</label>
                                    @endforeach
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('users/' . $user->id . '/edit') }}" class="btn" style="background-color: black; color: white;">Edit</a>
                                    <a href="{{ url('users/' . $user->id . '/delete') }}"class="btn btn-danger mx-3">Delete</a>
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