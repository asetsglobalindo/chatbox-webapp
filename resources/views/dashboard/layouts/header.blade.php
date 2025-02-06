 <!-- ======= Header ======= -->
 <header id="header" class="header fixed-top d-flex align-items-center">

     <div class="d-flex align-items-center justify-content-between">
         <a href="/" class="logo d-flex align-items-center">
             <img src="/assets/img/logo.png" alt="" class="ms-4">

         </a>
         <i class="bi bi-list toggle-sidebar-btn"></i>
     </div><!-- End Logo -->



     <nav class="header-nav ms-auto">
         <ul class="d-flex align-items-center">

             <li>
                 <form action="/logout" method="POST">
                     @csrf
                     <button type="submit" class="dropdown-item p-5">
                         <i class="bi bi-box-arrow-right"></i>
                         <span>Sign Out</span></button>
                 </form>

             </li>

         </ul>
     </nav><!-- End Icons Navigation -->

 </header><!-- End Header -->
