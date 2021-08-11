@extends("layout.adminlayout")
@section('title', "Display Users")
@section('keywords', "school, all users, display users, admin, wd school")
@section('description', "Admin edit users page")


@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-center mb-3">
      <h3 class="display-3 fw-bold map-header mb-3 custom-border me-3">
        All Users
      </h3>

      <form method="get" action="{{url("User/")}}">
        <div class=" p-3 d-flex mt-2  custom-border">



            <input for="usersearch" class="rounded me-2" name="usersearch" placeholder="       search users here">
            <button for="submit" type="submit" class="btn btn-primary">Search</button>


        </div>
    </form>

    </div>


    <table class="table custom-border rounded">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Email</th>

            </tr>
            </thead>
        <tbody>

            @if(Auth::user()->name != "admin")


                    {{header("Refresh:0; url=https://www.youtube.com/watch?v=SplJ7U0Jgtw/" )}}



            @elseif(isset($_GET['usersearch']))

                @foreach(\App\Http\Controllers\UsersController::usersearch($_GET['usersearch']) as $user)

                        @if($user->name != "admin")
                            <tr>
                                <th scope="row">{{$rownum = $rownum + 1}}</th>
                                <td> <a href="/User/{{$user->id}}">{{$user->name}}</a></td>
                                <td>{{$user->email}}</td>
                            </tr>

                        @endif

                @endforeach

            @else

                    @foreach($users as $user)
                        @if($user->name != "admin")
                            <tr>
                                <th scope="row">{{$rownum = $rownum + 1}}</th>
                                <td> <a class="text-decoration-none" href="/User/{{$user->id}}">{{$user->name}}</a></td>
                                <td>{{$user->email}}</td>
                            </tr>
                        @endif
                    @endforeach

            @endif

        </tbody>
    </table>





@endsection
