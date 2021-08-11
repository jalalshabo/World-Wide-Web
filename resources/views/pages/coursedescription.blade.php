@extends("layout.postloginlayout")
@section('keywords', "school, courses, display courses, course information, wd school, add course")
@section('description', "Student add or remove course page")


@section('content')
<div class="d-flex justify-content-center">
    <h3 class="display-3 fw-bold map-header my-3 custom-border">
        Course Description
    </h3>

</div>

@if (isset($_GET['addcourse']))

{{\App\Http\Controllers\CoursesController::addcourse($useremail, $course->id)}}
    {{header("Refresh:0; url=/Course/$course->id" )}}

@elseif(isset($_GET['removecourse']))

{{\App\Http\Controllers\CoursesController::removecourse($useremail, $course->id)}}
    {{header("Refresh:0; url=/Course/$course->id" )}}

@endif

<div class="container-fluid">
    <div class="row justify-content-center">
            <div class="col-6">
                <div class="card custom-border ">
                    <div class="card-body">
                        <h5 class="card-title">{{$course->id}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$course->cCode}}</h6>
                        <p class="card-text">
                            {{$course->cDesc}}
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <form method="get" action="{{url("Course/$course->id")}}">
                    <div class="card-body d-flex flex-column custom-border">

                        @if ($course_taken == 1)

                        <button class="btn btn-success mb-3 active" name="addcourse" disabled>Currently Registered</button>

                        @elseif($course_taken == 0)

                        <button for="addcourse" type="submit" class="btn btn-primary mb-3" name="addcourse">Add Course</button>

                        @endif
                        <button for="removecourse "type="submit" class="btn btn-danger " name="removecourse">Remove Course</button>


                    </div>
                </form>
            </div>











    </div>
</div>

@endsection
