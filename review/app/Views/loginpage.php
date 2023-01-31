<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>

<style>
    * {

transition: 0.1s;
box-sizing: border-box;
-webkit-user-select: none;
   -moz-user-select: none;
    -ms-user-select: none;
        user-select: none;
outline: none;
}
html,
body {
background-color: #EAEBED;
width: 100%;
height: 100%;
display: flex;
justify-content: center;
align-items: center;
}

.card {
box-shadow:  2px 2px 4px #01676e;
color: #04AA6D;
width: 800px;
height: 480px;
border-radius: 8px;
overflow: hidden;
position: relative;
}
.card .wordLeft,
.card .wordRight {
background-color: transparent;
display: flex;
justify-content: center;
align-items: center;
text-align: center;
height: 200px;
margin-top: 100px;
z-index: 4;
color: #FFFFFF;
position: absolute;
padding: 16px;
}
.card .wordLeft label,
.card .wordRight label {
color: #3A7B99;
font-weight: 900;
position: absolute;
margin-top: 239px;
}
.card .wordLeft {
width: 300px;
flex-direction: column;
margin-left: -300px;
}
.card .wordRight {
right: 0;
width: 300px;
flex-direction: column;
}
.card .loginPage,
.card .registerPage {
color: #008cbb;
z-index: 3;
display: flex;
justify-content: center;
align-items: center;
flex-direction: column;
text-align: center;
position: absolute;
width: 500px;
height: 480px;
border-radius: 0px;
}
.card .loginPage .login,
.card .registerPage .login {
margin-top: 4px;
width: 100px;
height: 40px;
border-radius: 16px;
border: none;
color: #fff;
background-color: #3A7B99;
cursor: pointer;
}

.card .loginPage .group,
.card .registerPage .group {
margin: 8px;

}
.card .loginPage .group label,
.card .registerPage .group label {
margin-right: 4px;
font-size: 14px;
font-weight: bold;
font-style: italic;
font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
color: #000000f4;
padding-inline-end: 1px;
}
.card .registerPage {
right: 0;
opacity: 0;
}
.card .cover {
z-index: 3;
display: flex;
justify-content: center;
align-items: center;
flex-direction: column;
width: 300px;
height: 480px;
border-radius: 0px;
position: absolute;
right: 0px;
background-color: #3A7B99;
color: rgb(211, 211, 211);
}
.card .cover #changePage {
position: absolute;
width: 100px;
height: 40px;
border-radius: 16px;
border: none;
margin-top: 160px;
color: #3A7B99;
background-color: #fff;
font-size: 20px;
}
input[type="date"]{
background-color:#03e8fd58;
padding:5px;

font-family: "Roboto mono",monospace;
color:#000000;
font-size: 15px;
border:none;
outline:none;
border-radius:35px;
margin-bottom: 15px;
margin-top: 15px;
margin-left: 20px;
}
input[type="date"]:hover{background-color: #eaeaea;
color:#201b1b;
font-size: 15px;
border:none;
outline:none;
border-radius:25px;
margin-bottom: 25px;
margin-top: 25px;

}
::-webkit-calendar-picker-indicator{
background-color: #ffffff;
padding:2px;
cursor:pointer;
border-radius: 15px;
color:#ffffff;

}
.tiny-text{ 
margin-left: 50px;
font-family: "Roboto mono",monospace;
color: #008cbb;
font-size: 12px;
}
.tiny-text:hover{ 

background-color: #96e0fda4;
font-size:15px;
border-radius: 10px;

}
.button {
margin-bottom: 10px;
margin-top: 10px;
margin-left: 50px;
padding: 15px 30px;
font-size: 15px;
text-align: center;
cursor: pointer;
outline: none;
color: #FFFFFF;
background-color: #03ddfa;
border: none;
border-radius: 10px;
box-shadow: 0 5px #2E424D;
}

.button:hover {background-color: #ffffff;
color: #000000;
}

.button:active {
background-color: #00b89f;
box-shadow: 0 5px #2E424D;
transform: translateY(4px);
}





