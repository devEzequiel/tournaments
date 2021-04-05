<div class="container" id="new-jog" data-toggle="modal" data-target="#modalp">
  <button id="btn-new">ADICIONAR JOGADOR</button>
</div>
<div class="container" id="name-team">
  <h3 class="team-name"><?php echo $viewData['team']['team_name'];?></h3>
</div>
<div class="container torneio">
	<div>
		<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Matches</th>
      <th scope="col">Gols</th>
      <th scope="col">Assists</th>
      <th scope="col">Média</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Kliment</th>
      <td>4</td>
      <td>7</td>
      <td>3</td>
      <td>6.9</td>
    </tr>
    <tr>
      <th scope="row">Diego</th>
      <td>7</td>
      <td>2</td>
      <td>5</td>
      <td>7.3</td>
    </tr>
    <tr>
      <th scope="row">Lenny</th>
      <td>7</td>
      <td>2</td>
      <td>5</td>
      <td>7.3</td>
    </tr>
  </tbody>
</table>
	</div>

</div>

<!-- Modal Jogador -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="modalp">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Adicionar Jogador</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form-team" method="GET" action="<?php echo BASE_URL; ?>players/adicionar">
          <div class="form-group">
            <div class="row"></div>
              <label for="exampleInputEmail1">Nome do jogador</label>
              <input name="name" type="text" class="form-control col-md-4" id="name-team" placeholder="Nome do Jogador:">
              <label for="exampleInputEmail1">Qtd de gols</label>
              <input name="name" type="text" class="form-control col-md-4" id="name-team" placeholder="Nome do Jogador:">
            </div>
            <div id="team-msg"></div>
            <label for="exampleInputEmail1">Assistencias</label>
            <input name="name" type="text" class="form-control" id="name-team" placeholder="Nome do Jogador:">
            <div id="team-msg"></div>
            <label for="exampleInputEmail1">Quantidade de Partidas</label>
            <input name="name" type="text" class="form-control" id="name-team" placeholder="Nome do Jogador:">
            <div id="team-msg"></div>
            <label for="exampleInputEmail1">Media</label>
            <input name="name" type="text" class="form-control" id="name-team" placeholder="Nome do Jogador:">
            <div id="team-msg"></div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
              <input type="submit" class="btn" name ="submit" id="input-team" value="Adicionar">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

