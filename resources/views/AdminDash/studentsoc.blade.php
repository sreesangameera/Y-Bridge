
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Computer Science</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <meta name="_token" content="SFC22gpZIqy5TAzLOu4onWvu4TqiJ6da2P7Tlwi4"/>


<<<<<<< HEAD
     <link rel="stylesheet" type="text/css" href="/css/bootstrap1.min.css"/>
    
    <link rel="stylesheet" type="text/css" href="/css/font-awesome1.css"/>
    <link rel="stylesheet" type="text/css" href="/css/menu1.css"/>
    <link rel="stylesheet" type="text/css" href="/css/custom1.css"/>
    <link rel="stylesheet" type="text/css" href="/css/AdminLTE1.min.css"/>


    <link rel="stylesheet" type="text/css" href="/css/datatables.bootstrap1.css" />
    <link href="/css/sweetalert1.css" rel="stylesheet" />
    
    <link href="/css/metallic1.css" rel="stylesheet" typeee="text/css"/>
        <link href="/css/select21.css" rel="stylesheet" typeee="text/css"/>
=======
    <link rel="stylesheet" type="text/css" href="http://192.248.56.20/match-module/asset/admin-tem/css/bootstrap.min.css"/>
    
    <link rel="stylesheet" type="text/css" href="http://192.248.56.20/match-module/asset/admin-tem/css/font-awesome.css"/>
    <link rel="stylesheet" type="text/css" href="http://192.248.56.20/match-module/asset/admin-tem/css/menu.css"/>
    <link rel="stylesheet" type="text/css" href="http://192.248.56.20/match-module/asset/css/custom.css"/>
    <link rel="stylesheet" type="text/css" href="http://192.248.56.20/match-module/asset/css/AdminLTE.min.css"/>


    <link rel="stylesheet" type="text/css" href="http://192.248.56.20/match-module/asset/css/datatables.bootstrap.css" />
    <link href="http://192.248.56.20/match-module/asset/admin-tem/css/sweetalert.css" rel="stylesheet" />
    <link href="http://192.248.56.20/match-module/asset/css/AdminLTE.css" rel="stylesheet" typeee="text/css"/>
    <link href="http://192.248.56.20/match-module/asset/date/css/metallic.css" rel="stylesheet" typeee="text/css"/>
        <link href="http://192.248.56.20/match-module/asset/select2/select2.css" rel="stylesheet" typeee="text/css"/>
>>>>>>> 35ff1ad92f5c0bd24a6d1b89dbd7d0fff8bdca95





 
   
</head>
<body>

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<div class="nav-side-menu">
    <div class="brand">Computer Science</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
         
            <ul id="menu-content" class="menu-content collapse out">
               

            <li class="">
<<<<<<< HEAD
                  <a href="profile"><i class="fa fa-dashboard fa-lg"></i>Dashboard</span></a>
=======
                  <a href="admindash"><i class="fa fa-dashboard fa-lg"></i>Dashboard</span></a>
>>>>>>> 35ff1ad92f5c0bd24a6d1b89dbd7d0fff8bdca95
                </li>
                <li class="collapsed ">
                  <a href="acad"><i class="fa fa-gift fa-lg"></i>Academic</a>
                </li>

                <li class="collapsed ">
                  <a href="stud"><i class="fa fa-gift fa-lg"></i>Student</a>
                </li>

                <li class="collapsed ">
                  <a href="indd"><i class="fa fa-gift fa-lg"></i>Industrial</a>
                </li>

                <li class="collapsed active">
                  <a href="stusd"><i class="fa fa-gift fa-lg"></i>Student Societies</a>
                </li>

                <li class="collapsed ">
                  <a href="uped"><i class="fa fa-gift fa-lg"></i>Upcoming Events</a>
                </li>
                 <!--li class="collapsed ">
                  <a href="http://192.248.56.20/match-module/subtopic"><i class="fa fa-gift fa-lg"></i>Sub Topic</a>
                </li>
                <li class="collapsed ">
                  <a href="http://192.248.56.20/match-module/technologies"><i class="fa fa-gift fa-lg"></i>Technologies</a>
                </li>

                <li class="collapsed ">
                  <a href="http://192.248.56.20/match-module/event"><i class="fa fa-gift fa-lg"></i>Events</a>
                </li>

                <li  data-toggle="collapse" data-target="#staff" class="collapsed ">
                  <a href="#"><i class="fa fa-gift fa-lg"></i>University<span class="arrow"></span></a>
                </li>

                <ul class="sub-menu collapse " id="staff">
                  <li class=""><a href="http://192.248.56.20/match-module/university">University</a></li>
                  <li class=""><a href="http://192.248.56.20/match-module/faculty">Faculty</a></li>
                    <li class=""><a href="http://192.248.56.20/match-module/department">Department</a></li>
                </ul-->


                  
