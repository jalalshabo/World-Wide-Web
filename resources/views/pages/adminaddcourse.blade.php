@extends("layout.adminlayout")
@section('title', "Add Course")
@section('keywords', "new course, add, admin, courses, wd school")
@section('description', "Admin add new course page")


@section('content')
<div class="d-flex justify-content-center">
    <h3 class="display-3 fw-bold map-header my-3 custom-border">
        Add Course
    </h3>

</div>

<form method="get" action="{{url("Course/create")}}">
<div class="container-fluid">
    <div class="row justify-content-center">
            <div class="col-lg-6 col-sm-12">
                <div class="card custom-border ">
                    <div class="card-body">
                        <h5 class="card-title"><input size="49" name="course_id" type="text" autocomplete="off" value="" class=" input-group-text rounded" placeholder="Enter course title" required ></h5>

                        <div class="d-flex">

                        <h6 class="card-subtitle mb-2 text-muted"><input size="15" name="course_code" type="text" autocomplete="off" value="" class=" me-2 input-group-text rounded" placeholder="Enter course Code" required></h6>

                        <h6 class="card-subtitle mb-2 text-muted"><input size="" name="course_instructor" type="text" autocomplete="off" value="" class=" me-2 input-group-text rounded" placeholder="Enter instructor name " required></h6>

                        <h6 class="card-subtitle mb-2 text-muted"><input size="" name="course_date" type="date" autocomplete="off" value="" class=" input-group-text rounded" placeholder="Enter course start date " required></h6>

                        </div>

                        <p class="card-text"><textarea rows="5" cols="30" name="course_description" type="text"  class=" form-control rounded" placeholder="Enter Description" required></textarea>

                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-12  mt-sm-2 d-flex align-items-center">
                    <div class="card-body d-flex flex-column custom-border">

                        <button for="addcourse" type="submit" class="btn btn-primary" name="addcourse">Add new course</button>

                    </div>

            </div>
    </div>
</div>
</form>

@endsection
