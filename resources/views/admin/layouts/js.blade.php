 <!-- Jquery JS-->
 <script src="{{ asset('admin_ite/vendor/jquery-3.2.1.min.js') }}"></script>
 <!-- Bootstrap JS-->
 <script src="{{ asset('admin_ite/vendor/bootstrap-4.1/popper.min.js') }}"></script>
 <script src="{{ asset('admin_ite/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
 <!-- admin_ite/Vendor JS       -->
 <script src="{{ asset('admin_ite/vendor/slick/slick.min.js') }}">
 </script>
 <script src="{{ asset('admin_ite/vendor/wow/wow.min.js') }}"></script>
 <script src="{{ asset('admin_ite/vendor/animsition/animsition.min.js') }}"></script>
 <script src="{{ asset('admin_ite/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
 </script>
 <script src="{{ asset('admin_ite/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
 <script src="{{ asset('admin_ite/vendor/counter-up/jquery.counterup.min.js') }}">
 </script>
 <script src="{{ asset('admin_ite/vendor/circle-progress/circle-progress.min.js') }}"></script>
 <script src="{{ asset('admin_ite/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
 <script src="{{ asset('admin_ite/vendor/chartjs/Chart.bundle.min.js') }}"></script>
 <script src="{{ asset('admin_ite/vendor/select2/select2.min.js') }}">
 </script>

 <!-- Main JS-->
 <script src="{{ asset('admin_ite/js/main.js') }}"></script>

  @stack('js')
  @yield('js')