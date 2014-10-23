<div class="row bootbox">
    <!-- The login modal. Don't display it initially -->
    <?php
    echo $this->Form->create('Tinh', array('url' => array('controller' => 'tinhs', 'action' => 'add'),
        'inputDefaults' => array(
            'div' => 'form-group',
            'wrapInput' => false,
            'class' => 'form-control'
        ),
        'class' => 'form-horizontal',
        'id' => 'TinhAddForm',
        'style' => "display: none;"
    ));
    ?>
    <?php echo $this->Form->input('ten', array('class' => 'form-control')); ?>

    <?php echo $this->Form->button('Lưu', array('class' => "btn btn-primary")); ?>
</form>

</div>


