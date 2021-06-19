<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $c->FirstName}}{{' '}}{{ $c->LastName}}</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<meta name="_token" content="{{ csrf_token() }}">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"></script>
<!-- Site Icons -->
<link rel="shortcut icon" href="images/uoj.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/uicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="styleprof.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>
   


</head>
<style type="text/css">
img {
display: block;
max-width: 100%;
}
.preview {
overflow: hidden;
width: 160px; 
height: 160px;
margin: 10px;
border: 1px solid red;
}
.modal-lg{
max-width: 1000px !important;
}
</style>
<style>
    body{
    margin-top:20px;
    background:#f8f8f8
}
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
.btn {
    width:120px;
    padding:5px;
}
.profilep {
  width: 140px;
  height: 140px;
}
input[type=text], select, textarea{
  width: 100%;
  padding: 1px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}
ul.nav-tabs li{
            background-color: rgba(210, 242, 255);
        }
        @media (max-width:600px){
            img#Logo{
                width:10%;
                float: left;
                padding-right: 1px;
            }
        }
        @media (max-width:768px) and (min-width:600px){
            img#Logo{
                width:10%;
                float: left;
                padding-right: 6px;

            }
        }

        @media (max-width:1024px) and (min-width:768px){
            img#Logo{
                width:13%;
                float: left;
                padding-right: 6px;
            }
        }
        @media (max-width:1600px) and (min-width:1024px){
            img#Logo{
                width:18%;
                padding-right: 20px;

                float: left;
            }
        }
        @media (max-width:2800px) and (min-width:1600px){
            img#Logo{
                padding-right: 30px;
                float: left;
                width:20%;
            }
        }
</style>
<body>
<!--div class="navbar-brand"  href="home"><img src="images/logos/logo.png" id="Logo"> <h1 class="animated fadeInDown heading" style="color: #03a1fc" ><b>Y-Bridge</h1>
                        <h4 style="color: #0049FF">"A match-module to bridge students with Academic and Industry-based supervisors" </h4><div class="col-md-10">
                        
    </div>
                                            </div>
