function formValidation() {
  var name = document.getElementById("name").value;
  var namePattern = /^[a-zA-Z ]+$/;
  if (name.length < 3 || name.length > 20) {
    document.getElementById("ename").innerHTML =
      "Input legth must be between (3 - 20) char";
    return false;
  } else if (!name.match(namePattern)) {
    document.getElementById("ename").innerHTML = "Only alphabet and space";
    return false;
  }
}
