<!DOCTYPE html>
<html>
<head>
    <title>Y-Bridge</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>

<body>
  
<div class="container">
    @yield('content')
</div>
   

    

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p></p>
        </div>
    @endif
    <div style="width:80%; margin:auto;">
    <table  style="float:left; width:50%;">
      
          <thead>  
          <tr>
            <th>Lecturers</th>
            
            
            
        </tr>
        </thead>
        <tbody>
        @foreach(explode(',',$suggestiont) as $usert)
      
                    <tr>
                
                @php
                 $q=str_replace("/","*",$usert)
                 
               @endphp 
              
                <td><a href="{{url('shlec',$q)}}">{{$usert}}</a></td>
               
            @endforeach 
            </tr>  
  
        </tbody>
    </table>
    <table   style="float:right; width:50%;">

    <thead>  
          <tr>
            
            <th>Industrialists</th>

            
            
        </tr>
        </thead>
        <tbody>
       
        @foreach(explode(',',$suggestionta) as $userta)
                    <tr>
                
               
                @php
               $r=str_replace("/","*",$userta)
               @endphp 
                
                <td><a href="{{url('shind',$r)}}">{{$userta}}</a></br></td>
                
                
                 
            
            @endforeach 
            </tr>  
  
        </tbody>

    </table>
</div>

    </body>
</html>