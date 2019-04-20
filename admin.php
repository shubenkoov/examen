<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Экзамен</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id="admin">
		<div class="container">
			<div class="sort-by">
				<span class="type_sort">Покупка</span>
				<span class="type_sort">Продажа</span>
				<span class="type_sort">Обмен</span>
			</div>
			<div class="reset-all">Сбросить все</div>
			<div class="refresh-all">Обновить все</div>
			<div class="content-header">
				<div class="row">
					<div class="column column_type">Тип заявки</div>
					<div class="column column_surname">Фамилия</div>
					<div class="column column_name">Имя</div>
					<div class="column column_patronymic">Отчество</div>
					<div class="column column_phone">Номер телефона</div>
				</div>
			</div>
			<div class="content"></div>
		</div>		
	</div>

	<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
	<script src="js/template7.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/admin.js"></script>
	<script id="template" type="text/template7">
		{{#each agenstvo}}
			<div class="row">
				<div class="column column_type">{{type}}</div>
				<div class="column column_surname">{{surname}}</div>
				<div class="column column_name">{{name}}</div>
				<div class="column column_patronymic">{{patronymic}}</div>
				<div class="column column_phone">{{phone}}</div>
			</div>
		{{/each}}
	</script>
</body>
</html>
<!-- For GitHub -->