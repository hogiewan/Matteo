<ul class="nav nav-pills">
	<li class='<?php echo Arr::get($subnav, "logout" ); ?>'><?php echo Html::anchor('userslogin/logout','Logout');?></li>
	<li class='<?php echo Arr::get($subnav, "register" ); ?>'><?php echo Html::anchor('userslogin/register','Register');?></li>

</ul>
<p>Logout</p>