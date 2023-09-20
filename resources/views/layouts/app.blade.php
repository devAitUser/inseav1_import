<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
      <link rel="icon" href="{{ asset('assets/css/style.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/img/logo32x32.png') }}">
      <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo32x32.png') }}"/>

      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
         rel="stylesheet">
         <link rel="preconnect" href="https://fonts.googleapis.com">
         <link rel="preconnect" href="https://fonts.googleapis.com">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
         

   
        
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

        
        
        
        
        <style>
          
            </style>

         <script src="{{ asset('assets/js/home_app.js') }}"></script>
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>{{ config('app.name', 'CRI') }}</title>

      <script type="text/javascript">
      var APP_URL = {!! json_encode(url('/')) !!}
      
      </script>
    
   </head>
   <body>
      @guest
      @else
      <!-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
         <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('Logout') }}
         </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
             @csrf
         </form>
         </div> -->
      @endguest
      <div class="wrapper">
     
         <div class="main-content">
            <div class="panel_view_header">
               <div class="header_panel_view">
               
               

               <nav class="my-2 my-md-0 mr-md-3">
             <li  class="icon_menu    " data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="">
                                                                                              
                    <p class="top_header"> <strong  style="color: green ; font-size: 200%" >Entité :</strong>  <a class="name_division" href="#"><span style="color: green;font-size: 190%">{{$role_name}}</span></a> </p>
                     </li>
         
                      
                     <li class="icon_menu  link_dropdown  {{ request()->is('user_profile')  ? 'active' : '' }} " data-bs-toggle="tooltip" data-bs-placement="top" title="">
                        <a href="{{route('user_profile')}}" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="material-icons"style="color: green">manage_accounts</span>
                        </a>
                      <p  style="color: green"> Mon Profil</p>
                        <ul class="dropdown-menu dropdown" aria-labelledby="dropdownMenuButton1" style="">
                           <li><a class="dropdown-item" href="#">Utilisateur : <strong>{{$name_user}}</strong>  </a></li>
                           <li><a class="dropdown-item" href="{{route('user_profile')}}">Mon Profil</a></li>
                          
                        </ul>
                     </li>
                     
                     <li class="icon_menu " data-bs-toggle="tooltip" data-bs-placement="top" title="">
                        
                        <a href="{{route('logout') }}" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                           <span class="material-icons"style="color: green">
                            <p  style="color: green">logout </p>
                           </span> </a>
                           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                           </form>
                         <p  style="color: green">  Quitter </p>
                        </li>
             </nav>


            

               

   <style>


.tooltip-inner {

  background: #155ea4;


}

a.name_division {
    text-decoration: none;
}

.icon_menu a {
    margin: 0 auto;
}

li.icon_menu {
    display: grid;

}
li.icon_menu:hover{
   background-color:#2b7239a7;
    color: #ffffff;
}


.bs-tooltip-top .arrow::before, .bs-tooltip-auto[x-placement^="top"] .arrow::before {
  border-top-color: #f00 !important;
}

.bs-tooltip-right .arrow::before, .bs-tooltip-auto[x-placement^="right"] .arrow::before {
  border-right-color: #f00 !important;
}


.bs-tooltip-bottom .arrow::before, .bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
  border-bottom-color: #f00 !important;
}


.bs-tooltip-left .arrow::before, .bs-tooltip-auto[x-placement^="left"] .arrow::before {
  border-left-color: #f00 !important;
}

.header_panel_view {

    direction: rtl;
    margin-right: 100px;
}

p.top_header {
    font-size: 16px;
    margin-bottom: 0px !important;
    margin-top: 10px;
}  

