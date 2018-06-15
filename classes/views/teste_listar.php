
<br>
    <!-- Main content -->
    <form role="form" action="">
    <section class="content">
      <div class="row justify-content-center align-items-center">
        <div class="col-10">
          <div class="card card-primary card-outline">
            <!-- /.card-header -->
            <div class="card-header">
              <h3 class="card-title">Lista de Teste</h3>
            </div>
            <!-- /.card-header -->
            <!-- card-body -->             
            <div class="card-body">
              <table id="tbCandidate" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Descrição</th>
                  <th>Ação</th>
                </tr>
                </thead>
                <tbody>
                {loop="$candidates"}
                  <tr>
                    <td>{$value.name}</td>
                    <td>{$value.surname}</td>
                    <td>{$value.email}</td>
                    <td>{$value.phone}</td>
                    <td>{$value.city}</td>
                    <td>{$value.registerdate}</td>
                    <td align="center">
                      <a href="candidate_edit/{$value.id}" class="btn-sm btn-success fa fa-edit" class="confirmation" ></a>
                  </tr>
                {/loop}
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->

          </div>
        </div>
      </div>

    </section>
    </form>
    <!-- Main content -->

<script type="text/javascript">
  $('#tbCandidate').DataTable( {
    responsive: true
} );
</script>

<!-- page script -->