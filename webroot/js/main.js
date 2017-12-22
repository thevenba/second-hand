"use strict";

var imgPicker = document.getElementsByClassName("imgPicker")[0];
var imgPickerSelector = document.getElementById("imgPickerSelector").children;
var nbImgSelected = document.querySelectorAll("#imgPickerSelector > li > div.selected").length;
console.log(nbImgSelected);

for (var i = 0; i < imgPickerSelector.length; i++) {
    addToggleImagePickers(i);
}

function addToggleImagePickers(index) {
    imgPickerSelector[index].addEventListener("click", function () {
        toggleImgPickerSelector(index);
        toggleImgPicker(index);
    })
}

function toggleImgPickerSelector(index) {
    if (nbImgSelected <= 10) {
        var imgToToggle = imgPickerSelector[index].firstElementChild;
        if (imgToToggle.className == "") {
            imgToToggle.className = "selected";
            nbImgSelected++;
        } else {
            imgToToggle.className = "";
            nbImgSelected--;
        }
    }
}

function toggleImgPicker(index) {
    if (nbImgSelected <= 10) {
        var optionToToggle = imgPicker.children[index];
        if (optionToToggle.selected === false) {
            optionToToggle.selected = true;
        } else {
            optionToToggle.selected = false;
        }
    }
}