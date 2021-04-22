
function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.innerHTML === "check") {
      x.innerHTML = "Special Sale!";
    } else {
      x.innerHTML = "Buy 2 muffins and get 1 free";
    }
  }