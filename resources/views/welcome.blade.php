<!-- start top -->
@include('include.top');
<!-- end top -->
  <div class="container-scroller">
    <!-- start nav -->
    @include('include.nav');
    <!-- end nav-->
    <div class="container-fluid page-body-wrapper">
      <!-- start sidbar -->
      @include('include.sidbar');
      <!-- end sidbar -->
      <div class="main-panel"> 
        <div class="content-wrapper">
            @yield("body")    
            <!-- start footer -->
            @include('include.footer');
            <!-- end footer -->
        </div>
    </div>   
  </div>
<!-- start bootom-->
@include('include.bootom');
<!-- end bootom-->






 