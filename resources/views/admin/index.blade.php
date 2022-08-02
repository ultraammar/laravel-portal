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
                                           <ul> 
                                                <li id="user_right_li"><button class="btn btn-dark">Export</button></li>
                                                <li id="user_right_li"><input type="text" placeholder="Club"></li>
                                                <li id="user_right_li"><input type="text" placeholder="Status"></li>
                                                <li id="user_right_li"><input type="text" placeholder="Qual"></li>
                                                <li id="user_right_li"><input type="text" placeholder="Com Rate"></li>
                                                <li id="user_right_li"><input type="text" placeholder="Name"></li>
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
                                                    <th>COMPLETION RATE</th>
                                                    <th>FULL NAME</th>
                                                    <th>EMAIL</th>
                                                    <th>DOB</th>
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
                                                    <td>4/5/22</td>
                                                    <td>learning</td>
                                                    <td>334543710</td>
                                                    <td>diploma</td>
                                                    <td><span>business plan</span></td>
                                                   
                                                    <td><div class="btn btn-md editbtn">Reset</div></td>
                                                    



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
        float:left;
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
        padding:10px 5px; 
        border-radius:80px;
        width:113px;
        
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
    