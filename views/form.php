<h1>Регистрация нового пользователя</h1>

<section>

<div id="Register">

<h2>Форма регистрации</h2>

<form id="RegUserForm" action="/../models/user.php" class="reg-form" enctype="multipart/form-data" method="POST" >
<fieldset>
<div class="reg-form-elemet-row1">
    <div>
	    <label for "user-_login">Логин</label>
	    <input type="text" id="user_login" class="text" name="user_login" placeholder="Придумайте логин" required>
    </div>
    <div>
	    <label for "user_pass">Пароль</label>
	    <input type="password" id="user_pass" class="text" name="user_pass" placeholder="Придумайте пароль" required>
    </div>
    <div>
        <label for "user_name">Ваше имя</label>
	    <input type="text" id="user_name" class="text" name="user_name" placeholder="Введите имя" required>
    </div>
     <div>
	    <label for "user_sex">Пол</label> <br>
	    <select id="user_sex" class="text" name="user_sex" class="form-element">
          <option value="Опция 1">Муж</option>
          <option value="Опция 2">Жен</option>      
        </select>
    </div>
    <div>
	    <label for "user_email">E-mail</label>
	    <input type="email" class="text" name="user_email" placeholder="Введите адрес эл почты" required>
    </div>
</div>
<div class="reg-form-elemet-row2">
    <div>
	    <label for "user_phone">Телефон</label>
	    <input type="tel" id ="user_phone" class="text" name="user_phone" placeholder="Введите номер телефона">
    </div>
    <div>
	    <label for "user_birthday">Дата рождения</label>
	    <input type="date" id="user_birthday" class="text" name="user_birthday" placeholder="Введите дату рождения">
    </div>
   
    <div>
	    <label for "user_job">Должность</label>
	    <input type="text" class="text" name="user_job" placeholder="Введите вашу должность"> <br>
    </div>
</div>
<div class="reg-form-submit-button">
<div>
	<br>
	<input type="submit" id="submit-form" class="submit-button" value="Отправить">
</div>
</div>
</fieldset>
</form>
</div>
</section>