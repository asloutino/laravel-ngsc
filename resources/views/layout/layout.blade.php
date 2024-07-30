<!DOCTYPE html>
<html class="no-js" <?php if( (strpos(url()->current(),'/ar') !== false) ) { echo 'lang="ar"'; } else { echo 'lang="en"'; } ?>>
    <x-head/>
  <body>
   <x-loader/>
   
   @yield('content')
    
    <!-- Start Footer -->
    <x-footer/>
    <!-- End Footer -->
    
    <!-- Script -->
    <x-script/>
  </body>
</html>
