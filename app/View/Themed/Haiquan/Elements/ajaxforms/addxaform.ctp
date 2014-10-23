<div class="row bootbox">		
    <div class="col-md-12">		

        <?php
        echo $this->Form->create('Xa', array('url' => array('controller' => 'xas', 'action' => 'add'),
            'inputDefaults' => array(
                'div' => 'form-group',
                'wrapInput' => false,
                'class' => 'form-control'
            ),
            'class' => 'form-horizontal',
            'id' => 'XaAddForm',
            'style' => "display: none;"
        ));
        ?>

        <?php echo $this->Form->input('ten', array('class' => 'form-control')); ?>
        <?php echo $this->Form->input('tinh_id', array('class' => 'form-control', 'empty' => 'Chọn tỉnh')); ?>
        <?php echo $this->Form->input('huyen_id', array('class' => 'form-control', 'empty' => 'Chọn huyện')); ?>
        <?php echo $this->Form->button('Lưu', array('class' => 'btn btn-primary', 'tupe' => 'submit')); ?>

    </div>

</form>
</div><!-- end col md 12 -->

<?php
$this->Js->get('#TinhHinhVenBienTinhId')->event('change', $this->Js->request(array(
            'controller' => 'huyens',
            'action' => 'getByTinh'
                ), array(
            'update' => '#TinhHinhVenBienHuyenId',
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