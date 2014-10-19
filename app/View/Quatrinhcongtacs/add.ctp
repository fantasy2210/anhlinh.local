<div class="quatrinhcongtacs form">
	<div class="row">		
		<div class="col-md-12">		
		<div class="panel panel-default">
		<div class="panel-heading"><?php echo __('Add Quatrinhcongtac'); ?></div>
			<div class="panel-body" >
			<?php echo $this->Form->create('Quatrinhcongtac', array('role' => 'form','formStyle' => 'horizontal2')); ?>
					<?php echo $this->Form->input('tu', array('class' => 'form-control'));?>
					<?php echo $this->Form->input('den', array('class' => 'form-control'));?>
					<?php echo $this->Form->input('lamgi', array('class' => 'form-control'));?>
					<?php echo $this->Form->input('capbac_id', array('class' => 'form-control'));?>
					<?php echo $this->Form->input('chucvudang_id', array('class' => 'form-control'));?>
					<?php echo $this->Form->input('chucvuchinhquyen_id', array('class' => 'form-control'));?>
					<?php echo $this->Form->input('donvi_id', array('class' => 'form-control','after'=>'<a data-toggle="modal" data-target="#modal-adddonvi" href="/donvis/add" type="button" class="btn btn-primary">'.__('Add Quatrinhcongtac').'</a>'));?>
					<?php //echo $this->Form->input('Danhsach', array('class' => 'form-control'));?>
			</div>
			<?php if(!$this->request->is('ajax')): ?>
			<div class="form-actions">
					<div class="col-md-offset-3 col-md-9">
					<button type="submit" class="btn btn-primary">Submit</button>&nbsp;
					<button type="button" class="btn btn-green">Cancel</button>
					</div>
			</div>
			<?php endif;?>
		</div>
		</form>
		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
<?php if(!$this->request->is('ajax')): ?>
<link type="text/css" rel="stylesheet" href="/vendors/select2/select2-madmin.css"><link type="text/css" rel="stylesheet" href="/vendors/bootstrap-select/bootstrap-select.min.css"><link type="text/css" rel="stylesheet" href="/vendors/multi-select/css/multi-select-madmin.css">
<link type="text/css" rel="stylesheet" href="/vendors/bootstrap-datepicker/css/datepicker.css"><link type="text/css" rel="stylesheet" href="/vendors/bootstrap-daterangepicker/daterangepicker-bs3.css">

<?php
$this->Html->script('/vendors/bootstrap-select/bootstrap-select.min', array('block' => 'scriptBottom','inline' => false));
$this->Html->script('/vendors/bootstrap-datepicker/js/bootstrap-datepicker', array('block' => 'scriptBottom','inline' => false));
$this->Html->script('/vendors/multi-select/js/jquery.multi-select', array('block' => 'scriptBottom','inline' => false));
$this->Html->script('form-components', array('block' => 'scriptBottom','inline' => false));
$this->Html->script('ui-dropdown-select', array('block' => 'scriptBottom','inline' => false));
?>
<?php endif;?>