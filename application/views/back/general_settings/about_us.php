<p class="text-main text-semibold"><?php echo translate('about_us')?></p>
<form class="form-horizontal" id="privacy_policy_form" method="POST" action="<?=base_url()?>admin/general_settings/update_about_us">
	<div class="form-group">
		<div class="col-sm-12">
			<textarea class="form-control textarea" name="about_us" id="about_us" required><?=$this->Crud_model->get_type_name_by_id('general_settings', '87', 'value')?></textarea>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-12 text-right">
        	<button type="submit" class="btn btn-primary btn-sm btn-labeled fa fa-save"><?php echo translate('save')?></button>
		</div>
	</div>
</form>
