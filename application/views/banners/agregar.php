<?php if(!is_ajax()){ $this->load->view('layout/header'); } ?>
	<div class="col-lg-12 formulario-head">
		<div class="row">
			<div class="col-lg-11 col-sm-10 col-xs-9">
				<h4><?php echo $titulo?></h4>
			</div>
		</div>
	</div>
	<div class="col-lg-12">
		<p class="msg info">
		<span class="fa-stack fa-2x">
		  <i class="fa fa-circle fa-stack-2x text-color-blanco"></i>
		  <i class="fa fa-info fa-stack-1x text-color-info"></i>
		</span>
			Los campos requeridos est&aacute;n marcados con <span class="req">*</span>&nbsp;&nbsp;&nbsp;Si deshabilita el combo de Banner principal como 'Banner secundario', la imagen que debe insertar debe tener una proporci&oacute;n aproximada de 1280px de ancho x 450px de alto.</p>
		</div>
	<div class="col-lg-12">
		<form action="<?php echo site_url(uri_string()); ?>" id="form" method="post" enctype="multipart/form-data">
		<div class="panel panel-group">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
								Informaci&oacute;n general
							</a>
							</h4>
						</div>	
						<div id="collapseOne" class="panel-collapse collapse in">
				      <div class="panel-body">
				        <div class="row">
				        	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 form-group">
				        		<label>Categor&iacute;a:</label>
								<select class="form-control" name="categorias_id">
									<option value=""><?php echo $this->config->item('empty_select'); ?></option>
									<?php foreach($categorias as $k=>$v):?>
										<option value="<?php echo $k; ?>" <?php echo set_select('categorias_id', $k) ?>> <?php echo $v; ?></option>
									<?php endforeach;?>
								</select>
								<?php echo  form_error('categorias_id');?>
				        	</div>
				        	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 form-group">
				        		<label>Producto:</label>
								<select class="form-control" name="productos_id">
									<option value=""><?php echo $this->config->item('empty_select'); ?></option>
									<?php foreach($productos as $k=>$v):?>
										<option value="<?php echo $k; ?>" <?php echo set_select('productos_id', $k) ?>> <?php echo $v; ?></option>
									<?php endforeach;?>
								</select>
								<?php echo  form_error('productos_id');?>
				        	</div>
				        	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 form-group">
				        		<label>Banner principal:</label>
								<select class="form-control" name="banner_principal">
										<option value="1" selected="selected"> Banner principal</option>
										<option value="0" > Banner secundario</option>
								</select>
								<?php echo  form_error('categorias_id');?>
				        	</div>
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 form-group">
								<label>Url:</label>
								<input class="form-control" id="url" name="url" value="<?php echo set_value('url'); ?>" />
								<?php echo  form_error('url');?>
							</div>
				        </div>
			        </div>
		        </div>
	        </div>
	        <div class="panel panel-default">
				<div class="panel-heading">
				      <h4 class="panel-title">
				        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
				          Imagen 
				        </a>
				      </h4>
				    </div>
				    <div id="collapseTwo" class="panel-collapse collapse in">
				   	<div class="col-lg-12">
						<p class="msg info">
						<span class="fa-stack fa-2x">
						  <i class="fa fa-circle fa-stack-2x text-color-blanco"></i>
						  <i class="fa fa-info fa-stack-1x text-color-info"></i>
						</span>
						Seleccione un archivo de imagen.</p>
					</div>
					<div class="panel-body">
				        <div class="row">
				        	<div class="col-lg-2 col-md-3 col-sm-6 col-xs-6">
				        		<label>Imagen:</label>
								<div class="fileinputs">
									<input  class="file"  id="imagen" name="imagen" value="<?php echo set_value('imagen'); ?>" type="file"/>
									<div class="fakefile">
										<a href="" class="btn btn-front-primary"><i class="fa fa-upload"></i>  Subir Archivo</a>
									</div>
								</div>
								<span class="ml80"><?php echo form_error('imagen');?></span>
				        	</div>
				        </div>
				    </div>
			    </div>
		    </div>   
			<div class="col-lg-12 barra-btn">
				<input class="btn btn-primary pull-right" type="submit" value="Guardar" id="guardar" />
				<a href="<?php echo site_url('banners/index');?>" class="btn btn-default pull-right">Cancelar</a>
				<div class="clearblock">&nbsp;</div>
			</div>
		</div>
	</form>
	</div>
<?php if(!is_ajax()){ $this->load->view('layout/footer'); } ?>