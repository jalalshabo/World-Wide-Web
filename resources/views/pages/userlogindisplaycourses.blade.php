@extends("layout.postloginlayout")
@section('title', "Enrolled Courses")
@section('keywords', "enrolled, courses, registered, currently, wd school")
@section('description', "Display all registered courses for user")


@section('content')

<div class="d-flex justify-content-center">
    <h3 class="display-3 fw-bold map-header mb-3 mt-3 custom-border">
      Enrolled Courses
    </h3>

  </div>
    <div class="container mb-5">
        <div class="row">
        @if(count($enrolled) > 0)
            @foreach($enrolled as $courses)
                @foreach($courses as $course)
                <div class="col-12">
                    <div class="card custom-border mb-2" >
                        <div class="card-body">
                        <h5 class="card-title"><a href="Course/{{$course->id}}">{{$course->id}}</a></h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$course->cCode}}</h6>
                        <p class="card-text">
                            {{$course->cDesc}}
                        </p>
                        </div>
                    </div>
                </div>
                @endforeach
            @endforeach
        @endif
            </div>
        </div>
    </div>

@endsection

