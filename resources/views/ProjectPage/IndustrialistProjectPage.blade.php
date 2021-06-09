<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Details For Industrialists</title>
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
div { 
	box-sizing: border-box; 
	width: 100%; 
	border: 1px black; 
	 
	align-content: center; 
	align-items: center; 
} 
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
<h1
    class="p-3 mb-2 bg-dark text-white" style="text-align: center;"><b>Project Details For Industrialists</b></h1> 
    <form
    class="p-3 mb-2 bg-info text-black"
    name="ProjectForm" method="post" action="/stor">
         @csrf
        
		 <p> 
         <input type="hidden" value="Industrialist" name="Destination">
		<br />
        <p>Company Personal EmailID :<br> <input type="text" placeholder="EmailId@examplemail.com"
                        size="45" name="CompanyPersonalEmailID" />
                    </p> 


                   
        <br /> 
        
        
		<p>Project ID :<h12>(use email id with a number)</h12><br> <input type="text" placeholder="EmailId@examplemail.com-1"
                        size="45" name="ProjectID" />
                    </p> 


                   
		<br /> 
		<p>Title of the project :<br> <input type="text" placeholder="Title"
                        size="65" name="Titleoftheproject" />
                    </p> 


                   
		<br /> 
		<p>Description :<br> <textarea type="text" placeholder="Description"
						class="div1" name="Description" ></textarea> </p> 
			<!--select type="text" value="" name="Description">  
                <option>Advanced database design and systems</option>
                <option>Bioinformatics Computing</option>
                <option>Compiler design</option>
                <option>Computer Networks and Internet Computing</option>
                <option>Cryptography and Data Security</option>
                <option>Data communication and computer networks</option>
                <option>Data Structures and Algorithms</option>
                <option>Digital Image Processing)</option>
                <option>E-technologies</option>
                <option>Foundations of Computer Science</option>
                <option>Graphics and Visual Computing</option>
                <option>Multimedia Technologies</option>
                <option>Numerical Computing</option>
                <option>Numerical Linear algebra and solutions of differential equations</option>
                <option>Object Oriented Programming</option>
                <option>Parallel computing</option>
                <option>Principles of computer Architecture</option>
                <option>Programming in Logic</option>
                <option>System design, analysis and project management</option> 
                <option>Computer Systems</option>
                <option>Human Computer Interaction</option>
                <option>Design of Algorithms</option>
                <option>Organisational Behaviour</option>
                <option>Computer Architecture</option>
                <option>Programming Languages</option>
                <option>Web Technologies</option>
                <option>Emerging Trends</option>
                <option>High Performance Computing</option>
                <option>Image Processing and Computer Vision</option>
                <option>Data Mining and Machine Learning</option>
                <option>Systems and Network Administration</option>
                <option>Artificial Intelligence</option>
				
            </select-->
        
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
        
		<br />
        
       
       
       
		
		
       
        
            <input class="btn btn-warning" type="Submit"
				value="Submit" name="Submit" /> 
                
			<a href="/sppi" class="btn btn-secondary">back</a>
        
        
        
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
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
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