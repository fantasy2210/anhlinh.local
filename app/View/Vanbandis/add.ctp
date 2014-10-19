<div class="vanbandis form">

	<div class="row">		
		<div class="col-md-12">		
		<div class="panel panel-default">
		<div class="panel-heading"><?php echo __('Add Vanbandi'); ?></div>
						<div class="panel-body">
						<div class="col-md-5 pull-right">
					<form id="my-dropzone" action="/attachfiles/upload" class="dropzone"></form>
					</div>
						<div class="col-md-7">	
							<?php echo $this->Form->create('Vanbandi', array('role' => 'form','formStyle' => 'horizontal222')); ?>
							<?php echo $this->Form->input('Attachfile', array('type' => 'hidden'));?>
							<?php echo $this->Form->input('so', array('class' => 'form-control'));?>
							<?php echo $this->Form->input('kyhieu', array('class' => 'form-control'));?>
							<?php echo $this->Form->input('loaivanban_id', array('class' => 'form-control select2','empty'=>'Vui lòng chọn'));?>
							<?php echo $this->Form->input('ngayvanban', array('class' => 'datepicker-default form-control','data-date-format'=>"dd/mm/yyyy",'type'=>"text"));?>
							<?php echo $this->Form->input('tenvanban', array('class' => 'form-control'));?>
							<?php echo $this->Form->input('noinhan', array('class' => 'form-control'));?>
							<?php echo $this->Form->input('nguoiky_id', array('class' => 'form-control select2','empty'=>'Vui lòng chọn'));?>
							<?php echo $this->Form->input('domat', array('class' => 'form-control select2','options'=>array('0'=>'Thường','1'=>'Mật','2'=>'Tối mật','3'=>'Tuyệt mật')));?>
							<?php echo $this->Form->input('linhvuc_id', array('class' => 'form-control select2','empty'=>'Vui lòng chọn'));?>
						</div>
						<div class="col-md-12">
							<?php echo $this->Form->input('noidungvanban', array('class' => 'wysihtml5 form-control','wrap' => 'col-md-10','label' => array('class' => 'col-md-2 control-label')));?>
							<?php if(isset($vbdid)): ?>
								<?php echo $this->Form->input('vanbanden_id', array('type'=>'hidden','value'=>$vbdid,'class' => 'form-control'));?>
							<?php endif; ?>
							<div class="form-actions">
								<div class="col-md-offset-3 col-md-9">
								<button type="submit" class="btn btn-primary">Submit</button>&nbsp;
								<button type="button" class="btn btn-green">Cancel</button>
								</div>					
							</div>
						</form>
						</div>					
				</div>
				
		</div>
		
		</div>
		</form>
		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
<link type="text/css" rel="stylesheet" href="/vendors/select2/select2-madmin.css"><link type="text/css" rel="stylesheet" href="/vendors/bootstrap-select/bootstrap-select.min.css"><link type="text/css" rel="stylesheet" href="/vendors/multi-select/css/multi-select-madmin.css">
<link type="text/css" rel="stylesheet" href="/vendors/bootstrap-datepicker/css/datepicker.css"><link type="text/css" rel="stylesheet" href="/vendors/bootstrap-daterangepicker/daterangepicker-bs3.css">
<link type="text/css" rel="stylesheet" href="/vendors/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<link type="text/css" rel="stylesheet" href="/vendors/dropzone/css/dropzone.css">
<script>
var mockFile = {};
</script>
<?php
$this->Html->script('/vendors/bootstrap-select/bootstrap-select.min', array('block' => 'scriptBottom','inline' => false));
$this->Html->script('/vendors/bootstrap-datepicker/js/bootstrap-datepicker', array('block' => 'scriptBottom','inline' => false));
$this->Html->script('/vendors/multi-select/js/jquery.multi-select', array('block' => 'scriptBottom','inline' => false));
$this->Html->script('/vendors/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min', array('block' => 'scriptBottom','inline' => false));
$this->Html->script('form-components', array('block' => 'scriptBottom','inline' => false));
$this->Html->script('ui-dropdown-select', array('block' => 'scriptBottom','inline' => false));
$this->Html->script('/vendors/dropzone/js/dropzone', array('block' => 'scriptBottom','inline' => false));
$this->Html->script('form-dropzone-file-upload', array('block' => 'scriptBottom','inline' => false));
$this->Html->scriptBlock("$(function () { $('.wysihtml5').wysihtml5();});", array('block' => 'scriptBlockBottom','inline' => true));
?>