input[type="email"]{
background-color: #03e8fd58;
padding:5px;
align-items:center;
font-family:Verdana, Geneva, Tahoma, sans-serif ;
color:#000000;
font-size: 12px;
font-style: italic;
border-radius: 45px;
margin-left: 27px;  
text-align: center;
font-weight: bolder;
font-style: italic;

}


input[type="password"]{
background-color: #03e8fd58;;
padding:5px;
align-items:center;
font-family:Verdana, Geneva, Tahoma, sans-serif ;
color:#000000;
font-size: 12px;
font-style: italic;
border-radius:45px;
text-align: center;
font-weight: bolder;
font-style: italic;
  

}


input[type="text"]{
background-color: #03e8fd58;
padding:5px;
align-items:center;
font-family:Verdana, Geneva, Tahoma, sans-serif ;
color:#000000;
font-size: 12px;
font-style: italic;
border-radius:45px;
text-align: center;
font-weight: bolder;
font-style: italic;
  

}


input[type="checkbox"]{


place-items: center;

}


h1
{
margin-left: 50px;
color:  #014151;
padding:5px;
}

</style>

<script>

//form validation fn();for password and name ,email
function validateForm() {
  var x = document.forms["registerPage"]["name"].value;
  if (x == "" || x == null) {
    alert("Name must be filled out");
    return false;
  }
  
    var y = document.forms["registerPage"]["password"].value;
    var z = document.forms["registerPage"]["password2"].value;
    if(y!=z){
      alert("Enter same password");
      return false;
    }
  
  
    var x = document.forms["registerPage"]["email"].value;
    if (x == "" || x == null) {
      alert("Email must be filled out");
     return false;
    }


    else{}
  }
  //validation for length and character included in password only for password;
  var myInput = document.getElementById("psw");
  var letter = document.getElementById("letter");
  var capital = document.getElementById("capital");
  var number = document.getElementById("number");
  var length = document.getElementById("length");
  
  // When the user clicks on the password field, show the message box
  myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
  }
  
  // When the user clicks outside of the password field, hide the message box
  myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
  }
  
  // When the user starts to type something inside the password field
  myInput.onkeyup = function() {
    // Validate lowercase letters
    var lowerCaseLetters = /[a-z]/g;
    if(myInput.value.match(lowerCaseLetters)) {  
      letter.classList.remove("invalid");
      letter.classList.add("valid");
    } else {
      letter.classList.remove("valid");
      letter.classList.add("invalid");
    }
    
    // Validate capital letters
    var upperCaseLetters = /[A-Z]/g;
    if(myInput.value.match(upperCaseLetters)) {  
      capital.classList.remove("invalid");
      capital.classList.add("valid");
    } else {
      capital.classList.remove("valid");
      capital.classList.add("invalid");
    }
  
    // Validate numbers
    var numbers = /[0-9]/g;
    if(myInput.value.match(numbers)) {  
      number.classList.remove("invalid");
      number.classList.add("valid");
    } else {
      number.classList.remove("valid");
      number.classList.add("invalid");
    }
    
    // Validate length
    if(myInput.value.length >= 8) {
      length.classList.remove("invalid");
      length.classList.add("valid");
    } else {
      length.classList.remove("valid");
      length.classList.add("invalid");
    }
  }
  //show password
  
  function visible()
   {
    var p = document.getElementById("password");
    if (p.type === "password") {
      p.type = "text";
    } else {
      p.type = "password";
    }
  }
  function visiblei()
  {
   var p2 = document.getElementById("password2");
   if (p2.type === "password") {
     p2.type = "text";
   } else {
     p2.type = "password";
   }
 }
 function visiblel()
 {
  var pl = document.getElementById("pswd");
  if (pl.type === "password") {
    pl.type = "text";
  } else {
    pl.type = "password";
  }
}
 
  function validateFormlog() {
  
    var x = document.forms["loginPage"]["email"].value;
    if (x == "" || x == null) {
      alert("Email must be filled out");
     return false;
    }
    else{;
  }
  }

    </script>