</br></br></br></br></br-->
<div class="container" >
<div class="row flex-lg-nowrap">
  <div class="col-12 col-lg-auto mb-3" style="width: 200px;">
    <!--div class="card p-3">
      <div class="e-navlist e-navlist--active-bg">
        <ul class="nav">
          <li class="nav-item"><a class="nav-link px-2 active" href="./overview.html"><i class="fa fa-fw fa-bar-chart mr-1"></i><span>Overview</span></a></li>
          <li class="nav-item"><a class="nav-link px-2" href="./users.html"><i class="fa fa-fw fa-th mr-1"></i><span>CRUD</span></a></li>
          <li class="nav-item"><a class="nav-link px-2" href="./settings.html"><i class="fa fa-fw fa-cog mr-1"></i><span>Settings</span></a></li>
        </ul>
      </div>
    </div-->
  </div>

  <div class="col">
    <div class="row">
      <div class="col mb-3">
        <div class="card">
          <div class="card-body">
            <div class="e-profile">
              <div class="row">
                <div class="col-12 col-sm-auto mb-3">
                  <div class="mx-auto" style="width: 140px;">
                    <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                    <!--a href="{{ $c->photo}}"-->
                    <img src="/upload/profile/{{ $c->photo}}" class="profilep" alt="">
                    
                  </a>
                      <!--span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span-->
                    </div>
                    <button id="myBtnqw" class="btn btn-primary"><i class="fa fa-fw fa-camera"></i></button>
                  </div>
                </div>
                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                  <div class="text-center text-sm-left mb-2 mb-sm-0">
                    <h2 class="pt-sm-2 pb-1 mb-0 text-nowrap"><b>{{ $c->FirstName}}{{' '}}{{ $c->LastName}}</b></h2>
                    <p class="mb-0">{{ $c->StudentID}}</p>
                    <p class="mb-0">{{ $c->YearOfStudy}}</p>
                    <!--div class="text-muted"><small>Last seen 2 hours ago</small></div-->
                    <!--div class="mt-2">
                      
                    </div-->
                  </div>

                  <div class="btn-toolbar">
                  <div class="text-center text-sm-right">
                  </div>
                  
        
          
            <div class="px-xl-3" >
            <div>
            <a href="/spps"  type="button" class="btn btn-secondary ">Project</a>
            </div>
            <div>
            <a href="/snotifi" type="button" class="btn btn-success ">Notifications</a>
            </div>
               <div>
            <button id="myBtn" type="button" class="btn btn-primary">Edit Profile</button>
            </div>
            <button id="myBtnri" type="button" class="btn btn-info">Skills</button>
            
            <div>
              <button class="btn btn-block btn-warning" style="height:32px;" >
                <!--i class="fa fa-sign-out"></i-->
                <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Logout') }}
                            </x-dropdown-link>
                        </form>
                
              </button>
            </div>
            </div>
            
          </div>
          
        </div>
        
          
           
        
      
                  
                
              </div>
              <ul class="nav nav-tabs" >
                <li class="nav-item"><a href="profile" class=" nav-link">Profile</a></li>
                <li class="nav-item"><a href="/updatestudentv" class="active nav-link">Edit Profile</a></li>
              </ul>
              <div class="tab-content pt-3" >
                <div class="tab-pane active">
                  <form class="form" novalidate="" >
                   
                  <form method="POST" action="/updatestudent" >
        @csrf
        <!--button class="btn btn-primary" type="button">
                        <i class="fa fa-fw fa-camera"></i>
                        <span>Change Photo</span>
                      </button><br><br-->
        <div title="firstname">First Name</div><input class="form-control" type="text" name="fname" placeholder="First Name" required="required" value="{{ $c->FirstName}}"><br>
        <input type="hidden" name="email" value="{{ $c->EmailID}}" >
        <div title="lastname">Last Name</div><input class="form-control" type="text" name="lname" placeholder="Last Name" required="required" value="{{ $c->LastName}}"><br>
        <div title="select">Level</div><div>
                    
                    <select class="form-control" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"  name="level" :value="{{ $c->YearOfStudy}}" required autofocus>
                        <option value="{{ $c->YearOfStudy}}">{{ $c->YearOfStudy}}</option>
                        <option value="Level-1G">Level-1G</option>
                        <option value="Level-1S">Level-1S</option>
                        <option value="Level-2G">Level-2G</option>
                        <option value="Level-2S">Level-2S</option>
                        <option value="Level-3G">Level-3G</option>
                        <option value="Level-3M">Level-3M</option>
                        <option value="Level-3S">Level-3S</option>
                        <option value="Level-4M">Level-4M</option>
                        <option value="Level-4S">Level-4S</option>
                        <option value="Level-4X">Level-4X</option>
                    </select>
                    
                </div><br>
        
        
        <div title="20XX/CSC/XXX,20XX/SP/XXX">Student Id</div><input class="form-control" type="text" name="si" placeholder="Student ID" required="required" value="{{ $c->StudentID}}"><br>
        
        <div title="Male/Female/Other">Gender</div><div>
                    
                    <select class="form-control" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"  name="g" value="{{ $c->Gender}}"  required autofocus>
                        <option value="{{ $c->Gender}}">{{ $c->Gender}}</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                       
                        
                    </select>
                    
                </div><br>
        <div title="select">Date of Birth</div><input class="form-control" type="date" name="dob" placeholder="DOB" required="required" value="{{ $c->DateOfBirth}}"><br>
        <div title="enter your home address">Home Address</div><input class="form-control" type="text" name="ha" placeholder="Home Address" required="required" value="{{ $c->HomeAddress}}"><br>
        <div title="07XXXXXXXX">Contact No</div><input class="form-control" type="text" name="cn" placeholder="Contact Number" required="required" value="{{ $c->ContactNumber}}"><br>
        <div title="https://www.linkedin.com/in/username/">LinkedIn Id</div><input class="form-control" type="text" name="li" placeholder="LinkedIn" value="{{ $c->LinkedIn}}"><br>
        <div title="select">Study Programme</div><div>
                    
                    <select class="form-control" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"  name="sp" value="{{ $c->StudyProgramme}}"  required autofocus>
                        <option value="{{ $c->StudyProgramme}}">{{ $c->StudyProgramme}}</option>
                        <option value="Computer Science">Computer Science</option>
                        <option value="Physical Science">Physical Science</option>
                        
                        
                    </select>
                    
                </div> <br>
        <div title="select">Subjects Offered</div><div>
                    
                    <select class="form-control" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"  name="so" value="{{ $c->SubjectsOffered}}"  required autofocus>
                        <option value="{{ $c->SubjectsOffered}}">{{ $c->SubjectsOffered}}</option>
                        <option value="Direct Computer Science"> Direct Computer Science</option>
                        <option value="PMM,AMM,CSC">PMM,AMM,CSC</option>
                        <option value="PMM,STA,CSC">PMM,STA,CSC</option>
                        <option value="AMM,STA,CSC">AMM,STA,CSC</option>
                        <option value="AMM,PHY,CSC">AMM,PHY,CSC</option>
                        <option value="PMM,PHY,CSC">PMM,PHY,CSC</option>
                        
                        
                    </select>
                    
                </div> <br>
        <div title="old password">Old Password</div><input class="form-control" type="password" name="pwrd" placeholder="Old Password" required="required" ><br>
        <div title="new password or confirm the old password">New Password</div><input class="form-control" type="password" name="nwpswrd" placeholder="New Password" required="required"><br>
        
        <input class="btn btn-primary" type="submit" value="submit">
        
    </form>
                    <!--div class="row">
                      <div class="col-12 col-sm-6 mb-3">
                        <div class="mb-2"><b>Change Password</b></div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Current Password</label>
                              <input class="form-control" type="password" placeholder="••••••">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>New Password</label>
                              <input class="form-control" type="password" placeholder="••••••">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                              <input class="form-control" type="password" placeholder="••••••"></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-5 offset-sm-1 mb-3">
                        <div class="mb-2"><b>Keeping in Touch</b></div>
                        <div class="row">
                          <div class="col">
                            <label>Email Notifications</label>
                            <div class="custom-controls-stacked px-2">
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="notifications-blog" checked="">
                                <label class="custom-control-label" for="notifications-blog">Blog posts</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="notifications-news" checked="">
                                <label class="custom-control-label" for="notifications-news">Newsletter</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="notifications-offers" checked="">
                                <label class="custom-control-label" for="notifications-offers">Personal Offers</label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div-->
                    <!--div class="row">
                      <div class="col d-flex justify-content-end">
                        <button class="btn btn-primary" type="submit">Save Changes</button>
                      </div>
                    </div-->
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      
    </div>

  </div>
