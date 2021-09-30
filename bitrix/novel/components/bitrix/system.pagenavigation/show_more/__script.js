$(document).ready(function(){

	$(document).on('click', '.load_more', function(){
		console.log('ggg');
		 var targetContainer = $('.news_list_row'),          //  Контейнер, в котором хранятся элементы
			  url =  $('.load_more').attr('data-url');    //  URL, из которого будем брать элементы

		 if (url !== undefined) {
			 $.ajax({
				 type: 'GET',
				 url: url,
				 dataType: 'html',
				 success: function (data) {

					 //  Удаляем старую навигацию
					 $('.load_more').remove();

					 var elements = $(data).find('.news-col'),  //  Ищем элементы
						 pagination = $(data).find('.load_more');//  Ищем навигацию

					 targetContainer.append(elements);   //  Добавляем посты в конец контейнера
					 targetContainer.append(pagination); //  добавляем навигацию следом

				 }
			 });
		 }

	});
});