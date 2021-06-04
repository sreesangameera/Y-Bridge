<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
<form method="POST" action="/updateindustrialist" enctype="multipart/form-data">
        @csrf
        <div title="Initials.Name">Name with initials</div><input class="form-control" type="text" name="namewi" placeholder="Name with initials" required="required" value="{{ $c->NameWithInitials}}"><br>
        <input type="hidden" name="email" value="{{ $c->CompanyPersonalEmailID}}" >
        
        <div title="Companyname(pvt)ltd">Company Name</div><input class="form-control" type="text" name="comn" placeholder="Company Name" required="required" value="{{ $c->CompanyName}}"><br>
        <div title="your position">Designation</div><input class="form-control" type="text" name="designation" placeholder="Designation" required="required" value="{{ $c->Designation}}"><br>
        <div title="https://www.linkedin.com/in/username/">LinkedIn Id</div><input class="form-control" type="text" name="linkedin" placeholder="LinkedIn"  value="{{ $c->LinkedIn}}"><br>
        <div title="">Fields of Interests</div><div>
                    
                   
                    <div class="multiselect">
    <div class="selectBox" name="fos" onclick="showCheckboxes()">
      <!--select>
        <option>Select an option</option>
      </select-->
      <div class="overSelect"></div>
    </div>
    <div id="checkboxes" >
      <label for="one">
        <input type="checkbox" id="Advanced database design and systems" name="FieldOfInterests[]" value="Advanced database design and systems" />Advanced database design and systems</label>
      <label for="two">
        <input type="checkbox" id="Bioinformatics Computing" name="FieldOfInterests[]" value="Bioinformatics Computing" />Bioinformatics Computing</label>
        <label for="three">
        <input type="checkbox" id="Compiler design" name="FieldOfInterests[]" value="Compiler design" />Compiler design</label>
        <label for="four">
        <input type="checkbox" id="Computer Networks and Internet Computing" name="FieldOfInterests[]" value="Computer Networks and Internet Computing" />Computer Networks and Internet Computing</label>
        <label for="five">
        <input type="checkbox" id="Cryptography and Data Security" name="FieldOfInterests[]" value="Cryptography and Data Security" />Cryptography and Data Security</label>
        <label for="six">
        <input type="checkbox" id="Data communication and computer networks" name="FieldOfInterests[]" value="Data communication and computer networks" />Data communication and computer networks</label>
        <label for="seven">
        <input type="checkbox" id="Data Structures and Algorithms" name="FieldOfInterests[]" value="Data Structures and Algorithms" />Data Structures and Algorithms</label>
        <label for="eight">
        <input type="checkbox" id="Digital Image Processing" name="FieldOfInterests[]" value="Digital Image Processing" />Digital Image Processing</label>
        <label for="nine">
        <input type="checkbox" id="E-technologies" name="FieldOfInterests[]" value="E-technologies" />E-technologies</label>
        <label for="ten">
        <input type="checkbox" id="Foundations of Computer Science" name="FieldOfInterests[]" value="Foundations of Computer Science" />Foundations of Computer Science</label>
        <label for="eleven">
        <input type="checkbox" id="Graphics and Visual Computing" name="FieldOfInterests[]" value="Graphics and Visual Computing" />Graphics and Visual Computing</label>
       <label for="twelve">
        <input type="checkbox" id="Multimedia Technologies" name="FieldOfInterests[]" value="Multimedia Technologies" />Multimedia Technologies</label>
        <label for="thirteen">
        <input type="checkbox" id="Numerical Computing" name="FieldOfInterests[]" value="Numerical Computing" />Numerical Computing</label>
        <label for="fourteen">
        <input type="checkbox" id="Numerical Linear algebra and solutions of differential equations" name="FieldOfInterests[]" value="Numerical Linear algebra and solutions of differential equations" />Numerical Linear algebra and solutions of differential equations</label>
        <label for="fifeteen">
        <input type="checkbox" id="Object Oriented Programming" name="FieldOfInterests[]" value="Object Oriented Programming" />Object Oriented Programming</label>
        <label for="sixteen">
        <input type="checkbox" id="Parallel computing" name="FieldOfInterests[]" value="Parallel computing" />Parallel computing</label>
        <label for="seventeen">
        <input type="checkbox" id="Principles of computer Architecture" name="FieldOfInterests[]" value="Principles of computer Architecture" />Principles of computer Architecture</label>
        <label for="eighteen">
        <input type="checkbox" id="Programming in Logic" name="FieldOfInterests[]" value="Programming in Logic" />Programming in Logic</label>
        <label for="nineteen">
        <input type="checkbox" id="System design, analysis and project management" name="FieldOfInterests[]" value="System design, analysis and project management" />System design, analysis and project management</label>
        <label for="twenty">
        <input type="checkbox" id="Computer Systems" name="FieldOfInterests[]" value="Computer Systems" />Computer Systems</label>
        <label for="twentyone">
        <input type="checkbox" id="Human Computer Interaction" name="FieldOfInterests[]" value="Human Computer Interaction" />Human Computer Interaction</label>
        <label for="twentytwo">
        <input type="checkbox" id="Design of Algorithms" name="FieldOfInterests[]" value="Design of Algorithms" />Design of Algorithms</label>
        <label for="twentythree">
        <input type="checkbox" id="Organisational Behaviour" name="FieldOfInterests[]" value="Organisational Behaviour" />Organisational Behaviour</label>
        <label for="twentyfour">
        <input type="checkbox" id="Computer Architecture" name="FieldOfInterests[]" value="Computer Architecture" />Computer Architecture</label>
        <label for="twentyfive">
        <input type="checkbox" id="Programming Languages" name="FieldOfInterests[]" value="Programming Languages" />Programming Languages</label>
        <label for="twentysix">
        <input type="checkbox" id="Web Technologies" name="FieldOfInterests[]" value="Web Technologies" />Web Technologies</label>
        <label for="twentyseven">
        <input type="checkbox" id="Emerging Trends" name="FieldOfInterests[]" value="Emerging Trends" />Emerging Trends</label>
        <label for="twentyeight">
        <input type="checkbox" id="High Performance Computing" name="FieldOfInterests[]" value="High Performance Computing" />High Performance Computing</label>
        <label for="twentynine">
        <input type="checkbox" id="Image Processing and Computer Vision" name="FieldOfInterests[]" value="Image Processing and Computer Vision" />Image Processing and Computer Vision</label>
        <label for="thirty">
        <input type="checkbox" id="Machine Learning" name="FieldOfInterests[]" value="Machine Learning" />Machine Learning</label>
        <label for="thirtyone">
        <input type="checkbox" id="Systems and Network Administration" name="FieldOfInterests[]" value="Systems and Network Administration" />Systems and Network Administration</label>
    </div>
  </div>
                    
                </div><br>
        <div title="07XXXXXXXX">Contact No.</div><input class="form-control" type="text" name="cn" placeholder="Contact Number" required="required" value="{{ $c->ContactNumber}}"><br>
        <div title="old password">Old Password</div><input class="form-control" type="password" name="pwrd" placeholder="Old Password" required="required" ><br>
        <div title="new password or confirm the old password">New Password</div><input class="form-control" type="password" name="nwpswrd" placeholder="New Password" required="required"><br>
        <input class="btn btn-primary" type="submit" value="submit">
        
    </form>
</body>
</html>