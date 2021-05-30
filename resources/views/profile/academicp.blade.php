<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $c->Title}}{{ $c->FirstName}}{{' '}}{{ $c->LastName}}</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
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

.multiselect {
  width: 200px;
}

.selectBox {
  position: relative;
}

.selectBox select {
  width: 100%;
  font-weight: bold;
}

.overSelect {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}

#checkboxes {
  display: none;
  border: 1px #dadada solid;
}

#checkboxes label {
  display: block;
}

#checkboxes label:hover {
  background-color: #1e90ff;
}
</style>
<body>
<div class="container">
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
                    <!--a href="{{ $c->Photo}}"-->
                    <img src="/upload/profile/{{ $c->Photo}}" class="profilep" alt="">
                    
                  </a>
                      <!--span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span-->
                    </div>
                    <button id="myBtnqw" class="btn btn-primary"><i class="fa fa-fw fa-camera"></i></button>
                  </div>
                </div>
                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                  <div class="text-center text-sm-left mb-2 mb-sm-0">
                    <h2 class="pt-sm-2 pb-1 mb-0 text-nowrap"><b>{{ $c->Title}}{{ $c->FirstName}}{{' '}}{{ $c->LastName}}</b></h2>
                    <p class="mb-0">{{ $c->EmployeeID }}</p>
                    <!--div class="text-muted"><small>Last seen 2 hours ago</small></div-->
                    <!--div class="mt-2">
                      <--button class="btn btn-primary" type="button">
                        <i class="fa fa-fw fa-camera"></i>
                        <span>Change Photo</span>
                      </button-->
                    </div-->
                  </div>

                  <div class="btn-toolbar">
                  <div class="text-center text-sm-right">
                  </div>
                  
        
          
            <div class="px-xl-3">
            <div>
            <a href="/sppa" type="button" class="btn btn-secondary ">Project</a>
            </div>
               <div>
               <div>
            <a href="/lnotifi" type="button" class="btn btn-success ">Notifications</a>
            </div>
            <button id="myBtn"type="button" class="btn btn-primary">Edit Profile</button>
            </div>
              <button class="btn btn-block btn-warning" style="height:40px;" >
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
              <ul class="nav nav-tabs">
                <li class="nav-item"><a href="" class="active nav-link">Profile</a></li>
              </ul>
              <div class="tab-content pt-3">
                <div class="tab-pane active">
                  <form class="form" novalidate="">
                    <div class="row">
                      <div class="col">
                      <div class="col-xs-12 col-sm-8">
                    
                      <p><strong>EmployeeID : </strong> {{ $c->EmployeeID }} </p>
                    <p><strong>Gender: </strong> {{ $c->Gender}} </p>
                    <p><strong>DOB: </strong> {{ $c->DateOfBirth}} </p>
                    <p><strong>Designation: </strong> {{ $c->Designation}} </p>
                    <p><strong>Admin Role: </strong> {{ $c->AdminRole}} </p>
                    <p><strong>Email : </strong> {{ $c->EmailID }} </p>
                    <p><strong>LinkedIn: </strong> <a href="{{ $c->LinkedIn}} ">{{ $c->LinkedIn}}</a> </p>
                    <p><strong>Contact No: </strong> {{ $c->ContactNumber}} </p>
                    <p><strong>Official Website: </strong> <a href="{{ $c->OfficialWebsite}} ">{{ $c->OfficialWebsite}}</a></p>
                    <!--p><strong>Research Interest: </strong> {{ $c->ResearchInterest}} </p>
                    <p><strong>Field of Specialization: </strong> {{ $c->FieldOfSpecialization}} </p-->
                    
                </div>   
                      </div>
                    </div>
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
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
  <a href="/profile">X</a>
    <form method="POST" action="/updateacademic" enctype="multipart/form-data">
        @csrf
        <div title="title">Title</div><div>
                    
                    <select class="form-control" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"  name="title" value="{{ $c->Title}}"  required autofocus>
                        <option value="{{ $c->Title}}">{{ $c->Title}}</option>
                        <option value="Mr.">Mr.</option>
                        <option value="Mrs.">Mrs.</option>
                        <option value="Ms.">Ms.</option>
                        <option value="Dr.">Dr.</option>
                        <option value="Prof.">Prof.</option>
                        
                    </select>
                    
                </div> <br>
        <input type="hidden" name="email" value="{{ $c->EmailID }}" >
        
        <div title="firstname">First Name</div><input class="form-control" type="text" name="fname" placeholder="First Name" required="required" value="{{ $c->FirstName}}"><br>
        <div title="lastname">Last Name</div><input class="form-control" type="text" name="lname" placeholder="Last Name" required="required" value="{{ $c->LastName}}"><br>
        <div title="employee id">Employee Id</div><input class="form-control" type="text" name="eid" placeholder="Employee ID" required="required" value="{{ $c->EmployeeID }}"><br>
        <div title="select">Gender</div><div>
                    
                    <select class="form-control" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"  name="gender" value="{{ $c->Gender}}"  required autofocus>
                        <option value="{{ $c->Gender}}">{{ $c->Gender}}</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                       
                        
                    </select>
                    
                </div><br>
        <div title="select">Date of Birth</div><input class="form-control" type="date" name="dob" placeholder="DOB" required="required" value="{{ $c->DateOfBirth}}"><br>
        <div title="select">Designation</div><div>
                    
                    <select class="form-control" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"  name="designation" value="{{ $c->Designation}}"  required autofocus>
                    <option value="{{ $c->Designation}}">{{ $c->Designation}}</option>
                        <option value="Lecturer(CONFIRMED)">Lecturer(CONFIRMED)</option>
                        <option value="Lecturer(PROBATIONARY)">Lecturer(PROBATIONARY)</option>
                        <option value="Senior Lecturer">Senior Lecturer</option>
                        <option value="Associate Professor">Associate Professor</option>
                        <option value="Professor">Professor</option>
                       
                        
                    </select>
                    
                </div> <br>
        <div title="select">Admin Role</div><div>
                    
                    <select class="form-control" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"  name="arole" value="{{ $c->AdminRole}}"   autofocus>
                    <option value="{{ $c->Designation}}">{{ $c->Designation}}</option>
                        <option value="Head of the Department">Head of the Department</option>
                        <option value="Head of the Unit">Head of the Unit</option>
                        <option value="Senior Lecturer">Dean of the Faculty</option>
                        <option value="Associate Professor">Vice-Chancellor</option>
                        <option value="Professor">Rector</option>
                        <option value="Professor">Director of the Centre</option>
                       
                        
                    </select>
                    
                </div>
                 <br>
                 <!--div class="multiselect">
    <div class="selectBox" name="ri" onclick="showCheckboxes()">
      <select>
        <option>Select an option</option>
      </select>
      <div class="overSelect"></div>
    </div>
    <div id="checkboxes" >
      <label for="one">
        <input type="checkbox" id="one" value="Advanced database design and systems" />Advanced database design and systems</label>
      <label for="two">
        <input type="checkbox" id="two"value="Bioinformatics Computing" />Bioinformatics Computing</label>
        <label for="three">
        <input type="checkbox" id="three"value="Compiler design" />Compiler design</label>
        <label for="four">
        <input type="checkbox" id="four"value="Computer Networks and Internet Computing" />Computer Networks and Internet Computing</label>
        <label for="five">
        <input type="checkbox" id="five"value="Cryptography and Data Security" />Cryptography and Data Security</label>
        <label for="six">
        <input type="checkbox" id="six"value="Data communication and computer networks" />Data communication and computer networks</label>
        <label for="seven">
        <input type="checkbox" id="seven"value="Data Structures and Algorithms" />Data Structures and Algorithms</label>
        <label for="eight">
        <input type="checkbox" id="eight"value="Digital Image Processing" />Digital Image Processing</label>
        <label for="nine">
        <input type="checkbox" id="nine"value="E-technologies" />E-technologies</label>
        <label for="ten">
        <input type="checkbox" id="ten"value="Foundations of Computer Science" />Foundations of Computer Science</label>
        <label for="eleven">
        <input type="checkbox" id="eleven"value="Graphics and Visual Computing" />Graphics and Visual Computing</label>
       <label for="twelve">
        <input type="checkbox" id="twelve"value="Multimedia Technologies" />Multimedia Technologies</label>
        <label for="thirteen">
        <input type="checkbox" id="thirteen"value="Numerical Computing" />Numerical Computing</label>
        <label for="fourteen">
        <input type="checkbox" id="fourteen"value="Numerical Linear algebra and solutions of differential equations" />Numerical Linear algebra and solutions of differential equations</label>
        <label for="fifeteen">
        <input type="checkbox" id="fifeteen"value="Object Oriented Programming" />Object Oriented Programming</label>
        <label for="sixteen">
        <input type="checkbox" id="sixteen"value="Parallel computing" />Parallel computing</label>
        <label for="seventeen">
        <input type="checkbox" id="seventeen"value="Principles of computer Architecture" />Principles of computer Architecture</label>
        <label for="eighteen">
        <input type="checkbox" id="eighteen"value="Programming in Logic" />Programming in Logic</label>
        <label for="nineteen">
        <input type="checkbox" id="nineteen"value="System design, analysis and project management" />System design, analysis and project management</label>
        <label for="twenty">
        <input type="checkbox" id="twenty"value="Computer Systems" />Computer Systems</label>
        <label for="twentyone">
        <input type="checkbox" id="twentyone"value="Human Computer Interaction" />Human Computer Interaction</label>
        <label for="twentytwo">
        <input type="checkbox" id="twentytwo"value="Design of Algorithms" />Design of Algorithms</label>
        <label for="twentythree">
        <input type="checkbox" id="twentythree"value="Organisational Behaviour" />Organisational Behaviour</label>
        <label for="twentyfour">
        <input type="checkbox" id="twentyfour"value="Computer Architecture" />Computer Architecture</label>
        <label for="twentyfive">
        <input type="checkbox" id="twentyfive"value="Programming Languages" />Programming Languages</label>
        <label for="twentysix">
        <input type="checkbox" id="twentysix"value="Web Technologies" />Web Technologies</label>
        <label for="twentyseven">
        <input type="checkbox" id="twentyseven"value="Emerging Trends" />Emerging Trends</label>
        <label for="twentyeight">
        <input type="checkbox" id="twentyeight"value="High Performance Computing" />High Performance Computing</label>
        <label for="twentynine">
        <input type="checkbox" id="twentynine"value="Image Processing and Computer Vision" />Image Processing and Computer Vision</label>
        <label for="thirty">
        <input type="checkbox" id="thirty"value="Machine Learning" />Machine Learning</label>
        <label for="thirtyone">
        <input type="checkbox" id="thirtyone"value="Systems and Network Administration" />Systems and Network Administration</label>
    </div>
  </div><br-->
        <div title="https://www.linkedin.com/in/username/">LinkedIn Id</div><input class="form-control" type="text" name="linkedin" placeholder="LinkedIn"  value="{{ $c->LinkedIn}}"><br>
        <div title="07XXXXXXXX">Contact No.</div><input class="form-control" type="text" name="cno" placeholder="Contact Number"  value="{{ $c->ContactNumber}}"><br>
        <div title="www.sitename.lk/com">Official website</div><input class="form-control" type="text" name="ow" placeholder="Official Website" required="required" value="{{ $c->OfficialWebsite}}"><br>
        <!--div title="select">Research Interests</div><div>
                    
                    <select class="form-control" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"  name="ri" value="{{ $c->ResearchInterest}}"  required autofocus>
                        <option value="{{ $c->ResearchInterest}}">{{ $c->ResearchInterest}}</option>
                        <option value="Advanced database design and systems">Advanced database design and systems</option>
                        <option value="Bioinformatics Computing">Bioinformatics Computing</option>
                        <option value="Compiler design">Compiler design</option>
                        <option value="Computer Networks and Internet Computing">Computer Networks and Internet Computing</option>
                        <option value="Cryptography and Data Security">Cryptography and Data Security</option>
                        <option value="Data communication and computer networks">Data communication and computer networks</option>
                        <option value="Data Structures and Algorithms">Data Structures and Algorithms</option>
                        <option value="Digital Image Processing">Digital Image Processing</option>
                        <option value="E-technologies">E-technologies</option>
                        <option value="Foundations of Computer Science">Foundations of Computer Science</option>
                        <option value="Graphics and Visual Computing">Graphics and Visual Computing</option>
                        <option value="Multimedia Technologies">Multimedia Technologies</option>
                        <option value="Numerical Computing">Numerical Computing</option>
                        <option value="Numerical Linear algebra and solutions of differential equations">Numerical Linear algebra and solutions of differential equations</option>
                        <option value="Object Oriented Programming">Object Oriented Programming</option>
                        <option value="Parallel computing">Parallel computing</option>
                        <option value="Principles of computer Architecture">Principles of computer Architecture</option>
                        <option value="Programming in Logic">Programming in Logic</option>
                        <option value="System design, analysis and project management">System design, analysis and project management</option>
                        <option value="Computer Systems">Computer Systems</option>
                        <option value="Human Computer Interaction">Human Computer Interaction</option>
                        <option value="Design of Algorithms">Design of Algorithms</option>
                        <option value="Organisational Behaviour">Organisational Behaviour</option>
                        <option value="Computer Architecture">Computer Architecture</option>
                        <option value="Programming Languages">Programming Languages</option>
                        <option value="Web Technologies">Web Technologies</option>
                        <option value="Emerging Trends">Emerging Trends</option>
                        <option value="High Performance Computing">High Performance Computing</option>
                        <option value="Image Processing and Computer Vision">Image Processing and Computer Vision</option>
                        <option value="Machine Learning">Machine Learning</option>
                        <option value="Systems and Network Administration">Systems and Network Administration</option>
                        
                        
                    </select>

                    <div class="multiselect">
    <div class="selectBox" name="ri" onclick="showCheckboxes()">
      <select>
        <option>Select an option</option>
      </select>
      <div class="overSelect"></div>
    </div>
    <div id="checkboxes" >
      <label for="one">
        <input type="checkbox" id="one" value="Advanced database design and systems" />Advanced database design and systems</label>
      <label for="two">
        <input type="checkbox" id="two"value="Bioinformatics Computing" />Bioinformatics Computing</label>
        <label for="three">
        <input type="checkbox" id="three"value="Compiler design" />Compiler design</label>
        <label for="four">
        <input type="checkbox" id="four"value="Computer Networks and Internet Computing" />Computer Networks and Internet Computing</label>
        <label for="five">
        <input type="checkbox" id="five"value="Cryptography and Data Security" />Cryptography and Data Security</label>
        <label for="six">
        <input type="checkbox" id="six"value="Data communication and computer networks" />Data communication and computer networks</label>
        <label for="seven">
        <input type="checkbox" id="seven"value="Data Structures and Algorithms" />Data Structures and Algorithms</label>
        <label for="eight">
        <input type="checkbox" id="eight"value="Digital Image Processing" />Digital Image Processing</label>
        <label for="nine">
        <input type="checkbox" id="nine"value="E-technologies" />E-technologies</label>
        <label for="ten">
        <input type="checkbox" id="ten"value="Foundations of Computer Science" />Foundations of Computer Science</label>
        <label for="eleven">
        <input type="checkbox" id="eleven"value="Graphics and Visual Computing" />Graphics and Visual Computing</label>
       <label for="twelve">
        <input type="checkbox" id="twelve"value="Multimedia Technologies" />Multimedia Technologies</label>
        <label for="thirteen">
        <input type="checkbox" id="thirteen"value="Numerical Computing" />Numerical Computing</label>
        <label for="fourteen">
        <input type="checkbox" id="fourteen"value="Numerical Linear algebra and solutions of differential equations" />Numerical Linear algebra and solutions of differential equations</label>
        <label for="fifeteen">
        <input type="checkbox" id="fifeteen"value="Object Oriented Programming" />Object Oriented Programming</label>
        <label for="sixteen">
        <input type="checkbox" id="sixteen"value="Parallel computing" />Parallel computing</label>
        <label for="seventeen">
        <input type="checkbox" id="seventeen"value="Principles of computer Architecture" />Principles of computer Architecture</label>
        <label for="eighteen">
        <input type="checkbox" id="eighteen"value="Programming in Logic" />Programming in Logic</label>
        <label for="nineteen">
        <input type="checkbox" id="nineteen"value="System design, analysis and project management" />System design, analysis and project management</label>
        <label for="twenty">
        <input type="checkbox" id="twenty"value="Computer Systems" />Computer Systems</label>
        <label for="twentyone">
        <input type="checkbox" id="twentyone"value="Human Computer Interaction" />Human Computer Interaction</label>
        <label for="twentytwo">
        <input type="checkbox" id="twentytwo"value="Design of Algorithms" />Design of Algorithms</label>
        <label for="twentythree">
        <input type="checkbox" id="twentythree"value="Organisational Behaviour" />Organisational Behaviour</label>
        <label for="twentyfour">
        <input type="checkbox" id="twentyfour"value="Computer Architecture" />Computer Architecture</label>
        <label for="twentyfive">
        <input type="checkbox" id="twentyfive"value="Programming Languages" />Programming Languages</label>
        <label for="twentysix">
        <input type="checkbox" id="twentysix"value="Web Technologies" />Web Technologies</label>
        <label for="twentyseven">
        <input type="checkbox" id="twentyseven"value="Emerging Trends" />Emerging Trends</label>
        <label for="twentyeight">
        <input type="checkbox" id="twentyeight"value="High Performance Computing" />High Performance Computing</label>
        <label for="twentynine">
        <input type="checkbox" id="twentynine"value="Image Processing and Computer Vision" />Image Processing and Computer Vision</label>
        <label for="thirty">
        <input type="checkbox" id="thirty"value="Machine Learning" />Machine Learning</label>
        <label for="thirtyone">
        <input type="checkbox" id="thirtyone"value="Systems and Network Administration" />Systems and Network Administration</label>
    </div>
  </div>
                    
                </div> <br-->
                <!--div title="select">Field of Specialization</div><div>
                    
                    <select class="form-control" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"  name="fos" value="{{ $c->FieldOfSpecialization}}"  required autofocus>
                        <option value="{{ $c->FieldOfSpecialization}}">{{ $c->FieldOfSpecialization}}</option>
                        <option value="Advanced database design and systems">Advanced database design and systems</option>
                        <option value="Bioinformatics Computing">Bioinformatics Computing</option>
                        <option value="Compiler design">Compiler design</option>
                        <option value="Computer Networks and Internet Computing">Computer Networks and Internet Computing</option>
                        <option value="Cryptography and Data Security">Cryptography and Data Security</option>
                        <option value="Data communication and computer networks">Data communication and computer networks</option>
                        <option value="Data Structures and Algorithms">Data Structures and Algorithms</option>
                        <option value="Digital Image Processing">Digital Image Processing</option>
                        <option value="E-technologies">E-technologies</option>
                        <option value="Foundations of Computer Science">Foundations of Computer Science</option>
                        <option value="Graphics and Visual Computing">Graphics and Visual Computing</option>
                        <option value="Multimedia Technologies">Multimedia Technologies</option>
                        <option value="Numerical Computing">Numerical Computing</option>
                        <option value="Numerical Linear algebra and solutions of differential equations">Numerical Linear algebra and solutions of differential equations</option>
                        <option value="Object Oriented Programming">Object Oriented Programming</option>
                        <option value="Parallel computing">Parallel computing</option>
                        <option value="Principles of computer Architecture">Principles of computer Architecture</option>
                        <option value="Programming in Logic">Programming in Logic</option>
                        <option value="System design, analysis and project management">System design, analysis and project management</option>
                        <option value="Computer Systems">Computer Systems</option>
                        <option value="Human Computer Interaction">Human Computer Interaction</option>
                        <option value="Design of Algorithms">Design of Algorithms</option>
                        <option value="Organisational Behaviour">Organisational Behaviour</option>
                        <option value="Computer Architecture">Computer Architecture</option>
                        <option value="Programming Languages">Programming Languages</option>
                        <option value="Web Technologies">Web Technologies</option>
                        <option value="Emerging Trends">Emerging Trends</option>
                        <option value="High Performance Computing">High Performance Computing</option>
                        <option value="Image Processing and Computer Vision">Image Processing and Computer Vision</option>
                        <option value="Machine Learning">Machine Learning</option>
                        <option value="Systems and Network Administration">Systems and Network Administration</option>
                        
                        
                    </select>

                    <div class="multiselect">
    <div class="selectBox" name="fos" onclick="showCheckboxes()">
      <select>
        <option>Select an option</option>
      </select>
      <div class="overSelect"></div>
    </div>
    <div id="checkboxes" >
      <label for="one">
        <input type="checkbox" id="one" value="Advanced database design and systems" />Advanced database design and systems</label>
      <label for="two">
        <input type="checkbox" id="two"value="Bioinformatics Computing" />Bioinformatics Computing</label>
        <label for="three">
        <input type="checkbox" id="three"value="Compiler design" />Compiler design</label>
        <label for="four">
        <input type="checkbox" id="four"value="Computer Networks and Internet Computing" />Computer Networks and Internet Computing</label>
        <label for="five">
        <input type="checkbox" id="five"value="Cryptography and Data Security" />Cryptography and Data Security</label>
        <label for="six">
        <input type="checkbox" id="six"value="Data communication and computer networks" />Data communication and computer networks</label>
        <label for="seven">
        <input type="checkbox" id="seven"value="Data Structures and Algorithms" />Data Structures and Algorithms</label>
        <label for="eight">
        <input type="checkbox" id="eight"value="Digital Image Processing" />Digital Image Processing</label>
        <label for="nine">
        <input type="checkbox" id="nine"value="E-technologies" />E-technologies</label>
        <label for="ten">
        <input type="checkbox" id="ten"value="Foundations of Computer Science" />Foundations of Computer Science</label>
        <label for="eleven">
        <input type="checkbox" id="eleven"value="Graphics and Visual Computing" />Graphics and Visual Computing</label>
       <label for="twelve">
        <input type="checkbox" id="twelve"value="Multimedia Technologies" />Multimedia Technologies</label>
        <label for="thirteen">
        <input type="checkbox" id="thirteen"value="Numerical Computing" />Numerical Computing</label>
        <label for="fourteen">
        <input type="checkbox" id="fourteen"value="Numerical Linear algebra and solutions of differential equations" />Numerical Linear algebra and solutions of differential equations</label>
        <label for="fifeteen">
        <input type="checkbox" id="fifeteen"value="Object Oriented Programming" />Object Oriented Programming</label>
        <label for="sixteen">
        <input type="checkbox" id="sixteen"value="Parallel computing" />Parallel computing</label>
        <label for="seventeen">
        <input type="checkbox" id="seventeen"value="Principles of computer Architecture" />Principles of computer Architecture</label>
        <label for="eighteen">
        <input type="checkbox" id="eighteen"value="Programming in Logic" />Programming in Logic</label>
        <label for="nineteen">
        <input type="checkbox" id="nineteen"value="System design, analysis and project management" />System design, analysis and project management</label>
        <label for="twenty">
        <input type="checkbox" id="twenty"value="Computer Systems" />Computer Systems</label>
        <label for="twentyone">
        <input type="checkbox" id="twentyone"value="Human Computer Interaction" />Human Computer Interaction</label>
        <label for="twentytwo">
        <input type="checkbox" id="twentytwo"value="Design of Algorithms" />Design of Algorithms</label>
        <label for="twentythree">
        <input type="checkbox" id="twentythree"value="Organisational Behaviour" />Organisational Behaviour</label>
        <label for="twentyfour">
        <input type="checkbox" id="twentyfour"value="Computer Architecture" />Computer Architecture</label>
        <label for="twentyfive">
        <input type="checkbox" id="twentyfive"value="Programming Languages" />Programming Languages</label>
        <label for="twentysix">
        <input type="checkbox" id="twentysix"value="Web Technologies" />Web Technologies</label>
        <label for="twentyseven">
        <input type="checkbox" id="twentyseven"value="Emerging Trends" />Emerging Trends</label>
        <label for="twentyeight">
        <input type="checkbox" id="twentyeight"value="High Performance Computing" />High Performance Computing</label>
        <label for="twentynine">
        <input type="checkbox" id="twentynine"value="Image Processing and Computer Vision" />Image Processing and Computer Vision</label>
        <label for="thirty">
        <input type="checkbox" id="thirty"value="Machine Learning" />Machine Learning</label>
        <label for="thirtyone">
        <input type="checkbox" id="thirtyone"value="Systems and Network Administration" />Systems and Network Administration</label>
    </div>
  </div>
                    
                </div>  <br-->
        <div title="old password">Old Password</div><input class="form-control" type="password" name="pwrd" placeholder="Old Password" required="required" ><br>
        <div title="new password or confirm the old password">New Password</div><input class="form-control" type="password" name="nwpswrd" placeholder="New Password" required="required"><br>
        <input class="btn btn-primary" type="submit" value="submit">
        
    </form>
  </div>

</div>
<div id="myModalqw" class="modal" >

  <!-- Modal content -->
  <div class="modal-content" style="width:25%">
    <span  onclick="document.getElementById('myModalqw').style.display = 'none';" class="close">&times;</span>
    <form method="POST" action="/updateacademicpp" enctype="multipart/form-data">
        @csrf
        <div title="upload an image">Profile Picture</div><input class="form-control" type="file" name="photo" placeholder="add photo"> 
        <input type="hidden" name="email" value="{{ $c->EmailID}}" >
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


var expanded = false;

function showCheckboxes() {
  var checkboxes = document.getElementById("checkboxes");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}
</script>
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