</div>
</div>
<div id="myModal" class="modal" >

  <!-- Modal content -->
  <div class="modal-content" style="width:75%">
  <a type="button" class="btn btn-light btn-sm" style="width:25px;height:30px"  href="/profile">X</a>
    
    <form method="POST" action="/updatestudent" enctype="multipart/form-data">
        @csrf
        <!--button class="btn btn-primary" type="button">
                        <i class="fa fa-fw fa-camera"></i>
                        <span>Change Photo</span>
                      </button><br><br-->
        <div title="firstname">First Name</div><input class="form-control" type="text" name="fname" placeholder="First Name" required="required" value="{{ $c->FirstName}}"><br>
        <input type="hidden" name="email" value="{{ $c->EmailID}}" >
        <div title="lastname">Last Name</div><input class="form-control" type="text" name="lname" placeholder="Last Name" required="required" value="{{ $c->LastName}}"><br>
        <div title="select">Level</div><div>
                    
                    <select class="form-control" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"  name="level" :value="{{ $c->YearOfStudy}}" required autofocus>
                        <option value="{{ $c->YearOfStudy}}">{{ $c->YearOfStudy}}</option>
                        <option value="Level-1G">Level-1G</option>
                        <option value="Level-1S">Level-1S</option>
                        <option value="Level-2G">Level-2G</option>
                        <option value="Level-2S">Level-2S</option>
                        <option value="Level-3G">Level-3G</option>
                        <option value="Level-3M">Level-3M</option>
                        <option value="Level-3S">Level-3S</option>
                        <option value="Level-4M">Level-4M</option>
                        <option value="Level-4S">Level-4S</option>
                        <option value="Level-4X">Level-4X</option>
                    </select>
                    
                </div><br>
        
        
        <div title="20XX/CSC/XXX,20XX/SP/XXX">Student Id</div><input class="form-control" type="text" name="si" placeholder="Student ID" required="required" value="{{ $c->StudentID}}"><br>
        
        <div title="Male/Female/Other">Gender</div><div>
                    
                    <select class="form-control" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"  name="g" value="{{ $c->Gender}}"  required autofocus>
                        <option value="{{ $c->Gender}}">{{ $c->Gender}}</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                       
                        
                    </select>
                    
                </div><br>
        <div title="select">Date of Birth</div><input class="form-control" type="date" name="dob" placeholder="DOB" required="required" value="{{ $c->DateOfBirth}}"><br>
        <div title="enter your home address">Home Address</div><input class="form-control" type="text" name="ha" placeholder="Home Address" required="required" value="{{ $c->HomeAddress}}"><br>
        <div title="07XXXXXXXX">Contact No</div><input class="form-control" type="text" name="cn" placeholder="Contact Number" required="required" value="{{ $c->ContactNumber}}"><br>
        <div title="https://www.linkedin.com/in/username/">LinkedIn Id</div><input class="form-control" type="text" name="li" placeholder="LinkedIn" value="{{ $c->LinkedIn}}"><br>
        <div title="select">Study Programme</div><div>
                    
                    <select class="form-control" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"  name="sp" value="{{ $c->StudyProgramme}}"  required autofocus>
                        <option value="{{ $c->StudyProgramme}}">{{ $c->StudyProgramme}}</option>
                        <option value="Computer Science">Computer Science</option>
                        <option value="Physical Science">Physical Science</option>
                        
                        
                    </select>
                    
                </div> <br>
        <div title="select">Subjects Offered</div><div>
                    
                    <select class="form-control" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"  name="so" value="{{ $c->SubjectsOffered}}"  required autofocus>
                        <option value="{{ $c->SubjectsOffered}}">{{ $c->SubjectsOffered}}</option>
                        <option value="Direct Computer Science"> Direct Computer Science</option>
                        <option value="PMM,AMM,CSC">PMM,AMM,CSC</option>
                        <option value="PMM,STA,CSC">PMM,STA,CSC</option>
                        <option value="AMM,STA,CSC">AMM,STA,CSC</option>
                        <option value="AMM,PHY,CSC">AMM,PHY,CSC</option>
                        <option value="PMM,PHY,CSC">PMM,PHY,CSC</option>
                        
                        
                    </select>
                    
                </div> <br>
        <div title="old password">Old Password</div><input class="form-control" type="password" name="pwrd" placeholder="Old Password" required="required" ><br>
        <div title="new password or confirm the old password">New Password</div><input class="form-control" type="password" name="nwpswrd" placeholder="New Password" required="required"><br>
        
        <input class="btn btn-primary" type="submit" value="submit">
        
    </form>
  </div>

