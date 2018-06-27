<br>
    <!-- Main content -->
    <form role="form" action="">
    <section class="content">
      <div class="row justify-content-center align-items-center">
        <div class="col-11">
          <div class="card card-primary card-outline">
            <!-- /.card-header -->
            <div class="card-header">
              <h4 class="card-title">Veículos no Patio</h4>
            </div>
            <!-- /.card-header -->
            <!-- card-body -->             
            <div class="card-body">
              <table id="table1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Placa</th>
                  <th>Marca</th>
                  <th>Modelo</th>
                  <th>Entrada</th>
                  <th width="30px">Ação</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                
                  $lista = (new Movimento())->listActives();        
                  foreach ($lista as $row){
                    echo '<tr>';
                    echo '<td>' . $row["placa"] . '</td>';
                    echo '<td align="center" >';
                    echo '<a href="../controllers/teste_controller.php?action=editar&id=' . $row["id"] .  '" class="btn-sm btn-success fa fa-edit" class="confirmation" >Editar</a>';
                    echo '</tr>';
                  }
                 
                  ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <a href="/estacionamento/classes/controllers/movimento_controller.php" class="btn btn-primary">Novo</a>
            </div>             
          </div>
        </div>
      </div>

    </section>
    </form>
    <!-- Main content -->

<script type="text/javascript">
  $('#table1').DataTable( {
    responsive: true
} );
</script>

<!-- page script -->
