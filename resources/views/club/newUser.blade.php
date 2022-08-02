@extends('layouts.admin')
@section('content')

    <div id="app">
        @include('includes.admin.sidebar')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

           <div class="page-content">
                <section id="multiple-column-form">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                            <div class="card-header">
                                  
                                        <div class="head_up">
                                           <ul> 
                                                
                                                
                                                <li id="user_right_li"><input type="text" name="namesearch" placeholder="Numan"></li>
                                                <li id="user_right_li"><input type="text" name="clubsearch" placeholder="Manchester"></li>
                                                <li id="user_right_li"><button class="btn btn-success btnsearch" type="submit"> Search</button></li>
                                                
                                            </ul>
                                            <!-- </form> -->
                                        </div>
                                      </div>
                                    
                                <div class="card-content">
                                    
                                    <div class="card-body">
                                        <table class="table table-bordered" >
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>FULL NAME</th>
                                                    <th>EMAIL</th>
                                                    <th>DOB</th>
                                                    <th>START DATE</th>
                                                    <th>ROLE</th>
                                                    <th>ADVANCE</th>
                                                    <th>FOUNDATION</th>
                                                    <th>STATUS</th>
                                                    <th>ACTION</th>
                                                    
                                                </tr>

                                            </thead>
                                            <tbody class="newuser">
                                                @for($i=1; $i<=15; $i++)
                                                <tr>
                                                    <td>{{$i}}</td>
                                                    <td>morgan</td>
                                                    <td>email@gmail.com</td>
                                                    <td>12/4/22</td>
                                                    <td>4/5/22</td>
                                                    <td>PTFC</td>
                                                    <td>03/04/22</td>
                                                    <td>12/3/23</td>
                                                    <td><span>Active</span></td>
                                                   
                                                    <td><div class="btn btn-lg editbtn">Edit</div></td>
                                                    



                                                </tr>
                                                @endfor

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic multiple Column Form section end -->
            </div>
<style>
    
    
    #user_li {
        float:right;
        margin-left:10px;
        border:1px solid darkgray; 
        padding:10px 10px 10px 10px; 
        border-radius:10px; 
        list-style:none; 
        height:35px; 
        width: 30px;}
    #user_right_li {
        float:left; 
        margin-left:10px;  
        list-style:none; 
        height:30px;
    }
    
    input{
        height:30px; 
        border:1px solid darkgray; 
        padding:10px 10px; 
        border-radius:80px;
        width:150px;
        
    }
    .editbtn{
        background-color:#ffb473; 
        padding-left:12px;padding-right:12px;
    }
     th {
        font-size:11px; 
        color:white; 
        background-color:black !important;
       
    }
     .searchbtn{
        background-color:#32b39f;
        }
        .head_up{float:right}
    .newuser span{background-color:green; padding:5px;color:white}
        
</style>
            @include('includes.admin.footer')
        </div>
    </div>
    
@endsection
    