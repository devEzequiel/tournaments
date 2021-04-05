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

  <?php foreach ($viewData['stats'] as $p) {?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $p['name']; ?></th>
      <td><?php echo $p['matches']; ?></td>
      <td><?php echo $p['goals']; ?></td>
      <td><?php echo $p['assists']; ?></td>
      <td><?php echo $p['average']; ?></td>
    </tr>
  <?php } ?>
    
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
        <form id="form-player" method="GET" action="<?php echo BASE_URL; ?>players/adicionar">
          <div class="form-group">
            <label for="formp" style="margin-right: 115px;">Nome do Jogador</label>
            <label for="formp0">Gols Feitos</label>
            <div class="row">
              <input name="name" type="text" class="form-control col" id="formp" placeholder="Nome do Jogador:">
              <input name="goals" value="0" type="text" class="form-control col" id="formp0" placeholder="Quantidade de Gols">
            </div>
            <label for="formp1" style="margin-right: 115px;">Nº de Assistências</label>
            <label for="formp2">Nº de Partidas Jogadas</label>
            <div class="row">
              <input name="assists" value="0" type="text" class="form-control col" id="formp1" placeholder="Assistências">
              <input name="matches" value="0" type="text" class="form-control col" id="formp2" placeholder="Partidas Jogadas">
            </div>
            <label for="formp" style="margin-right: 162px;">Nota Média</label>
            <label for="team_namm">Nome do Time</label>
            
            <div class="row">
              <input name="avrg" value="0.0" type="text" class="form-control col" id="formp3" placeholder="Nota Média">
              <input name="team" value="<?php echo $viewData['team']['team_name']; ?>" type="text" class="form-control col" id="team_namm" readonly>
            </div>          
            
            <div id="team-msg"></div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
              <input type="submit" class="btn" id="input-team" value="Adicionar">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

