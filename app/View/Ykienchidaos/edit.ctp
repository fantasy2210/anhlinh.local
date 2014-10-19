<div class="ykienchidaos form">

	<div class="row">		
		<div class="col-md-12">		
		<div class="panel panel-default">
		<div class="panel-heading"><?php echo __('Edit Ykienchidao'); ?></div>
						<div class="panel-body">
			<?php echo $this->Form->create('Ykienchidao', array('role' => 'form','formStyle' => 'horizontal2')); ?>

					<?php echo $this->Form->input('id', array('class' => 'form-control'));?>
					<?php echo $this->Form->input('thoigian', array('class' => 'datepicker-default form-control','data-date-format'=>"dd/mm/yyyy",'type'=>"text"));?>
					<?php echo $this->Form->input('noidung', array('class' => 'form-control'));?>
					<?php echo $this->Form->input('linhvuc', array('class' => 'form-control'));?>
					<?php echo $this->Form->input('thoigianhoanthanh', array('class' => 'datepicker-default form-control','data-date-format'=>"dd/mm/yyyy",'type'=>"text"));?>
					<?php echo $this->Form->input('donvi_id', array('class' => 'form-control select2'));?>
					<?php echo $this->Form->input('danhsach_id', array('class' => 'form-control select2'));?>
					<?php //echo $this->Form->input('danhsach_id1', array('class' => 'form-control select2'));?>
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
