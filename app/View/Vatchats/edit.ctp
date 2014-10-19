<div class="vatchats form">

	<div class="row">		
		<div class="col-md-12">		
		<div class="panel panel-default">
		<div class="panel-heading"><?php echo __('Edit Vatchat'); ?></div>
						<div class="panel-body">
			<?php echo $this->Form->create('Vatchat', array('role' => 'form','formStyle' => 'horizontal2')); ?>

					<?php echo $this->Form->input('id', array('class' => 'form-control'));?>
					<?php echo $this->Form->input('tenvc', array('class' => 'form-control'));?>
					<?php echo $this->Form->input('kyhieu', array('class' => 'form-control'));?>
					<?php echo $this->Form->input('dacdiem', array('class' => 'form-control'));?>
					<?php echo $this->Form->input('nhomvc_id', array('class' => 'form-control'));?>
					<?php echo $this->Form->input('giatien', array('class' => 'form-control'));?>
					<?php echo $this->Form->input('noicap', array('class' => 'form-control'));?>
					<?php echo $this->Form->input('ngaycap', array('type'=>'text','class' => 'form-control datepicker-default'));?>
					<?php echo $this->Form->input('nguoinhan_id', array('class' => 'form-control'));?>
					<?php echo $this->Form->input('chatluong', array('class' => 'form-control'));?>
					<?php echo $this->Form->input('nguoiquanly_id', array('class' => 'form-control'));?>
					<?php echo $this->Form->input('vitri', array('class' => 'form-control'));?>
					<?php echo $this->Form->input('huongdan', array('class' => 'form-control'));?>
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
