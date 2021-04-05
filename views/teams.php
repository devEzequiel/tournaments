

<!-- conteudo da pagina-->
<div class="list-group" id="teams">
	<a href="#" class="novo-time" id="novoteam" data-toggle="modal" data-target="#modalteam">NOVO TIME</a>

  <?php foreach ($viewData['team'] as $t) { ?>
    
  	<a href="<?php echo BASE_URL; ?>teams/abrir/<?php echo $t['team_id'];?>" class="list-group-item list-group-item-action team-link"><?php echo $t['team_name']?> </a>
  
  <?php } ?>
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
     		<form id="form-team" method="GET" action="<?php BASE_URL; ?>teams/adicionar">
    		  <div class="form-group">
    		    <label for="exampleInputEmail1">Nome do time</label>
    		    <input name="name" type="text" class="form-control" id="name-team" placeholder="Nome do Time:">
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


