//Function for registering a click on the profile image placeholder
function triggerClick() {
  document.querySelector("#profileImage").click();
}

//Resetting the form
function resetFunction() {
  document.getElementById("form").reset();
}

//To display image preview when the user uploads the Image
function displayImage(e) {
  if (e.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      document
        .querySelector("#profileDisplay")
        .setAttribute("src", e.target.result);
    };
    reader.readAsDataURL(e.files[0]);
  }
}

//Display all the users when clicked on it.

function myFunction() {
  var x = document.getElementById("queue");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