</head>
<body>
<div class="card">
  <div class="wordLeft">
    <h2>Welcome Back</h2>
    <p>To keep connect with up please login with your personal info</p>
    <label for="changePage">Sign In</label>
  </div>
  <div class="wordRight">
    <h2>Hello Friend!</h2>
    <p>Enter your personal details and start journey with us</p>
    <label for="changePage">Sign Up</label>
  </div>
  <form class="loginPage" name="loginPage" action="login.php" onsubmit="return validateFormlog()" method="POST" required> 
    <h1>Log In</h1>
    <div class="group">
      <label class="far fa-envelope" for="email"> E-mail </label>

      <input type="email" name="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Email"  title="Invalid input" />
    </div>
    <div class="group">
      <label class="fas fa-key" for="password">Password</label>
      <input type="password" name="password" id="pswd" placeholder="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
      <br><br><small> <b>show password</b></small><input type="checkbox" onclick="visiblel()">
 
    </div>
   <div class="group">
      <button class="button" id="login" type="submit">Sign in </button>
    </div><br>
    <div class="tiny-text"><a href=../Password_reset/forgot.php> Forgot password?</a></div>
  </form>
  
  <form class="registerPage" name="registerPage" action="reg.php"  onsubmit="return validateForm()" method="POST" required>
    <h1>Create Account</h1>
    <div class="group">
      <label class="fas fa-signature" for="name">User Name</label>
      <input type="text" name="name" auto placeholder="User Name"/><br>
       </div>
       <div class="group">
         <label class="far fa-envelope" for="email">E-mail</label>
         <input type="email" name="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="E-mail"/>
        </div>
        <div class="group">
          <label class="fas fa-key" for="password">Password</label>
          <input type="password" id ="password" name="password" placeholder="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
        </div>
        <div class="group">
          <label class="fas fa-key" for="password2">Password</label>
          <input type="password" name="password2" id="password2" placeholder=" confirm password"/>
          <br>
          <br><small> <b>show password</b></small><input type="checkbox" onclick="visible(),visiblei()">
        </div>
        
        <div class="group"> 
        <label> DOB</label>
      
           <input type="date" name="dob" value=""
           min="1997-01-01" max="2030-12-31" required>
    

         </div>
        <button class="button" id="register" type="submit">Sign Up</button>
      </form>
  <div class="cover">
    <button id="changePage" name="changePage"></button>
  </div>
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
         <script src='https://cdn.jsdelivr.net/npm/animejs@3.1.0/lib/anime.js'></script>
         <script >
            const cover = document.querySelector(".cover")

let counter = 1

$("#changePage").on('click',function(){
  if(counter%2===1){
    anime({
      targets: cover,
      translateX: [
        { value: -500},
      ],
      scaleX: [
        { value: 3},
        { value: 1},
      ],
      easing: 'linear',
    });
    anime({
      targets: ".loginPage",
      opacity: 0,
    })
    anime({
      targets: ".registerPage",
      opacity: 1,
      easing: 'linear'
    })
    anime({
      targets: ".wordRight",
      opacity: 0,
      translateX: [{ value: 300}],
      duration: 500,
      easing: 'linear'
    })
    anime({
      targets: ".wordLeft",
      translateX: [{value: 0}],
      marginLeft: "0px",
      opacity: 1,
      easing: 'linear'
    })

    counter+=1
    
  }else {
    anime({
      targets: cover,
      translateX: [
        { value: 0},
      ],
      scaleX: [
        { value: 3},
        { value: 1},
      ],
      easing: 'linear',
    });
    anime({
      targets: ".loginPage",
      opacity: 1,
      easing: 'linear'
    })
    anime({
      targets: ".registerPage",
      opacity: 0,
    })
    anime({
      targets: ".wordLeft",
      translateX: [{ value: -300}],
      marginLeft: "-300px",
      opacity: 0,
      duration: 500,
      easing: 'linear'
    })
    anime({
      targets: ".wordRight",
      opacity: 1,
      translateX: [{ value: 0}],
      easing: 'linear'
    })

    counter+=1
  }
})

</script>

</body>
</html>