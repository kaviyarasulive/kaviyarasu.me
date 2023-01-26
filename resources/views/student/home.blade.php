@extends('student.layout.master')

@section('DashboardMenu','active')

@section('content')


  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <div class="row">
        <div class="col-lg-8 mb-4 order-0">
          <div class="card">
            <div class="d-flex align-items-end row">
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title text-primary">Congratulations {{ auth()->user()->name }} 🎉</h5>
                  <p class="mb-4">
                    You have done 
                    {{-- <span class="fw-bold">72%</span> more sales today. Check your new badge in
                    your profile. --}}
                  </p>

                  {{-- <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a> --}}
                </div>
              </div>
              <div class="col-sm-5 text-center text-sm-left">
                <div class="card-body pb-0 px-0 px-md-4">
                  <img
                    src="../assets/img/illustrations/man-with-laptop-light.png"
                    height="140"
                    alt="View Badge User"
                    data-app-dark-img="illustrations/man-with-laptop-dark.png"
                    data-app-light-img="illustrations/man-with-laptop-light.png"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
       
            
           
      <div class="row">
        <!-- Bootstrap carousel -->
        <div class="col-md">
          <h5 class="my-4">Popular Course</h5>

          <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
              <li data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></li>
              <li data-bs-target="#carouselExample" data-bs-slide-to="1"></li>
              <li data-bs-target="#carouselExample" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="../assets/img/elements/4.jpg" alt="First slide" />
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../assets/img/elements/5.jpg" alt="Second slide" />
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../assets/img/elements/6.jpg" alt="Third slide" />
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </a>
          </div>
        </div>
        <!-- Bootstrap crossfade carousel -->
        <div class="col-md">
          <h5 class="my-4">Course List</h5>

          <div
            id="carouselExample-cf"
            class="carousel carousel-dark slide carousel-fade"
            data-bs-ride="carousel"
          >
            <ol class="carousel-indicators">
              <li data-bs-target="#carouselExample-cf" data-bs-slide-to="0" class="active"></li>
              <li data-bs-target="#carouselExample-cf" data-bs-slide-to="1"></li>
              <li data-bs-target="#carouselExample-cf" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="../assets/img/elements/4.jpg" alt="First slide" />
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../assets/img/elements/5.jpg" alt="Second slide" />
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../assets/img/elements/6.jpg" alt="Third slide" />
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExample-cf" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExample-cf" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- / Content -->

    

@endsection


@section('script')


@endsection
          