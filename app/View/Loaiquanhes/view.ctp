<div class="loaiquanhes view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Loaiquanhe'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-md-12">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($loaiquanhe['Loaiquanhe']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Ten'); ?></th>
		<td>
			<?php echo h($loaiquanhe['Loaiquanhe']['ten']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Quanhegiadinhs'); ?></h3>
	<?php if (!empty($loaiquanhe['Quanhegiadinh'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Hovaten'); ?></th>
		<th><?php echo __('Namsinh'); ?></th>
		<th><?php echo __('Quenquan'); ?></th>
		<th><?php echo __('Nghenghiep'); ?></th>
		<th><?php echo __('Tinhtrang'); ?></th>
		<th><?php echo __('Loaiquanhe Id'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($loaiquanhe['Quanhegiadinh'] as $quanhegiadinh): ?>
		<tr>
			<td><?php echo $quanhegiadinh['id']; ?></td>
			<td><?php echo $quanhegiadinh['hovaten']; ?></td>
			<td><?php echo $quanhegiadinh['namsinh']; ?></td>
			<td><?php echo $quanhegiadinh['quenquan']; ?></td>
			<td><?php echo $quanhegiadinh['nghenghiep']; ?></td>
			<td><?php echo $quanhegiadinh['tinhtrang']; ?></td>
			<td><?php echo $quanhegiadinh['loaiquanhe_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'quanhegiadinhs', 'action' => 'view', $quanhegiadinh['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'quanhegiadinhs', 'action' => 'edit', $quanhegiadinh['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'quanhegiadinhs', 'action' => 'delete', $quanhegiadinh['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $quanhegiadinh['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Quanhegiadinh'), array('controller' => 'quanhegiadinhs', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
