<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Details For Lecturers</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<!--link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"-->
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

form { 
	margin: 0 auto; 
	width: 800px; 
}
.div1 {
  width: 700px;
  height: 100px;
  border: 1px solid black;
}

.btn {
    width:120px;
    padding:5px;
}
</style> 


<body>

    <h1 class="p-3 mb-2 bg-dark text-white" style="text-align: center;"><b>Project Details For Lecturers</b></h1> 
    <form
    class="p-3 mb-2 bg-info text-black"
    name="ProjectForm" method="post" action="/sto">
         @csrf
        
		 <p> 
         <input type="hidden" value="Lecturer" name="Destination">
		<br />
        <p>Lecturer ID :<br> <input type="text" placeholder="LecturerId"
                        size="45" name="LecturerID" />
                    </p> 


                   
        <br /> 
        
        <p>Project ID :<h12>(use employee id with a number)</h12><br> <input type="text" placeholder="LecturerId-1"
                        size="45" name="ProjectID" />
                    </p> 


                   
		<br /> 
		<p>Title of the project :<br> <input id="totp" type="text" placeholder="Title"
                        size="65" name="Titleoftheproject" />
                    </p> 


                   
		<br /> 
		<p>Description :<br> <textarea type="text" placeholder="Short description about your project. include technologies such as programming language, framework, database, etc. that you are going to use in your project.
"
						class="div1" name="Description" ></textarea></p> 
        <br /> 
        <!--p> 
            Technologies :<br>
			<select type="text" value="" name="Technologies"> 
				<option>Arduino</option> 
				<option>c#</option> 
				<option>c</option> 
                <option>c++</option> 
                <option>cakePHp</option>
                <option>CSS</option>
                <option>core Java</option>
                <option>ASP NET MVC</option>
                <option>ASP NET</option>
                <option>drupal</option>
                <option>AJAX</option>
                <option>Android</option>
                <option>Apache</option>
				
            </select>
        </p> 
		<br /-->
        
        <p> 
			Project Type :<br>
			<select type="text" value="" name="ProjectType"> 
				<option>Team Software project</option> 
				<option>Individual Project</option> 
				<option>Research Project</option> 
				
				
			</select> 
        </p> 
        <br />
       
		
		
        <br />
        
            <input class="btn btn-warning" type="Submit"
				value="Submit" name="Submit" /> 
               
			<a href="/sppa" class="btn btn-secondary">back</a>
        </p> 
        
        
    </form> 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    @if($msg = session()->get('msg'))

     
     @if($msg == "These words are not maching in description box,try another description")
     <script>
     Swal.fire({
               position: 'top',
               icon: 'error',
               title: '{{$msg}}',
               showConfirmButton: false,
               timer: 5000
            
          });
     </script>
     
     @endif
     @endif
     



<script> 
	function GEEKFORGEEKS() { 
        var LecturerID = document.forms["ProjectForm"]["LecturerID"];
        var ProjectID = document.forms["ProjectForm"]["ProjectID"];
		var Titleoftheproject = document.forms["ProjectForm"]["Titleoftheproject"]; 
		var Description = document.forms["ProjectForm"]["Description"]; 
        var Technologies = document.forms["ProjectForm"]["Technologies"]; 
		var ProjectType = document.forms["ProjectForm"]["ProjectType"]; 
        //var ProjectStatus = document.forms["ProjectForm"]["ProjectStatus"];
		 
        if (name.value == "") { 
			window.alert("Please enter LecturerID."); 
			name.focus(); 
			return false; 
		} 
        if (name.value == "") { 
			window.alert("Please enter ProjectID."); 
			name.focus(); 
			return false; 
		} 
		if (name.value == "") { 
			window.alert("Please enter Title of the project."); 
			name.focus(); 
			return false; 
		} 
		if (address.value == "") { 
			window.alert("Please enter Description."); 
			address.focus(); 
			return false; 
		} 
        if (password.value == "") { 
			window.alert("Please select Technologies."); 
			password.focus(); 
			return false; 
		} 
		
		if (password.value == "") { 
			window.alert( 
			"Please select Project Type."); 
			email.focus(); 
			return false; 
		} 
		 
		/**if (email.value == "") { 
			window.alert( 
			"Please select Project Status."); 
			email.focus(); 
			return false; 
		} 
		*/
		
		return true; 
	} 
</script> 

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
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