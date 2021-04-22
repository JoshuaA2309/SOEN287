
function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.innerHTML === "check") {
      x.innerHTML = "Special Sale!";
    } else {
      x.innerHTML = "We offer special deal if you buy Carrots and Onions.";
    }
  }