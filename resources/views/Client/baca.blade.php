<!DOCTYPE html>
<html lang="en">
    <x-client.head_baca />
  <body>
    <!-- Spinner Start -->
   <x-client.spinner />
    <!-- Spinner End -->

    <!-- Topbar Start -->
     <x-client.topbar />
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <x-client.navbar />
    <!-- Navbar End -->
    
    <!-- Service Start -->
   <x-client.baca :data="$data"/>
    <!-- Service End -->

    <!-- Footer Start -->
   <x-client.footer />
    <!-- Footer End -->

    <!-- Back to Top -->
    <x-client.backtotop />

    <x-client.script />
  </body>
</html>
