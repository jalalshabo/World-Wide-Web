@extends('layout.app')
@section('title', "Faculty and Staff")

@section('keywords', "faculty, staff, view images of staff, wd school, contact info")
@section('description', "Display all wd faculty and staff with contact information")

@section('content')
<div class="container-fluid py-5" style="margin-bottom: 290px">
        <div class="d-flex justify-content-center">
          <h3 class="display-3 fw-bold map-header mb-3 custom-border px-3">
            Faculty And Staff
          </h3>
        </div>

<div class="accordion mt-3" id="accordion">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button
        class="accordion-button collapsed"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#collapseOne"
        aria-expanded="true"
        aria-controls="collapseOne"
      >
        Department of HTML
      </button>
    </h2>
    <div
      id="collapseOne"
      class="accordion-collapse collapse"
      aria-labelledby="headingOne"
      data-bs-parent="#staff"
    >
      <div class="accordion-body">
        <div class="accordion-item">
          <h2 class="accordion-header" id="nestedHeadingOne">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseOneofOne"
              aria-expanded="false"
              aria-controls="collapseOneofOne"
            >
              Dean of HTML
            </button>
          </h2>
          <div
            id="collapseOneofOne"
            class="accordion-collapse collapse"
            aria-labelledby="nestedHeadingOne"
          >
            <div class="accordion-body container">
              <div class="row justify-content-between">
                <div class="col-12 col-lg-6">
                  <p class="fw-bold mb-1">Contact Information:</p>
                  <p class="m-0">
                    Dr. Ross Geller, Dean and professor of HTML
                  </p>
                  <p class="m-0">rossgeller@gmail.com</p>
                  <p class="">123-234-3456</p>
                  <p class="fw-bold mb-1">Education:</p>
                  <p class="m-0">
                    PhD. Computer Science, Joker's University
                  </p>
                </div>
                <div class="col-12 col-lg-6">
                  <img
                    src="/images/faculty-staff-images/image1.jpg"
                    alt="Ross Geller"
                    width="400px"
                    height="400px"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="nestedHeadingTwo">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseTwoofOne"
              aria-expanded="false"
              aria-controls="collapseTwoofOne"
            >
              Associate Dean of HTML
            </button>
          </h2>
          <div
            id="collapseTwoofOne"
            class="accordion-collapse collapse"
            aria-labelledby="nestedHeadingTwo"
          >
            <div class="accordion-body container">
              <div class="row justify-content-between">
                    <div class="col-12 col-lg-6">
                        <p class="fw-bold mb-1">Contact Information:</p>
                        <p class="m-0"> Dr. Chris Chen, Associate Dean of HTML</p>
                        <p class="m-0">chris12@gmail.com</p>
                        <p class="">413-134-4867</p>
                        <p class="fw-bold mb-1">Education:</p>
                        <p class="m-0"> B.Sc. M.Sc. in Applied Computing
                        M.S. (Computer Science) - Michigan </p>
                    </div>
                    <div class="col-12 col-lg-6">
                            <img
                            src="/images/faculty-staff-images/image2.jpg"
                            alt="Chris Chen"
                            width="400px"
                            height="400px"
                            />
                    </div>
                </div>
            </div>
          </div>
        </div>



        <div class="accordion-item">
          <h2 class="accordion-header" id="nestedHeadingThree">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseThreeofOne"
              aria-expanded="false"
              aria-controls="collapseThreeofOne"
            >
              Secretory of HTML
            </button>
          </h2>
          <div
            id="collapseThreeofOne"
            class="accordion-collapse collapse"
            aria-labelledby="nestedHeadingThree"
          >
              <div class="accordion-body container">
                <div class="row justify-content-between">
                  <div class="col-12 col-lg-6">
                    <p class="fw-bold mb-1">Contact Information:</p>
                    <p class="m-0">Dr. Hank Evans, Secretory of HTML</p>
                    <p class="m-0">hankev@gmail.com</p>
                    <p class="">452-567-4566</p>
                    <p class="fw-bold mb-1">Education:</p>
                    <p class="m-0">M.S. Computer science, University of Universities</p>
                  </div>

                  <div class="col-12 col-lg-6">
                    <img
                      src="/images/faculty-staff-images/image3.jpg"
                      alt="Hank Evans"
                      width="400px"
                      height="400px"
                    />
                  </div>
                </div>
            </div>
        </div>




        <div class="accordion-item">
          <h2 class="accordion-header" id="nestedHeadingFour">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseFourofOne"
              aria-expanded="false"
              aria-controls="collapseFourofOne"
            >
              Assistant professor of HTML
            </button>
          </h2>
          <div
            id="collapseFourofOne"
            class="accordion-collapse collapse"
            aria-labelledby="nestedHeadingFour"
          >
            <div class="accordion-body container">
              <div class="row justify-content-between">
                <div class="col-12 col-lg-6">
                  <p class="fw-bold mb-1">Contact Information:</p>
              <p class="m-0">
                Dr. Jason Alhadidi, Assistant professor of HTML
              </p>
              <p class="m-0">jsoa@gmail.com</p>
              <p class="">456-733-556</p>
              <p class="fw-bold mb-1">Education:</p>
              <p class="m-0">PhD. Computer Science and Web development </p>
              </div>
              <div class="col-12 col-lg-6">
                <img
                  src="/images/faculty-staff-images/image4.jpg"
                  alt="Jason Alhadidi"
                  width="400px"
                  height="400px"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button
        class="accordion-button collapsed"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#collapseTwo"
        aria-expanded="false"
        aria-controls="collapseTwo"
      >
        Department of CSS
      </button>
    </h2>
    <div
      id="collapseTwo"
      class="accordion-collapse collapse"
      aria-labelledby="headingTwo"
      data-bs-parent="#staff"
    >
      <div class="accordion-body">
        <div class="accordion-item">
          <h2 class="accordion-header" id="nestedHeadingFive">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseFiveofOne"
              aria-expanded="false"
              aria-controls="collapseFiveofTwo"
            >
              Dean of CSS
            </button>
          </h2>
          <div
            id="collapseFiveofOne"
            class="accordion-collapse collapse"
            aria-labelledby="nestedHeadingFive"
          >
            <div class="accordion-body container">
              <div class="row justify-content-between">
                <div class="col-12 col-lg-6">
                  <p class="fw-bold mb-1">Contact Information:</p>
              <p class="m-0">Dr. Don John, Dean of CSS</p>
              <p class="m-0">donjohn@gmail.com</p>
              <p class="">6565-435-2564</p>>
              <p class="fw-bold mb-1">Education:</p>
              <p class="m-0">PhD. Computer Science specialization in CSS</p>
                </div>
                <div class="col-12 col-lg-6">
                  <img
                    src="/images/faculty-staff-images/image5.jpg"
                    alt="Don John"
                    width="400px"
                    height="400px"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="nestedHeadingSix">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseSixofOne"
              aria-expanded="false"
              aria-controls="collapseSixofTwo"
            >
              Associate Dean of CSS
            </button>
          </h2>
          <div
            id="collapseSixofOne"
            class="accordion-collapse collapse"
            aria-labelledby="nestedHeadingSix"
          >
          <div class="accordion-body container">
            <div class="row justify-content-between">
              <div class="col-12 col-lg-6">
                <p class="fw-bold mb-1">Contact Information:</p>
              <p class="m-0">Dr. John Doe, Associate Dean of CSS</p>
              <p class="m=0">jdeo@gmail.com</p>
              <p class="">999-888-7777</p>
              <p class="fw-bold mb-1">Education:</p>
              <p class="m-0">Phd. Computer Science from </p>
              </div>
              <div class="col-12 col-lg-6">
                <img
                  src="/images/faculty-staff-images/image6.jpg"
                  alt="John Doe"
                  width="400px"
                  height="400px"
                />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="nestedHeadingSeven">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseSevenofOne"
              aria-expanded="false"
              aria-controls="collapseSevenofTwo"
            >
              Secretory of CSS
            </button>
          </h2>
          <div
            id="collapseSevenofOne"
            class="accordion-collapse collapse"
            aria-labelledby="nestedHeadingsEVEN"
          >
            <div class="accordion-body container">
              <div class="row justify-content-between">
                <div class="col-12 col-lg-6">
                  <p class="fw-bold mb-1">Contact Information:</p>
              <p class="m-0">Dr. Nick Fury, Secretory of CSS</p>
              <p class="m-0">fnick@gmail.com</p>
              <p class="">012=-121-2344</p>
              <p class fw-bold mb-1>Education:</p>
              <p class="m-0">PhD. Computer Science and Web development </p>
                </div>
                <div class="col-12 col-lg-6">
                  <img
                    src="/images/faculty-staff-images/image7.jpg"
                    alt="Nick Fury"
                    width="400px"
                    height="400px"
                  />
              </div>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="nestedHeadingEight">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseEightofOne"
              aria-expanded="false"
              aria-controls="collapseEightofTwo"
            >
              Assistant professor of CSS
            </button>
          </h2>
          <div
            id="collapseEightofOne"
            class="accordion-collapse collapse"
            aria-labelledby="nestedHeadingEight"
          >
            <div class="accordion-body container">
              <div class="row justify-content-between">
                <div class="col-12 col-lg-6">
                    <p class="fw-bold mb-1">Contact Information:</p>
                    <p class="m-0">Dr. Bufama Asfia, Assistant professor of CSS</p>
                    <p class="m-0">basfia@gmail.com</p>
                    <p class="">226-506-7928</p>
                    <p class="fw-bold mb-1">Education:</p>
                    <p class="m-0">PhD. Computer Science Web Security, The one and only
              university </p>
              </div>
                <div class="col-12 col-lg-6">
                  <img
                    src="/images/faculty-staff-images/image8.jpg"
                    alt="Bufama Asfia"
                    width="400px"
                    height="400px"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button
        class="accordion-button collapsed"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#collapseThree"
        aria-expanded="false"
        aria-controls="collapseThree"
      >
        Department of Javascript
      </button>
    </h2>
    <div
      id="collapseThree"
      class="accordion-collapse collapse"
      aria-labelledby="headingThree"
      data-bs-parent="#staff"
    >
      <div class="accordion-body">
        <div class="accordion-item">
          <h2 class="accordion-header" id="nestedHeadingNine">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseNineofOne"
              aria-expanded="false"
              aria-controls="collapseNineofThree"
            >
              Dean of Javascript
            </button>
          </h2>
          <div
            id="collapseNineofOne"
            class="accordion-collapse collapse"
            aria-labelledby="nestedHeadingNine"
          >
            <div class="accordion-body container">
              <div class="row justify-content-between">
                <div class="col-12 col-lg-6">
                  <p class="fw-bold mb-1">Contact Information:</p>
              <p class="m-0">Dr. Gojo Saturo, Dean of Javascript</p>
              <p class=",-0">saturogojo@gmail.com</p>
              <p class="">734-237-3758</p>
              <p class="fw-bold mb-1">Education:</p>
              <p class="m-0">PhD. Computer Science, University of Talented People </p>
                </div>
                  <div class="col-12 col-lg-6">
                  <img
                    src="/images/faculty-staff-images/image9.jpg"
                    alt="Gojo Saturo"
                    width="400px"
                    height="400px"
                  />
                  </div>
              </div>
            </div>
          </div>
        </div>


        <div class="accordion-item">
          <h2 class="accordion-header" id="nestedHeadingTen">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseTenofOne"
              aria-expanded="false"
              aria-controls="collapseTenofThree"
            >
              Associate Dean of Javascript
            </button>
          </h2>
          <div
            id="collapseTenofOne"
            class="accordion-collapse collapse"
            aria-labelledby="nestedHeadingTen"
          >
            <div class="accordion-body container">
              <div class="row justify-content-between">
                <div class="col-12 col-lg-6">
                  <p class="fw-bold mb-1">Contact Information:</p>
              <p class="m-0"
                >Dr. Debra Crosslin, Associate dean of Javascript</p>
              <p class="m-0">debracross@gmail.com</p>
              <p class="">999-999-9999</p>
              <p class="fw-bold mb-1">Education:</p>
              <p class="m-0">PhD. Computer Science, The University of Monsters</p>
                </div>
                <div class="col-12 col-lg-6">
                  <img
                    src="/images/faculty-staff-images/image10.jpg"
                    alt="Debra Crosslin"
                    width="400px"
                    height="400px"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="nestedHeadingEleven">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseElevenofOne"
              aria-expanded="false"
              aria-controls="collapseElevenofThree"
            >
              Secretory of Javascript
            </button>
          </h2>
          <div
            id="collapseElevenofOne"
            class="accordion-collapse collapse"
            aria-labelledby="nestedHeadingEleven"
          >
            <div class="accordion-body container">
              <div class="row justify-content-between">
                <div class="col-12 col-lg-6">
                  <p class="fw-bold mb-1">Contact Information:</p>
              <p class="m-0">Dr. Usman Bhai, Secretory of Javascript</p>
              <p class="m-0">ubhai@gmail.com</p>
              <p class="">456-234-5666</p>
              <p class="fw-bold mb-1">Education:</p>
              <p class="m-0">PhD. Computer Science and Developing Something </p>
                </div>
                <div class="col-12 col-lg-6">
                  <img
                    src="/images/faculty-staff-images/image11.jpg"
                    alt="Usman Bhai"
                    width="400px"
                    height="400px"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="nestedHeadingTwelve">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseTwelveofOne"
              aria-expanded="false"
              aria-controls="collapseTwelveofThree"
            >
              Assistant professor of Javascript
            </button>
          </h2>
          <div
            id="collapseTwelveofOne"
            class="accordion-collapse collapse"
            aria-labelledby="nestedHeadingTwelve"
          >
            <div class="accordion-body container">
              <div class="row justify-content-between">
                <div class="col-12 col-lg-6">
                  <p class="fw-bold mb-1">Contact Information:</p>
              <p class="m-0"
                >Dr. Begam Ramza, Assistant professor of Javascript</p>
              <p class="m-0">begomramza@gmail.com</p>
              <p class="">345-567-3255</p>
              <p class="fw-bold mb-1">Education:</p>
              <p class="m-0">PhD. Computer Science and Javascript </p>
                </div>
                <div class="col-12 col-lg-6">
                  <img
                    src="/images/faculty-staff-images/image12.jpg"
                    alt="Begam Ramza"
                    width="400px"
                    height="400px"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button
        class="accordion-button collapsed"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#collapseFour"
        aria-expanded="false"
        aria-controls="collapseFour"
      >
        Department of PHP
      </button>
    </h2>
    <div
      id="collapseFour"
      class="accordion-collapse collapse"
      aria-labelledby="headingFour"
      data-bs-parent="#staff"
    >
      <div class="accordion-body">
        <div class="accordion-item">
          <h2 class="accordion-header" id="nestedHeadingThirteen">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseOneofFour"
              aria-expanded="false"
              aria-controls="collapseOneofFour"
            >
              Dean of PHP
            </button>
          </h2>
          <div
            id="collapseOneofFour"
            class="accordion-collapse collapse"
            aria-labelledby="nestedHeadingThiteen"
          >
            <div class="accordion-body container">
              <div class="row justify-content-between">
                <div class="col-12 col-lg-6">
                  <p class="fw-bold mb-1">Contact Information:</p>
              <p class="m-0"
                >Dr. Lora Parks, Dean and professor of PHP</p>
              <p class="m-0">parklora@gmail.com</p>
              <p class="">345-567-3455</p>
              <p class="fw-bold mb-1">Education:</p>
              <p class="m-0">PhD. Computer Science, PHP </p>
                </div>
                <div class="col-12 col-lg-6">
                  <img
                    src="/images/faculty-staff-images/image13.jpg"
                    alt="Lora Parks"
                    width="400px"
                    height="400px"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="nestedHeadingFourteen">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseTwoofFour"
              aria-expanded="false"
              aria-controls="collapseTwoofFour"
            >
              Associate Dean of PHP
            </button>
          </h2>
          <div
            id="collapseTwoofFour"
            class="accordion-collapse collapse"
            aria-labelledby="nestedHeadingFourteen"
          >
            <div class="accordion-body container">
              <div class="row justify-content-between">
                <div class="col-12 col-lg-6">
              <p class="fw-bold mb-1">Contact Information:</p>
              <p class="m-0">Dr. Jose Garner, Associate Dean of PHP</p>
              <p class="m-0">garnerjose@gmail.com</p>
              <p class="">226-759-1234</p>
              <p class="fw-bold mb-1">Education:</p>
              <p class="m-0">B.Sc. M.Sc. in Applied Computing >
              M.S. (Computer Science) - Surat</p>
                </div>
                <div class="col-12 col-lg-6">
                  <img
                    src="/images/faculty-staff-images/image14.jpg"
                    alt="Jose Garner"
                    width="400px"
                    height="400px"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="nestedHeadingFifteen">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseThreeofFour"
              aria-expanded="false"
              aria-controls="collapseThreeofFour"
            >
              Secretory of PHP
            </button>
          </h2>
          <div
            id="collapseThreeofFour"
            class="accordion-collapse collapse"
            aria-labelledby="nestedHeadingFifteen"
          >
            <div class="accordion-body container">
              <div class="row justify-content-between">
                <div class="col-12 col-lg-6">
                  <p class="fw-bold mb-1">Contact Information:</p>
              <p class="m-0"></p>Dr. Cynthia Good, Secretory of PHP
              <p class="m-0">goodcynthia@gmail.com</p>
              <p class="">234-444-2345</p>
              <p class="fw-bold mb-1">Education:</p>
              <p class="m-0">M.S. Computer science, University of Public </p>
                </div>
                <div class="col-12 col-lg-6">
                  <img
                    src="/images/faculty-staff-images/image15.jpg"
                    alt="Cynthia Good"
                    width="400px"
                    height="400px"
                  />
                  </div>
                </div>
              </div>
            </div>
          </div>



        <div class="accordion-item">
          <h2 class="accordion-header" id="nestedHeadingSixteen">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseFourofFour"
              aria-expanded="false"
              aria-controls="collapseFourofFour"
            >
              Assistant professor of PHP
            </button>
          </h2>
          <div
            id="collapseFourofFour"
            class="accordion-collapse collapse"
            aria-labelledby="nestedHeadingSixteen"
          >
            <div class="accordion-body container">
              <div class="row justify-content-between">
                <div class="col-12 col-lg-6">
                  <p class="fw-bold mb-1">Contact Information:</p>
              <p class="m-0"
                >Dr. Atif Vicky, Assistant professor of PHP</p>
              <p class="m-0">avf123@gmail.com</p>
              <p class="">987-345-2423</p>
              <p class="fw-bold-mb-1">Education:</p>
              <p class="m-0">PhD. Computer Science and Web Development </p>
                </div>
                <div class="col-12 col-lg-6">
                  <img
                    src="/images/faculty-staff-images/image16.jpg"
                    alt="Atif Vicky"
                    width="400px"
                    height="400px"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFive">
      <button
        class="accordion-button collapsed"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#collapseFive"
        aria-expanded="false"
        aria-controls="collapseFive"
      >
        Department of MySQL
      </button>
    </h2>
    <div
      id="collapseFive"
      class="accordion-collapse collapse"
      aria-labelledby="headingFive"
      data-bs-parent="#staff"
    >
      <div class="accordion-body">
        <div class="accordion-item">
          <h2 class="accordion-header" id="nestedHeadingSeventeen">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseOneofFive"
              aria-expanded="false"
              aria-controls="collapseOneofFive"
            >
              Dean of MySQL
            </button>
          </h2>
          <div
            id="collapseOneofFive"
            class="accordion-collapse collapse"
            aria-labelledby="nestedHeadingSeventeen"
          >
            <div class="accordion-body container">
              <div class="row justify-content-between">
                <div class="col-12 col-lg-6">
                  <p class="fw-bold mb-1">Contact Information:</p>
              <p class="m-0"
                >Dr. Vijay Mercel, Dean and professor of MySQL</p>
              <p class="m-0">vijaymercel@gmail.com</p>
              <p class="">234-545-4677</p>
              <p class="fw-bold mb-1">Education:</p>
              <p class="m-0">PhD. Computer Science, University of Time Pass </p>
                </div>
                <div class="col-12 col-lg-6">
                  <img
                    src="/images/faculty-staff-images/image17.jpg"
                    alt="Vijay Mercel"
                    width="400px"
                    height="400px"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="nestedHeadingEighteen">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseTwoofFive"
              aria-expanded="false"
              aria-controls="collapseTwoofFive"
            >
              Associate Dean of MySQL
            </button>
          </h2>
          <div
            id="collapseTwoofFive"
            class="accordion-collapse collapse"
            aria-labelledby="nestedHeadingEighteen"
          >
            <div class="accordion-body container">
              <div class="row justify-content-between">
                <div class="col-12 col-lg-6">
                  <p class="fw-bold mb-1">Contact Information:</p>
              <p class="m-0">Dr. Gem Pen, Associate Dean of MySQL</p>
              <p class="m-0">gempen10@gmail.com</p>
              <p class="">456-345-3232</p>
              <p class="fw-bold mb-1">Education:</p>
              <p class="m-0">B.Sc. M.Sc. in MySQL </p>
                </div>
                <div class="col-12 col-lg-6">
                  <img
                    src="/images/faculty-staff-images/image18.jpg"
                    alt="Gem Pen"
                    width="400px"
                    height="400px"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="nestedHeadingNineteen">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseThreeofFive"
              aria-expanded="false"
              aria-controls="collapseThreeofFive"
            >
              Secretory of MySQL
            </button>
          </h2>
          <div
            id="collapseThreeofFive"
            class="accordion-collapse collapse"
            aria-labelledby="nestedHeadingNineteen"
          >
            <div class="accordion-body container">
              <div class="row justify-content-between">
                <div class="col-12 col-lg-6">
                  <p class="fw-bold mb-1">Contact Information:</p>
              <p class="m-0">Dr. Star Stark, Secretory of MySQL</p>
              <p class="m-0">ironman@gmail.com</p>
              <p class="">890-346-7832</p>
              <p class="fw-bold mb-1">Education:</p>
              <p class="m-0">M.S. Computer science, University of Superheroes </p>
                </div>
                <div class="col-12 col-lg-6">
                  <img
                    src="/images/faculty-staff-images/image19.jpg"
                    alt="Star Stark"
                    width="400px"
                    height="400px"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="nestedHeadingTwenty">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseFourofFive"
              aria-expanded="true"
              aria-controls="collapseFourofFive"
            >
              Assistant professor of MySQL
            </button>
          </h2>
          <div
            id="collapseFourofFive"
            class="accordion-collapse collapse"
            aria-labelledby="nestedHeadingTwenty"
          >
            <div class="accordion-body container">
              <div class="row justify-content-between">
                <div class="col-12 col-lg-6">
                  <p class="fw-bold mb-1">Contact Information:</p>
              <p class="m-0"
                >Dr. John Wick, Assistant professor of MySQL</p>
              <p class="m-0">action@gmail.com</p>
              <p class="">325-465-2356</p>
              <p class="fw-bold mb-1">Education:</p>
              <p class="m-0">PhD. Computer Science, Everyone's University </p>
                </div>
                <div class="col-12 col-lg-6">
                  <img
                    src="/images/faculty-staff-images/image20.jpg"
                    alt="John Wick"
                    width="400px"
                    height="400px"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSix">
      <button
        class="accordion-button collapsed"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#collapseSix"
        aria-expanded="false"
        aria-controls="collapseSix"
      >
        Department of jQuery
      </button>
    </h2>
    <div
      id="collapseSix"
      class="accordion-collapse collapse"
      aria-labelledby="headingSix"
      data-bs-parent="#staff"
    >
      <div class="accordion-body">
        <div class="accordion-item">
          <h2 class="accordion-header" id="nestedHeadingTwentyOne">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseOneofSix"
              aria-expanded="false"
              aria-controls="collapseOneofSix"
            >
              Dean of jQuery
            </button>
          </h2>
          <div
            id="collapseOneofSix"
            class="accordion-collapse collapse"
            aria-labelledby="nestedHeadingTwentyOne"
          >
            <div class="accordion-body container">
              <div class="row justify-content-between">
                <div class="col-12 col-lg-6">
                  <p class="fw-bold mb-1">Contact Information:</p>
              <p class="m-0"
                >Dr. Jason Miller, Dean and professor of jQuery</p>
              <p class="m-0">jasonmiller123@gmail.com</p>
              <p class="">235-543-4657</p>
              <p class="fw-bold mb-1">Education:</p>
              <p class="m-0">PhD. Computer Science, University of Time Pass </p>
                </div>
                <div class="col-12 col-lg-6">
                  <img
                    src="/images/faculty-staff-images/image21.jpg"
                    alt="Jason Miller"
                    width="400px"
                    height="400px"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="nestedHeadingTwentyTwo">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseTwoofSix"
              aria-expanded="false"
              aria-controls="collapseTwoofSix"
            >
              Associate Dean of jQuery
            </button>
          </h2>
          <div
            id="collapseTwoofSix"
            class="accordion-collapse collapse"
            aria-labelledby="nestedHeadingTwentyTwo"
          >
            <div class="accordion-body container">
              <div class="row justify-content-between">
                <div class="col-12 col-lg-6">
                  <p class="fw-bold mb-1">Contact Information:</p>
              <p class="m-0">Dr. Donna Poon, Associate Dean of jQuery</p>
              <p class="m-0">donnapoon@gmail.com</p>
              <p class="">128-457-3446</p>
              <p class="fw-bold mb-1">Education:</p>
              <p class="m-0">PhD. Computer Science, Very Good University </p>
                </div>
                <div class="col-12 col-lg-6">
                  <img
                    src="/images/faculty-staff-images/image22.jpg"
                    alt="Donna Poon"
                    width="400px"
                    height="400px"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="nestedHeadingTwentyThree">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseThreeofSix"
              aria-expanded="false"
              aria-controls="collapseThreeofSix"
            >
              Secretory of jQuery
            </button>
          </h2>
          <div
            id="collapseThreeofSix"
            class="accordion-collapse collapse"
            aria-labelledby="nestedHeadingTwentyThree"
          >
            <div class="accordion-body container">
              <div class="row justify-content-between">
                <div class="col-12 col-lg-6">
                  <p class="fw-bold mb-1">Contact Information:</p>
              <p class="m-0">Dr. Heather Kendrick, Secretory of jQuery</p>
              <p class="m-0">heather@gmail.com</p>
              <p class="">457-354-3467</p>
              <p class="fw-bold mb-1">Education:</p>
              <p class="m-0">M.S. Computer science, University of Gamers</p>
                </div>
                <div class="col-12 col-lg-6">
                  <img
                    src="/images/faculty-staff-images/image23.jpg"
                    alt="Heather Kendrick"
                    width="400px"
                    height="400px"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="nestedHeadingTwentyFour">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseFourofSix"
              aria-expanded="true"
              aria-controls="collapseFourofSix"
            >
              Assistant professor of jQuery
            </button>
          </h2>
          <div
            id="collapseFourofSix"
            class="accordion-collapse collapse"
            aria-labelledby="nestedHeadingTwentyFour"
          >
            <div class="accordion-body container">
              <div class="row justify-content-between">
                <div class="col-12 col-lg-6">
                  <p class="fw-bold mb-1">Contact Information:</p>
              <p class="m-0"
                >Dr. Tony Stank, Assistant professor of jQuery</p>
              <p class="m-0">tonystank@gmail.com</p>
              <p class="">190-287-3456</p>
              <p class="fw-bold mb-1">Education:</p>
              <p class="m-0">PhD. Computer Science, Stan Lee University </p>
                </div>
                <div class="col-12 col-lg-6">
                  <img
                    src="/images/faculty-staff-images/image24.jpg"
                    alt="Tony Stank"
                    width="400px"
                    height="400px"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSeven">
      <button
        class="accordion-button collapsed"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#collapseSeven"
        aria-expanded="false"
        aria-controls="collapseSeven"
      >
        Department of Python
      </button>
    </h2>
    <div
      id="collapseSeven"
      class="accordion-collapse collapse"
      aria-labelledby="headingSeven"
      data-bs-parent="#staff"
    >
      <div class="accordion-body">
        <div class="accordion-item">
          <h2 class="accordion-header" id="nestedHeadingTwentyFive">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseOneofSeven"
              aria-expanded="false"
              aria-controls="collapseOneofSeven"
            >
              Dean of Python
            </button>
          </h2>
          <div
            id="collapseOneofSeven"
            class="accordion-collapse collapse"
            aria-labelledby="nestedHeadingTwentyFive"
          >
            <div class="accordion-body container">
              <div class="row justify-content-between">
                <div class="col-12 col-lg-6">
                  <p class="fw-bold mb-1">Contact Information:</p>
              <p class="m-0"
                >Dr. Mike Berg, Dean and professor of Python</p>
              <p class="m-0">mikeberg@gmail.com</p>
              <p class="">123-574-2467</p>
              <p class="fw-bold mb-1">Education:</p>
              <p class="m-0">PhD. Computer Science specialized in Python, University of Web development </p>
                </div>
                <div class="col-12 col-lg-6">
                  <img
                    src="/images/faculty-staff-images/image25.jpg"
                    alt="Mike Berg"
                    width="400px"
                    height="400px"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="nestedHeadingTentySix">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseTwoofSeven"
              aria-expanded="false"
              aria-controls="collapseTwoofSeven"
            >
              Associate Dean of Python
            </button>
          </h2>
          <div
            id="collapseTwoofSeven"
            class="accordion-collapse collapse"
            aria-labelledby="nestedHeadingTwentySix"
          >
            <div class="accordion-body container">
              <div class="row justify-content-between">
                <div class="col-12 col-lg-6">
                  <p class="fw-bold mb-1">Contact Information:</p>
              <p class="m-0">Dr. Jack Ryan, Associate Dean of Python</p>
              <p class="m-0">jackryn0@gmail.com</p>
              <p class="">679-754-9875</p>
              <p class="fw-bold mb-1">Education:</p>
              <p class="m-0">B.Sc. M.Sc. in Python </p>
                </div>
                <div class="col-12 col-lg-6">
                  <img
                    src="/images/faculty-staff-images/image26.jpg"
                    alt="Jack Ryan"
                    width="400px"
                    height="400px"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="nestedHeadingTwentySeven">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseThreeofSeven"
              aria-expanded="false"
              aria-controls="collapseThreeofSeven"
            >
              Secretory of Python
            </button>
          </h2>
          <div
            id="collapseThreeofSeven"
            class="accordion-collapse collapse"
            aria-labelledby="nestedHeadingTwentySeven"
          >
            <div class="accordion-body container">
              <div class="row justify-content-between">
                <div class="col-12 col-lg-6">
                  <p class="fw-bold mb-1">Contact Information:</p>
              <p class="m-0">Dr. Thelma Marin, Secretory of MySQL</p>
              <p class="m-0">thelmamarin567@gmail.com</p>
              <p class="">900-800-7000</p>
              <p class="fw-bold mb-1">Education:</p>
              <p class="m-0">M.S. Computer science, University of Web Development </p>
                </div>
                <div class="col-12 col-lg-6">
                  <img
                    src="/images/faculty-staff-images/image27.jpg"
                    alt="Thelma Marin"
                    width="400px"
                    height="400px"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="nestedHeadingTwentyEight">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseFourofSeven"
              aria-expanded="true"
              aria-controls="collapseFourofSeven"
            >
              Assistant professor of Python
            </button>
          </h2>
          <div
            id="collapseFourofSeven"
            class="accordion-collapse collapse"
            aria-labelledby="nestedHeadingTwentyEight"
          >
            <div class="accordion-body container">
              <div class="row justify-content-between">
                <div class="col-12 col-lg-6">
                  <p class="fw-bold mb-1">Contact Information:</p>
              <p class="m-0"
                >Dr. Derry Hewitt, Assistant professor of Python</p>
              <p class="m-0">dhewitt@gmail.com</p>
              <p class="">894-374-9494</p>
              <p class="fw-bold mb-1">Education:</p>
              <p class="m-0">PhD. Computer Science, Someone's University </p>
                </div>
                <div class="col-12 col-lg-6">
                  <img
                    src="/images/faculty-staff-images/image28.jpg"
                    alt="Derry Hewitt"
                    width="400px"
                    height="400px"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header" id="headingEight">
      <button
        class="accordion-button collapsed"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#collapseEight"
        aria-expanded="false"
        aria-controls="collapseEight"
      >
        Department of ASP
      </button>
    </h2>
    <div
      id="collapseEight"
      class="accordion-collapse collapse"
      aria-labelledby="headingEight"
      data-bs-parent="#staff"
    >
      <div class="accordion-body">
        <div class="accordion-item">
          <h2 class="accordion-header" id="nestedHeadingTwentyNine">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseOneofEight"
              aria-expanded="false"
              aria-controls="collapseOneofEight"
            >
              Dean of ASP
            </button>
          </h2>
          <div
            id="collapseOneofEight"
            class="accordion-collapse collapse"
            aria-labelledby="nestedHeadingTwentyNine"
          >
            <div class="accordion-body container">
              <div class="row justify-content-between">
                <div class="col-12 col-lg-6">
                  <p class="fw-bold mb-1">Contact Information:</p>
              <p class="m-0"
                >Dr. Ann Harper, Dean and professor of ASP</p>
              <p class="m-0">harpern@gmail.com</p>
              <p class="">998-676-4545</p>
              <p class="fw-bold mb-1">Education:</p>
              <p class="m-0">PhD. Computer Science, University of Waterloo </p>
                </div>
                <div class="col-12 col-lg-6">
                  <img
                    src="/images/faculty-staff-images/image29.jpg"
                    alt="Ann Harper"
                    width="400px"
                    height="400px"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="nestedHeadingThirty">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseTwoofEight"
              aria-expanded="false"
              aria-controls="collapseTwoofEight"
            >
              Associate Dean of ASP
            </button>
          </h2>
          <div
            id="collapseTwoofEight"
            class="accordion-collapse collapse"
            aria-labelledby="nestedHeadingThirty"
          >
            <div class="accordion-body container">
              <div class="row justify-content-between">
                <div class="col-12 col-lg-6">
                  <p class="fw-bold mb-1">Contact Information:</p>
              <p class="m-0">Dr. Jordan Hollis, Associate Dean of ASP</p>
              <p class="m-0">jrdnh@gmail.com</p>
              <p class="">393-393-9393</p>
              <p class="fw-bold mb-1">Education:</p>
              <p class="m-0">B.Sc. M.Sc. in ASP </p>
                </div>
                <div class="col-12 col-lg-6">
                  <img
                    src="/images/faculty-staff-images/image30.jpg"
                    alt="Jordan Hollis"
                    width="400px"
                    height="400px"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="nestedHeadingThirtyOne">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseThreeofEight"
              aria-expanded="false"
              aria-controls="collapseThreeofEight"
            >
              Secretory of ASP
            </button>
          </h2>
          <div
            id="collapseThreeofEight"
            class="accordion-collapse collapse"
            aria-labelledby="nestedHeadingThirtyOne"
          >
            <div class="accordion-body container">
              <div class="row justify-content-between">
                <div class="col-12 col-lg-6">
                  <p class="fw-bold mb-1">Contact Information:</p>
              <p class="m-0">Dr. Terry Washington, Secretory of ASP</p>
              <p class="m-0">dcterry@gmail.com</p>
              <p class="">787-787-7878</p>
              <p class="fw-bold mb-1">Education:</p>
              <p class="m-0">M.S. Computer science, University of Windsor </p>
                </div>
                <div class="col-12 col-lg-6">
                  <img
                    src="/images/faculty-staff-images/image31.jpg"
                    alt="Terry Washington"
                    width="400px"
                    height="400px"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="nestedHeadingThirtyTwo">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseFourofEight"
              aria-expanded="true"
              aria-controls="collapseFourofEight"
            >
              Assistant professor of ASP
            </button>
          </h2>
          <div
            id="collapseFourofEight"
            class="accordion-collapse collapse"
            aria-labelledby="nestedHeadingThirtyTwo"
          >
            <div class="accordion-body container">
              <div class="row justify-content-between">
                <div class="col-12 col-lg-6">
                  <p class="fw-bold mb-1">Contact Information:</p>
              <p class="m-0"
                >Dr. Kendall levy, Assistant professor of ASP</p>
              <p class="m-0">lvkendal@gmail.com</p>
              <p class="">145-399-9238</p>
              <p class="fw-bold mb-1">Education:</p>
              <p class="m-0">PhD. Computer Science, University of Windsor</p>
                </div>
                <div class="col-12 col-lg-6">
                  <img
                    src="/images/faculty-staff-images/image32.jpg"
                    alt="Kendall levy"
                    width="400px"
                    height="400px"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header" id="headingNine">
      <button
        class="accordion-button collapsed"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#collapseNine"
        aria-expanded="false"
        aria-controls="collapseNine"
      >
        Department of XML
      </button>
    </h2>
    <div
      id="collapseNine"
      class="accordion-collapse collapse"
      aria-labelledby="headingNine"
      data-bs-parent="#staff"
    >
      <div class="accordion-body">
        <div class="accordion-item">
          <h2 class="accordion-header" id="nestedHeadingThirtyThree">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseOneofNine"
              aria-expanded="false"
              aria-controls="collapseOneofNine"
            >
              Dean of XML
            </button>
          </h2>
          <div
            id="collapseOneofNine"
            class="accordion-collapse collapse"
            aria-labelledby="nestedHeadingThirtyThree"
          >
            <div class="accordion-body container">
              <div class="row justify-content-between">
                <div class="col-12 col-lg-6">
                  <p class="fw-bold mb-1">Contact Information:</p>
              <p class="m-0"
                >Dr. Devin Grey, Dean and professor of XML</p>
              <p class="m-0">gerydevin@gmail.com</p>
              <p class="">789-376-3753</p>
              <p class="fw-bold mb-1">Education:</p>
              <p class="m-0">PhD. Computer Science, The University </p>
                </div>
                <div class="col-12 col-lg-6">
                  <img
                    src="/images/faculty-staff-images/image33.jpg"
                    alt="Devin Grey"
                    width="400px"
                    height="400px"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="nestedHeadingThirtyFour">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseTwoofNine"
              aria-expanded="false"
              aria-controls="collapseTwoofNine"
            >
              Associate Dean of XML
            </button>
          </h2>
          <div
            id="collapseTwoofNine"
            class="accordion-collapse collapse"
            aria-labelledby="nestedHeadingThirtyFour"
          >
            <div class="accordion-body container">
              <div class="row justify-content-between">
                <div class="col-12 col-lg-6">
                  <p class="fw-bold mb-1">Contact Information:</p>
              <p class="m-0">Dr. Ace Plummer, Associate Dean of MySQL</p>
              <p class="m-0">aplumer@gmail.com</p>
              <p class="">777-445-4565</p>
              <p class="fw-bold mb-1">Education:</p>
              <p class="m-0">B.Sc. M.Sc. in XML </p>
                </div>
                <div class="col-12 col-lg-6">
                  <img
                    src="/images/faculty-staff-images/image34.jpg"
                    alt="Ace Plummer"
                    width="400px"
                    height="400px"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="nestedHeadingThirtyFive">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseThreeofNine"
              aria-expanded="false"
              aria-controls="collapseThreeofNine"
            >
              Secretory of XML
            </button>
          </h2>
          <div
            id="collapseThreeofNine"
            class="accordion-collapse collapse"
            aria-labelledby="nestedHeadingThirtyFive"
          >
            <div class="accordion-body container">
              <div class="row justify-content-between">
                <div class="col-12 col-lg-6">
                  <p class="fw-bold mb-1">Contact Information:</p>
              <p class="m-0">Dr. Katrina Wheeler, Secretory of XML</p>
              <p class="m-0">katrin23@gmail.com</p>
              <p class="">888-888-8888</p>
              <p class="fw-bold mb-1">Education:</p>
              <p class="m-0">M.S. Computer science, University of Windsor </p>
                </div>
                <div class="col-12 col-lg-6">
                  <img
                    src="/images/faculty-staff-images/image35.jpg"
                    alt="Katrina Wheeler"
                    width="400px"
                    height="400px"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="nestedHeadingThirtySix">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseFourofNine"
              aria-expanded="true"
              aria-controls="collapseFourofNine"
            >
              Assistant professor of XML
            </button>
          </h2>
          <div
            id="collapseFourofNine"
            class="accordion-collapse collapse"
            aria-labelledby="nestedHeadingThirtySix"
          >
            <div class="accordion-body container">
              <div class="row justify-content-between">
                <div class="col-12 col-lg-6">
                  <p class="fw-bold mb-1">Contact Information:</p>
              <p class="m-0"
                >Dr. Toby Holyday, Assistant professor of XML</p>
              <p class="m-0">toby22@gmail.com</p>
              <p class="">325-465-2356</p>
              <p class="fw-bold mb-1">Education:</p>
              <p class="m-0">PhD. Computer Science, Everyone's University </p>
                </div>
                <div class="col-12 col-lg-6">
                  <img
                    src="/images/faculty-staff-images/image36.jpg"
                    alt="Toby Holiday"
                    width="400px"
                    height="400px"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

@endsection
