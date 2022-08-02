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
                                           
                                        </div>
                                        <div class="head_right match-height">
                                            <!-- <form action=""> -->
                                            <ul> 
                                                <li id="user_right_li"><button class="btn btn-dark">Export</button></li>
                                                <li id="user_right_li"><input type="text" placeholder="Club"></li>
                                                <li id="user_right_li"><input type="text" placeholder="Month/year"></li>
                                                <li id="user_right_li"><button class="btn btnsearch" type="submit"> Search</button></li>
                                                
                                            </ul>
                                            <!-- </form> -->
                                        </div>
                                      </div>
                                    </div>
                                <div class="card-content">
                                    
                                    <div class="card-body">
                                        <table class="table table-bordered  leftTable" >
                                            <thead >
                                                <tr>
                                                    <th>ID</th>
                                                    <th>CLUB NAME</th>
                                                    <th>TOTAL NEW CLIENTS THIS MONTH</th>
                                                    <th>TOTAL CLIENTS LEFT THIS MONTH</th> 
                                                </tr>
                                            </thead>
                                            <tbody class="">
                                                
                                                <tr>
                                                    <td>45</td>
                                                    <td>Manchester</td>
                                                    <td>5</td>
                                                    <td>45</td>              
                                                </tr>
                                               
                                               
                                            </tbody>
                                        </table>
                                        
                                            
                                               <div class="headlight">
                                                <div class="blnk"></div>
                                                <div class="info">
                                                <h3>HeadLight Info</h3>

                                                </div>
                                             

                                               </div>
                                         
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
    .btnsearch{
        background-color:#32b39f;
    }
    .headlight{float:right;width:50%;}
    .headlight h3{margin:15% 30%;}
    .leftTable{float:left;width:50%;}
    thead{background-color:black; height:35px;}
    .blnk{min-height:49px;margin-left:-1px;margin-top:1px; width:100%;background-color:black}

</style>
            @include('includes.admin.footer')
        </div>
    </div>
    
@endsection
    