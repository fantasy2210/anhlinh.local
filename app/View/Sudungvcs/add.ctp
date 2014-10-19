<div class="sudungvcs form">

	<div class="row">		
		<div class="col-md-12">		
		<div class="panel panel-default">
		<div class="panel-heading"><?php echo __('Add Sudungvc'); ?></div>
						<div class="panel-body">
			<?php echo $this->Form->create('Sudungvc', array('role' => 'form','formStyle' => 'horizontal2')); ?>

					<?php echo $this->Form->input('vatchat_id', array('class' => 'form-control'));?>
					<?php echo $this->Form->input('ngaysudung', array('type'=>'text','class' => 'form-control datepicker-default'));?>
					<?php echo $this->Form->input('nguoisudung_id', array('class' => 'form-control'));?>
					<?php echo $this->Form->input('mucdich', array('class' => 'form-control'));?>
					<?php echo $this->Form->input('ngaytra', array('type'=>'text','class' => 'form-control datepicker-default'));?>
					<?php echo $this->Form->input('tinhtrangmuon', array('class' => 'form-control'));?>
					<?php echo $this->Form->input('tinhtrangtra', array('class' => 'form-control'));?>
		</div>
		<div class="form-actions">
					<div class="col-md-offset-3 col-md-9">
					<button type="submit" class="btn btn-primary">Gửi đi</button>&nbsp;
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
