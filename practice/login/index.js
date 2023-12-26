const RegBtn = document.getElementById("reg_button");
const slider = document.querySelector(".slider");

RegBtn.addEventListener('click', () => {
console.log('Кнопка');
if (slider.classList.toggle('slider_activ')) {
   RegBtn.innerHTML = 'Войти';
  } else {
    RegBtn.innerHTML = 'Зарегистрироваться';
  }
});
