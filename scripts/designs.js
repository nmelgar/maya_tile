$(document).ready(function() {
  $('#toggle-design').on('click', function() {
    $('#gallery-elevations').show();
    $('#gallery-light').hide();
    $('#gallery-dark').hide();
  })
});

$(document).ready(function() {
  $('#toggle-design-light').on('click', function() {
    $('#gallery-light').show();
    $('#gallery-elevations').hide();
    $('#gallery-dark').hide();
  })
});

$(document).ready(function() {
  $('#toggle-design-dark').on('click', function() {
    $('#gallery-dark').show();
    $('#gallery-light').hide();
    $('#gallery-elevations').hide();
  })
});

//
// $("#toggle-design").click(function() {
//       $("gallery-elevations").show();
//       $("gallery-light", "gallery-dark").hide();
//
//     };

//
//
// const targetDiv = document.getElementById("gallery-elevations");
// const btn = document.getElementById("toggle-design");
// btn.onclick = function() {
//   if (targetDiv.style.display == "none") {
//     targetDiv.style.display == "none";
//   } else {
//     targetDiv.style.display = "block";
//
//   }
//
// };
//
// const targetDivLight = document.getElementById("gallery-light");
// const btn2 = document.getElementById("toggle-design-light");
// btn2.onclick = function() {
//   if (targetDivLight.style.display !== "none") {
//     targetDivLight.style.display == "none";
//   } else {
//     targetDivLight.style.display = "block";
//
//   }
// };
//
//
// const targetDivDark = document.getElementById("gallery-dark");
// const btn3 = document.getElementById("toggle-design-dark");
// btn3.onclick = function() {
//   if (targetDivDark.style.display == "none") {
//     targetDivDark.style.display == "none";
//   } else {
//     targetDivDark.style.display = "block";
//   }
//
// };


//
// const targetDiv = document.getElementById("gallery-elevations");
// const btn = document.getElementById("toggle-design");
// btn.onclick = function() {
//   if (targetDiv.style.display == "none" && targetDivLight.style.display == "block" && targetDivDark.style.display == "block" ) {
//     targetDiv.style.display = "none";
//     targetDivLight.style.display == "block";
//     targetDivDark.style.display == "block";
//   } else {
//     targetDiv.style.display = "block";
//     targetDivLight.style.display == "none";
//     targetDivDark.style.display == "none";
//   }
//
// };
//
// const targetDivLight = document.getElementById("gallery-light");
// const btn2 = document.getElementById("toggle-design-light");
// btn2.onclick = function() {
//   if (targetDivLight.style.display == "none" && targetDiv.style.display == "block" && targetDivDark.style.display == "block") {
//     targetDivLight.style.display = "none";
//     targetDiv.style.display == "block";
//     targetDivDark.style.display == "block";
//   } else {
//     targetDivLight.style.display = "block";
//     targetDiv.style.display == "none";
//     targetDivDark.style.display == "none"
//
//   }
// };
//
//
// const targetDivDark = document.getElementById("gallery-dark");
// const btn3 = document.getElementById("toggle-design-dark");
// btn3.onclick = function() {
//   if (targetDivDark.style.display == "none" && targetDiv.style.display == "block" && targetDivLight.style.display == "block") {
//     targetDivDark.style.display = "none";
//     targetDivLight.style.display == "block";
//     targetDiv.style.display == "block";
//   } else {
//     targetDivDark.style.display = "block";
//     targetDiv.style.display == "none";
//     targetDivLight.style.display == "none";
//   }
//
// };


// let btn = document.getElementById('hamburguer');
// let div = document.getElementById('list-of-item');
//
// btn.addEventListener('click', () =>{
//   if(div.style.display === 'none'){
//     div.style.display = 'grid';
//   }else{
//     div.style.display = 'none';
//   }
// })
