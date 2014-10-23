<div class="row bootbox">		
            <?php
            echo $this->Form->create('Huyen', array('url' => array('controller' => 'huyens', 'action' => 'add'),
                'inputDefaults' => array(
                    'div' => 'form-group',
                    'wrapInput' => false,
                    'class' => 'form-control'
                ),
                'class' => 'form-horizontal',
                'id' => 'HuyenAddForm',
                'style' => "display: none;"
                    )
            );
            ?>

            <?php echo $this->Form->input('ten', array('class' => 'form-control')); ?>
            <?php echo $this->Form->input('tinh_id', array('class' => 'form-control', 'empty' => 'Chọn tỉnh')); ?>
            <?php echo $this->Form->button('Lưu', array('type'=>'submit','class' => 'btn btn-primary')); ?>

        </form>
    </div><!-- end col md 12 -->