</div>

<div id="myModalqw" class="modal" >

  <!-- Modal content -->
  <div class="modal-content" style="width:25%">
  <a type="button" class="btn btn-light btn-sm" style="width:25px;height:30px"  href="/profile">X</a>
    <form method="POST" action="/updatestudentpp" enctype="multipart/form-data">
        @csrf
        <div title="upload an image">Profile Picture</div><input class="form-control" type="file" name="photo" placeholder="add photo"> 
        <input type="hidden" name="email" value="{{ $c->EmailID}}" >
        <input class="btn btn-primary" type="submit" value="submit">
        
    </form>
  </div>

</div>

<div id="myModalri" class="modal" >

  <!-- Modal content -->
  <div class="modal-content" style="width:75%">
  <a type="button" class="btn btn-light btn-sm" style="width:25px;height:30px"  href="/profile">X</a>
    <form method="POST" action="/updatestudentri" enctype="multipart/form-data">
        @csrf
        
        <input type="hidden" name="email" value="{{ $c->EmailID}}" >
        <div title="">Skills</div><div>
                    
                   
                    <div class="multiselect">
    <div class="selectBox" name="fos" onclick="showCheckboxes()">
      <!--select>
        <option>Select an option</option>
      </select-->
      <div class="overSelect"></div>
    </div>
    <div id="checkboxes" >
      <label for="one">
        <input type="checkbox" id="Advanced database design and systems" name="Skills[]" value="Advanced database design and systems" />Advanced database design and systems</label>
      <label for="two">
        <input type="checkbox" id="Bioinformatics Computing" name="Skills[]" value="Bioinformatics Computing" />Bioinformatics Computing</label>
        <label for="three">
        <input type="checkbox" id="Compiler design" name="Skills[]" value="Compiler design" />Compiler design</label>
        <label for="four">
        <input type="checkbox" id="Computer Networks and Internet Computing" name="Skills[]" value="Computer Networks and Internet Computing" />Computer Networks and Internet Computing</label>
        <label for="five">
        <input type="checkbox" id="Cryptography and Data Security" name="Skills[]" value="Cryptography and Data Security" />Cryptography and Data Security</label>
        <label for="six">
        <input type="checkbox" id="Data communication and computer networks" name="Skills[]" value="Data communication and computer networks" />Data communication and computer networks</label>
        <label for="seven">
        <input type="checkbox" id="Data Structures and Algorithms" name="Skills[]" value="Data Structures and Algorithms" />Data Structures and Algorithms</label>
        <label for="eight">
        <input type="checkbox" id="Digital Image Processing" name="Skills[]" value="Digital Image Processing" />Digital Image Processing</label>
        <label for="nine">
        <input type="checkbox" id="E-technologies" name="Skills[]" value="E-technologies" />E-technologies</label>
        <label for="ten">
        <input type="checkbox" id="Foundations of Computer Science" name="Skills[]" value="Foundations of Computer Science" />Foundations of Computer Science</label>
        <label for="eleven">
        <input type="checkbox" id="Graphics and Visual Computing" name="Skills[]" value="Graphics and Visual Computing" />Graphics and Visual Computing</label>
       <label for="twelve">
        <input type="checkbox" id="Multimedia Technologies" name="Skills[]" value="Multimedia Technologies" />Multimedia Technologies</label>
        <label for="thirteen">
        <input type="checkbox" id="Numerical Computing" name="Skills[]" value="Numerical Computing" />Numerical Computing</label>
        <label for="fourteen">
        <input type="checkbox" id="Numerical Linear algebra and solutions of differential equations" name="Skills[]" value="Numerical Linear algebra and solutions of differential equations" />Numerical Linear algebra and solutions of differential equations</label>
        <label for="fifeteen">
        <input type="checkbox" id="Object Oriented Programming" name="Skills[]" value="Object Oriented Programming" />Object Oriented Programming</label>
        <label for="sixteen">
        <input type="checkbox" id="Parallel computing" name="Skills[]" value="Parallel computing" />Parallel computing</label>
        <label for="seventeen">
        <input type="checkbox" id="Principles of computer Architecture" name="Skills[]" value="Principles of computer Architecture" />Principles of computer Architecture</label>
        <label for="eighteen">
        <input type="checkbox" id="Programming in Logic" name="Skills[]" value="Programming in Logic" />Programming in Logic</label>
        <label for="nineteen">
        <input type="checkbox" id="System design, analysis and project management" name="Skills[]" value="System design, analysis and project management" />System design, analysis and project management</label>
        <label for="twenty">
        <input type="checkbox" id="Computer Systems" name="Skills[]" value="Computer Systems" />Computer Systems</label>
        <label for="twentyone">
        <input type="checkbox" id="Human Computer Interaction" name="Skills[]" value="Human Computer Interaction" />Human Computer Interaction</label>
        <label for="twentytwo">
        <input type="checkbox" id="Design of Algorithms" name="Skills[]" value="Design of Algorithms" />Design of Algorithms</label>
        <label for="twentythree">
        <input type="checkbox" id="Organisational Behaviour" name="Skills[]" value="Organisational Behaviour" />Organisational Behaviour</label>
        <label for="twentyfour">
        <input type="checkbox" id="Computer Architecture" name="Skills[]" value="Computer Architecture" />Computer Architecture</label>
        <label for="twentyfive">
        <input type="checkbox" id="Programming Languages" name="Skills[]" value="Programming Languages" />Programming Languages</label>
        <label for="twentysix">
        <input type="checkbox" id="Web Technologies" name="Skills[]" value="Web Technologies" />Web Technologies</label>
        <label for="twentyseven">
        <input type="checkbox" id="Emerging Trends" name="Skills[]" value="Emerging Trends" />Emerging Trends</label>
        <label for="twentyeight">
        <input type="checkbox" id="High Performance Computing" name="Skills[]" value="High Performance Computing" />High Performance Computing</label>
        <label for="twentynine">
        <input type="checkbox" id="Image Processing and Computer Vision" name="Skills[]" value="Image Processing and Computer Vision" />Image Processing and Computer Vision</label>
        <label for="thirty">
        <input type="checkbox" id="Machine Learning" name="Skills[]" value="Machine Learning" />Machine Learning</label>
        <label for="thirtyone">
        <input type="checkbox" id="Systems and Network Administration" name="Skills[]" value="Systems and Network Administration" />Systems and Network Administration</label>
    </div>
  </div>
                    
                </div><br>
        <input class="btn btn-primary" type="submit" value="submit">
        
    </form>
  </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@if($msg = session()->get('msg'))