@media (min-width: 768px) {
.mr-md-auto, .mx-md-auto {
    margin-right: auto!important;
}}

   </style>
              
                  <ul class="hdMnu">
                    
                  

                     <style>
                        .link-dropdown:hover .dropdown {
                           opacity: 1;
                           visibility: visible;
                           -webkit-transform: translateY(-10px);
                           -ms-transform: translateY(-10px);
                           transform: translateY(-10px);
                           }
                           nav.menu {
                              margin: 0 auto;
                           }
                     </style>


                  
           
                    

                    

                  
                  </ul>

               </div>
            </div>
         
            <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
             <!--<h5 class="my-0 mr-md-auto font-weight-normal"><img src="{{ asset('assets/img/anp.png') }}" class="logo_css"></h5>-->
             <h5 class="my-0 mr-md-auto font-weight-normal"><img src="{{ asset('assets/img/logo.png') }}" class="logo_css"></h5>
             
             <nav class="my-2 my-md-0 mr-md-3">
             <a class="pic_archive" href="#"> <img src="{{ asset('assets/img/archivess.png') }}" class="" width="420px" height="140px" style="margin-right: 100px"></a>
             </nav>
         
             
            </div>

            <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
             
             <nav class="menu">
             <li class="icon_menu   {{ request()->is('home')  ? 'active' : '' }} " data-bs-toggle="tooltip" data-bs-placement="top" title="">
                        <a href="{{route('home')}}">
                           <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"  class="bi bi-house-door" viewBox="0 0 16 16">
                              <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z"/>
                            home </svg>
                       
                        </a>
                      <p> Accueil </p> 
                     </li>

                     @if (Auth::user()->hasPermissionTo('Gestion physique')) 
                     <li class="icon_menu   {{ request()->is('gestion_physique')  ? 'active' : '' }} ">
                        <a href="{{route('gestion_physique')}}">
                        <span class="material-icons">
                           inventory
                        </span>
                        </a>
                        Gestion physique
                     </li>
                     @endif

               

                     @if (Auth::user()->hasPermissionTo('Valider la suppression')) 
                     <li class="icon_menu   {{ request()->is('request_delete_dossier')  ? 'active' : '' }} " >
                        <a href="{{route('request_delete_dossier')}}">
                        <span class="material-icons">rule_folder</span>
                        </a>
                       <p> les demandes de suppression </p>
                     </li>
                     @endif
                
                 
   

                     @if (Auth::user()->hasRole('admin')) 
                     <li class="icon_menu   {{ request()->is('user_list')  ? 'active' : '' }} " data-bs-toggle="tooltip" data-bs-placement="top" title="">
                        <a href="{{route('user_list') }}" >
                        <span class="material-icons" >group_add</span>
                        </a>
                        <p> Gestion des utilisateurs </p>
                       
                     </li>
                     @endif
                
                   
                     @if (Auth::user()->hasPermissionTo('Modifier le plan de classement') || Auth::user()->hasPermissionTo('Visualiser le plan de classement')  ) 
                     <li class="icon_menu  {{ request()->is('organigramme')  ? 'active' : '' }}" data-bs-toggle="tooltip" data-bs-placement="top" title="">
                        <a href="{{route('home_organigramme')}}">
                           <span class="material-icons" >
                           account_tree
                           </span>

                         </a>
                         <p>Plan de classement</p>
                     </li>
                     @endif


                  

               


                     @if (Auth::user()->hasRole('admin')) 
                     <li class="icon_menu  {{ request()->is('roles')  ? 'active' : '' }}  "  data-bs-toggle="tooltip" data-bs-placement="top" title="">
                     <a href="{{route('roles.index') }}">
                        <span class="material-icons">
                        rule
                        </span> </a>
                       <p>  Gestion des rôles </p>
                     </li>
                     @endif

                
             </nav>
             
            </div>


            <div class="panel_view_bottom">

                 @yield('content')

            </div>
            <footer class="mt-auto block_footer">
               <p  style="color: green">Copyright 2022 - <strong  style="color: green">MASTER ARCHIVES</strong> – Tous droits réservés </p>
             </footer>
         </div>
      </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script>
         var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
         var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
         return new bootstrap.Tooltip(tooltipTriggerEl)
         })
      </script>
   </body>
</html>