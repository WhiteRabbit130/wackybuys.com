<?php echo form_open("auth/deactivate/".$user->id);?>
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<h4 class="modal-title" id="myModalLabel"><?php echo lang('deactivate_heading');?></h4>
	</div>
	<div class="modal-body">
		<div class="form-group">
		<?php echo sprintf(lang('deactivate_subheading'), '<strong>'.$user->username.'?'.'</strong>');?> 
		</div>

		<div class="btn-group" data-toggle="buttons">
			<label class="btn btn-default active">
				<input type="radio" name="confirm" value="yes" checked="checked" /> yes
			</label> 
			<label class="btn btn-default">
				<input type="radio" name="confirm" value="no" /> no
			</label> 
		</div>

		<?php echo form_hidden($csrf); ?>
		<?php echo form_hidden(array('id'=>$user->id)); ?>   

	</div>

	<div class="modal-footer">
		<?php $data = array('type'=>'submit', 'class' =>'btn btn-primary btn-block btn-flat', 'content' => "<i class='glyphicon glyphicon-saved'></i> ".lang('deactivate_submit_btn'))?>               
		<?php echo form_button($data);?>
	</div>
<?php echo form_close();?>

