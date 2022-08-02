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
                                        <div class="head_up">
                                        <ul> 
                                                
                                                <li id="user_right_li"><input type="text" placeholder="Club name"></li>
                                                <li id="user_right_li"><input type="text" placeholder="Email address"></li>
                                                <li id="user_right_li"><input type="text" placeholder="Clustor"></li>
                                                <li id="user_right_li"><input type="text" placeholder="Region"></li>
                                                <li id="user_right_li"><button class="btn btn-success" type="submit"> Add</button></li>
                                                
                                            </ul>
                                        </div>
                                        <div class="head_right match-height">
                                            <!-- <form action=""> -->
                                            <ul> 
                                                <li id="user_right_li"><button class="btn btn-dark">Export</button></li>
                                                <li id="user_right_li"><input type="text" placeholder="Email address"></li>         
                                                <li id="user_right_li"><button class="btn btn-success" type="submit"> Search</button></li>
                                                
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
                                                    <th>ID</th>
                                                    <th>CLUB NAME</th>
                                                    <th>EMAIL</th>
                                                    <th>CLUSTOR</th>
                                                    <th>REGION</th>
                                                    <th>PTFC</th>
                                                    <th>RENT</th>
                                                    <th>GI</th>
                                                    <th>GM</th>
                                                    <th>AGM</th>
                                                    <th>STUDENTS</th>
                                                    <th>ACTION</th>
                                                    
                                                </tr>
                                            </thead>

                                            
                                            <tbody class="">
                                                @for($i=1; $i<=15; $i++)
                                                <tr>
                                                    <td>{{$i}}</td>
                                                    <td>monchstr</td>
                                                    <td>email@gmail.com</td>
                                                    <td>8c</td>
                                                    <td>6</td>
                                                    <td>5</td>
                                                    <td>3</td>
                                                    <td>22</td>
                                                    <td>3</td>
                                                    <td>2</td>
                                                    
                                                    <td>23</td>
                                                    <td><div class="btn btn-md editbtn">Reset Pass</div></td>
                                                    



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
    }
    .head_up{ 
        float:right; 
        margin-bottom:10px;
    }
    
    #user_right_li {
        float:left; 
        margin-left:10px;  
        list-style:none; 
        height:35px;
    }
    input{
        height:30px; 
        width:150px; 
        border:1px solid darkgray; 
        padding:10px 5px; 
        border-radius:80px;
    }
    
    .editbtn{
        background-color:#ffb473;
    }
    
    .card-header{
        margin-bottom:-20px;
        }
    .head_up ul { background-color:silver; padding:10px 10px; height:50px; border-radius:10px;}    
</style>
            @include('includes.admin.footer')
        </div>
    </div>
    
@endsection
    