@extends('layout.app')
@section('title', "Interactive Map")

@section('keywords', "interactive, school map, enterence, exit, wd school")
@section('description', "School of web development interactive map featuring important landmarks")

@section('content')

    <div class="container-fluid py-4">
      <div class="d-flex justify-content-center">
        <h3 class="display-3 fw-bold map-header mb-3 custom-border">
          Map of WD Campus
        </h3>
        <!-- <div class="d-flex flex-column mr-2">
          <span class="fw-bold"> LEGEND </span>
          <span>
            <i style="color: yellow" class="fas fa-map-marker-alt"></i> : Enter
          </span>
          <span style="color: Tomato">
            <i class="fas fa-map-marker-alt"></i>
          </span>
        </div> -->
      </div>

      <div class="row">
        <div class="d-flex justify-content-center">
          <iframe
            title="Map of University of Web Development"
            loading="eager"
            class="map custom-border p-2 rounded"
            src="https://www.google.com/maps/d/u/0/embed?mid=1hh5RF4SsaZFSRsGt7ykMKNjm7osNzefs"
            width="90%"
            height="1000"
          ></iframe>
        </div>
      </div>
    </div>
@endsection
