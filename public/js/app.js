// button to call out the modal
const signup = document.querySelector(".signup");
// modal
const modal = document.querySelector(".modal");
const close = document.querySelector(".close");
// form
const form = document.querySelector("form");
//const notes = document.querySelector(".notes");

// show modal
signup.addEventListener("click", (event) => {
  event.preventDefault();
  modal.classList.add("modal-show");
})

const closeModal = () => {
  modal.classList.remove("modal-show");
}

// click when pressing "x"
close.addEventListener("click", () => {
  closeModal()
})

// when user presses escape, close modal 
document.addEventListener("keydown", (event) => {
  if (event.key === "Escape") {
    closeModal()
  }
})

// form.addEventListener("submit", (event) => {
//   event.preventDefault();
//   const nameText = document.querySelector("#name");
//   const emailText = document.querySelector("#email");


//   closeModal();

//   nameText.value = "";
//   emailText.value = "";

// })