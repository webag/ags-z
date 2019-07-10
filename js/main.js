/***********************
 Отправка формы в php BEGIN
 ***********************/
$(function () {
	$(".ajax-form").on("submit", function (event) {
		const form = $(this);
		let send = true;
		event.preventDefault();

		$(this).find("[data-req='true']").each(function () {
			if ($(this).val() === "") {
				$(this).addClass('error');
				send = false;
			}
			if ($(this).is('select')) {
				if ($(this).val() === null) {
					$(this).addClass('error');
					send = false;
				}
			}
			if ($(this).is('input[type="checkbox"]')) {
				if ($(this).prop('checked') !== true) {
					$(this).addClass('error');
					send = false;
				}
			}
		});

		$(this).find("[data-req='true']").on('focus', function () {
			$(this).removeClass('error');
		});

		// empty file inputs fix for mac
		const fileInputs = $('input[type="file"]:not([disabled])', form);
		fileInputs.each(function (_, input) {
			if (input.files.length > 0) return;
			$(input).prop('disabled', true)
		});

		const form_data = new FormData(this);

		fileInputs.prop('disabled', false);

		$("[data-label]").each(function () {
			const input_name = $(this).attr('name');
			const input_label__name = input_name + '_label';
			const input_label__value = $(this).data('label').toString();
			form_data.append(input_label__name, input_label__value)
		});

		if (send === true) {
			$.ajax({
				type: "POST",
				async: true,
				url: "/send.php",
				cache: false,
				contentType: false,
				processData: false,
				data: form_data,
				success: (function (result) {
					console.log(result);
					$.fancybox.close();
					if (result.indexOf("Mail FAIL") !== -1) {
						$.fancybox.open({src: '#modal-error'});
					} else {
						setTimeout(function () {
							$.fancybox.open({src: '#modal-thanks'});
						}, 500);
						setTimeout(function () {
							$.fancybox.close();
						}, 4500);
						form[0].reset();
					}
				})
			});
		}
	});
});
/***********************
 Отправка формы в php END
 ***********************/


/***********************
 fancybox BEGIN
 ***********************/
$.fancybox.defaults.backFocus = false;
$.fancybox.defaults.autoFocus = false;
$.fancybox.defaults.lang = 'ru';
$.fancybox.defaults.i18n =
	{
		'ru': {
			CLOSE: 'Закрыть',
			NEXT: 'Дальше',
			PREV: 'Назад',
			ERROR: 'Не удается загрузить. <br/> Попробуйте позднее.',
			PLAY_START: 'Начать слайдшоу',
			PLAY_STOP: 'Остановить слайдшоу',
			FULL_SCREEN: 'На весь экран',
			THUMBS: 'Превью'
		}
	};

function init_fancy() {
	$('.fancy').fancybox({
		buttons: ['close']
	});
	$('.fancy-modal').fancybox({
		selector: '',
		touch: false
	});
	$('.fancy-map').fancybox({
		toolbar: false,
		smallBtn: true,
		defaultType: "iframe"
	});
}

function init_fancy__video() {
	$('.fancy-video').fancybox({
		toolbar: false,
		smallBtn: true,
		youtube: {
			controls: 1,
			showinfo: 0,
			autoplay: 1
		}
	});
}

$(function () {
	init_fancy();
	init_fancy__video();
});
/***********************
 fancybox END
 ***********************/


/**************************************************
 Custom File Input
 ***************************************************/
$(function($){
	$('.style-file').each( function(){
		const thisFileBlock = $(this);
		const input = thisFileBlock.find('input[type="file"]');
		const label = thisFileBlock.find('.style-file__text');
		const label_val = label.html();
		const deleteBtn = thisFileBlock.find('.style-file__delete');

		input.on('change', function(e){
			let fileName = '';

			if( this.files && this.files.length > 1 ) {
				fileName = ( this.getAttribute('data-multiple-caption') || '' ).replace('{count}', this.files.length);
				thisFileBlock.addClass('style-file--selected');
			}
			else if( e.target.value ) {
				fileName = e.target.value.split('\\').pop();
				thisFileBlock.addClass('style-file--selected');
			} else {
				thisFileBlock.removeClass('style-file--selected');
			}

			if(fileName) {
				label.html(fileName);
			}
			else {
				label.html(label_val);
				thisFileBlock.removeClass('style-file--selected');
			}
		});

		// Firefox bug fix
		input
			.on( 'focus', function(){ input.addClass( 'has-focus' ); })
			.on( 'blur', function(){ input.removeClass( 'has-focus' ); });

		deleteBtn.on('click',function (e) {
			e.stopPropagation();
			const thisInput = $(this).siblings('[type="file"]');
			thisInput.val(null);
			label.html(label_val);
			thisFileBlock.removeClass('style-file--selected');
			return false;
		})
	});
});
/**************************************************
 End Custom File Input
 ***************************************************/