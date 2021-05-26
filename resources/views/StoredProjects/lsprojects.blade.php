<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table  class="table table-striped table-bordered tabledash" >
        <thead>
        <tr>
            <th>ProjectID</th>
            <th>Titleoftheproject</th>
            <th>Description</th>
            <th>ProjectType</th>
            <th>Technologies</th>
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
                <td>{{$user->Technologies}}</td>
                <td>{{$user->created_at}}</td> 
                
                
                   
        @endforeach
        </tbody>
    </table>
</body>
</html>