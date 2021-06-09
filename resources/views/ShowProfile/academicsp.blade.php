<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="shortcut icon" href="images/uoj.ico" type="image/x-icon" />
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
                    
                    <img src="/upload/profile/{{ $c->Photo}}" class="profilep" alt="">
                    
                  </a>
                      <!--span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span-->
                    </div>
                    
                  </div>
                  <div>
                  <h6>If you wish to add me to your project,fill these requrements and click request</h6>
                  <form method="post" action="/sreq">
                  @csrf
                  <input type="text" placeholder="Student Id" name="stid">
                  <input type="text" placeholder="Project Id" name="pid">
                  <input type="hidden" placeholder="Project Id" name="lid" value="{{ $c->EmployeeID }}">
                  <input type="hidden" placeholder="Project Id" name="ln" value="{{ $c->Title}}{{ $c->FirstName}}{{' '}}{{ $c->LastName}}">

                  <button  type="submit" class="btn btn-warning btn-rounded">Request for project + </button>
                  </form>
            
            </div>
                </div>
                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                  <div class="text-center text-sm-left mb-2 mb-sm-0">
                    <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">{{ $c->Title}}{{ $c->FirstName}}{{' '}}{{ $c->LastName}}</h4>
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
           
              
            </div>
            
          </div>
          
        </div>
        
          
           
        
      
                  
                
              </div></div>
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
                    <p><strong>Official Website: </strong><a href="{{ $c->OfficialWebsite}} ">{{ $c->OfficialWebsite}}</a></p>
                    <p><strong>Research Interest: </strong> {{ $c->ResearchInterest}} </p>
                    <p><strong>Field of Specialization: </strong> {{ $c->FieldOfSpecialization}} </p>
                    
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@if($msg = session()->get('msg'))
@if($msg == "Your Request has been sent")
<script>
     Swal.fire({
               position: 'top',
               icon: 'success',
               title: '{{$msg}}',
               showConfirmButton: false,
               timer: 2000
            
          });
     </script>
     @elseif($msg == "This field can not be null")
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

</body>
</html>


