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
<table  class="table table-striped table-bordered tabledash" >
        <thead>
        <tr>
            <th>ProjectID</th>
            <th>Titleoftheproject</th>
            <th>Description</th>
            <th>ProjectType</th>
            <th>Student ID</th>
            <th>created_at</th>
            
            
        </tr>
        </thead>
        <tbody>
        @foreach ($usert as $user)
        
            <tr>
                
                <td>{{$user->ProjectID}}</td>
                <td>{{$user->Titleoftheproject}}</td>
                <td>{{$user->Description}}</td>
                <td>{{$user->ProjectType}}</td>
                <td>{{$user->StudentID}}</td>
                <td>{{$user->created_at}}</td> 
                
                
                   
        @endforeach
        </tbody>
    </table>
    <button
  type="button"
  class="btn btn-dark btn-rounded"
  data-mdb-ripple-color="dark"
><a href="/sppa">back</a></button>
</body>
</html>