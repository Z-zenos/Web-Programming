let nameEl = document.querySelector(".name");
let submitBtn = document.getElementById("submit");
const uploadBox = document.querySelector(".upload-box"),
      formBox = document.querySelector(".st-box"),
      multiBox = document.querySelector(".multiselect"),
      inputArr = document.querySelectorAll('.field input'),
      fileInput = uploadBox.querySelector(".fileAvatar"),
      previewImg = uploadBox.querySelector("img"),
      textarea = document.querySelector('textarea');


const loadFile = (e) => {
  const file = e.target.files[0]; // getting first user selected file
  if(!file) return; // return if user hasn't selected any file
  previewImg.src = URL.createObjectURL(file); // passing selected file url to preview img src
}

submitBtn.addEventListener("mouseover", () => {
  //If either password or username is invalid then do this.
  if (!nameEl.value) {
    //Get the current position of submit btn
    let containerRect = formBox.getBoundingClientRect();
    let submitRect = submitBtn.getBoundingClientRect();
    let offset = submitRect.left - containerRect.left;
    // If the button is on the left hand side. move it to
    // the right hand side
    submitBtn.style.transform = offset <= 100 ? "translateX(55rem)" : "translateX(0)";
  }
});

Array.from(inputArr).forEach(input => {
  input.addEventListener('input', (e) => {
    e.target.nextElementSibling.classList[e.target.value ? 'add' : 'remove']('up');
  });
});

textarea.value = '';
uploadBox.addEventListener("click", () => fileInput.click());
multiBox.addEventListener("mouseleave", () => document.querySelector("#checkboxes").style.display = "none");
multiBox.addEventListener("click", () => document.querySelector("#checkboxes").style.display = "block");
fileInput.addEventListener("change", loadFile);