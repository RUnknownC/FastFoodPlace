<x-app-web-layout>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Create Permissions
                            <a href="{{ url('permissions') }}" class="btn btn-primary float-end" style="background-color: black; color: white;">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <form action="{{ url('permissions') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="">Permission Name</label>
                                <input type="text" name="name" class="form-control"/>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary" style="background-color: black; color: white;">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-web-layout>