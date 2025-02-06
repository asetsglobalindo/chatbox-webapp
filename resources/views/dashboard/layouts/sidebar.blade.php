 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

     <ul class="sidebar-nav" id="sidebar-nav">

         <li class="nav-item">
             <a class="nav-link {{ Request::is('dashboard') ? '' : 'collapsed' }}" href="/dashboard">
                 <i class="bi bi-grid"></i>
                 <span>Dashboard</span>
             </a>
         </li><!-- End Dashboard Nav -->
         <li class="nav-item">
             <a class="nav-link {{ Request::is('dashboard/campaign*') ? '' : 'collapsed' }}" href="/dashboard/campaign">
                 <i class="bi bi-card-list"></i>
                 <span>Campaign</span>
             </a>
         </li><!-- End Campaign Nav -->
         <li class="nav-item">
             <a class="nav-link {{ Request::is('dashboard/template-message*') ? '' : 'collapsed' }}"
                 href="/dashboard/template-message">
                 <i class="bi bi-chat-left-text"></i>
                 <span>Template Message</span>
             </a>
         </li><!-- End Template Massage Nav -->




     </ul>

 </aside><!-- End Sidebar-->
