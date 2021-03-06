<br>
<section class="content">
    <div class="row justify-content-center align-items-center">
        <div class="col-4">
            <div class="card card-primary card-outline">
            <!-- /.card-header -->
            <div class="card-header">
                <h4 class="card-title">Saída de Veículos</h4>
            </div>
            <!-- /.card-header -->

            <!-- form start -->
            <form name="form1" role="form" method="POST" action="../controllers/movimento_controller.php">
                <input type="hidden" name="txtId" value="<?php echo $movimento->id ?>">
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Placa</label>
                                <input type="text" class="form-control form-control-sm" name="txtPlaca" value="<?php echo $movimento->placa; ?>">
                            </div>
                        </div>               
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Horário de Entrada</label>
                                <input type="text" class="form-control form-control-sm" readonly name="txtHoraEntrada" value="<?php echo $movimento->entrada; ?>">
                            </div>
                        </div>  
                    </div>
                    <!--
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Tipo do Veículo</label>
                                <input type="text" class="form-control form-control-sm" readonly name="txtTipoVeiculo">
                            </div>
                        </div>               
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Marca</label>
                                <input type="text" class="form-control form-control-sm" readonly name="txtMarca">
                            </div>
                        </div>               
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Modelo</label>
                                <input type="text" class="form-control form-control-sm" readonly name="txtModelo">
                            </div>
                        </div>               
                    </div>

                    -->

                </div>

                <div class="card-footer">
                <button type="submit" name="btnGravarSaida" class="btn btn-sm btn-primary">Registrar Saída</button>
                <a href="/estacionamento/classes/controllers/movimento_controller.php?action=lista_ativos" class="btn btn-sm btn-success">Veículos no Patio</a>
                <a href="/estacionamento/" class="btn btn-outline-secondary btn-sm">Voltar</a>
                </div>            
                <php
                    
                >

            </form>
            <!-- /.Form end -->

            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    document.form1.txtPlaca.focus();
</script>

