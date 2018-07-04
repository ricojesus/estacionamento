<br>
    <!-- Main content -->
    <form role="form" action="">
    <section class="content">
      <div class="row justify-content-center align-items-center">
        <div class="col-6">
          <div class="card card-primary card-outline">
            <!-- /.card-header -->
            <div class="card-header">
              <h4 class="card-title">Lista de Tipos de Veículos</h4>
            </div>
            <!-- /.card-header -->
            <!-- card-body -->             
            <div class="card-body">
              <table id="tbCandidate" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Descrição</th>
                  <th width="30px">Ação</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  // para que raios servia esse while aqui ???
                  //while ($row = $lista->fetch_assoc()) {
                  foreach ($lista as $row){
                    echo '<tr>';
                    echo '<td>' . $row["descricao"] . '</td>';
                    echo '<td align="center" >';
                    echo '<a href="../controllers/tipo_veiculo_controller.php?action=editar&id=' . $row["id"] .  '" class="btn-sm btn-success fa fa-edit" >Editar</a>';
                    echo '&nbsp;<a href="../controllers/tipo_veiculo_controller.php?action=excluir&id=' . $row["id"] .  '" class="btn-sm btn-danger fa fa-edit" onclick="return confirma();" >Excluir</a>';
                    echo '</tr>';
                  }
                //}
                  
                  ?>
                </tbody>
              </table>
            </div>
            
            <div class="card-footer">
              <a href="/estacionamento/classes/controllers/tipo_veiculo_controller.php?action=novo" class="btn btn-primary">Novo</a>
            </div>             
          </div>
        </div>
      </div>

    </section>
    </form>
    

<script type="text/javascript">
  function confirma(){
    if (!confirm('Confirma a Exclusão?')){
      return false;
    }
  }

  $('#tbCandidate').DataTable( {
    responsive: true
} );
</script>

