function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.innerHTML === "check") {
      x.innerHTML = "Special Sale!";
    } else {
      x.innerHTML = "Best Soft drinks sales! buy one pack Coke and save $2";
    }
  }