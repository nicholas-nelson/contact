<!doctype html>
<head>
<title>Nick Nelson</title>
<script src="http://www.nickanelson.com/personal/pnc/form2.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<LINK REL="stylesheet" TYPE="text/css" HREF="http://www.nickanelson.com/personal/pnc/style.css">
<LINK REL="stylesheet" TYPE="text/css" HREF="http://www.nickanelson.com/personal/pnc/new.css">
<link rel="icon" href="http://www.nickanelson.com/personal/photo/peer.jpeg">
</head>
<body>
<div align="center">
<h1>Nicholas Nelson</h1>
<br>
<div class="list" align="center">
<nav>

        <label for="drop" class="toggle"><font style="font-size:20px;cursor:pointer;"><b>&#9776; MENU</b></font></label>
        <input type="checkbox" id="drop" />
            <ul class="menu">
                <li><a class="text5" href="http://www.nickanelson.com/personal/pnc/index.html">HOME</a></li>
                <li><a class="text5" href="http://www.nickanelson.com/personal/pnc/contact.php">CONTACT</a></li>
                <!--<label class="toggle"><hr width="65%"></label>-->
            </ul>
</nav>
</div>
<label><hr width="65%"></label>

<div>
<h4>CONTACT FORM</h4><br>

<?php echo $myError; ?>

<font color="red">
Required *
</font>

<div class="text3">
<form action="http://www.nickanelson.com/personal/pnc/pnccontact.php" method="post">

          <div class="form-group">
            <label for="contact-name"><font color="red">*</font>Name</label>
            <input type="text" id="contact-name"  name="name" placeholder="Enter your name.." onkeyup='validateName()'>
            <span class='error-message' id='name-error'></span>
          </div>

          <div class="form-group">
            <label for="contact-phone">Phone Number</label>
            <input type="tel" id="contact-phone" name="phone" placeholder="xxx-xxx-xxxx" onkeypress="return isNumberKey(event,this)">
          </div>

          <div class="form-group">
            <label for="contact-email"><font color="red">*</font>Email address</label>
            <input type="email" id="contact-email"  name="email" placeholder="Enter Email" onkeyup='validateEmail()'>
            <span class='error-message' id='email-error'></span>
          </div>   

          <div class="form-group">
            <label for='contactMessage'><font color="red">*</font>Your Message</label>
            <textarea rows="5" id='contact-message'  name='message'  placeholder="Enter a brief message" onkeyup='validateMessage()'>
            </textarea>
            <span class='error-message' id='message-error'></span>
          </div><br>

        <button onclick='return validateForm2()' class="btn btn-default">SUBMIT</button>
        <span class='error-message' id='submit-error'></span>

</form>
</div>
</div><br><br>
Copyright &#9400; 2017 <a href="http://www.nickanelson.com" target="_blank">Nick Nelson</a>
</div><br>
</body>
</html>
