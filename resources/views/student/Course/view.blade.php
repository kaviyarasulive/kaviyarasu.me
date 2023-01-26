@extends('student.layout.master')

@section('DashboardMenu','active')

@section('content')


        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Main Content /</span>Frontent Development</h4>

         
          
            <!-- Grid Card -->
            <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
              <div class="col">
                <div class="card h-100">
                  <a href="{{ url('student/html') }}">
                  <img class="card-img-top" src="../assets/img/elements/1.jpg" alt="Card image cap" /> 

                  <div class="card-body">
                    <h5 class="card-title">HTML and CSS Fundamental</h5></a>
                    <p class="card-text">
                      HTML stands for Hyper Text Markup Language. HTML is the standard markup language for creating Web pages. HTML describes the structure of a Web page. HTML consists of a series of elements. HTML elements tell the browser how to display the content.
                    </p>                   
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <a href="{{ url('student/javascript') }}">
                  <img class="card-img-top" src="../assets/img/elements/2.jpg" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title">JavaScript essential</h5>  </a>
                    <p class="card-text">
                      This is a longer card with supporting text below as a natural lead-in to additional content.
                      This content is a little bit longer.
                    </p>                  

                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <a href="{{ url('student/react') }}">
                  <img class="card-img-top" src="../assets/img/elements/3.jpg" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title">React Fundamentals</h5></a>
                    <p class="card-text">
                      This is a longer card with supporting text below as a natural lead-in to additional content.
                    </p>                    

                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <a href="{{ url('student/tailwind') }}">
                  <img class="card-img-top" src="../assets/img/elements/4.jpg" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title">Tailwind CSS Fundamental</h5> </a>
                    <p class="card-text">
                      This is a longer card with supporting text below as a natural lead-in to additional content.
                      This content is a little bit longer.
                    </p>                   

                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <a href="{{ url('student/GitHub') }}">
                  <img class="card-img-top" src="../assets/img/elements/5.jpg" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title">CI/CD GitHub actions </h5>  </a>
                    <p class="card-text">
                      This is a longer card with supporting text below as a natural lead-in to additional content.
                      This content is a little bit longer.
                    </p>                  

                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <a href="{{ url('student/linux') }}">
                  <img class="card-img-top" src="../assets/img/elements/6.jpg" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title">Linux CLI - learn the basics of bash</h5> </a>
                    <p class="card-text">
                      This is a longer card with supporting text below as a natural lead-in to additional content.
                      This content is a little bit longer.
                    </p>
                 

                  </div>
                </div>
              </div>
            </div>

             <!-- Grid Card -->
             <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
               <div class="col">
                 <div class="card h-100">
                  <a href="{{ url('student/nodejs') }}">
                   <img class="card-img-top" src="../assets/img/elements/7.jpg" alt="Card image cap" />
                   <div class="card-body">
                     <h5 class="card-title">Learn node js form scratch</h5></a>
                     <p class="card-text">
                       HTML stands for Hyper Text Markup Language. HTML is the standard markup language for creating Web pages. HTML describes the structure of a Web page. HTML consists of a series of elements. HTML elements tell the browser how to display the content.
                     </p>
                    

                   </div>
                 </div>
               </div>
               <div class="col">
                 <div class="card h-100">
                  <a href="{{ url('student/nextjs') }}">
                   <img class="card-img-top" src="../assets/img/elements/8.jpg" alt="Card image cap" />
                   <div class="card-body">
                     <h5 class="card-title">Learn next js 11 build moderns next js applications</h5> </a>

                     <p class="card-text">
                       This is a longer card with supporting text below as a natural lead-in to additional content.
                       This content is a little bit longer.
                     </p>
                   
                   </div>
                 </div>
               </div>
               <div class="col">
                 <div class="card h-100">
                  <a href="{{ url('student/Advancenextjs') }}">
                   <img class="card-img-top" src="../assets/img/elements/9.jpg" alt="Card image cap" />
                   <div class="card-body">
                     <h5 class="card-title">Advance next js concepts</h5> </a>
                     <p class="card-text">
                       This is a longer card with supporting text below as a natural lead-in to additional content.
                     </p>
                   

                   </div>
                 </div>
               </div>
               <div class="col">
                 <div class="card h-100">
                  <a href="{{ url('student/Rediscatching') }}">
                   <img class="card-img-top" src="../assets/img/elements/10.jpg" alt="Card image cap" />
                   <div class="card-body">
                     <h5 class="card-title">Redis catching concept with node js</h5> </a>
                     <p class="card-text">
                       This is a longer card with supporting text below as a natural lead-in to additional content.
                       This content is a little bit longer.
                     </p>
                   
                   </div>
                 </div>
               </div>
            
               
             </div>

          
          <!-- / Content -->
@endsection


@section('script')


@endsection