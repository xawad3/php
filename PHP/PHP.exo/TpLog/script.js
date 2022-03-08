let monbtn1 = document.body.querySelector ("#crea");
let monbtn2 = document.body.querySelector("#conex");

let maCrea = document.body.querySelector("#crea1");
let maConex = document.body.querySelector("#conex1");



monbtn1.addEventListener("click", () => {
    if(getComputedStyle(maCrea).display != "none"){
      maCrea.style.display = "none";
    } else {
      maCrea.style.display = "block";
    }
  });

  monbtn2.addEventListener("click", () => {
    if(getComputedStyle(maConex).display != "none"){
      maConex.style.display = "none";
    } else {
      maConex.style.display = "block";
    }
  });