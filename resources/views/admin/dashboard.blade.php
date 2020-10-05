@include('admin.layouts.header')
<div id="wrapper">
  @include('admin.layouts.sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
  @include('admin.layouts.navbar')
  
  @include('admin.layouts.container')
      </div>
      <!-- Footer -->
  @include('admin.layouts.footer')
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

