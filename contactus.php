<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>LOG IN PAGE</title>
        <link rel = "stylesheet"  href = "contactus.css" />
        <link rel = "stylesheet"  href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <script src="contact.js"></script>
    </head>
<body>

<div class="navbar">
        <a href="home.php"> HOME</a>
        <a href="donerRegistration.php"> DONOR REGISTRATION </a>
        <a href="bloodGroup.php"> SEARCH A DONOR  </a>
        <a href="login.php"> LOGIN </a>
        <a href="gallery.php"> Gallery  </a>
        <div class="dropdown">
          <button class="dropbtn">
            <a href="#"> <i class="fas fa-caret-down"></i> </a>
          </button>
          <div class="dropdown-content">
            <a href="about.php"> ABOUT US </a>
            <a href = "contactus.php"> CONTACT US</a>
            <a href = "logout.php"> Log Out</a>
          </div>
        </div> 
      </div> 
    <div class="contactus">
        <h1>CONTACT DETILES</h1>
        <P> Let us know if you have any query or discussions. </P>
    </div>
    <div class = "query">
      <form action="contactusAction.php" method="post">
        <table>
            <tr>
             <td> <label for = "name" > NAME: </label>  </td>  
             <td>  <input type = "text" name = "c_name" id = "name" required /> <br />
            </td>    
            </tr>

            <tr>
              <td> <label for = "email"> EMAIL: </label> </td>
              <td> <input type = "email" name = "c_email" id = "email"  required/>  <br />
              </td>
           </tr>

            <tr>
                <td> <label for = "subject" >  SUBJECT: </label>  </td>  
                <td>  <input type = "text" name = "c_subject" id = "subject" required/> <br /> </td>    
             </tr>   
             <tr>
              <td> <label for = "message" >  MESSAGE: </label>  </td>  
              <td>  <input type = "text" name = "c_message" id = "message" required/> <br /> </td>    
           </tr>

            <tr>
                <td colspan="2"> <a href="#"> <input type="submit" id = "submit-button" name = "c_submit" value="SUBMIT"/> </a></td>
            </tr>
            
        </table>
      
    </form>
    </div>
</body>
</html>
  