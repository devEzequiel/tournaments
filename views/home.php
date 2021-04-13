<?php
  //error_reporting(1);
?>
<div class="container torneio">

	<div>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nome</th>
      <th scope="col" style="">Team</th>
      <th scope="col" style="cursor: pointer;">Partidas</th>
      <th scope="col" style="cursor: pointer;">Gols</th>
      <th scope="col" style="cursor: pointer;">Assists</th>
      <th scope="col" style="cursor: pointer;">Média</th>
    </tr>
  </thead>
  <?php
    foreach ($viewData as $p) {
  ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $p['name']; ?></th>
      <?php switch ($p['team_id']) {
        case '4':
          $team = 'Atalanta';
          break;

        case '7':
          $team = 'Bordeaux';
          break;

        case '9':
          $team = 'Angers';
          break;

        case '10':
          $team = 'Napoli';
          break;

        case '11':
          $team = 'Roma';
          break;

        case '12':
          $team = 'Lille';
          break;
        
        default:
          $team = 'Free Agent';
          break;
      } ?>
      <td><?php echo $team; ?></td>
      <td><?php echo $p['matches']; ?></td>
      <td><?php echo $p['goals']; ?></td>
      <td><?php echo $p['assists']; ?></td>
      <td><?php if($p['matches'] != 0){echo ($p['score']/$p['matches']); }else{ echo 0; }; ?></td>
    </tr>
    <tr>
  </tbody>
  <?php } ?>
</table>
	</div>

</div>

