<section class="login_form">
  <div class="container login_form__container">
    <form action="/login/" method="post">
      <input class="login_form__input" type="text" name="login" placeholder="Введите логин">
      <input class="login_form__input" type="text" name="pass" placeholder="Введите пароль">
      <input class="login_form__button" type="submit" value="Войти">
    </form>
    <a href="#" class="login_form__close">X</a>
  </div>
</section>

<script>

let showLoginFormBtn = document.querySelector("#showLoginForm");
let closeLoginFormBtn = document.querySelector(".login_form__close");
let loginForm = document.querySelector(".login_form");


showLoginFormBtn.addEventListener('click', () => {
  loginForm.style.display = 'block';
});

closeLoginFormBtn.addEventListener('click', () => {
  loginForm.style.display = 'none';
});
</script>