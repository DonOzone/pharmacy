<script type="text/javascript">

$(document).ready(function() {
     
    var sheepItForm = $('#sheepItForm').sheepIt({
        separator: '',
        allowRemoveLast: true,
        allowRemoveCurrent: true,
        allowRemoveAll: true,
        allowAdd: true,
        allowAddN: true,
        maxFormsCount: 10,
        minFormsCount: 1,
        iniFormsCount: 1
    });
 
});

</script>
<style>

a {
    text-decoration:none;
    color:#EC3C3E;
    cursor:pointer;
    font-weight:bold;
}

#sheepItForm_controls div, #sheepItForm_controls div input {
    float:left;    
    margin-right: 10px;
}


</style>

<td style="padding-top: 20px;" id="right-bg" align="LEFT" valign="top" width="1207">
	<form id="frmcat" name="frmcat" method="post" action="<?php echo $base;?>admin.php/home/add_pharmacy">
		<table class="table" border="0" cellpadding="0" cellspacing="0" width="90%">
			<tbody>
				<tr>
					<td class="titles">Add Pharmacy</td>
					</tr>
					<tr><td align="center" height="10"><font color="#ff0000"></font></td></tr>
					<tr><td valign="top"><table border="0" cellpadding="0" cellspacing="0" height="35" width="100%"><tbody></tbody></table></td></tr>
					<tr><td align="center"><font color="#ff0000"></font></td></tr>
					<tr>
					<td valign="top">
						<table id="table-1" align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
							<tbody>
								<tr class="nodrag nodrop" style="background-color: rgb(184, 184, 185);"><td align="right" width="0%"></td></tr>
								
								<tr style="cursor: move;" class="td2" id="45"></tr>
								<tr style="cursor: move;" class="td2" id="44">
									<td>Pharmacy Number<span class="red">*</span></td>
									<td>
										<input name="phno" id="phno" type="text" class="textarea" value="<?php echo set_value('phno');?>"><?php echo form_error('phno'); ?>
									</td>
								</tr>
								<tr style="cursor: move;" class="td2" id="44">
									<td>Name<span class="red">*</span></td>
									<td>
										<input name="name" id="name" type="text" class="textarea" value="<?php echo set_value('name');?>"><?php echo form_error('name'); ?>
									</td>
								</tr>
								
								<tr style="cursor: move;" class="td2" id="41"></tr>
								<tr style="cursor: move;" class="td2" id="43">
									<td>Address<span class="red">*</span></td>
									<td width="82%">
										<label>
											<textarea name="address" cols="" id="address" class="textarea" rows=""><?php echo set_value('address');?></textarea>
										</label><?php echo form_error('address'); ?>
									</td>
								</tr>

								<tr style="cursor: move;" class="td2" id="44">
									<td>Phone Number</td>
									<td>
										<input type="text" name="phonenumber1" id="phonenumber1" class="createaccount_textarea" value="<?php echo set_value('phonenumber1');?>"/> 
										<br/>
										<input type="text" name="phonenumber2" id="phonenumber2" class="createaccount_textarea" value="<?php echo set_value('phonenumber2');?>"/> 
										<br/>
										<input type="text" name="phonenumber3" id="phonenumber3" class="createaccount_textarea" value="<?php echo set_value('phonenumber3');?>"/> 
									</td>									
								</tr>

								<tr style="cursor: move;" class="td2" id="44">
									<td>Email<span class="red">*</span></td>
									<td>
										<input name="email" id="email" type="text" class="textarea" value="<?php echo set_value('email');?>"><?php echo form_error('email'); ?>
									</td>
								</tr>

								<tr style="cursor: move;" class="td2" id="43">
									<td>City<span class="red">*</span></td>
									<td width="82%">
										<input name="city" id="city" type="text" class="textarea" value="<?php echo set_value('city');?>"><?php echo form_error('city'); ?>
									</td>
								</tr>

								<tr style="cursor: move;" class="td2" id="43">
									<td>State<span class="red">*</span></td>
									<td width="82%">
										<input name="state" id="state" type="text" class="textarea" value="<?php echo set_value('state');?>"><?php echo form_error('state'); ?>
									</td>
								</tr>
								
								<tr style="cursor: move;" class="td2" id="43">
									<td>Latitude<span class="red">*</span></td>
									<td width="82%">
										<input name="latitude" id="latitude" type="text" class="textarea" value="<?php echo set_value('latitude');?>"><?php echo form_error('latitude'); ?>
									</td>
								</tr>
								
								<tr style="cursor: move;" class="td2" id="43">
									<td>Longitude<span class="red">*</span></td>
									<td width="82%">
										<input name="longitude" id="longitude" type="text" class="textarea" value="<?php echo set_value('longitude');?>"><?php echo form_error('longitude'); ?>
									</td>
								</tr>
								
								<tr style="cursor: move;" class="td2" id="43"></tr>
								<tr style="cursor: move;" class="td2" id="43">
									<td>&nbsp;</td>
									<td><label><input type="submit" name="submit" id="" class="button" value="Submit" /></label></td>
								</tr>
								
								<tr class="nodrag nodrop"><td width="0%" colspan="2" valign="bottom" style="text-align: left;"><br /></td></tr>
							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
</td>
</tr>


