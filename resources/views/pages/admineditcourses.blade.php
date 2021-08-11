@extends("layout.adminlayout")
@section('title', "View All Courses")
@section('keywords', "school, edit courses, display courses, admin, wd school")
@section('description', "Admin Edit Course Page")



@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-center mb-3">
        <h3 class="display-3 fw-bold map-header mb-3 custom-border me-3">
            All Courses
        </h3>

        <form method="get" action="{{url("Course/")}}">
            <div class=" p-3 d-flex mt-2  custom-border">



                <input for="coursesearch" class="rounded me-2" name="coursesearch" placeholder="     search courses here">
                <button for="submit" type="submit" class="btn btn-primary">search</button>



            </div>
        </form>

    </div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            @if(isset($_GET['coursesearch']))


            @foreach(\App\Http\Controllers\CoursesController::searchcourse($_GET['coursesearch']) as $course)
                    <div class="custom-border col-12 mb-2">
                        <div class="card custom-border-bg border-0">
                            <div class="card-body custom-border-bg">
                                <h5 class="card-title"><a href="Course/{{$course->id}}">{{$course->id}}</a></h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{$course->cCode}}</h6>
                                <p class="card-text">
                                    {{$course->cDesc}}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach


            @else
                @foreach($courses as $course)
                    <div class="custom-border p-2 col-sm-12 col-md-12 col-lg-4 col-xl-3 me-3 mb-2">
                        <div class="card custom-border-bg border-0" style="width: 18rem;">
                            <div class="card-body custom-border-bg">
                                <h5 class="card-title"><a href="Course/{{$course->id}}">{{mb_strimwidth($course->id, 0, 20, "...")}}</a></h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{$course->cCode}}</h6>
                                <p class="card-text">
                                    {{mb_strimwidth($course->cDesc, 0, 75, "...")}}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

@endsection
