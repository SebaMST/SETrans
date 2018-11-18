function validateRegister() {
  var a = document.getElementById("fullname").value;
  if (!/^([a-zA-Z ]){2,}$/.test(a)) {
    alert("Wrong username format. It may only contain at least two letters, digits and \" \"!");
    return false;
  }
  a = document.getElementById("username-r").value;
  if (!/^([a-zA-Z0-9 ]){2,}$/.test(a)) {
    alert("Wrong username format. It may only contain at least two letters, digits and \" \"!");
    return false;
  }
  a = document.getElementById("email").value;
  if (!/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/.test(a)) {
    alert("Wrong email format. Example: abc@example.com!");
    return false;
  }
  a = document.getElementById("phone").value;
  if (!/^[0-9]{3,20}$/.test(a)) {
    alert("Wrong phone number format. It must have at least 3 digits!");
    return false;
  }
  a = document.getElementById("password-r").value;
  if (!/^.{8,}$/.test(a)) {
    alert("Wrong password format. Passwords must be at least 8 characters long!");
    return false;
  }
  b = document.getElementById("confirm-password-r").value;
  if (!/^.{8,}$/.test(a)) {
    alert("Wrong password format. Passwords must be at least 8 characters long!");
    return false;
  }
  if (a != b) {
    alert("The passwords are different. They must match!");
    return false;
  }
  a = document.getElementById("agree-terms").checked;
  if (!a) {
    alert("The terms and conditions must be agreed in order to register!");
    return false;
  }
  return true;
}

function validateLogin()
{
  return true;
}

function validateContact()
{
  return true;
}
