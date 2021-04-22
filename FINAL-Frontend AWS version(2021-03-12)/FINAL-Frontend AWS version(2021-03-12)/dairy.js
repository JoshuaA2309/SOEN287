function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.innerHTML === "check") {
      x.innerHTML = "Special Sale!";
    } else {
      x.innerHTML = "Exclusive Offer! buy 2L milk and save $2";
    }
  }