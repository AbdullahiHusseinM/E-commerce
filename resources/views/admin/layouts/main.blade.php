@include('admin.layouts.header')

<div id="wrapper">
  @include('admin.layouts.sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
  @include('admin.layouts.navbar')
  
  @yield('content')
      </div>
      <!-- Footer -->
      </div>
  </div>
  @include('admin.layouts.footer')
      <!-- Footer -->
    