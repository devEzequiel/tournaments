

<!-- conteudo da pagina-->
<h3 class="" id="teams-tt">Times</h3>
<div class="list-group" id="teams">
	<a href="#" class="novo-time" id="novoteam" data-toggle="modal" data-target="#modalteam">Criar Novo Time</a>
	<a href="#" class="list-group-item list-group-item-action team-link">Cras justo odio</a>
    <a href="#" class="list-group-item list-group-item-action team-link">Dapibus ac facilisis in</a>
	<a href="#" class="list-group-item list-group-item-action team-link">Morbi leo risus</a>
  	<a href="#" class="list-group-item list-group-item-action team-link">Porta ac consectetur ac</a>
  	<a href="#" class="list-group-item list-group-item-action team-link">Vestibulum at eros</a>
</div>

<!-- Modal Times -->
<div class="modal" tabindex="-1" role="dialog" id="modalteam">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Adicionar novo time</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     		<form id="form-team" method="GET" action="<?php BASE_URL; ?>models/Teams.php">
    		  <div class="form-group">
    		    <label for="exampleInputEmail1">Nome do time</label>
    		    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome do Time:">
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


