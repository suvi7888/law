<style>.control-label { margin: 7px 0; font-weight: bold; }</style>
<h5 class="over-title margin-bottom-15"><span class="text-bold">Master Website | <?php echo @$titlePage; ?></span></h5>

<div class="row">
<div class="col-md-12">

	<?php echo form_open_multipart($action); ?>
	<input type="hidden" name="titlePage" value="<?php echo @$titlePage; ?>">
	<!-- id_website -->
	<div class="form-group">
		<label for="id_website" class="col-sm-2 control-label">
			id_website
		</label>
		<div class="col-sm-10">
			<input type="text" name="id_website" 
				value="<?php echo set_value('id_website', isset($detail['id_website']) ? $detail['id_website'] : ''); ?>" 
				placeholder="id_website" 
				id="id_website" 
				class="form-control"
				<?php echo @$disable; ?> >
			<span class="help-block"><?php echo form_error('id_website'); ?></span>
		</div>
	</div>
	<!-- title -->
	<div class="form-group">
		<label for="title" class="col-sm-2 control-label">
			title Website
		</label>
		<div class="col-sm-10">
			<input type="text" name="title" 
				value="<?php echo set_value('title', isset($detail['title']) ? $detail['title'] : ''); ?>" 
				placeholder="title website" 
				id="title" 
				class="form-control">
			<span class="help-block"><?php echo form_error('title'); ?></span>
		</div>
	</div>
	<!-- base_url -->
	<div class="form-group">
		<label for="base_url" class="col-sm-2 control-label">
			base_url Website
		</label>
		<div class="col-sm-10">
			<input type="text" name="base_url" 
				value="<?php echo set_value('base_url', isset($detail['base_url']) ? $detail['base_url'] : ''); ?>" 
				placeholder="base_url website" 
				id="base_url" 
				class="form-control">
			<span class="help-block"><?php echo form_error('base_url'); ?></span>
		</div>
	</div>
	<!-- icon -->
	<div class="form-group">
		<label for="icon" class="col-sm-2 control-label">
			icon Website
		</label>
		<div class="col-sm-10">
			<input type="file" name="icon" 
				value="<?php echo set_value('icon', isset($detail['icon']) ? $detail['icon'] : ''); ?>" 
				placeholder="icon website" 
				id="icon" 
				class="form-control" style="padding:0; margin:0;">
			<span class="help-block"><?php echo form_error('icon'); ?></span>
		</div>
	</div>
	<!-- logo_1 -->
	<div class="form-group">
		<label for="logo_1" class="col-sm-2 control-label">
			logo_1 Website
		</label>
		<div class="col-sm-10">
			<input type="file" name="logo_1" 
				value="<?php echo set_value('logo_1', isset($detail['logo_1']) ? $detail['logo_1'] : ''); ?>" 
				placeholder="logo_1 website" 
				id="logo_1" 
				class="form-control" style="padding:0; margin:0;">
			<span class="help-block"><?php echo form_error('logo_1'); ?></span>
		</div>
	</div>
	<!-- logo_2 -->
	<div class="form-group">
		<label for="logo_2" class="col-sm-2 control-label">
			logo_2 Website
		</label>
		<div class="col-sm-10">
			<input type="file" name="logo_2" 
				value="<?php echo set_value('logo_2', isset($detail['logo_2']) ? $detail['logo_2'] : ''); ?>" 
				placeholder="logo_2 website" 
				id="logo_2" 
				class="form-control" style="padding:0; margin:0;">
			<span class="help-block"><?php echo form_error('logo_2'); ?></span>
		</div>
	</div>
	<!-- google_analytic -->
	<div class="form-group">
		<label for="google_analytic" class="col-sm-2 control-label">
			google_analytic
		</label>
		<div class="col-sm-10">
			<textarea name="google_analytic" placeholder="google_analytic" id="google_analytic" class="form-control"><?php 
			echo set_value('google_analytic', isset($detail['google_analytic']) ? $detail['google_analytic'] : ''); 
			?></textarea>
			<span class="help-block"><?php echo form_error('google_analytic'); ?></span>
		</div>
	</div>
	<!-- meta_description -->
	<div class="form-group">
		<label for="meta_description" class="col-sm-2 control-label">
			meta_description
		</label>
		<div class="col-sm-10">
			<textarea name="meta_description" placeholder="meta_description" id="meta_description" class="form-control"><?php 
			echo set_value('meta_description', isset($detail['meta_description']) ? $detail['meta_description'] : ''); 
			?></textarea>
			<span class="help-block"><?php echo form_error('meta_description'); ?></span>
		</div>
	</div>
	<!-- meta_keyword -->
	<div class="form-group">
		<label for="meta_keyword" class="col-sm-2 control-label">
			meta_keyword
		</label>
		<div class="col-sm-10">
			<textarea name="meta_keyword" placeholder="meta_keyword" id="meta_keyword" class="form-control"><?php 
			echo set_value('meta_keyword', isset($detail['meta_keyword']) ? $detail['meta_keyword'] : ''); 
			?></textarea>
			<span class="help-block"><?php echo form_error('meta_keyword'); ?></span>
		</div>
	</div>
	<!-- meta_author -->
	<div class="form-group">
		<label for="meta_author" class="col-sm-2 control-label">
			meta_author
		</label>
		<div class="col-sm-10">
			<input type="text" name="meta_author" 
				value="<?php echo set_value('meta_author', isset($detail['meta_author']) ? $detail['meta_author'] : ''); ?>" 
				placeholder="meta_author" 
				id="meta_author" 
				class="form-control">
			<span class="help-block"><?php echo form_error('meta_author'); ?></span>
		</div>
	</div>
	<!-- address -->
	<div class="form-group">
		<label for="address" class="col-sm-2 control-label">
			address
		</label>
		<div class="col-sm-10">
			<textarea name="address" placeholder="address" id="address" class="form-control"><?php 
			echo set_value('address', isset($detail['address']) ? $detail['address'] : ''); 
			?></textarea>
			<span class="help-block"><?php echo form_error('address'); ?></span>
		</div>
	</div>
	<!-- phone -->
	<div class="form-group">
		<label for="nama" class="col-sm-2 control-label">
			phone
		</label>
		<div class="col-sm-10">
			<input type="text" name="phone" 
				value="<?php echo set_value('phone', isset($detail['phone']) ? $detail['phone'] : ''); ?>" 
				placeholder="phone" 
				id="phone" 
				class="form-control">
			<span class="help-block"><?php echo form_error('phone'); ?></span>
		</div>
	</div>
	<!-- zendesk -->
	<div class="form-group">
		<label for="zendesk" class="col-sm-2 control-label">
			zendesk
		</label>
		<div class="col-sm-10">
			<textarea name="zendesk" placeholder="zendesk" id="zendesk" class="form-control"><?php 
			echo set_value('zendesk', isset($detail['zendesk']) ? $detail['zendesk'] : ''); 
			?></textarea>
			<span class="help-block"><?php echo form_error('zendesk'); ?></span>
		</div>
	</div>
	<!-- meta_robots -->
	<div class="form-group">
		<label for="meta_robots" class="col-sm-2 control-label">
			meta_robots
		</label>
		<div class="col-sm-10">
			<textarea name="meta_robots" placeholder="meta_robots" id="meta_robots" class="form-control"><?php 
			echo set_value('meta_robots', isset($detail['meta_robots']) ? $detail['meta_robots'] : ''); 
			?></textarea>
			<span class="help-block"><?php echo form_error('meta_robots'); ?></span>
		</div>
	</div>
	<!-- submit -->
	<div class="form-group">
		<label for="" class="col-sm-2 control-label"></label>
		<div class="col-sm-10">
			<input type="submit" class="btn btn-info" value="Save">
		</div>
	</div>

	<?php echo form_close(); ?>
	
</div>
</div>