<<<<<<< HEAD
                 <!--li data-toggle="collapse" data-target="#profile" class="collapsed">
=======
                 <li data-toggle="collapse" data-target="#profile" class="collapsed">
>>>>>>> 35ff1ad92f5c0bd24a6d1b89dbd7d0fff8bdca95
                    <a href="#"><i class="fa fa-user fa-lg"></i> Profile <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="profile">
                  <li><a href="http://192.248.56.20/match-module/mail/update">Update Mail</a></li>
                  <li><a href="http://192.248.56.20/match-module/members/change-password">Change Password</a></li>
                  <li><a href="http://192.248.56.20/match-module/auth/logout">Logout</a></li>
<<<<<<< HEAD
                </ul-->
=======
                </ul>
>>>>>>> 35ff1ad92f5c0bd24a6d1b89dbd7d0fff8bdca95

                 
               
            </ul>
     </div>
</div>

  <div class="admin-header login">
      <a href="#"><i class="fa fa-user"></i> &nbsp;Administrator</a> &nbsp; 
<<<<<<< HEAD
      <span><button class="fa fa-sign-out" style="height:40px;" >
                <!--i class="fa fa-sign-out"></i-->
                <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Logout') }}
                            </x-dropdown-link>
                        </form>
                
              </button></span></a></div>
=======
      <span><a href="http://192.248.56.20/match-module/auth/logout"><i class="fa fa-sign-out"></i> Log out</span></a></div>
>>>>>>> 35ff1ad92f5c0bd24a6d1b89dbd7d0fff8bdca95
  </div>
 <div id="page-wrapper">
    <div class="row">
    
<<<<<<< HEAD
        <div class="border"><span>Student Societies</span></div><div><button onclick="document.getElementById('myModalqw2').style.display = 'block';" id="myBtnqw2" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i></button></div>
        <table  class="table table-striped table-bordered tabledash" >
=======
        <div class="border"><span>Lecturer Details</span></div>
        <table class="table table-bordered table-responsive-lg" class="table text-center">
>>>>>>> 35ff1ad92f5c0bd24a6d1b89dbd7d0fff8bdca95
        <thead>
        <tr>
            <th>Link</th>
            <th>Event Name</th>
            <th>Date</th>
            <th>Description</th>
<<<<<<< HEAD
            <th>Edit</th>
=======
           
>>>>>>> 35ff1ad92f5c0bd24a6d1b89dbd7d0fff8bdca95
            
            
            
        </tr>
<<<<<<< HEAD
        </thead>
        <tbody>
        @foreach ($studentsoct as $user)
=======
        @foreach ($upcomingevet as $user)
>>>>>>> 35ff1ad92f5c0bd24a6d1b89dbd7d0fff8bdca95
            <tr>
                
                <td>{{$user->Link}}</td>
                <td>{{$user->EName}}</td>
                <td>{{$user->Date}}</td>
                <td>{{$user->Description}}</td>
