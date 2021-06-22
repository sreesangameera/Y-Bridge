<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $c->NameWithInitials}}</title>
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

.tooltip span {
    display:none;
}
.tooltip:hover span {
    display:block;
    position:fixed;
    overflow:hidden;
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
                    <!--a href=""-->
                    <img src="/upload/profile/{{ $c->Photo}}" class="profilep" alt="">
                    
                  </a>
                      <!--span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span-->
                    </div>
                    <button id="myBtnqw" class="btn btn-primary"><i class="fa fa-fw fa-camera"></i></button>
                  </div>
                </div>
                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                  <div class="text-center text-sm-left mb-2 mb-sm-0">
                    <h2 class="pt-sm-2 pb-1 mb-0 text-nowrap"><b>{{ $c->Title}}{{ $c->NameWithInitials}}</b></h2>
                    <p class="mb-0">{{ $c->CompanyPersonalEmailID}}</p>
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
            <a href="/sppi" type="button" class="btn btn-secondary ">Project</a>
            </div>
            <div>
            <a href="/inotifi" type="button" class="btn btn-success ">Notifications</a>
            </div>
            <div>
            <button id="myBtn"type="button" class="btn btn-primary">Edit Profile</button>
            </div>
            <div>
            <button id="myBtnri"type="button" class="btn btn-info">Field of Interests</button>
            </div>
              <button class="btn btn-block btn-warning" style="height:32;" >
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
                    
                      <p><strong>Company Name: </strong> {{ $c->CompanyName}} </p>
                    <p><strong>Company Personal Email: </strong> {{ $c->CompanyPersonalEmailID}} </p>
                    <p><strong>Designation: </strong> {{ $c->Designation}}</ </p>
                    <p><strong>LinkedIn: </strong><a href="{{ $c->LinkedIn}} "> {{ $c->LinkedIn}}</a> </p>
                    <p><strong>Fields Of Interests: </strong> {{ $c->FieldOfInterests}} </p>
                    <p><strong>ContactNumber: </strong> {{ $c->ContactNumber}} </p>
                    
                      
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
  <a type="button" class="btn btn-light btn-sm" style="width:25px;height:30px"  href="/profile">X</a>
    <form method="POST" action="/updateindustrialist" enctype="multipart/form-data">
        @csrf
        <div title="title">Title</div><div>
                    
                    <select class="form-control" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"  name="title" value="{{ $c->Title}}"  required autofocus>
                        <option value="{{ $c->Title}}">{{ $c->Title}}</option>
                        <option value="Mr.">Mr.</option>
                        <option value="Mrs.">Mrs.</option>
                        <option value="Ms.">Ms.</option>
                        
                        
                    </select>
                    
                </div> <br>
        <div title="Initials.Name">Name with initials</div><input class="form-control" type="text" name="namewi" placeholder="Name with initials" required="required" value="{{ $c->NameWithInitials}}"><br>
        <input type="hidden" name="email" value="{{ $c->CompanyPersonalEmailID}}" >
        
        <div title="Companyname(pvt)ltd">Company Name</div><input class="form-control" type="text" name="comn" placeholder="Company Name" required="required" value="{{ $c->CompanyName}}"><br>
        <div title="your position">Designation</div><input class="form-control" type="text" name="designation" placeholder="Designation" required="required" value="{{ $c->Designation}}"><br>
        <div title="https://www.linkedin.com/in/username/">LinkedIn Id</div><input class="form-control" type="text" name="linkedin" placeholder="LinkedIn"  value="{{ $c->LinkedIn}}"><br>
        
        <div title="07XXXXXXXX">Contact No.</div><input class="form-control" type="text" name="cn" placeholder="Contact Number" required="required" value="{{ $c->ContactNumber}}"><br>
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
    <form method="POST" action="/updateindustrialistpp" enctype="multipart/form-data">
        @csrf
        <div title="upload an image">Profile Picture</div><input class="form-control" type="file" name="photo" placeholder="add photo"> 
        <input type="hidden" name="email" value="{{ $c->CompanyPersonalEmailID}}" >
        <input class="btn btn-primary" type="submit" value="submit">
        
    </form>
  </div>

</div>

<div id="myModalri" class="modal" >

  <!-- Modal content -->
  <div class="modal-content" style="width:75%">
  <a type="button" class="btn btn-light btn-sm" style="width:25px;height:30px"  href="/profile">X</a>
    <form method="POST" action="/updateindustrialistri" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="email" value="{{ $c->CompanyPersonalEmailID}}" >
        <div title="">Fields of Interests</div><div>
                    
                   
                    <div class="multiselect">
    <div class="selectBox" name="fos" onclick="showCheckboxes()">
      <!--select>
        <option>Select an option</option>
      </select-->
      <div class="overSelect"></div>
    </div>
    <div id="checkboxes" >
    <label for="one">
        <input type="checkbox" id="Artificial Intelligence" name="FieldOfInterests[]" value="Artificial Intelligence" />Artificial Intelligence</label>
<label for="two">
        <input type="checkbox" id="Automata Theory" name="FieldOfInterests[]" value="Automata Theory" />Automata Theory</label>
<label for="three">
        <input type="checkbox" id="Big Data Analysis" name="FieldOfInterests[]" value="Big Data Analysis" />Big Data Analysis</label>
<label for="four">
        <input type="checkbox" id="Bioinformatics Computing" name="FieldOfInterests[]" value="Bioinformatics Computing" />Bioinformatics Computing</label>
<label for="five">
        <input type="checkbox" id="Blockchain" name="FieldOfInterests[]" value="Blockchain" />Blockchain</label>
<label for="six">
        <input type="checkbox" id="Compiler Design" name="FieldOfInterests[]" value="Compiler Design" />Compiler Design</label>
<label for="seven">
        <input type="checkbox" id="Computer Architecture" name="FieldOfInterests[]" value="Computer Architecture" />Computer Architecture</label>
<label for="eight">
        <input type="checkbox" id="Computer Graphics" name="FieldOfInterests[]" value="Computer Graphics" />Computer Graphics</label>
<label for="nine">
        <input type="checkbox" id="Computer Networks" name="FieldOfInterests[]" value="Computer Networks" />Computer Networks</label>
<label for="ten">
        <input type="checkbox" id="Computer Vision" name="FieldOfInterests[]" value="Computer Vision" />Computer Vision</label>
<label for="eleven">
        <input type="checkbox" id="Cryptography" name="FieldOfInterests[]" value="Cryptography" />Cryptography</label>
<label for="twelve">
        <input type="checkbox" id="Data Communication" name="FieldOfInterests[]" value="Data Communication" />Data Communication</label>
<label for="thirteen">
        <input type="checkbox" id="Data Mining" name="FieldOfInterests[]" value="Data Mining" />Data Mining</label>
<label for="fourteen">
        <input type="checkbox" id="Database Management Systems" name="FieldOfInterests[]" value="Database Management Systems" />Database Management Systems</label>
<label for="fifteen">
        <input type="checkbox" id="Deep Learning" name="FieldOfInterests[]" value="Deep Learning" />Deep Learning</label>
<label for="sixteen">
        <input type="checkbox" id="E-Learning" name="FieldOfInterests[]" value="E-Learning" />E-Learning</label>
<label for="seventeen">
        <input type="checkbox" id="High Performance Computing" name="FieldOfInterests[]" value="High Performance Computing" />High Performance Computing</label>
<label for="eighteen">
        <input type="checkbox" id="Human Computer Interaction" name="FieldOfInterests[]" value="Human Computer Interaction" />Human Computer Interaction</label>
<label for="nineteen">
        <input type="checkbox" id="Image Processing" name="FieldOfInterests[]" value="Image Processing" />Image Processing</label>
<label for="twenty">
        <input type="checkbox" id="Information Systems" name="FieldOfInterests[]" value="Information Systems" />Information Systems</label>
<label for="twentyone">
        <input type="checkbox" id="Intelligent Systems" name="FieldOfInterests[]" value="Intelligent Systems" />Intelligent Systems</label>
<label for="twentytwo">
        <input type="checkbox" id="IoT" name="FieldOfInterests[]" value="IoT" />IoT</label>
<label for="twentythree">
        <input type="checkbox" id="Knowledge Representation" name="FieldOfInterests[]" value="Knowledge Representation" />Knowledge Representation</label>
<label for="twentyfour">
        <input type="checkbox" id="Local Language Computing" name="FieldOfInterests[]" value="Local Language Computing" />Local Language Computing</label>
<label for="twentyfive">
        <input type="checkbox" id="Machine Learning" name="FieldOfInterests[]" value="Machine Learning" />Machine Learning</label>
<label for="twentysix">
        <input type="checkbox" id="Medical Image Analysis" name="FieldOfInterests[]" value="Medical Image Analysis" />Medical Image Analysis</label>
<label for="twentyseven">
        <input type="checkbox" id="Medical Imaging" name="FieldOfInterests[]" value="Medical Imaging" />Medical Imaging</label>
<label for="twentyeight">
        <input type="checkbox" id="Mobile Computing" name="FieldOfInterests[]" value="Mobile Computing" />Mobile Computing</label>
<label for="twentynine">
        <input type="checkbox" id="Natural Language Processing" name="FieldOfInterests[]" value="Natural Language Processing" />Natural Language Processing</label>
<label for="thirty">
        <input type="checkbox" id="Neural Networks" name="FieldOfInterests[]" value="Neural Networks" />Neural Networks</label>
<label for="thirtyone">
        <input type="checkbox" id="Numerical Computing" name="FieldOfInterests[]" value="Numerical Computing" />Numerical Computing</label>
<label for="thirtytwo">
        <input type="checkbox" id="Operating Systems" name="FieldOfInterests[]" value="Operating Systems" />Operating Systems</label>
<label for="thirtythree">
        <input type="checkbox" id="Opportunistic Network" name="FieldOfInterests[]" value="Opportunistic Network" />Opportunistic Network</label>
<label for="thirtyfour">
        <input type="checkbox" id="Organizational Behaviour" name="FieldOfInterests[]" value="Organizational Behaviour" />Organizational Behaviour</label>
<label for="thirtyfive">
        <input type="checkbox" id="Parallel Computing" name="FieldOfInterests[]" value="Parallel Computing" />Parallel Computing</label>
<label for="thirtysix">
        <input type="checkbox" id="Rapid Application Development" name="FieldOfInterests[]" value="Rapid Application Development" />Rapid Application Development</label>
<label for="thirtyseven">
        <input type="checkbox" id="Social Network Analysis" name="FieldOfInterests[]" value="Social Network Analysis" />Social Network Analysis</label>
<label for="thirtyeight">
        <input type="checkbox" id="Software-defined Networking" name="FieldOfInterests[]" value="Software-defined Networking" />Software-defined Networking</label>
<label for="thirtynine">
        <input type="checkbox" id="Spiking Neural Networks" name="FieldOfInterests[]" value="Spiking Neural Networks" />Spiking Neural Networks</label>
<label for="forty">
        <input type="checkbox" id="System Design and Analysis" name="FieldOfInterests[]" value="System Design and Analysis" />System Design and Analysis</label>
<label for="fortyone">
        <input type="checkbox" id="Web Technologies" name="FieldOfInterests[]" value="Web Technologies" />Web Technologies</label>


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
  var tooltipSpan = document.getElementById('tooltip-span');

window.onmousemove = function (e) {
    var x = e.clientX,
        y = e.clientY;
    tooltipSpan.style.top = (y + 20) + 'px';
    tooltipSpan.style.left = (x + 20) + 'px';
};
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
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
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