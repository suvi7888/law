<?php if ($this->session->flashdata('itemFlashData') == 'insertGagal'){ ?>
<div class="alert alert-block alert-danger fade in">
	<button data-dismiss="alert" class="close" type="button">x</button>
	<h4 class="alert-heading margin-bottom-10"><i class="ti-close"></i> Error!</h4>
	<p><?php echo validation_errors(); ?></p>
</div>
<?php } ?>

<h1>Add Office</h1> 

<div class="row">
	<?php echo form_open($action); ?>
	<input type="hidden" name="id_kantor" value="<?php echo set_value('id_kantor', isset($detail['id_kantor']) ? $detail['id_kantor'] : ''); ?>">
	<div class="col-md-12">
		<div class="form-group">
			<label for="kota">
				Group Office
			</label>
			<select class="form-control" name="kantor_grup">
				<option value="">-select-</option>
				<?php foreach($listGrup as $row){ ?>
				<option value="<?php echo $row['id']; ?>" <?php echo @$detail['kantor_grup'] == $row['id'] ? 'selected' : ''; ?>
					><?php echo $row['nama_grup']; ?></option>
				<?php } ?>
			</select>
			<span class="help-block"><?php echo form_error('kantor_grup'); ?></span>
		</div>
		<div class="form-group">
			<label for="kota">
				Kota
			</label>
			<input type="text" name="kota" 
				value="<?php echo set_value('kota', isset($detail['kota']) ? $detail['kota'] : ''); ?>" 
				placeholder="kota" 
				id="kota" 
				class="form-control">
			<span class="help-block"><?php echo form_error('kota'); ?></span>
		</div>
		<div class="form-group">
			<label for="nama_kantor">
				Wilayah Kantor
			</label>
			<input type="text" name="nama_kantor" 
				value="<?php echo set_value('nama_kantor', isset($detail['nama_kantor']) ? $detail['nama_kantor'] : ''); ?>" 
				placeholder="Wilayah Kantor" 
				id="nama_kantor" 
				class="form-control">
			<span class="help-block"><?php echo form_error('nama_kantor'); ?></span>
		</div>
		<div class="form-group">
			<label for="alamat">
				alamat
			</label>
			<textarea name="alamat" 
				placeholder="alamat"
				id="alamat" 
				class="form-control"><?php echo set_value('alamat', isset($detail['alamat']) ? $detail['alamat'] : ''); ?></textarea>
			<span class="help-block"><?php echo form_error('alamat'); ?></span>
		</div>
		<div class="form-group">
			<label for="tlp">
				tlp
			</label>
			<input type="text" name="tlp" 
				value="<?php echo set_value('tlp', isset($detail['tlp']) ? $detail['tlp'] : ''); ?>" 
				placeholder="tlp" 
				id="tlp" 
				class="form-control">
			<span class="help-block"><?php echo form_error('tlp'); ?></span>
		</div>
		<div class="form-group">
			<label for="lat">
				lat
			</label>
			<input type="text" name="lat" 
				value="<?php echo set_value('lat', isset($detail['lat']) ? $detail['lat'] : ''); ?>" 
				placeholder="lat" 
				id="lat" 
				class="form-control">
			<span class="help-block"><?php echo form_error('lat'); ?></span>
		</div>
		<div class="form-group">
			<label for="long">
				long
			</label>
			<input type="text" name="long" 
				value="<?php echo set_value('long', isset($detail['long']) ? $detail['long'] : ''); ?>" 
				placeholder="long" 
				id="long" 
				class="form-control">
			<span class="help-block"><?php echo form_error('long'); ?></span>
		</div>
		
		<div class="form-group">
			<label for="form-field-mask-1">
				Status
			</label>
			<div class="input-group">
				<select name="status" class="form-control">
					<option value="1" <?php echo @$detail['status'] == '1' ? 'selected' : ''; ?>>Aktif</option>
					<option value="0" <?php echo @$detail['status'] == '0' ? 'selected' : ''; ?>>Non-Aktif</option>
				</select>
				<span class="input-group-btn">
					<button class="btn btn-o btn-primary" type="submit">
						Save
					</button>
				</span>
			</div>
		</div>
	</div>
	<?php echo form_close(); ?>
</div>
<div class="row">
	<div class="col-md-12">
		<br><br>
		<fieldset>
			<legend>Check Location</legend>
			<div class="form-group">
				<label for="kota">
					Check Latitude
				</label>
				<input type="text" name="CheckLatitude" placeholder="Check Latitude" id="CheckLatitude" class="form-control">
			</div>
			<div class="form-group">
				<label for="kota">
					Check Longitude
				</label>
				<input type="text" name="CheckLongitude" placeholder="Check Longitude" id="CheckLongitude" class="form-control">
			</div>
			<div class="form-group">
				<input type="button" class="btn btn-o btn-default" id="CheckLocation" value="Check Location">
			</div>
			<?php echo $map['js']; ?>
			<?php echo $map['html']; ?>
		</fieldset>
	</div>
</div>

<script>
$(function () {
	$('#CheckLocation').click(function(){
		for(var i=0; i < markers_map.length; i++){
			markers_map[i].setMap(null);
		}
		
		markers_map = new Array();
		
		latitude = $('#CheckLatitude').val();
		longitude = $('#CheckLongitude').val();
		
		var myLatlng = new google.maps.LatLng(latitude, longitude);
		var myOptions = {
			zoom: 17,
			center: myLatlng,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			// mapTypeId: google.maps.MapTypeId.SATELLITE,
			minZoom: 3
		}
		
		window.map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
		
		
		var marker = new google.maps.Marker({
			map: map,
			position: myLatlng,
			// icon: ""+base_url+"resources/myResources/img/"+d.color.toLowerCase()+".png",
			animation: google.maps.Animation.DROP
		});
		markers_map.push(marker);
		
		google.maps.event.addListener(map, "click", function(event) {
			$('#CheckLatitude').val(event.latLng.lat());
			$('#CheckLongitude').val(event.latLng.lng());
			alert('Lat: ' + event.latLng.lat() + ' | Long:' + event.latLng.lng());
		});
		/*
		// console.log(marker.getPosition());
		lat_longs_map.push(marker.getPosition());
		marker.set('content', '<div>Lokasi</div>');
		google.maps.event.addListener(marker, 'click', function() {
			var content = this.get('content');
			info_window.setContent(content);
			info_window.open(map, this);
		});
		*/
	});
});
</script>
