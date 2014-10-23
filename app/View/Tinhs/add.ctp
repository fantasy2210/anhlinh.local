<div class="row">		
    <div class="col-md-12">		
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo __('Add Tinh'); ?></div>
            <div class="panel-body">
                <?php echo $this->Form->create('Tinh', array('role' => 'form', 'formStyle' => 'horizontal2')); ?>

                <?php echo $this->Form->input('ten', array('class' => 'form-control')); ?>
            </div>
            <div class="form-actions">
                <div class="col-md-offset-3 col-md-9">
                    <button type="submit" class="btn btn-primary">Submit</button>&nbsp;
                    <button type="button" class="btn btn-green">Cancel</button>
                </div>
            </div>
        </div>
        </form>
    </div><!-- end col md 12 -->
</div><!-- end row -->
