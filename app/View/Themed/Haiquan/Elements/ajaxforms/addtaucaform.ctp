<div class="row bootbox">		
    <div class="col-md-12">
        <?php
        echo $this->Form->create('Tauca', array('url' => array('controller' => 'taucas', 'action' => 'add'),
            'inputDefaults' => array(
                'div' => 'form-group',
                'wrapInput' => false,
                'class' => 'form-control'
            ),
            'class' => 'form-horizontal',
            'id' => 'TaucaAddForm',
            'style' => "display: none;"
        ));
        ?>
        <?php echo $this->Form->input('tentau', array('class' => 'form-control required')); ?>
        <?php echo $this->Form->input('kyhieu', array('class' => 'form-control')); ?>
        <?php echo $this->Form->input('sohieu', array('class' => 'form-control')); ?>
        <?php echo $this->Form->input('tenchutau', array('class' => 'form-control')); ?>
        <?php echo $this->Form->input('thuyentruong', array('class' => 'form-control')); ?>
        <?php echo $this->Form->input('sothuyenvien', array('class' => 'form-control')); ?>
        <?php echo $this->Form->input('hanhnghe', array('class' => 'form-control')); ?>
        <?php echo $this->Form->input('diachict', array('class' => 'form-control')); ?>
        <?php echo $this->Form->input('diachitt', array('class' => 'form-control')); ?>
        <?php $loaitau=$this->requestAction(array('controller'=>'loaitaus','action'=>'getList'));?>
        <?php echo $this->Form->input('loaitau_id', array('class' => 'form-control required','options'=>$loaitau)); ?>     
        <?php echo $this->Form->button('Lưu', array('class' => 'btn btn-primary', 'tupe' => 'submit')); ?>
        </form>
    </div>


</div><!-- end col md 12 -->