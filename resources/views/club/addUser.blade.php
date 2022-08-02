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
 
                                        <h6>Add New User </h6>
 
                                    </div>
                                <div class="card-content">
                                    
                                    <div class="card-body">
                                    <form action="">
                                        <div class="head_up">
                                            <ul> 
                                                
                                                    <li id="user_right_li">
                                                    <label for="fullname">Full Name</label><br>
                                                    <input type="text" name="fullname"></li>
                                                    <li id="user_right_li">
                                                    <label for="userEmail">Email</label><br>
                                                    <input type="text" name="userEmail"></li>
                                                    <li id="user_right_li">
                                                    <label for="address">Address</label><br>
                                                    <input type="text" name="userAddress"></li>
                                                    <li id="user_right_li">
                                                    <label for="postCode">Post Code</label><br>
                                                    <input type="text" name="fullname"></li>
                                                    <li id="user_right_li">
                                                    <label for="fullname">Full Name</label><br>
                                                    <input type="number" name="Contact"></li>
                                                    <li id="user_right_li">
                                                    <label for="dob">D.O.B</label><br>
                                                    <input type="date" name="userdob"></li>
                                                    <li id="user_right_li">
                                                    <label for="sex">Sex</label><br>
                                                    <select name="userSex" id="userSex">
                                                        <option value="">Sex</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                        <option value="Other">Other</option>
                                                    </select></li>
                                                    
                                                    
                                                    <li id="user_right_li">
                                                    <label for="fullname">Full Name</label><br>
                                                    <select name="userRole" id="userRole">
                                                        <option value="PTFC">PTFC</option>
                                                        <option value="GI">GI</option>
                                                        <option value="GM">GM</option>
                                                        <option value="AGM">AGM</option>
                                                    </select></li>
                                                    <li id="user_right_li">
                                                    <label for="userStartDate">Start Date</label><br>
                                                    <input type="date" name="userStartDate"></li>
                                                    <li id="user_right_li">
                                                    <label for="userRent">Rent</label><br>
                                                    <input type="number" name="userRent" id="rent"></li>
                                               
                                                
                                             </ul>
                                        </div>
                                        <div class="head_right match-height">
                                            <!-- <form action=""> -->
                                            <ul> 
                                                <li id="user_right_li1">
                                                    <div class="bl_content">
                                                        <label for="">PT's Signature</label>
                                                        <input type="textarea" id="ptSignature">
                                                    </div>
                                                    
                                                </li>
                                                <li id="user_right_li2"> <input id="check" type="checkbox"></li>
                                                <li id="user_right_li3">
                                                    <div class="bl_content">
                                                       <h6>Example Licence Agreement</h6>
                                                        <p>I can confirm that  the example licence agreement has been shown to me by the manager and i have read and understand the terms set out in the licence agreement. I acknowledge that by signing i am bound and agree to the terms laid out in the licence agreement. </p>
                                                    </div>
                                                </li>         
                                                <li id="user_right_li4"> <input id="check" type="checkbox"></li>
                                                <li id="user_right_li5">
                                                    <div class="bl_content">
                                                    <p><h6> Have you double checked all the Information</h6></p>
                                                    <p>I confirm thet i have double checked all the information I have entered is correct </p>
                                                    </div>
                                                </li>
                                                
                                                
                                            </ul>
                                            
                                            <!-- </form> -->
                                        </div>
                                        <div class="bt">
                                                <button class="btn btn-lg btnupload">Upload DD Mandate</button><button type="submit" class="btn btn-md btnsave">Save</button>
                                        </div>  
                                    </div>
                                    </form>
                                    <div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic multiple Column Form section end -->
            </div>
<style>
    
   .card-header h6{padding:5px;}

    #rent{
        width:80px;
    }
    select{width:80px;border-radius:10px;}
    .head_right{
         padding:10px; 
        margin-right:0px;
    }
    .head_up{ 
        float:right; 
        margin-bottom:100px;
    }
    
    .head_up li {
        float:left; 
        margin:20px 10px;  
        list-style:none; 
        height:30px;
        max-width:150px;
    }
    .head_up input{
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
        background-color:black;
        height:40px;
        
        padding:5px ;
        margin-bottom:-20px;
        }
        .card-header h6{color:white;}
    .head_up ul { 
        padding:10px 10px; 
        height:50px; 
        border-radius:10px;
        }
    .head_right li {
        float:left; 
        margin:10px 10px;  
        list-style:none; 
        /* height:30px; */
       
    }    
    .head_right #user_right_li1 {
        width:200px;;
    }    
    .head_right #user_right_li2 {
        width:20px;
    }    
    .head_right #user_right_li3 {
        width:250px;
    }  
    .head_right #user_right_li4 {
        width:20px;
    }  
    .head_right #user_right_li5 {
        width:200px;
    }    
    .head_right input{min-height:100px;border:1px solid gray; border-radius:10px;}
    /* .bl_content{width:20%}
    #check{width:4%;} */
    .btn{padding-bottom:10px;margin-left:5px; border-radius:10px;}
    .bt{margin-top:20px; margin-bottom:100px;}
    .btnsave{background-color:#32b39f}
    .btnupload{background-color:#ffb473}
</style>
            @include('includes.admin.footer')
        </div>
    </div>
    
@endsection
    