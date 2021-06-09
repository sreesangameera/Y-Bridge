<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Y-Bridge DCS UOJ</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/uoj.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/uicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<style>
body{
        background-color: #fff !important;
    }


        
        .heading{
            color: #fff;
            font-size: 2.5em;
        }
        .heading span{
    
            
            font-size: 0.5em;
        }
        h3{
            color: #fff;
            font-size: 2.2em;
        }
        #section{
            margin-top: 20px;
        }
        .events > p:before{
            padding-right: 10px;
            /*content: '>';*/
        }
        .events span{
           font-size: 14px;
           color: #BABABA;
           font-style: italic;
        }
        .mask > h3{
            font-size: 16px;
        }
       

        .user{
            padding:10px 0;
            min-height: 81px;

        }
        .user img{
            width:70px;
            padding-right: 10px;
        }
        .user .name{
            font-weight:600;
            font-size: 14px;
        }
        .user small{
            font-size: 12px;
        }
        .btn{
    border-radius: 0 !important;
}
.btn:focus {
  outline: none;
  box-shadow: none;
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
    


<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<title>Y-Bridge</title>
</head>

<body  data-new-gr-c-s-check-loaded="14.1007.0" data-gr-ext-installed="">

<div class="banner-area banner-bg-1">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="banner">
						<h2>Suggestion Page</h2>
                        <ul class="page-title-link">
							<li><a href="#">Industrialist</a></li>
							<li><a href="#">Student</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

<br><br><br><br>
<div class="container">
    @yield('content')
</div>

 <div class="demo">
        <div class="container">

<br><br><br>
<div style="width:100%; margin:auto;">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <h3>Proposed Students</h3>
    </br>
    
                            <h4>Student ID</h4>
                            
                        </div>

<br>
<br><br>
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p></p>
        </div>
    @endif
                        <div class="pricingContent">
                        <table style="float:right; width:100%;">
      
      <thead>  
      <tr>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        
        
    </tr>
    </thead>
    @foreach(explode(',',$suggestionind) as $user)
         <tbody>   
                <tr>
           
            @php
             $q=str_replace("/","*",$user)
             
           @endphp 
            
            <td><a target="_blank" href="{{url('shstu2',$q)}}">{{$user}}</a></br></td>
            @csrf
            
            
        @endforeach 
</tbody>
            </table>    
                        </div><!-- /  CONTENT BOX-->

<br><br><br>
                    </div>
                        <div class="pricingTable-sign-up"><!-- BUTTON BOX-->
                            <!--a href="#" class="btn btn-block btn-default">Send Request</a-->
                        </div><!-- BUTTON BOX-->
                    </div>
                </div>

                
               <!--div class="col-md-3 col-sm-6">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <h4>Proposed Lecturers</h4>
                            <span>Lecturer</span>
                            
                        </div>

<br><br><br>
<br><br><br>

                        <div class="pricingContent">
                            <ul>
                                <li><b></b> charith gamage</li><br>
                                <li><b></b> nipuna nissanka</li><br>
                                <li><b></b> athula perera</li><br>
                                <li><b></b> ron hewage</li><br>
                                <li><b></b> hema dayananda</li><br>
                            </ul>
                        </div>< /  CONTENT BOX-->

<br><br><br>

                        <!--div class="pricingTable-sign-up">< BUTTON BOX>
                            <a href="#" class="btn btn-block btn-default">Send Request</a-->
                        </div><!-- BUTTON BOX-->
                    </div>
                </div-->
            </div>
        </div>
    </div>



<h5>When you click on a suggestion result,it will redirected to a respective profile with another tab</h5>
<a href="/ipp">back</a>
<br><br><br>

    <div class="copyrights">
        <div class="container">
            
            <div class="footer-distributed">
                <div class="footer-left">                   
                    <p class="footer-company-name">All Rights Reserved. &copy; 2020  Design By : 
					<a href="https://html.design/">Y-Bridge</a></p>
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
