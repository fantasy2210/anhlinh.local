<div class="nhomvcs view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Nhomvc'); ?></h1>
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
			<?php echo h($nhomvc['Nhomvc']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tennhom'); ?></th>
		<td>
			<?php echo h($nhomvc['Nhomvc']['tennhom']); ?>
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
	<h3><?php echo __('Related Vatchats'); ?></h3>
	<?php if (!empty($nhomvc['Vatchat'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tenvc'); ?></th>
		<th><?php echo __('Kyhieu'); ?></th>
		<th><?php echo __('Dacdiem'); ?></th>
		<th><?php echo __('Nhomvc Id'); ?></th>
		<th><?php echo __('Giatien'); ?></th>
		<th><?php echo __('Noicap'); ?></th>
		<th><?php echo __('Ngaycap'); ?></th>
		<th><?php echo __('Nguoinhan Id'); ?></th>
		<th><?php echo __('Chatluong'); ?></th>
		<th><?php echo __('Nguoiquanly Id'); ?></th>
		<th><?php echo __('Vitri'); ?></th>
		<th><?php echo __('Huongdan'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($nhomvc['Vatchat'] as $vatchat): ?>
		<tr>
			<td><?php echo $vatchat['id']; ?></td>
			<td><?php echo $vatchat['tenvc']; ?></td>
			<td><?php echo $vatchat['kyhieu']; ?></td>
			<td><?php echo $vatchat['dacdiem']; ?></td>
			<td><?php echo $vatchat['nhomvc_id']; ?></td>
			<td><?php echo $vatchat['giatien']; ?></td>
			<td><?php echo $vatchat['noicap']; ?></td>
			<td><?php echo $vatchat['ngaycap']; ?></td>
			<td><?php echo $vatchat['nguoinhan_id']; ?></td>
			<td><?php echo $vatchat['chatluong']; ?></td>
			<td><?php echo $vatchat['nguoiquanly_id']; ?></td>
			<td><?php echo $vatchat['vitri']; ?></td>
			<td><?php echo $vatchat['huongdan']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'vatchats', 'action' => 'view', $vatchat['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'vatchats', 'action' => 'edit', $vatchat['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'vatchats', 'action' => 'delete', $vatchat['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $vatchat['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Vatchat'), array('controller' => 'vatchats', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
