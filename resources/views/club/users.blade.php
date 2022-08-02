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
                                   <div >
                                        <div class="head_left">
                                        <ul> 
                                                <li id="user_right_li"><span>PTFC:<strong>12</strong></span></li>
                                                <li id="user_right_li"><span>RENT:<strong>4</strong></span></li>
                                                <li id="user_right_li"><span>GI:<strong>0</strong></span></li>
                                            </ul>
                                           
                                        </div>
                                        <div class="head_right match-height">
                                            <!-- <form action=""> -->
                                            <ul> 
                                                
                                                <li id="user_right_li"><input type="text" placeholder="Name"></li>
                                                <li id="user_right_li"><button class="btn btnsearch" type="submit"> Search</button></li>
                                                
                                            </ul>
                                            <!-- </form> -->
                                        </div>
                                      </div>
                                    </div>
                                <div class="card-content">
                                    
                                    <div class="card-body">
                                        <table class="table table-bordered  " >
                                            <thead >
                                                <tr>
                                                    <th>ID</th>
                                                    <th>FULL NAME</th>
                                                    <th>EMAIL</th>
                                                    <th>DOB</th>
                                                    <th>START DATE</th>
                                                    <th>ROLE</th>
                                                    <th>ADVANCED</th>
                                                    <th>FOUNDATION</th>
                                                    <th>LA DOCUMENT</th>
                                                    
                                                    <th>ACTION</th>
                                                    
                                                </tr>
                                            </thead>

                                            
                                            <tbody class="">
                                                @for($i=1; $i<=15; $i++)
                                                <tr>
                                                    <td>{{$i}}</td>
                                                    <td>morgan{{$i}}</td>
                                                    <td>email@gmail.com</td>
                                                    <td>12/4/22</td>
                                                    <td>4/5/22</td>
                                                    <td>PTFC</td>
                                                    <td>3/7/10</td>
                                                    <td>23/5/22</td>
                                                    <td><a href=""><span>Download</span></a></td>
                                                    
                                                    <td><a href="{{route('admin.user.show')}}" class="btn btn-md editbtn">Edit</a></td>
                                                    



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
    
    .head_right{ 
        float:right; 
        margin-right:0px;
        margin-bottom:-20px;
    }
    .head_left{ 
        float:left; 
        margin-right:0px;
        margin-bottom:-20px;
    }
    
    #user_right_li {
        float:left; 
        margin-left:10px;  
        list-style:none; 
        height:30px;
    }
    
    #user_right_li input{
        height:30px; 
        width:150px; 
        border:1px solid darkgray; 
        padding:10px 5px; 
        border-radius:80px;
    }
    
    .editbtn{
        background-color:#ffb473;
        
    }
    .btnsearch{
        background-color:#32b39f;
    }
    .head_left span{border:1px solid gray; border-radius:10px;padding:3px 5px;margin-right:10p;}
   
</style>
            @include('includes.admin.footer')
        </div>
    </div>
    
@endsection
    