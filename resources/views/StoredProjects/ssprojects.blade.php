<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Projects</title>

    <link rel="stylesheet" type="text/css" href="/css/bootstrap1.min.css"/>
    
    <link rel="stylesheet" type="text/css" href="/css/font-awesome1.css"/>
    <link rel="stylesheet" type="text/css" href="/css/menu1.css"/>
    <link rel="stylesheet" type="text/css" href="/css/custom1.css"/>
    <link rel="stylesheet" type="text/css" href="/css/AdminLTE1.min.css"/>
    <link rel="stylesheet" type="text/css" href="/css/datatables.bootstrap1.css" />
    <link href="/css/sweetalert1.css" rel="stylesheet" />
    
    <link href="/css/metallic1.css" rel="stylesheet" typeee="text/css"/>
        <link href="/css/select21.css" rel="stylesheet" typeee="text/css"/>
        <link rel="sty1esheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="sty1esheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">   
<link rel="shortcut icon" href="images/uoj.ico" type="image/x-icon" />
</head>
<body>
    <br>
    <br>
    <br>
    <h3 class="text-center"><b>My Projects</b></h3>
<table  class="table table-striped table-bordered tabledash"  >
        <thead>
        <tr>
            <th>project ID</th>
            <th>Title of the project</th>
            <th>Description</th>
            <th>Project Type</th>
           
            <th>LecturerID</th>
            <th>Industrialist</th>
            <th>created at</th>
            <th>Action</th>
            
            
        </tr>
        </thead>
        <tbody>
        @foreach ($usert as $user)
        
            <tr>
                
                <td>{{$user->ProjectID}}</td>
                <td>{{$user->Titleoftheproject}}</td>
                <td>{{$user->Description}}</td>
                <td>{{$user->ProjectType}}</td>
                
                <td>{{$user->LecturerID}}</td>
                <td>{{$user->CompanyPersonalEmailID}}</td>
                <td>{{$user->created_at}}</td> 
                <td>
<a href="{{route('delsp',$user->id)}}" onclick="return confirm('Are you sure?')",
    class="btn btn-danger" type="button" 
>delete</a>&nbsp;<a href="{{route('showsugs',$user->ProjectID)}}"
    class="btn btn-warning" type="button" 
>Show Suggestions</a></td>
                </tr>
                   
        @endforeach
        </tbody>
    </table>
    <button
  type="button"
  class="btn btn-dark btn-rounded"
  data-mdb-ripple-color="dark"
>
    <a href="/spps">back</a></button>
    <script type="text/javascript" src="/js/jquery.dataTables1.min.js"></script>
    <script type="text/javascript" src="/js/datatables.bootstrap1.js"></script>
    <script type="text/javascript" src="/js/sweetalert1.min.js"></script>
    <script src="https://cdn.datatab1es.net/l.16.19/js/dataTab1es.bootstrap4.min.js"></script>   
    @if($msg = session()->get('msg'))
@if($msg == "Project Deleted successfully")
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
</body>
</html>