const elementToggleFunc = function (elem) { elem.classList.toggle("active"); }

const select = document.querySelector("[data-select]"),
selectItems = document.querySelectorAll("[data-select-item]"),
  selectValue = document.querySelector("[data-select-value]"),
  filterBtn = document.querySelectorAll("[data-filter-btn]");

select.addEventListener("click", function () { elementToggleFunc(this); });

for (let i = 0; i < selectItems.length; i++) {
  selectItems[i].addEventListener("click", function () {

    let selectedValue = $(this).attr("data-select-id");
    selectValue.innerText = $(this).attr("data-select-id");
    elementToggleFunc(select);
    filterFunc(selectedValue);

  });
}

const filterItems = document.querySelectorAll("[data-filter-item]");

const filterFunc = function (selectedValue) {

  for (let i = 0; i < filterItems.length; i++) {

    if (selectedValue === "tous") {
      filterItems[i].classList.add("active");
    } else if (selectedValue === filterItems[i].dataset.category) {
      filterItems[i].classList.add("active");
    } else {
      filterItems[i].classList.remove("active");
    }

  }

}

let lastClickedBtn = filterBtn[0];

for (let i = 0; i < filterBtn.length; i++) {

  filterBtn[i].addEventListener("click", function () {

    let selectedValue = $(this).attr("data-select-id");
    selectValue.innerText = $(this).attr("data-select-id");
    filterFunc(selectedValue);

    lastClickedBtn.classList.remove("active");
    this.classList.add("active");
    lastClickedBtn = this;

  });

}