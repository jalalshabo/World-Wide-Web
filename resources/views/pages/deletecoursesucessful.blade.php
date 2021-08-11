@section('title', "Course Delete Successful")
@section('keywords', "delete, edit courses, display courses, sucessful, wd school")
@section('description', "Admin successful delete of course")

    @extends(Auth::user()->email == 'admin@wdschool.ca' ? 'layout.adminlayout' : 'layout.postloginlayout')

    @section('content')
    <div class="container" style="margin: 442px auto">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card custom-border">
                    <div class="card-header">Course Delete</div>

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
