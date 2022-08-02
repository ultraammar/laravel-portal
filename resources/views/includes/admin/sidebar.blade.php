<div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-center" >
                        <div class="lgo" style="background-color:black;margin-bottom:-20px; height:100px; width:150px; " >
                            <a href="#" ><img src="{{ asset('admin/assets/images/logo/logo.jpeg') }}" alt="Logo"  height="100px" width="150px" srcset=""></a>
                       
                        </div>
                        <div class="toggler">
                        <!-- <i class='fa-light fa-brightness'></i>
                                <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                                </label> -->
                            
                            <!-- <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <!-- <li class="sidebar-title">Menu</li> -->

                        <li class="sidebar-item active "id="a1">
                            <a href="{{route('admin.user.users')}}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>All Users</span>
                            </a>
                        </li>
                        
                        <li class="sidebar-item  "id="a2">
                            <a href="{{route('admin.student.index')}}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Students</span>
                            </a>
                        </li>
                        
                        
                        <li class="sidebar-item  "id="a3">
                            <a href="{{route('admin.review')}}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Buisness Review</span>
                            </a>
                        </li>
                        <li class="sidebar-item "id="a4">
                            <a href="" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>STATS</span>
                            </a>
                        </li>
                        <li class="sidebar-item "id="a5">
                            <a href="{{route('admin.club.index')}}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>ADD / EDIT CLUB</span>
                            </a>
                        </li>
                        
                        </li>
                        <li class="sidebar-item "id="c1">
                            <a href="{{route('admin.club.index')}}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>All User</span>
                            </a>
                        </li>
                        <li class="sidebar-item  "id="c2">
                            <a href="{{route('admin.club.student')}}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Students</span>
                            </a>
                        </li>
                        <li class="sidebar-item " id="c3">
                            <a href="{{route('admin.user.newUser')}}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>New User</span>
                            </a>
                        </li>
                        <li class="sidebar-item "id="c4">
                            <a href="{{route('admin.user.create')}}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Create User</span>
                            </a>
                        </li>
                        <li class="sidebar-item  "id="c5">
                            <a href="{{route('admin.student.create')}}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Add Student</span>
                            </a>
                        </li>

                     
  
  

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <style>
     
        .lgo img{ 
            width:150px; 
            height:100px !important;
        }
       #c1,#c2,#c3,#c4,#c5,#c6{
        display:none;
      }
      #a1,#a2,#a3,#a4,#a5,#a6{
        display:block;
      }


        </style>
        <script>
           
        </script>