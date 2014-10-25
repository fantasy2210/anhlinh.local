<div class="tinhhinhs form">

    <div class="row">		
        <div class="col-md-12">		
            <div class="panel panel-default">
                <div class="panel-heading"><?php echo __('Add Tinhhinh'); ?></div>
                <div class="panel-body">
                    <?php echo $this->Form->create('Tinhhinh', array('role' => 'form', 'formStyle' => 'horizontal2')); ?>
                    <?php
                    echo $this->Form->input('tauca_id', array('id' => 'TaucaId', 'class' => 'form-control select2', 'empty' => "Vui lòng chọn", 'after' => $this->Html->link('<span class="glyphicon glyphicon-plus"></span>', '#', array('escape' => false, 'class' => 'add-button btn btn-success',
                            'id' => 'add-tauca-button', 'role' => 'button', 'div' => false)
                    )));
                    ?>
                    <?php
                    echo $this->Form->input('dao_id', array('class' => 'form-control select2', 'empty' => "Vui lòng chọn",
                        'after' => $this->Html->link('<span class="glyphicon glyphicon-plus"></span>', '#', array('escape' => false, 'class' => 'add-button btn btn-success',
                            'id' => 'add-dao-button', 'role' => 'button', 'div' => false)
                        )
                    ));
                    ?>
                    <?php
                    echo $this->Form->input('vungbien_id', array('id' => 'TaucannbatgiuVungbienId', 'class' => 'form-control select2', 'empty' => "Vui lòng chọn", 'after' => $this->Html->link('<span class="glyphicon glyphicon-plus"></span>', '#', array('escape' => false, 'class' => 'add-button btn btn-success',
                            'id' => 'add-vungbien-button', 'role' => 'button', 'div' => false)
                    )));
                    ?>
                    <?php
                    echo $this->Form->input('quocgia_id', array('id' => 'TaucannbatgiuQuocgiaId', 'class' => 'form-control select2', 'empty' => "Vui lòng chọn", 'after' => $this->Html->link('<span class="glyphicon glyphicon-plus"></span>', '#', array('escape' => false, 'class' => 'add-button btn btn-success',
                            'id' => 'add-quocgia-button', 'role' => 'button', 'div' => false)
                    )));
                    ?>
                    <?php echo $this->Form->input('thoigian', array('class' => 'datetimepicker-default form-control',  'type' => "text")); ?>
<?php echo $this->Form->input('khoangcach', array('class' => 'form-control')); ?>
<?php echo $this->Form->input('loaihoatdong', array('class' => 'form-control')); ?>

                </div>
                <div class="form-actions">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn btn-primary">Lưu</button>&nbsp;
<?php echo $this->Html->link('Hủy', array('action' => 'index'), array('class' => 'btn btn-green')) ?>

                    </div>
                </div>
            </div>
            </form>
        </div><!-- end col md 12 -->
    </div><!-- end row -->
</div>
<?php echo $this->element('ajaxforms/adddaoform'); ?>
<?php $this->Html->script('add-dao', array('block' => 'scriptBottom', 'inline' => false)); ?>
<?php echo $this->element('ajaxforms/addquocgiaform'); ?>

<?php $this->Html->script('add-quocgia', array('block' => 'scriptBottom', 'inline' => false)); ?>
<?php echo $this->element('ajaxforms/addvungbienform'); ?>
<?php $this->Html->script('add-vungbien', array('block' => 'scriptBottom', 'inline' => false)); ?>

<?php echo $this->element('ajaxforms/addtaucaform'); ?>
<?php $this->Html->script('add-tauca', array('block' => 'scriptBottom', 'inline' => false)); ?>
<?php echo $this->Html->script('bootbox', array('inline' => false)); ?>
<?php echo $this->Html->css('/vendors/select2/select2-madmin'); ?>
<?php echo $this->Html->css('/vendors/bootstrap-datepicker/css/datepicker'); ?>
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