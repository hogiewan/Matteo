<h2>Listing <span class='muted'>Messages</span></h2>
<br>
<?php if ($messages): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Message</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($messages as $message): ?>		<tr>

			<td><?php echo $message->name; ?></td>
			<td><?php echo $message->message; ?></td>
			<td>
<?php echo Html::anchor('messages/view/'.$message->id, '<i class="icon-eye-open" title="View"></i>'); ?> |
<?php if ($message->name == Auth::instance()->get_screen_name()) : ?>
<li><?php echo Html::anchor('messages/edit/'.$message->id, 'Edit'); ?></li>
<li><?php echo Html::anchor('messages/delete/'.$message->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?></li>
<?php endif; ?>
				<li><?php echo Html::anchor('messages/view/'.$message->id, $comment_links[$message->id]); ?></li>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Messages.</p>

<?php endif; ?><p>
<?php if (Auth::instance()->check())
{

	 echo Html::anchor('messages/create', 'Add new Message', array('class' => 'btn btn-success')); 
}
?>

</p>
