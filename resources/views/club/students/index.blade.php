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
                                                <li id="user_li">TOTAL: <strong>12</strong></li>
                                                
                                            </ul>
                                        </div>
                                        <div class="head_right match-height">
                                            <!-- <form action=""> -->
                                            <ul>
                                                
                                                <li id="user_right_li"><input type="text" placeholder="name or email address"></li>
                                                <li id="user_right_li"><button class="btn btn-success searchbtn" type="submit"> Search</button></li>
                                                
                                            </ul>
                                            <!-- </form> -->
                                        </div>
                                      </div>
                                    </div>
                                <div class="card-content">
                                    
                                    <div class="card-body">
                                        <table class="table table-bordered" >
                                            <thead>
                                                <tr>
                                                    <th>COMPLETION RATE</th>
                                                    <th>FULL NAME</th>
                                                    <th>EMAIL</th>
                                                    
                                                    <th>START DATE</th>
                                                    <th>STUDENT STATUS</th>
                                                    <th>NUMBER</th>
                                                    <th>QUAL</th>
                                                    <th>STATUS</th>
                                                    <th>ACTION</th>
                                                    
                                                </tr>

                                            </thead>
                                            <tbody class="">
                                                @for($i=1; $i<=15; $i++)
                                                <tr>
                                                    <td>50%</td>
                                                    <td>morgan</td>
                                                    <td>email@gmail.com</td>
                                                    <td>12/4/22</td>
                                                    
                                                    <td>learning</td>
                                                    <td>334543710</td>
                                                    <td>diploma</td>
                                                    <td><span>business plan</span></td>
                                                   
                                                    <td><div class="btn btn-md editbtn">EDIT</div></td>
                                                    



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
    .head_left{
        width:50%;
         margin-left:-40px;
        }
    .head_right{
        width:50%;
        float:right;
        margin-right:-80px;
     }
    #user_li {
        float:left;
        margin-left:10px;
        border:1px solid darkgray; 
        padding:10px 10px 10px 10px; 
        border-radius:10px; 
        list-style:none; 
        height:35px; 
        min-width: 80px;}
    #user_right_li {
        float:left; 
        margin-left:10px;  
        list-style:none; 
        height:35px;
    }
    input{
        height:35px; 
        border:1px solid darkgray; 
        padding:10px 5px; 
        border-radius:80px;
    }
    .editbtn{
        background-color:#ffb473; 
    }
     th {
        font-size:11px; 
        color:white; 
        background-color:black !important;
    }
     .searchbtn{
        background-color:#32b39f;
        }
        
</style>
            @include('includes.admin.footer')
        </div>
    </div>
    
@endsection
    