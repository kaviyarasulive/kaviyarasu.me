<!DOCTYPE html>
<html>
    @include('student.layout.headerScript')
    <body class="hold-transition sidebar-mini skin-blue">
        <div class="wrapper">
            <!-- header -->
            @include('student.layout.header')
        <!-- color for side bar -->

            <!-- Nav Bar -->
            @include('student.layout.navbar')
            <!-- Content -->
                <div class="content-wrapper">
                    <section class="content">
                        @include('errors')
                        @yield('content')

                    </section>
                </div>
            <!-- End Content -->

            <!-- Footer -->
            @include('student.layout.footer')
        <!-- End Footer -->
        </div>
    </body>
</html>