@extends('layout.app')

@section('keywords', "school, information, important, dates, upcoming, semester, wd school")
@section('description', "School of Web Development landing page")

@section('title', "School of Web Development")


@section('content')
    <div
      id="showcase_carousel"
      class="carousel slide carousel-dark mx-auto my-3 cc-wrapper"
      data-bs-ride="carousel"
    >
      <ol class="carousel-indicators">
        <li
          data-bs-target="#showcase_carousel"
          data-bs-slide-to="0"
          class="active"
        ></li>
        <li
          class="active"
          data-bs-target="#showcase_carousel"
          data-bs-slide-to="1"
        ></li>
        <li data-bs-target="#showcase_carousel" data-bs-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active" data-mdb-interval="1000">
          <div class="carousel-caption">
            <p class="p-2">
              Striving for a better tomorrow through community action
            </p>
          </div>
          <img
            class="d-block w-100"
            src="images/showcase1-e.png"
            alt="First slide"
            style="object-position: 35% 32%"
          />
        </div>
        <div class="carousel-item" data-mdb-interval="1000">
          <div class="carousel-caption">
            <p class="p-2">
              Always working to improve ourselfs and others
            </p>
          </div>
          <img
            class="d-block w-100"
            src="images/showcase2.jpg"
            alt="Second slide"
          />
        </div>
        <div class="carousel-item" data-mdb-interval="1000">
          <div class="carousel-caption">
            <p class="p-2">
              Greatness through hardword, dedication, and perseverance
            </p>
          </div>
          <img
            class="d-block w-100"
            src="images/showcase3.jpg"
            alt="Third slide"
          />
        </div>
      </div>
    </div>

    <div class="container-fluid cc-wrapper">
      <div class="row justify-content-around">
        <div class="card custom-border  mb-3 col-md-5 col-sm-12">
          <img src="images/tempimage.png" class="card-img-top mt-2" alt="..." />
          <div class="card-body">
            <h5 class="card-title fw-bold">Late Payments</h5>
            <p class="card-text">
              Late payment deadline is arriving, pay your fees now! The
              university will take legal action and you COULD and WILL go to
              jail if you dont pay up! We know where you live..
            </p>
            <p class="card-text">
              <small class="text-muted">Last updated 2 days ago</small>
            </p>
          </div>
        </div>

        <div class="card custom-border  mb-3 col-md-5 col-sm-12">
          <img src="images/tempimage.png" class="card-img-top mt-2" alt="..." />
          <div class="card-body">
            <h5 class="card-title fw-bold">Student enrollment begins NOW!</h5>
            <p class="card-text">
              Student enrollment for the start for 2021 has begun
              <a class="" href="#">click here</a> and sign up for classes now if
              you miss the deadline you are still legally obligated to pay your
              fees!
            </p>
            <p class="card-text">
              <small class="text-muted position-relative fixed-bottom"
                >Last updated 2 months ago</small
              >
            </p>
          </div>
        </div>
      </div>
      <div class="row justify-content-around">
        <div class="card custom-border  mb-3 col-md-5 col-sm-12">
          <img
            src="images/tempimage.png"
            class="card-img-top mt-2"
            alt="..."
            style="max-width: 500px; max-height: 250px"
          />
          <div class="card-body">
            <h5 class="card-title fw-bold">Student Community Support</h5>
            <p class="card-text">
              Were giving back to the students, come to HTML Hall today today
              and get a free coffee and donut, brought to you by the student
              council committee of congress assembly delegation.
            </p>
            <p class="card-text">
              <small class="text-muted">Last updated 3 months ago</small>
            </p>
          </div>
        </div>

        <div class="card custom-border mb-3 col-md-5 col-sm-12">
          <img src="images/tempimage.png" class="card-img-top mt-2" alt="..." />
          <div class="card-body">
            <h5 class="card-title fw-bold">
              Student Highlight of the Month: Ethmean Winer
            </h5>
            <p class="card-text">
              Today we recognize Ethmean Winer of Feed the Homeless project,
              what began as a small side project of his social work class, has
              grown into a nation wide fundraiser providing food and shelter to
              homeless through our city and province.
            </p>
            <p class="card-text">
              <small class="text-muted">Last updated 4 months ago</small>
            </p>
          </div>
        </div>
      </div>
    </div>
@endsection
