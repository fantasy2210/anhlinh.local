<div class="vanbandis view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Vanbandi'); ?></h1>
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
			<?php echo h($vanbandi['Vanbandi']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('So'); ?></th>
		<td>
			<?php echo h($vanbandi['Vanbandi']['so']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Kyhieu'); ?></th>
		<td>
			<?php echo h($vanbandi['Vanbandi']['kyhieu']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Loaivanban'); ?></th>
		<td>
			<?php echo $this->Html->link($vanbandi['Loaivanban']['ten'], array('controller' => 'loaivanbans', 'action' => 'view', $vanbandi['Loaivanban']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Ngayvanban'); ?></th>
		<td>
			<?php echo h($vanbandi['Vanbandi']['ngayvanban']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tenvanban'); ?></th>
		<td>
			<?php echo h($vanbandi['Vanbandi']['tenvanban']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Noinhan'); ?></th>
		<td>
			<?php echo h($vanbandi['Vanbandi']['noinhan']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nguoiky'); ?></th>
		<td>
			<?php echo $this->Html->link($vanbandi['Nguoiky']['hovaten'], array('controller' => 'danhsaches', 'action' => 'view', $vanbandi['Nguoiky']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Domat'); ?></th>
		<td>
			<?php echo h($vanbandi['Vanbandi']['domat']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Linhvuc'); ?></th>
		<td>
			<?php echo $this->Html->link($vanbandi['Linhvuc']['ten'], array('controller' => 'linhvucs', 'action' => 'view', $vanbandi['Linhvuc']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Noidungvanban'); ?></th>
		<td>
			<?php echo h($vanbandi['Vanbandi']['noidungvanban']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Vanbanden'); ?></th>
		<td>
			<?php echo $this->Html->link($vanbandi['Vanbanden']['tenvanban'], array('controller' => 'vanbandens', 'action' => 'view', $vanbandi['Vanbanden']['id'])); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

