@extends("layout.adminlayout")
@section('title', "Edit User Details")
@section('keywords', "edit, user, remove, admin, wd school")
@section('description', "School of Web Development admin edit user page")


@section('content')
<div class="d-flex justify-content-center">
    <h3 class="display-3 fw-bold map-header my-3 custom-border">
        Course Description
    </h3>

</div>

@if(Auth::user()->name != "admin")

{{header("Refresh:0; url=https://www.youtube.com/watch?v=SplJ7U0Jgtw/" )}}
@endif

<form method="get" action="{{url("User/$user->id/edit")}}">
<div class="container">
    <div class="row justify-content-center ">
            <div class="col-lg-6 col-md-12 col-sm-12 mx-4 mb-2">

                    <div class=" d-flex flex-column custom-border p-3">

                        <div class="d-flex align-items-center">
                            <i class="fas fa-user mb-2 me-1" style="font-size: 2.5rem"></i><input id="name" size="{{strlen($user->name)}}" name="user_name" type="text" autocomplete="off" value="{{$user->name}}" class=" input-group-text rounded mb-2" required>
                        </div>

                        <div class="d-flex align-items-center">
                            <i class="fas fa-at mt-1 me-1" style="font-size: 2.5rem"></i> <input id="name" size="{{strlen($user->email)}}" name="user_email" type="text" autocomplete="off" value="{{$user->email}}" class=" input-group-text rounded" required>
                        </div>

                    </div>
            </div>


            <div class="col-lg-4 col-sm-12  mt-sm-1 align-items-center">
                    <div class="card-body d-flex flex-column custom-border">

                        <button for="edituser" type="submit" class="btn btn-primary mb-3" name="edituser">Edit</button>


                        <button for="removeuser "type="submit" class="btn btn-danger " name="removeuser">Remove User</button>


                    </div>

            </div>
    </div>
</div>
</form>

@endsection
