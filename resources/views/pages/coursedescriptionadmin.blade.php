@extends("layout.adminlayout")

@section('keywords', "school, edit courses, display courses, admin, wd school")
@section('description', "Admin Edit Course Page")

@section('title', "Course Description Page")

@section('content')
<div class="d-flex justify-content-center">
    <h3 class="display-3 fw-bold map-header my-3 custom-border">
        Course Description
    </h3>

</div>

<form method="get" action="{{url("Course/$course->id/edit")}}">
<div class="container-fluid">
    <div class="row justify-content-center">
            <div class="col-lg-6 col-sm-12">
                <div class="card custom-border ">
                    <div class="card-body">
                        <h5 class="card-title"><input size="{{strlen($course->id)}}" name="course_id" type="text" autocomplete="off" value="{{$course->id}}" class=" input-group-text rounded" required></h5>

                        <div class="d-flex">

                            <h6 class="card-subtitle mb-2 text-muted"><input size="{{strlen($course->cCode)}}" name="course_code" type="text" autocomplete="off" value="{{$course->cCode}}" class=" me-2 input-group-text rounded" placeholder="Enter course Code" required></h6>

                            <h6 class="card-subtitle mb-2 text-muted"><input size="{{strlen($course->instructor)}}" name="course_instructor" type="text" autocomplete="off" value="{{$course->instructor}}" class=" me-2 input-group-text rounded" placeholder="Enter instructor name " required></h6>

                            <h6 class="card-subtitle mb-2 text-muted"><input size="{{strlen($course->date)}}" name="course_date" type="date" autocomplete="off" value="{{$course->sDate}}" class=" input-group-text rounded" placeholder="Enter course start date " required></h6>

                            </div>





                        <p class="card-text"><textarea rows="5" cols="30" name="course_description" type="text"  class=" form-control rounded" required>{{$course->cDesc}}</textarea>

                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-12  mt-sm-2 d-flex align-items-center">
                    <div class="card-body d-flex flex-column custom-border">

                        <button for="editcourse" type="submit" class="btn btn-primary mb-3" name="editcourse">Edit</button>


                        <button for="removecourse "type="submit" class="btn btn-danger " name="removecourse">Remove Course</button>


                    </div>

            </div>
    </div>
</div>
</form>

@endsection
