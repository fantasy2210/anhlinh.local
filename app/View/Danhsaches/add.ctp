<div class="danhsaches form">

	<div class="row">		
		<div class="col-md-12">		
		<div class="panel panel-default">
		<div class="panel-heading"><?php echo __('Add Danhsach'); ?></div>
						<div class="panel-body">
			<?php echo $this->Form->create('Danhsach', array('role' => 'form','formStyle' => 'horizontal2')); ?>

					<?php echo $this->Form->input('hovaten', array('class' => 'form-control'));?>
					<?php echo $this->Form->input('ngaysinh', array('class' => 'datepicker-default form-control','data-date-format'=>"dd/mm/yyyy",'type'=>"text"));?>
					<?php echo $this->Form->input('ngaynhapngu', array('class' => 'datepicker-default form-control','data-date-format'=>"dd/mm/yyyy",'type'=>"text"));?>
					<?php echo $this->Form->input('quequan', array('class' => 'form-control'));?>
					<?php echo $this->Form->input('noithuongtru', array('class' => 'form-control'));?>
					<?php echo $this->Form->input('donvi_id', array('class' => 'form-control select2'));?>
					<?php echo $this->Form->input('chucvudang_id', array('class' => 'form-control select2'));?>
					<?php echo $this->Form->input('chucvuchinhquyen_id', array('class' => 'form-control select2'));?>
					<?php echo $this->Form->input('capbac_id', array('class' => 'form-control select2'));?>
					<?php echo $this->Form->input('Quanhegiadinh', array('class' => 'form-control select2','after'=>'<button type="button" class="btn btn-primary">'.__('Add Quanhegiadinh').'</button>'));?>
					<?php echo $this->Form->input('Quatrinhcongtac', array('class' => 'form-control select2','after'=>'<a data-toggle="modal" data-target="#modal-responsive" href="/quatrinhcongtacs/add" class="btn btn-primary">'.__('Add Quatrinhcongtac').'</a>'));?>
		</div>
		<div class="form-actions">
					<div class="col-md-offset-3 col-md-9">
					<button type="submit" class="btn btn-primary">Submit</button>&nbsp;
					<button type="button" class="btn btn-green">Cancel</button>
					</div>
				</div>
		</div>
		</form>
		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
<link type="text/css" rel="stylesheet" href="/vendors/select2/select2-madmin.css"><link type="text/css" rel="stylesheet" href="/vendors/bootstrap-select/bootstrap-select.min.css"><link type="text/css" rel="stylesheet" href="/vendors/multi-select/css/multi-select-madmin.css">
<link type="text/css" rel="stylesheet" href="/vendors/bootstrap-datepicker/css/datepicker.css"><link type="text/css" rel="stylesheet" href="/vendors/bootstrap-daterangepicker/daterangepicker-bs3.css">

<?php
$this->Html->script('/vendors/bootstrap-select/bootstrap-select.min', array('block' => 'scriptBottom','inline' => false));
$this->Html->script('/vendors/bootstrap-datepicker/js/bootstrap-datepicker', array('block' => 'scriptBottom','inline' => false));
$this->Html->script('/vendors/multi-select/js/jquery.multi-select', array('block' => 'scriptBottom','inline' => false));
$this->Html->script('form-components', array('block' => 'scriptBottom','inline' => false));
$this->Html->script('ui-dropdown-select', array('block' => 'scriptBottom','inline' => false));
?>
