<div class="row bootbox">		
    <div class="col-md-12">
        <?php
        echo $this->Form->create('Quocgia', array('url' => array('controller' => 'quocgias', 'action' => 'add'),
            'inputDefaults' => array(
                'div' => 'form-group',
                'wrapInput' => false,
                'class' => 'form-control'
            ),
            'class' => 'form-horizontal',
            'id' => 'QuocgiaAddForm',
            'style' => "display: none;"
        ));
        ?>
        <?php echo $this->Form->input('ten', array('class' => 'form-control')); ?>        
        <?php echo $this->Form->button('Lưu', array('class' => 'btn btn-primary', 'tupe' => 'submit')); ?>
        </form>
    </div>


</div><!-- end col md 12 -->