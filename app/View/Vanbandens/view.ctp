<div class="vanbandens view">
	

	<div class="row">

		<div class="col-md-12">	
			<div class="panel">
			<div class="panel-heading clearfix">
				<span class="mts pull-left">
					<span class="subtitle"><?php echo __('Detail Vanbanden'); ?> </span><?php echo h($vanbanden['Vanbanden']['tenvanban']); ?>
				</span>
				<div class="nav pull-right">
					<div class="btn-group">
						<a href="/vanbandis/add/<?php echo h($vanbanden['Vanbanden']['id']); ?>" class="btn btn-primary btn-sm white"><i class="glyphicon glyphicon-share"></i>&nbsp;Tạo văn bản đi</a>
					</div>
				</div>
			</div>
			<div class="panel-body">
			<div class="tabbable tabs-left">
			<ul id="myTab2" class="nav nav-tabs">
				<li class="active"><a href="#thongtincoban" data-toggle="tab">Thông tin văn bản</a></li>
				<li class=""><a href="#chuyenvanban" data-toggle="tab">Chuyển văn bản</a></li>
			</ul>
			<div id="myTabContent2" class="tab-content">
			<div id="thongtincoban" class="tab-pane fade in active">
				<h3>Tóm tắt nội dung</h3>
				<p><?php echo h($vanbanden['Vanbanden']['tenvanban']); ?></p>
				<h3>Thông tin cơ bản</h3>
				<table class="table table-striped">
					<tbody>
					<tr>
						<th scope="row"><?php echo __('Dinhkem'); ?></th>
						<td>
							<div class="btn-group">
							<button type="button" data-toggle="dropdown" class="btn btn-xs btn-dark dropdown-toggle">
							<?php echo __('View Dinhkem'); ?>&nbsp;<span class="caret"></span>
							</button>
							<ul role="menu" class="dropdown-menu">
								<?php foreach ($vanbanden['Attachfile'] as $attachfile): ?>
								<li><a href="/attachfiles/download/<?php echo ($attachfile['id']); ?>"><?php echo h($attachfile['name'].'.'.$attachfile['ext']); ?></a></li>
								<?php endforeach; ?>
							</ul>
							</div>									
						</td>
						<th scope="row"><?php echo __('Loaivanban'); ?></th>
						<td>
							<?php echo $this->Html->link($vanbanden['Loaivanban']['ten'], array('controller' => 'loaivanbans', 'action' => 'view', $vanbanden['Loaivanban']['id'])); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th scope="row"><?php echo __('So'); ?>/<?php echo __('Kyhieu'); ?>:</th>
						<td><?php echo h($vanbanden['Vanbanden']['so']); ?>/<?php echo h($vanbanden['Vanbanden']['kyhieu']); ?></td>
						<th scope="row">Ký hiệu gốc:</th>
						<td> </td>
					</tr>
					<tr>
						<th scope="row">Ngày nhận:</th>
						<td><?php echo h($vanbanden['Vanbanden']['ngaynhan']); ?></td>
						<th scope="row">Nơi gởi:</th>
						<td><?php echo $this->Html->link($vanbanden['Noigui']['ten'], array('controller' => 'noiguis', 'action' => 'view', $vanbanden['Noigui']['id'])); ?></td>
					</tr>
					<tr>
						<th scope="row">Ngày ký:</th>
						<td><?php echo h($vanbanden['Vanbanden']['ngayvanban']); ?></td>
						<th scope="row">Người ký:</th>
						<td><?php echo h($vanbanden['Vanbanden']['nguoiky']); ?></td>
					</tr>
					<tr>
						<th scope="row"><?php echo __('Linhvuc'); ?></th>
						<td><?php echo $this->Html->link($vanbanden['Linhvuc']['ten'], array('controller' => 'linhvucs', 'action' => 'view', $vanbanden['Linhvuc']['id'])); ?></td>
						<th scope="row">Độ mật:</th>
						<td><?php echo $this->Sidebar->domattxt($vanbanden['Vanbanden']['domat']); ?></td>												
					</tr>
					</tbody>
				</table>
				<h3>Thông tin kiểm duyệt văn bản</h3>
				<table class="table table-striped">
					<tbody>
					<tr>
						<th scope="row" width="200px">Trạng thái xử lý:</th>
						<td>
						<?php echo $this->Sidebar->duyet($vanbanden['Vanbanden']['trangthaiduyet'],"");?>
						</td>
					</tr>
					<?php if($this->Sidebar->duyet($vanbanden['Vanbanden']['trangthaiduyet'],null)): ?>
					<tr>
						<th scope="row">Nội dung duyệt:</th>
						<td><?php echo h($vanbanden['Vanbanden']['noidungchidao']); ?></td>
					</tr>
					<tr>
						<th scope="row">Thời gian hoàn thành:</th>
						<td><?php echo h($vanbanden['Vanbanden']['thoigianhoanthanh']); ?></td>
					</tr>
					<?php endif; ?>
					</tbody>
				</table>
				
			</div>
			<div id="chuyenvanban" class="tab-pane fade">
			<h3>Chuyển văn bản cho các cá nhân</h3>
			<?php echo $this->Form->create('Vanbanden', array('action'=>'chuyenvanban/'.$vanbanden['Vanbanden']['id'],'role' => 'form','formStyle' => 'horizontal2')); ?>
			<?php 
				if(!isset($danhsach)) {
					$danhsach = "";
				}			
			?>
			<?php echo $this->Form->input('nguoinhan', array('value'=>$danhsach,'type'=>'text','class' => 'form-control'));?>
			<div class="form-actions">
				<div class="col-md-offset-3 col-md-9">
				<button type="submit" class="btn btn-primary"><?php echo __('Submit'); ?></button>&nbsp;
				<button type="button" class="btn btn-green"><?php echo __('Cancel'); ?></button>
				</div>
			</div>
			</form>
			<p>&nbsp;</p><p>&nbsp;</p>
			</div>
			</div>
			</div>
			</div>
			</div>
		</div><!-- end col md 9 -->

	</div>
</div>

<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Vanbandis'); ?></h3>
	<?php if (!empty($vanbanden['Vanbandi'])): ?>
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
	<?php foreach ($vanbanden['Vanbandi'] as $vanbandi): ?>
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
<?php
$this->Html->script('vanbanden_view', array('block' => 'scriptBottom','inline' => false));
?>