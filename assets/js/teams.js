$(document).ready(function(){
	$('#form-team').on('submit', function(e){
		e.preventDefault();
		let nome = $('#name-team').val();
		$.ajax({
			data:{
					name: nome
				},
			datatype: 'json',
			type: 'get',
			url: 'http://localhost/GitHub/tournaments/teams/adicionar' 
		}).done(function(result){
			
			if (result == 0) {
				$('#team-msg').html('<div class="alert alert-success" id="msg" role="alert">Time adicionado com Sucesso! Recarregue a página.</div>');
			} else {
				$('#team-msg').html('<div class="alert alert-danger" id="msg" role="alert">Esse time já existe</div>')
			}
		})
	})
})