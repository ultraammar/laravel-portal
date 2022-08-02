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
                        <div class="col-12 col-md-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    
                                        <h6>Edit User Details</h6>
                                </div>
                                <!-- <div class="card-content"> -->
                                    
                                    <div class="card-body">
                                        <div class="first">
                                            <div class="reward ">
                                                <img src="{{ asset('admin/assets/images/logo/reward.png') }}" alt="" height="120px" width="70px">
                                            </div>
                                            <div class="editTabs">
                                                <div class="upper">
                                                    <ul> 
                                                
                                                        <li id="user_right_li"><label for="emailAddress">Email Address</label><br><input type="email" placeholder="example@gmail.com"></li>
                                                        <li id="user_right_li"><label for="fullName">Full Name</label><br><input type="text" placeholder="fullName"></li>
                                                        <li id="user_right_li"><label for="dob">DOB</label><br><input type="date" placeholder="00/00/00"></li>
                                                        <li id="user_right_li"><label for="startDate">Start Date</label><br><input type="date" placeholder="00/00/00"></li>
                                                
                                                
                                                    </ul>
                                                    

                                                </div>
                                            </div>
                                            <div class="lower">
                                                    <ul> 
                                                
                                                        <li id="user_right_li">
                                                            <label for="role">Role</label><br>
                                                            <select name="role" id="role">
                                                                <option value="PTFC">PTFC</option>
                                                                <option value="">PTFC</option>
                                                                <option value="">PTFC</option>
                                                                <option value="">PTFC</option>

                                                            </select></li>
                                                        <li id="user_right_li">
                                                            <label for="date">Date</label> <br><input type="date"name="dob"></li>
                                                        <li id="user_right_li">
                                                             <label for="rent">Rent</label> <br><input id="rentInput" placeholder="00" type="number" name="rent"></li>
                                                        <li id="user_right_li"><span><button class="btn btn-sm btnsave">Save</button><button class="btn btn-sm btnagreement">Generate A New Licence Agreement</button><button class="btn btn-sm btndownload">Download</button></span></li>
                                                
                                                    </ul>
                                            </div>
                                        </div> 
                                        
                                        <div class="second_part">
                                            <ul id="cont">
                                                <li id="left">
                                                    <div id="moveUser"><h6 class="d-flex justify-content-center">MOVE THE USER</h6></div>
                                                    <div>
                                                    <ul>
                                                    <li id="user_li">
                                                            <label for="role">Exit Club</label><br>
                                                            <select name="role" id="role">
                                                                <option value="Manchester">Manchester</option>
                                                                <option value="">PTFC</option>
                                                                <option value="">PTFC</option>
                                                                <option value="">PTFC</option>

                                                            </select></li>
                                                    <li id="user_li"><label for="dob">DOB</label><br><input type="date" placeholder="00/00/00"></li>
                                                    
                                                    </ul>
                                                    <div><button class="btn d-flex  save" type=submit>Save</button> </div>
                                                    </div>
                                                    <div class="debitMandatePart">
                                                        <label for="debitMandate"><h6> Upload The Users Direct Debit Mandate </h6></label><br>
                                                        <input type="file">
                                                        <button class="btn d-flex saveend" type="submit">Save</button>
                                                    </div>
                                                </li>
                                                <li id="right">
                                                    <ul>
                                                    <li id="user_li"><label for="dob">Foundation</label><br><input type="date"></li>
                                                    <li id="user_li"><label for="dob">Advanced</label><br><input type="date"></li>
                                                    </ul>
                                                    <div class="removeUser">
                                                        <h6>REMOVE THE USER</h6><br>
                                                        <label for="removeUser"><h6>DATE OF REMOVAL </h6></label>
                                                        <input type="date"><br>
                                                        <label for="removalNote" >NOTES</label><br>
                                                        <textarea id="note" type="text"></textarea>
                                                        <button class="btn btn-danger btnremove" type="submit">Remove User</button>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                    



                                        
                                                <div class="tab1">
                                                    <ul> 
                                                        <li id="user_right_li"><p><strong>CLUB CHANGE INFO</strong> <p></li>
                                                        <li id="user_right_li"><label for="emailAddress">OLD CLUB</label><br><span>bhujy</span></li>
                                                        <li id="user_right_li"><label for="fullName">NEW CLUB</label><br><span>manchester</span></li>
                                                        <li id="user_right_li"><label for="dob">MADE BY</label><br><span>numanarif580@gmail.com</span></li>
                                                        <li id="user_right_li"><label for="startDate">DATE</label><br><span>00/00/00</span></li>
                                                    </ul>
                                                </div>
                                                <div class="tab1">
                                                    <ul> 
                                                    <li id="user_right_li"><p><strong>ROlE CHANGE INFO</strong> <p></li>
                                                        <li id="user_right_li"><label for="emailAddress">OLD ROLE</label><br><span>PTFC</span></li>
                                                        <li id="user_right_li"><label for="fullName">NEW ROLE</label><br><span>AGM</span></li>
                                                        <li id="user_right_li"><label for="dob">MADE BY</label><br><span>numanarif580@gmail.com</span></li>
                                                        <li id="user_right_li"><label for="startDate">DATE</label><br><span>00/00/00</span></li>
                                                    </ul>
                                                </div>
                                                <div class="tab1">
                                                    <ul> 
                                                        <li id="user_right_li"><p><strong>LEARING INFO</strong> <p></li>
                                                        <li id="user_right_li"><label for="emailAddress">DATE</label><br><span>00/00/00</span></li>
                                                        <li id="user_right_li"><label for="dob">MADE BY</label><br><span>numanarif580@gmail.com</span></li>
                                                      
                                                    </ul>
                                                </div>
                                                <div class="tab1">
                                                    <ul> 
                                                    <li id="user_right_li"><p><strong>ROlE CHANGE INFO</strong> <p></li>
                                                        <li id="user_right_li"><label for="emailAddress">OLD ROLE</label><br><span>PTFC</span></li>
                                                        <li id="user_right_li"><label for="fullName">NEW ROLE</label><br><span>AGM</span></li>
                                                        <li id="user_right_li"><label for="dob">MADE BY</label><br><span>numanarif580@gmail.com</span></li>
                                                        <li id="user_right_li"><label for="startDate">DATE</label><br><span>00/00/00</span></li>
                                                    </ul>
                                                </div>
                                                <div class="tab1">
                                                    <ul> 
                                                        <li id="user_right_li"><p><strong>LEARING INFO</strong> <p></li>
                                                        <li id="user_right_li"><label for="emailAddress">DATE</label><br><span>00/00/00</span></li>
                                                        <li id="useuser_right_lir_1"><label for="dob">MADE BY</label><br><span>numanarif580@gmail.com</span></li>
                                                        
                                                    </ul>
                                                </div>
                                            
                                    </div>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic multiple Column Form section end -->
            </div>

            @include('includes.admin.footer')
        </div>
    </div>
    <style>
    .upper #user_right_li {
        float:left; 
        margin-left:10px;
        list-style:none;
     }
     .tab1 #user_right_li {
        float:left; 
        margin-left:10px;
        list-style:none;
     }
     
    .lower #user_right_li {
        float:left; 
        margin-left:10px;  
        list-style:none; 
    }
    .upper input{
        height:30px;
        font-size:13px; 
        width:170px; 
        border:1px solid darkgray; 
        padding:10px 5px; 
        border-radius:10px;
    }
    .lower input{
        height:30px; 
        font-size:13px; 
        border:1px solid darkgray; 
        padding:10px 5px; 
        border-radius:10px;
        margin-right:10px;
    }
 select{
        height:35px; 
        border:1px solid darkgray; 
        padding:2px 2px; 
        border-radius:10px;
        margin-right:10px;
        font-size:13px;
    }
    .lower #rentInput{
        max-width:100px;
    }
    .lower .btn{
        border-radius:10px; 
        margin-left:5px;
    }
     label{
        font-size:14px; 
        color:black;
    }
    .lower label{
        font-size:14px;
        color:black
    }
    .card-header{
        background-color:black; 
        max-height:40px;
    }
    .card-header h6{
        color:white;
    }
    .padi{
        margin-bottom:0px;
    }
    .lower span{
        background-color:#f2ede1; 
        padding: 15px; 
        border-radius:10px; 
        float:right;
    }
    .reward{
        width:5%;
        float:left
    }
    .editTabs{
        width:95%; 
        float:right;
    }
    .upper{
        width:100%; 
        margin-top:30px;
    }
    .lower{
        padding-bottom:4px; 
        float:right
    }
    .btnsave{
        background-color:#32b39f;
    }
    .btnagreement{
        background-color:#fcef72;
        color:black;
    }
    .btndownload{
        background-color:#ffb473;
        
    }
    .second{
        border-top:1px solid gray}
    .second_first{
        width:50%;
        padding:10px;
    }
    .second_second{
        width:50%;
        padding:10px;}
    .second_part{
        width:100%;
        height:400px;
        
        margin-top:230px;
        border:1px solid gray;

        }
    .second_part li{
        
        list-style:none;
        padding:15px;
        }
        #user_li{
            float:left;
        }
        
        .second_part input{
        height:30px;
        font-size:13px; 
        width:130px; 
        border:1px solid darkgray; 
        padding:10px 5px; 
        border-radius:10px;
    }
    .second_part .btn{
        padding:10px;
        margin:auto;
        border-radius:10px;
        background-color:#32b39f;
        height:40px;
    }
    .second_part select{
        width:130px;
        font-size:13px;
        /* margin-right:15px; */
        height:30px;
        
    }
    .second_part #cont{
        border:1px solid gray;
    }
    .saveend{
        padding:10px;
        padding-bottom:10px;
       float:right;
    }
    .debitMandatePart input{
        width:250px;
        height:45px;
    }
    .debitMandatePart{
        margin-top:70px;
        /* border-top:1px solid gray; */
        
    }
    #right{
        width:50%;
        float:right;
    }
    #left{
        width:50%;
        float:left;
    }
    #right_up{
        width:100%;
    }
    .removeUser{
        width:100%; 
        margin-top:145px;
        background-color:#ffe8e8;
        padding:10px;
        border:1px solid gray;
    }
    .removeUser #note{
        width:60%;
        height:70px;
        border-radius:10px;
        margin-left:10px;
    }
    .btnremove{
        margin-top:40px !important;
        padding:10px;
        background-color:red !important;
       float:right;
    }
    .tab1{
        height:150px;
        border:1px solid gray;
        padding:15px;
    }
</style>
@endsection
    