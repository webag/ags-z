<!-- Модальные окна -->
<div class="modals-sec">

	<div id="modal-call" class="modal">
		<p class="h2 modal__title">Обратный звонок</p>
		<p class="modal__descr">Оставьте заявку на&nbsp;обратный звонок и&nbsp;мы перезвоним Вам в&nbsp;течение 5&nbsp;минут</p>
		<form class="ajax-form vertical-form">
			<input type="hidden" value="Заказ обратного звонка" name="form_subject">
			<input type="text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя" class="input-text" >
			<input type="tel" name="user_tel" placeholder="Телефон*" data-label="Телефон"  class="input-text" data-req="true">
			<button type="submit" class="btn">Заказать звонок</button>
			<div class="form-note">Нажимая кнопку, принимаю <a href="#">условия политики</a> и&nbsp;<a href="#">пользовательского соглашения</a></div>
		</form>
	</div>

	<div id="modal-order" class="modal">
		<p class="h2 modal__title">Заказать проект</p>
		<p class="modal__descr">Оставьте заявку на&nbsp;просчет проекта и&nbsp;мы свяжемся с&nbsp;Вами для&nbsp;уточнения деталей</p>
		<form class="ajax-form vertical-form">
			<input type="hidden" value="Новая заявка" name="form_subject">
			<input type="text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя" class="input-text" >
			<input type="tel" name="user_tel" placeholder="Телефон*" data-label="Телефон"  class="input-text" data-req="true">
			<input type="email" name="user_email" placeholder="E-mail" data-label="Email" class="input-text">
			<button type="submit" class="btn">Заказать просчет</button>
			<label class="style-file">
				<input type="file" name="user_photo" data-multiple-caption="{count} файла(ов)" multiple>
				<i></i>
				<span class="style-file__text">Прикрепить файл</span>
				<span class="style-file__delete" title="Очистить">&#10006;</span>
			</label>
			<div class="form-note">Нажимая кнопку, принимаю <a href="#">условия политики</a> и&nbsp;<a href="#">пользовательского соглашения</a></div>
		</form>
	</div>

	<div id="modal-thanks" class="modal modal--thanks">
		<p class="h2 modal__title">Спасибо за&nbsp;обращение в&nbsp;нашу компанию</p>
		<p class="modal__descr">Мы уже&nbsp;начали работу по&nbsp;вашей заявке</p>
	</div>

	<div id="modal-error" class="modal">
		<p>Что-то пошло не так.</p>
		<p>Попробуйте еще раз.</p>
		<p>Если постоянно видите эту ошибку, пожалуйста, обратитесь к администратору сайта. Мы будем очень благодарны.</p>
	</div>

</div>
<!-- Модальные окна -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/assets.js" type="text/javascript"></script>
<script src="js/main.js?v=2" type="text/javascript"></script>

	</body>
</html>
