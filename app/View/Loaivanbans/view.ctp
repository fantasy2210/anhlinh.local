<div class="loaivanbans view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Loaivanban'); ?></h1>
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
			<?php echo h($loaivanban['Loaivanban']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Ten'); ?></th>
		<td>
			<?php echo h($loaivanban['Loaivanban']['ten']); ?>
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
	<h3><?php echo __('Related Vanbandens'); ?></h3>
	<?php if (!empty($loaivanban['Vanbanden'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('So'); ?></th>
		<th><?php echo __('Kyhieu'); ?></th>
		<th><?php echo __('Loaivanban Id'); ?></th>
		<th><?php echo __('Ngayvanban'); ?></th>
		<th><?php echo __('Ngaynhan'); ?></th>
		<th><?php echo __('Tenvanban'); ?></th>
		<th><?php echo __('Noigui Id'); ?></th>
		<th><?php echo __('Nguoiky'); ?></th>
		<th><?php echo __('Domat'); ?></th>
		<th><?php echo __('Linhvuc Id'); ?></th>
		<th><?php echo __('Nguoiduyet Id'); ?></th>
		<th><?php echo __('Nguoinhan Id'); ?></th>
		<th><?php echo __('Noidungchidao'); ?></th>
		<th><?php echo __('Thoigianhoanthanh'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($loaivanban['Vanbanden'] as $vanbanden): ?>
		<tr>
			<td><?php echo $vanbanden['id']; ?></td>
			<td><?php echo $vanbanden['so']; ?></td>
			<td><?php echo $vanbanden['kyhieu']; ?></td>
			<td><?php echo $vanbanden['loaivanban_id']; ?></td>
			<td><?php echo $vanbanden['ngayvanban']; ?></td>
			<td><?php echo $vanbanden['ngaynhan']; ?></td>
			<td><?php echo $vanbanden['tenvanban']; ?></td>
			<td><?php echo $vanbanden['noigui_id']; ?></td>
			<td><?php echo $vanbanden['nguoiky']; ?></td>
			<td><?php echo $vanbanden['domat']; ?></td>
			<td><?php echo $vanbanden['linhvuc_id']; ?></td>
			<td><?php echo $vanbanden['nguoiduyet_id']; ?></td>
			<td><?php echo $vanbanden['nguoinhan_id']; ?></td>
			<td><?php echo $vanbanden['noidungchidao']; ?></td>
			<td><?php echo $vanbanden['thoigianhoanthanh']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'vanbandens', 'action' => 'view', $vanbanden['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'vanbandens', 'action' => 'edit', $vanbanden['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'vanbandens', 'action' => 'delete', $vanbanden['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $vanbanden['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Vanbanden'), array('controller' => 'vanbandens', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Vanbandis'); ?></h3>
	<?php if (!empty($loaivanban['Vanbandi'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('So'); ?></th>
		<th><?php echo __('Kyhieu'); ?></th>
		<th><?php echo __('Loaivanban Id'); ?></th>
		<th><?php echo __('Ngayvanban'); ?></th>
		<th><?php echo __('Tenvanban'); ?></th>
		<th><?php echo __('Noinhan'); ?></th>
		<th><?php echo __('Nguoiky Id'); ?></th>
		<th><?php echo __('Domat'); ?></th>
		<th><?php echo __('Linhvuc Id'); ?></th>
		<th><?php echo __('Noidungvanban'); ?></th>
		<th><?php echo __('Vanbanden Id'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($loaivanban['Vanbandi'] as $vanbandi): ?>
		<tr>
			<td><?php echo $vanbandi['id']; ?></td>
			<td><?php echo $vanbandi['so']; ?></td>
			<td><?php echo $vanbandi['kyhieu']; ?></td>
			<td><?php echo $vanbandi['loaivanban_id']; ?></td>
			<td><?php echo $vanbandi['ngayvanban']; ?></td>
			<td><?php echo $vanbandi['tenvanban']; ?></td>
			<td><?php echo $vanbandi['noinhan']; ?></td>
			<td><?php echo $vanbandi['nguoiky_id']; ?></td>
			<td><?php echo $vanbandi['domat']; ?></td>
			<td><?php echo $vanbandi['linhvuc_id']; ?></td>
			<td><?php echo $vanbandi['noidungvanban']; ?></td>
			<td><?php echo $vanbandi['vanbanden_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'vanbandis', 'action' => 'view', $vanbandi['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'vanbandis', 'action' => 'edit', $vanbandi['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'vanbandis', 'action' => 'delete', $vanbandi['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $vanbandi['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Vanbandi'), array('controller' => 'vanbandis', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