<<<<<<< HEAD
                <td><button onclick="document.getElementById('myModalqw').style.display = 'block';document.getElementById('des').value = '{{$user->Description}}';document.getElementById('link').value='{{ $user->Link}}';document.getElementById('id').value='{{ $user->id}}';document.getElementById('ename').value='{{ $user->EName}}';document.getElementById('date').value='{{ $user->Date}}';" id="myBtnqw" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></button></td>
=======
                
>>>>>>> 35ff1ad92f5c0bd24a6d1b89dbd7d0fff8bdca95
                
               
            </tr>
        @endforeach
<<<<<<< HEAD
        </tbody>
=======
        <thead>
>>>>>>> 35ff1ad92f5c0bd24a6d1b89dbd7d0fff8bdca95
    </table>
    
    </div>
</div>
<<<<<<< HEAD
<div id="myModalqw" class="modal" >
<div class="modal-content" style="width:25%">
    <span onclick="document.getElementById('myModalqw').style.display = 'none';" class="close">&times;</span>
<form method="POST" action="/studentsocietiesadmin" enctype="multipart/form-data">
        @csrf
        
        <div title="Link">Link</div><input id="link" class="form-control" type="text" name="link" placeholder="Link" required="required" ><br>
        <input id="id" class="form-control" type="hidden" name="id" placeholder="Link" required="required" ><br>
        <div title="firstname">Date</div><input id="date" class="form-control" type="text" name="date" placeholder="Date" required="required" ><br>
        <div title="event name">Event Name</div><input id="ename" class="form-control" type="text" name="ename" placeholder="Event Name" required="required" ><br>
        <div title="description">Description</div><input id="des" class="form-control" type="text" name="description" placeholder="Description" required="required" ><br>
       <input class="btn btn-primary" type="submit" value="submit">
        
    </form>
    </div>

</div>
<div id="myModalqw2" class="modal" >
<div class="modal-content" style="width:25%">
    <span onclick="document.getElementById('myModalqw2').style.display = 'none';" class="close">&times;</span>
<form method="POST" action="/studentsocietiesadminadd" enctype="multipart/form-data">
        @csrf
        
        <div title="Link">Link</div><input id="link" class="form-control" type="text" name="link" placeholder="Link" required="required" ><br>
        <input id="id" class="form-control" type="hidden" name="id" placeholder="Link" required="required" ><br>
        <div title="firstname">Date</div><input id="date" class="form-control" type="text" name="date" placeholder="Date" required="required" ><br>
        <div title="event name">Event Name</div><input id="ename" class="form-control" type="text" name="ename" placeholder="Event Name" required="required" ><br>
        <div title="description">Description</div><input id="des" class="form-control" type="text" name="description" placeholder="Description" required="required" ><br>
       <input class="btn btn-primary" type="submit" value="submit">
        
    </form>
    </div>

</div>



<script type="text/javascript" src="/js/jquery-1.10.21.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap1.min.js"></script>
    

    <script type="text/javascript" src="/js/jquery.dataTables1.min.js"></script>
    <script type="text/javascript" src="/js/datatables.bootstrap1.js"></script>
    <script type="text/javascript" src="/js/sweetalert1.min.js"></script>

    <script type="text/javascript" src="/js/zebra_datepicker1.js"></script>
    <script type="text/javascript" src="/js/select21.full.js"></script>
=======
    





    <script type="text/javascript" src="http://192.248.56.20/match-module/asset/admin-tem/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="http://192.248.56.20/match-module/asset/admin-tem/js/bootstrap.min.js"></script>
    

    <script type="text/javascript" src="http://192.248.56.20/match-module/asset/admin-tem/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="http://192.248.56.20/match-module/asset/admin-tem/js/datatables.bootstrap.js"></script>
    <script type="text/javascript" src="http://192.248.56.20/match-module/asset/admin-tem/js/sweetalert.min.js"></script>

    <script type="text/javascript" src="http://192.248.56.20/match-module/asset/date/js/zebra_datepicker.js"></script>
    <script type="text/javascript" src="http://192.248.56.20/match-module/asset/select2/select2.full.js"></script>
