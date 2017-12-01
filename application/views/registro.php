<body>
<?php if(($this->session->userdata('nivel')>='1') &&   ($this->session->userdata('nivel')<='3')){?>
<div class="container">
  <h2>Registro Seminario</h2>
<form action="<?php echo base_url();?>index.php/Welcome/insertaRegistro" method="POST">
  <div id="accordion">
    <div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          Datos Particulares
        </a>
      </div>
      <div id="collapseOne" class="collapse show">
        <div class="card-block">
            <div class="form-group">
              <label for="nombre">Nombre:</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa Nombre">
            </div>
            <div class="form-group">
             <label for="paterno">Paterno:</label>
             <input type="text" class="form-control" id="paterno" name="paterno" placeholder="Ingresa Apellido Paterno">
            </div>
            <div class="form-group">
             <label for="materno">Materno:</label>
             <input type="text" class="form-control" id="materno" name="materno" placeholder="Ingresa Apellido Materno">
            </div>
            <label for="medio">Selecciona un medio:</label>
             <select class="form-control" id="medio" name="medio">
             <?php foreach($medios->result() as $fila) { ?>
              <option value="<?=$fila->id_medio?>"><?=$fila ->nombre_medio?></option><?php } ?> 
             </select>
             <label for="pais">Selecciona un País:</label>
             <select class="form-control" id="pais" name="pais">
             <?php foreach($paises->result() as $fila) { ?>
              <option value="<?=$fila->id_pais?>"><?=$fila ->nombre_pais?></option><?php } ?> 
             </select>
              <div class="" name="estado" id="estado"></div>
              <div class="" name="municipio" id="municipio"></div>

        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
        Datos Académicos
      </a>
      </div>
      <div id="collapseTwo" class="collapse">
        <div class="card-block">
          <label for="escuela">Selecciona una Escuela:</label>
             <select class="form-control" id="escuela" name="escuela">
             <?php foreach($escuelas->result() as $fila) { ?>
              <option value="<?=$fila->id_escuela?>"><?=$fila ->nombre_escuela?></option><?php } ?> 
             </select>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          Pagos Bancarios
        </a>
      </div>
      <div id="collapseThree" class="collapse">
        <div class="card-block">
          blabla
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
          Salón
        </a>
      </div>
      <div id="collapseFour" class="collapse">
        <div class="card-block">
          <label for="sede">Selecciona una Sede:</label>
             <select class="form-control" id="sede" name="sede">
             <?php foreach($sedes->result() as $fila) { ?>
              <option value="<?=$fila->id_sede?>"><?=$fila ->nombre_sede?></option><?php } ?> 
             </select>
             <div class="" name="salon" id="salon"></div>
             <div class="" name="inscrito" id="inscrito"></div>
        </div>
      </div>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>
 <?php } else
   redirect('/Welcome/index/', 'refresh');
 ?>   
</body>
