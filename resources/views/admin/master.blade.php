<!doctype html>
<html lang="en">
  @include('admin.partials.head')
  <body class="vertical  light @if(LaravelLocalization::getCurrentLocale() == 'ar') rtl @endif ">
    <div class="wrapper">
      @include('admin.partials.navbar')
      @include('admin.partials.sidebar')
      <main role="main" class="main-content">
        @yield('content')
        
      </main> <!-- main -->
    </div> <!-- .wrapper -->
    @include('admin.partials.scripts')
    <script>
      function confirmDelete(id) {
          if(confirm('Are You Sure You Want to Delete This Record? \n It Will Be Deleted Permanently!')){
              // alert('confimred');
              document.getElementById('form-delete-' + id).submit();
          }
      }
    </script>
  </body>
</html>
