<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Details For Students</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<!--link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"-->
<!-- Site Icons -->
<link rel="shortcut icon" href="images/uoj.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/uicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="styleprofqwer.css">
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
<h1 class="p-3 mb-2 bg-dark text-white" style="text-align: center;"><b>Project Details For Students</b></h1> 
	<form class="p-3 mb-2 bg-info text-black" name="ProjectForm" method="POST" action="/st"> 
		@csrf
        
		<p> 
           
			<input type="hidden" value="Student" name="Destination"> 
				
		<br />
        <p>Student ID :<br> <input type="String" placeholder="20XX/CSC/XXX  or 20XX/SP/XXX"
                        size="45" name="StudentID" />
                    </p> 
        <br />
        
        <p>Project ID :<h12>(use student id with a number)</h12><br> <input type="String" placeholder="20XX/CSC/XXX-1  or 20XX/SP/XXX-1"
                        size="45" name="ProjectID" />
                    </p> 
        <br />
        
		<p>Title of the project :<br> <input type="text" placeholder="Title"
                        size="65" name="Titleoftheproject" />
                    </p> 
		<br /> 
		<p>Description :<br> <textarea type="text" placeholder="Description"
						class="div1" name="Description" ></textarea></p> 
        <br /> 
        <p> 
			Project Type :<br>
			<select type="String" value="" name="ProjectType"> 
				<option>Project for first year</option> 
				<option>Project for second year</option> 
				<option>Project for third year</option> 
				<option>Project for fourth year</option> 
				
			</select> 
        </p> 
        <br />
		<!--p> 
            Technologies :<br>
			<select type="String" value="" name="Technologies"> 
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
		<br />
		
			<input class="btn btn-warning" type="Submit"
				value="Submit" name="Submit" /> 
				
		
			<a href="/spps" class="btn btn-secondary">back</a>
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
        var StudentID = document.forms["ProjectForm"]["StudentID"]; 
        var ProjectID = document.forms["ProjectForm"]["ProjectID"]; 
		var Titleoftheproject = document.forms["ProjectForm"]["Titleoftheproject"]; 
		var Description = document.forms["ProjectForm"]["Description"]; 
		var ProjectType = document.forms["ProjectForm"]["ProjectType"]; 
		var Technologies = document.forms["ProjectForm"]["Technologies"]; 
		
        if (password.value == "") { 
			window.alert("Please select StudentID."); 
			password.focus(); 
			return false; 
		} 
        if (password.value == "") { 
			window.alert("Please select ProjectID."); 
			password.focus(); 
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
		if (email.value == "") { 
			window.alert( 
			"Please select Project Type."); 
			email.focus(); 
			return false; 
		} 
		if (password.value == "") { 
			window.alert("Please select Technologies."); 
			password.focus(); 
			return false; 
		} 
        
		
		return true; 
	} 
</script> 

 

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

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