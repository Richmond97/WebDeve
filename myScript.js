function HidePswrd()
{
  var x = document.getElementById("passwordCheck");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function ShowNewForm() {
  // Declare all variables
          document.getElementById("loginForm").style.display="none";
          document.getElementById("regForm").style.display="block";
}
