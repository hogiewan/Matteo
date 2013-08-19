<h2>Viewing <span class='muted'>#<?php echo $message->id; ?></span></h2>

<p>
	<strong>Name:</strong>
	<?php echo $message->name; ?></p>
<p>
<strong>Message:</strong>
<?php echo $message->message; ?></p>
<h3>Comments</h3>
<?php if (Auth::instance()->check()) : ?>
<p><?php echo Html::anchor('comments/create/'.$message->id, 'Add new Comment'); ?></p>
<?php endif; ?>

<ul>
<?php foreach ($comments as $comment) : ?>
<li>
<ul>
<li><strong>Name:</strong> <?php echo $comment->name; ?></li>
<li><strong>Comment:</strong><br /><?php echo $comment->comment; ?></li>
<li>
<?php
if ($message->name == Auth::instance()->get_screen_name())
{
echo Html::anchor('messages/edit/'.$message->id, 'Edit');
echo ' | ';
}
echo Html::anchor('messages', 'Back');
?>
</ul>
</li>
<?php endforeach; ?>
</ul>

