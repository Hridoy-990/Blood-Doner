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

  var hname = document.getElementById("hname").value;
  var hnamePattern = /^[a-zA-Z][a-zA-Z ]*, *[a-zA-Z]+$/;
  if (hname.length < 3 || hname.length > 30) {
    document.getElementById("ehname").innerHTML =
      "Input legth must be between (3 - 30) char";
    return false;
  } else if (!hname.match(hnamePattern)) {
    document.getElementById("ehname").innerHTML =
      "Must be main this formate e.x hospital name , place name";
    return false;
  }

  var number = document.getElementById("number").value;
  var numerPattern = /(\+88)?-?01[3-9]\d{8}$/;
  if (!number.match(numerPattern)) {
    document.getElementById("enumber").innerHTML = "Invalid Number !";
    return false;
  }

  var age = document.getElementById("age").value;
  var agePattern = /^[1-9][0-9]*$/;
  if (age.length > 3) {
    document.getElementById("eage").innerHTML =
      "length must be between (1 - 3) digit !";
    return false;
  } else if (!age.match(agePattern)) {
    document.getElementById("eage").innerHTML = "Only Digit !";
    return false;
  }

  var uBlood = document.getElementById("uBlood").value;
  var uBloodPattern = /^[1-9]$/;
  if (uBlood.length > 1) {
    document.getElementById("euBlood").innerHTML = "Only One digit !";
    return false;
  } else if (!uBlood.match(uBloodPattern)) {
    document.getElementById("euBlood").innerHTML = "Only Digit !";
    return false;
  }
}
