const btnEl = document.querySelector("button");
const inputs = document.querySelectorAll("input");
const errors = Array.from(document.querySelectorAll(".error"));

const validateEmail = email => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
const validateUrl = url => /(http(s)?:\/\/.)?(www\.)?[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)/g.test(url);
const validateTel = tel =>  /^[\+]?[(]?[0-9]{3}[)]?[-\s.]?[0-9]{3}[-\s.]?[0-9]{4,6}$/im.test(tel);

const validate = () => {
  const formValue = Array.from(inputs).map(i => i.value);
  const errorValue = errors.map(e => e.textContent);

  if(formValue.includes("") || errorValue.filter(Boolean).length > 0) {
    btnEl.classList.add("disable")
  }
  else btnEl.classList.remove("disable");
}

validate();

function handleInput() {
  const input = this;
  const error = input.parentElement.querySelector(".error");
  error.textContent = input.value ? "" : `${input.placeholder} can't be blank`;
  if(input.type === 'email') {
    error.textContent = validateEmail(input.value) ? "" : 'Email invalid';
  }
  else if(input.type === 'url') {
    error.textContent = validateUrl(input.value) ? "" : 'URL address invalid';
  }
  else if(input.type === 'tel') {
    error.textContent = validateTel(input.value) ? "" : 'Telephone invalid';
  }

  validate();
}


Array.from(inputs).forEach(input => input.addEventListener('input', handleInput.bind(input)));