>>>>>>> 35ff1ad92f5c0bd24a6d1b89dbd7d0fff8bdca95
    <script type="text/javascript">


    $(document).ready(function(){
      setTimeout(function(){
         $(".select").select2({
          width:'100%',
          placeholder: "Please Select",
          allowClear: true
        });
         
        $("#myMessage").hide('slow');}, 2000);

      $('input[type=text]#date').Zebra_DatePicker({
        format: 'Y-m-d'
      });
      //alert();
        $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        }); 
    });
     (function ($) {

        $('#Adminfilter').keyup(function () {

            var rex = new RegExp($(this).val(), 'i');
            $('.AdminSearchable tr').hide();
            $('.AdminSearchable tr').filter(function () {
                return rex.test($(this).text());
            }).show();
            //$('#pager').html('');

        }) 
    }(jQuery));
      
    </script>

  <script type="text/javascript">
	//alert('welcome');
$(document).ready(function(){
   var table= $('#lecture-table').DataTable({
        processing: true,
        serverSide: true,
<<<<<<< HEAD
        ajax: '',
=======
        ajax: 'http://192.248.56.20/match-module/lectures/lecture-data',
>>>>>>> 35ff1ad92f5c0bd24a6d1b89dbd7d0fff8bdca95
        columns: [
            {data: 'first_name', name: 'first_name'},
            {data: 'last_name', name: 'last_name'},
            {data: 'contact_no', name: 'contact_no'},
            {data: 'email', name: 'email'},
            {data: 'action', name: 'action',orderable:false,searchable:false},

        ],
         "scrollY": 500,
        "scrollX": true,
        "fnDrawCallback": function (oSettings) {
          $('[data-toggle="tooltip"]').tooltip();
        }
    });

//delete function

$(document).on("click","#DeleteBtn",function(e){
        e.preventDefault();
        var deleteUrl=$(this).attr('href');
        //alert(deleteUrl);
        var token = $(this).attr('data-token');

                swal({   
                    title: "Are you sure?",   
                    text: "You will not be able to recover this imaginary file!",   
                    type: "warning",   
                    showCancelButton: true,   
                    confirmButtonColor: "#DB3945",   
                    confirmButtonText: "Yes, delete it!",   
                    closeOnConfirm: false }, 
                    function(isConfirm){   
                         if (isConfirm) {   
                                

    var request = $.ajax({
          url:deleteUrl,
          method: "GET",
          data: {_method: 'delete', _token :token},
          dataType: "json"
        });
         
        request.done(function( data ) {
            if(data.success) {
    swal({
          title: "Deleted!",
          //text:"Lecture Delete",
          timer: 2000,
          type:"success",
          showConfirmButton: true
        });
         table.ajax.reload();
          
            } //success
        });
         
        request.fail(function( jqXHR, textStatus ) {
          alert( "Request failed: " + textStatus );
        });
                            }
                    });


    });

});
	
	
</script>
<<<<<<< HEAD
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@if($msg = session()->get('msg'))
@if($msg == "Event updated")
<script>
     Swal.fire({
               position: 'top',
               icon: 'success',
               title: '{{$msg}}',
               showConfirmButton: false,
               timer: 2000
            
          });
     </script>
     
     @elseif($msg == "Event Added")
     <script>
     Swal.fire({
               position: 'top',
               icon: 'success',
               title: '{{$msg}}',
               showConfirmButton: false,
               timer: 2000
            
          });
     </script>
     
     
     @endif
@endif
<script> 
    $('.tabledash').DataTable();
 </script>
<script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js" ></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js" ></script>
<script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js" ></script>
<script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js" ></script>
=======

>>>>>>> 35ff1ad92f5c0bd24a6d1b89dbd7d0fff8bdca95
</body>
</html>
