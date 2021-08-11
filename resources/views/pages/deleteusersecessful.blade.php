@section('title', "User Delete Success")
@section('keywords', "delete, edit user, display user, sucessful, wd school")
@section('description', "Admin successful delete of user")

    @extends(Auth::user()->email == 'admin@wdschool.ca' ? 'layout.adminlayout' : 'layout.postloginlayout')

    @section('content')
    <div class="container" style="margin: 442px auto">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card custom-border">
                    <div class="card-header">User Delete</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        Success
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
