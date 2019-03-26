var point = document.querySelector('#point');
var force = document.querySelector('#force');
var magie = document.querySelector('#magie');
var armure = document.querySelector('#armure');
var soin = document.querySelector('#soin');

var countPoint = document.querySelector('.pointCompteur');
var countForce = document.querySelector('.forceCompteur');
var countMagie = document.querySelector('.magieCompteur');
var countArmure = document.querySelector('.armureCompteur');
var countSoin = document.querySelector('.soinCompteur');


countPoint.textContent = point.value;
countForce.textContent = force.value;
countMagie.textContent = magie.value;
countArmure.textContent = armure.value;
countSoin.textContent = soin.value;

point.oninput = function() {
   countPoint.textContent = point.value;
 }

force.oninput = function() {
  countForce.textContent = force.value;
  if (force = force+1) {
      point.value--;
  } else {
      point.value++;
  }
  console.log("point = "+point.value);
  console.log("force = "+force.value);
}

magie.oninput = function() {
  countMagie.textContent = magie.value;
}

armure.oninput = function() {
   countArmure.textContent = armure.value;
 }

soin.oninput = function() {
countSoin.textContent = soin.value;
}

// force.oninput = function() {
//    countForce.textContent = force.value;
//    if (force = force+1) {
//     point.value--;
//    } else if (countForce = countForce-1)  {
//     point.value = point.value + 1;
//     }
//     console.log("point = "+point.value);
//     console.log("force = "+force.value);
//  }