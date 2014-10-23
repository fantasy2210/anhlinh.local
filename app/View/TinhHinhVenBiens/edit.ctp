
<div class="row">		
    <div class="col-md-12">		
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo __('Edit Tinh Hinh Ven Bien'); ?></div>
            <div class="panel-body">
                <?php echo $this->Form->create('TinhHinhVenBien', array('role' => 'form', 'formStyle' => 'horizontal2')); ?>

                <?php echo $this->Form->input('id', array('class' => 'form-control')); ?>
                <?php echo $this->Form->input('thoi_diem', array('class' => 'form-control datetimepicker-default', 'type' => 'text')); ?>
                <?php
                echo $this->Form->input('tinh_id', array('class' => 'form-control',
                    'after' => $this->Html->link('<span class="glyphicon glyphicon-plus"></span> Thêm tỉnh', '#', array('escape' => false, 'class' => ' btn btn-success fancybox.ajax', 'id' => 'add-tinh-button', 'role' => 'button', 'div' => false))));
                ?>
                <?php
                echo $this->Form->input('huyen_id', array('class' => 'form-control',
                    'after' => $this->Html->link('<span class="glyphicon glyphicon-plus"></span> Thêm huyện', '#', array('escape' => false, 'class' => 'fancybox-load btn btn-success',
                        'id' => 'add-huyen-button', 'role' => 'button', 'div' => false)
                )));
                ?>
                <?php
                echo $this->Form->input('xa_id', array('class' => 'form-control',
                    'after' => $this->Html->link('<span class="glyphicon glyphicon-plus"></span> Thêm xã', '#', array('escape' => false, 'class' => 'add-button btn btn-success fancybox.ajax', 'id' => 'add-xa-button', 'role' => 'button', 'div' => false)
                    )
                ));
                ?>
                <?php echo $this->Form->input('tieu_de', array('class' => 'form-control')); ?>
                <?php echo $this->Form->input('noi_dung', array('class' => 'form-control')); ?>
                <?php echo $this->Form->input('nguon', array('class' => 'form-control')); ?>
                <?php echo $this->Form->input('nguoi_lay_tin', array('class' => 'form-control')); ?>
            </div>
            <div class="form-actions">
                <div class="col-md-offset-3 col-md-9">
                    <button type="submit" class="btn btn-primary">Gửi đi</button>&nbsp;
                    <button type="button" class="btn btn-green">Hủy</button>
                </div>
            </div>
        </div>
        </form>
        <?php echo $this->element('ajaxforms/addtinhform'); ?>
        <?php echo $this->element('ajaxforms/addhuyenform'); ?>
        <?php echo $this->element('ajaxforms/addxaform'); ?>
    </div><!-- end col md 12 -->
</div><!-- end row -->

<link type="text/css" rel="stylesheet" href="/vendors/select2/select2-madmin.css"><link type="text/css" rel="stylesheet" href="/vendors/bootstrap-select/bootstrap-select.min.css"><link type="text/css" rel="stylesheet" href="/vendors/multi-select/css/multi-select-madmin.css">
<link type="text/css" rel="stylesheet" href="/vendors/bootstrap-datepicker/css/datepicker.css"><link type="text/css" rel="stylesheet" href="/vendors/bootstrap-daterangepicker/daterangepicker-bs3.css">

<?php echo $this->Html->script('add-tinh'); ?>
<?php echo $this->Html->script('add-huyen'); ?>
<?php echo $this->Html->script('add-xa'); ?>


<?php echo $this->Html->css('/bootstrapvalidator-0.5.2/css/bootstrapValidator.min'); ?>
<?php echo $this->Html->script('/bootstrapvalidator-0.5.2/js/bootstrapValidator.min', array('block' => 'scriptBottom', 'inline' => false)); ?>
<?php echo $this->Html->script('/bootstrapvalidator-0.5.2/js/language/vi_VN', array('block' => 'scriptBottom', 'inline' => false)); ?>

<?php
$this->Html->script('/vendors/bootstrap-select/bootstrap-select.min', array('block' => 'scriptBottom', 'inline' => false));
$this->Html->script('/vendors/bootstrap-datepicker/js/bootstrap-datepicker', array('block' => 'scriptBottom', 'inline' => false));
$this->Html->script('/vendors/multi-select/js/jquery.multi-select', array('block' => 'scriptBottom', 'inline' => false));
$this->Html->script('form-components', array('block' => 'scriptBottom', 'inline' => false));
$this->Html->script('ui-dropdown-select', array('block' => 'scriptBottom', 'inline' => false));
?>

<?php
$this->Js->get('#XaTinhId')->event('change', $this->Js->request(array(
            'controller' => 'huyens',
            'action' => 'getByTinh'
                ), array(
            'update' => '#XaHuyenId',
            'async' => true,
            'method' => 'post',
            'dataExpression' => true,
            'data' => $this->Js->serializeForm(array(
                'isForm' => true,
                'inline' => true
            ))
        ))
);
?>
<?php
$this->Js->get('#TinhHinhVenBienHuyenId')->event('change', $this->Js->request(array(
            'controller' => 'xas',
            'action' => 'getByHuyen'
                ), array(
            'update' => '#TinhHinhVenBienXaId',
            'async' => true,
            'method' => 'post',
            'dataExpression' => true,
            'data' => $this->Js->serializeForm(array(
                'isForm' => true,
                'inline' => true
            ))
        ))
);
?>
<!-- Js writeBuffer -->
<?php
if (class_exists('JsHelper') && method_exists($this->Js, 'writeBuffer'))
    echo $this->Js->writeBuffer();
// Writes cached scripts
?>