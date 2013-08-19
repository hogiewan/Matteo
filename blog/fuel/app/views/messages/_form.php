<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="control-group">

			<div class="controls">

 
<div class="input">
<?php echo 'Name: '.Auth::instance()->get_screen_name(); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Message', 'message', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::textarea('message', Input::post('message', isset($message) ? $message->message : ''), array('class' => 'span8', 'rows' => 8, 'placeholder'=>'Message')); ?>

			</div>
		</div>
		<div class="control-group">
			<label class='control-label'>&nbsp;</label>
			<div class='controls'>
				<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>			</div>
		</div>
	</fieldset>
<?php echo Form::close(); ?>