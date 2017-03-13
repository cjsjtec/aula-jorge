<!DOCTYPE html>
<html>
<head>
	<title>Aula </title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">

</head>
<body>
	<div class="container">
	<form name="form" id="form" class="form-horizontal">
		<input type="hidden" name="token" id="token" value='aulaJorgePHP'>
		<div class="row">
			<div class="col col-md-4 col-xs-6 col-md-offset-4 col-xs-offset-3">
				<div class="panel panel-primary">
			  		<div class="panel-body">
					<!--  <div class="form-group">
					    <label for="id" class="col-sm-2 control-label">Id</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="id">
					    </div>
					  </div>
					  -->
					  <div class="form-group">
					    <label for="nome" class="col-sm-2 control-label">Nome</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="nome">
					    </div>
					  </div>
					  <button type="button" class="btn btn-primary btn-md btn-block" id="btn-busca">Buscar</button>
				  	</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col col-md-10 col-xs-10 col-md-offset-1 col-xs-offset-1">

				  <ul class="pagination" id="paginador">

				  </ul>

				<table class="table table-bordered">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nome</th>
							<th>Descricao</th>
							<th>Valor</th>
							<th>Foto</th>
						</tr>
					</thead>
					<tbody>

					</tbody>
				</table>


			</div>
		</div>

	</form>
	</div>
	<script type="text/javascript" src="assets/jquery/jquery-3.1.1.min.js"></script>
	<script type="text/javascript">
		$('#btn-busca').on('click', function(event) {
			buscar(event, 1);
		});

		function buscar(event, limit_inicio) {

			limit = (limit_inicio * 10) - 10;

			if($('#nome').val() == '') {
				alert("Preencha corretamente o nome do produto!");
				return;
			}

			var data = {
				limit: limit,
				nome: $('#nome').val(),
				token: $('#token').val()
			}

			//TODO

			history.pushState(data, "page "+limit_inicio, "index.php?page="+limit_inicio);

			$.post( "ajax/consulta.php", data, null, 'json' )
				.done(function(response) {
					if(response.total != 0) {
						montarBotoes(response.total);
						montarTabela(response.data);
					}
				})
				.fail(function(response) {
					console.log(response);
				});
		}

		function montarBotoes(total) {
			var html = '';

			if(total > 10) {

				for(var i = 1; i <= Math.ceil(total /10); i++) {
						html += '<li><a href="#" class="btn-paginador" data-pagina="'+i+'" >'+i+'</a></li>';
				}
			} else {
				html += '<li class="btn-paginador"><a href="#" data-pagina="1"  >1</a></li>';
			}

			$('#paginador').html(html);

			$('li .btn-paginador').on('click', function(event) {
				buscar(event, $(this).data('pagina'));
			});
		}

		function montarTabela(data) {
			var html;

			for(var i in data) {

				html += "<tr>"+
							"<td>"+data[i].id+"</td>"+
							"<td>"+data[i].nome+"</td>"+
							"<td>"+data[i].descricao+"</td>"+
							"<td>"+data[i].valor+"</td>"+
							"<td>"+data[i].foto+"</td>"+
						"</tr>";
			}

			$('table tbody').html(html);
		}
	</script>
</body>
</html>