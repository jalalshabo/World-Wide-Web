@extends('layout.app')
@section('title', "Contact Us")

@section('keywords', "contact, us, form for help, email us, wd school")
@section('description', "Contact Us Page for WD school")

@section('content')
    <div class="container text-center pt-5 py-3">
      <div class="row justify-content-center">


           <?php
          	if(isset($_GET["first-name"]))
            	{
             		$message = "First Name: ". $_GET["first-name"] . "\r\n" . "Last Name: ". $_GET["last-name"] . "\r\n" . "Last Name: ". $_GET["email"] . "\r\n\r\n" . $_GET["message"];
            		$bool = mail("shabo@uwindsor.ca",$_GET["subject"], $message);

            	}
          ?>

          @if(isset($_GET["first-name"]))

              <div class="col-9">
            	<h6 class="display-5 contact-us-form p-3">Success, Please wait 48 hours for response </h6>

          @else
              	<div class="col-6 col-md-4 col-lg-3">
         		 <h6 class="display-5 contact-us-form p-3">Contact Us</h6>

          @endif


        </div>
      </div>
    </div>

    <div class="container contact-us-form p-3 margin-fix-contact-us">
      <form
        action="/webdevelopmentschool/contactus"
        method="get"
        class="row g-3 needs-validation p-2 justify-content-start"
      >
        <div class="col-md-4 has-validated">
          <label for="firstname" class="form-label">First name</label>
          <input
            name="first-name"
            type="text"
            class="form-control"
            id="firstname"
            placeholder="Enter First Name"
            required
          />
        </div>
        <div class="col-md-4 has-validated">
          <label for="lastname" class="form-label">Last name</label>
          <input
            name="last-name"
            type="text"
            class="form-control"
            id="lastname"
            placeholder="Enter Last Name"
            required
          />
        </div>
        <div class="col-md-4">
          <label for="email" class="form-label">Email</label>
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend"
              ><i class="fas fa-envelope"></i
            ></span>
            <input
              name="email"
              type="email"
              class="form-control"
              id="email"
              aria-describedby="inputGroupPrepend"
              placeholder="youremail@email.com"
              required
            />
          </div>
        </div>

        <div class="col-md-3 has-validated">
          <label for="subject" class="form-label">Message Information</label>
          <input
            name="subject"
            type="text"
            class="form-control"
            id="subject"
            placeholder="Enter subject"
            required
          />
        </div>

        <div class="col-md-12 mt-2">
          <div class="has-validated">
            <div class="mb-3">
              <textarea
                name="message"
                minlength="50"
                rows="10"
                cols="50"
                class="form-control"
                id="message"
                placeholder="Enter message here"
                required
              ></textarea>
            </div>
          </div>
        </div>

        <div class="col-xl-1 col-lg-2">
          <button class="btn btn-primary" type="submit">Submit</button>
        </div>
        <div class="col-xl-11 col-lg-10">
          <div class="form-check pt-2">
            <input
              class="form-check-input"
              type="checkbox"
              value=""
              id="invalidCheck"
              required
            />
            <label class="form-check-label" for="invalidCheck">
              Agree to terms and conditions
            </label>
            <div class="invalid-feedback">
              You must agree before submitting.
            </div>
          </div>
        </div>
      </form>
    </div>




@endsection
