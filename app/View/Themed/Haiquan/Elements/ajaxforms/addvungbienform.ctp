<div class="row bootbox">		
            <?php
            echo $this->Form->create('Vungbien', array('url' => array('controller' => 'vungbiens', 'action' => 'add'),
                'inputDefaults' => array(
                    'div' => 'form-group',
                    'wrapInput' => false,
                    'class' => 'form-control'
                ),
                'class' => 'form-horizontal',
                'id' => 'VungbienAddForm',
                'style' => "display: none;"
                    )
            );
            ?>

            <?php echo $this->Form->input('ten', array('class' => 'form-control')); ?>
            <?php echo $this->Form->button('Lưu', array('type'=>'submit','class' => 'btn btn-primary')); ?>

        </form>
    </div><!-- end col md 12 -->

