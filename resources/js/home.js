// slider Image
// function activeslideimg(activeSlide = 2) {
//     const slides = document.querySelectorAll(".slide");
    
//     slides[activeSlide].classList.add("active");
    
//     for (const slide of slides) {
//         slide.addEventListener("click", () => {
//           clearActiveClasses();

//           slide.classList.add("active");
//       });
//     }

//     function clearActiveClasses() {
//       slides.forEach((slide) => {
//         slide.classList.remove("active");
//       });
//     }
//   }

// search function
const selected = document.querySelector(".selected");
const optionsContainer = document.querySelector(".options-container");
const searchBox = document.querySelector(".search-box input");

const optionsList = document.querySelectorAll(".option");

selected.addEventListener("click", () => {
  optionsContainer.classList.toggle("active");

  searchBox.value = "";
  filterList("");

  if (optionsContainer.classList.contains("active")) {
    searchBox.focus();
  }
});

optionsList.forEach(o => {
  o.addEventListener("click", () => {
    selected.innerHTML = o.querySelector("label").innerHTML;
    optionsContainer.classList.remove("active");
  });
});

searchBox.addEventListener("keyup", function(e) {
  filterList(e.target.value);
});

const filterList = searchTerm => {
  searchTerm = searchTerm.toLowerCase();
  optionsList.forEach(option => {
    let label = option.firstElementChild.nextElementSibling.innerText.toLowerCase();
    if (label.indexOf(searchTerm) != -1) {
      option.style.display = "block";
    } else {
      option.style.display = "none";
    }
  });
};