@if($msg == "Profile Successfully Updated")
<script>
     Swal.fire({
               position: 'top',
               icon: 'success',
               title: '{{$msg}}',
               showConfirmButton: false,
               timer: 2000
            
          });
     </script>
     @elseif($msg == "Old password is wrong")
     <script>
     Swal.fire({
               position: 'top',
               icon: 'error',
               title: '{{$msg}}',
               showConfirmButton: false,
               timer: 2000
            
          });
     </script>
     @elseif($msg == "Profile picture updated successfully.")
     <script>
     Swal.fire({
               position: 'top',
               icon: 'success',
               title: '{{$msg}}',
               showConfirmButton: false,
               timer: 2000
            
          });
     </script>
     @elseif($msg == "This linkedin is already using")
     <script>
     Swal.fire({
               position: 'top',
               icon: 'error',
               title: '{{$msg}}',
               showConfirmButton: false,
               timer: 2000
            
          });
     </script>
     @elseif($msg == "DOB can not be a future date")
     <script>
     Swal.fire({
               position: 'top',
               icon: 'error',
               title: '{{$msg}}',
               showConfirmButton: false,
               timer: 2000
            
          });
     </script>
     @endif
@endif

<script>
    var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>
<script>
    var modal1 = document.getElementById("myModalqw");

// Get the button that opens the modal
var btn1 = document.getElementById("myBtnqw");

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn1.onclick = function() {
  modal1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
  modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
}

</script>
<script>
    var modal3 = document.getElementById("myModalri");

// Get the button that opens the modal
var btn3 = document.getElementById("myBtnri");

// Get the <span> element that closes the modal
var span3 = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn3.onclick = function() {
  modal3.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span3.onclick = function() {
  modal3.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal3) {
    modal3.style.display = "none";
  }
}

</script>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<div class="copyrights">
        <div class="container">
       
            <div class="footer-distributed">
                <div class="footer-left">                   
                    <p class="footer-company-name">All Rights Reserved. &copy; 2020  Design By : 
					<a href="#">TeamY-Bridge</a></p>
                </div>

                
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/hoverdir.js"></script>    
    
   
</body>
</html>