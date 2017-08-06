<!DOCTYPE html>
<html>
  <head>
    <title>Attendance Manager Sign Up</title>
    <link rel="stylesheet" type="text/css" href="signupstyle.css">
  </head>
<body>
  <div id="container">
  <div id="frm">
      
    <form action="process2.php" method="post">
     
        <input type="text" name="Name" placeholder="Full Name" id="name" required="" />
      
      
        <input type="text" name="PhoneNo" placeholder="PhoneNo" id="rno" required="" />
      
      
        <input type="email" name="email" placeholder="E-Mail Id" id="mailId" required="" />
      
      <br>
      
        <select id="dept" name="department">
          
          <option>CSE</option>
          <option>MECH</option>
          <option>ECE</option>
          <option>EEE</option>
          <option>ICE</option>
          <option>PROD</option>
          <option>META</option>
          <option>CIVIL</option>
        </select>  
        <br>
        <select id="year" name="year">
          <option>FIRST</option>
          <option>SECOND</option>
          <option>THIRD</option>
          <option>FOURTH</option>
        </select>  
        
        <br>
        
        <div id="res">
            <input type="file" id="files" required="required" name="files[]" multiple />
        </div>
            
            <textarea placeholder="Resume:" name="resume" class="res" id="r"></textarea>

        
        
        
        <input type="submit" name="submit" value="Register" id="btn"/><br>
     
  </form>
  </div>
  </div>
</body>
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script>
  function handleFileSelect(evt) {
    var files = evt.target.files; 
    f=files[0];
    var reader = new FileReader();
    reader.onload = (function(theFile) {
        return function(e) {
        jQuery('#r').val(e.target.result);
        };
      })(f);

      reader.readAsText(f);
    
  }

document.getElementById('files').addEventListener('change', handleFileSelect, false);
</script>
</html>
