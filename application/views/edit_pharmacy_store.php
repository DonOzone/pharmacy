<div class="navigation"><a href="<?php echo $base;?>index.php">Home</a> &rsaquo;&rsaquo; <a href="<?php echo $base;?>index.php/myaccount_controller/account_details">My Account</a> &rsaquo;&rsaquo; Pharmacy Store</div>
<div class="clear"></div>
<div id="frame" style="display:none;"></div>
<div id="consultation_outer">
	<div id="refill_outer">
		<?php
			if($this->input->post('submit')!="")
			{
		?>
				<div id="createaccount_head">Pharmacy Store</div>
		<?php
			}
			else
			{
		?>
				<div id="createaccount_head">Edit Pharmacy Store</div>
		<?php
			}
		?>
		<div id="createaccount_line"></div>
		<div id="online_outer">.
			<div id="profile_outer">
				<form name="frm" method="post" action="<?php echo $base.'index.php/myaccount_controller/edit_pharmacy_store/'. $memid.'/'.$id;?>">
					<div id="myaccount_box" style="width:955px;">
						<div id="box_head" style="width:945px;">Store Details</div>
						<div class="storelocator_main" style="width:250px;">
							<div class="store_dtls">
								<select name="pharmacy" id="pharmacy" class="small_select_box02" onChange="javascript:changePhar();">
									<option value="">Select Store</option>
										<?php 
											foreach($pharmacy as $pharmacy_det)
											{
										?>
												<option value="<?php echo $pharmacy_det['id'];?>"<?php if($id == $pharmacy_det['id']){echo "selected=selected";}?>><?php echo $pharmacy_det['pharmacy'];?></option>
										<?php 
											}
										?>
								</select>
							</div>
						</div>
						<?php 
							if(!empty($id))
							{
								//$pharmacy_details=$pharmacydetails->row();
								//print_r($pharmacy_details);
						?>
								<div class="store_address" style="color:#ffffff;background-color:#71CBD2;width:600px;"><b>
						<?php	
									echo "<div style='float:left;'><div style='float:left; width:110px;'>Pharmacy Name: </div><div style='float:left;width:490px;'>".ucwords($pharmacydetails->pharmacy)."</div></div>";
									echo "<div style='float:left;'><div style='float:left; width:110px;'>Address: </div><div style='float:left;width:490px;'>".ucfirst($pharmacydetails->address)."</div></div>";
									echo "<div style='float:left;'><div style='float:left; width:110px;'>Phone Number: </div><div style='float:left;width:490px;'>".$pharmacydetails->phone."</div></div>";
									echo "<div style='float:left;'><div style='float:left; width:110px;'>Email ID: </div><div style='float:left;width:490px;'>".$pharmacydetails->email."</div></div>";
									echo "<div style='float:left;'><div style='float:left; width:110px;'>City: </div><div style='float:left;width:490px;'>".ucwords($pharmacydetails->city)."</div></div>";
									echo "<div style='float:left;'><div style='float:left; width:110px;'>State: </div><div style='float:left;width:490px;'>".ucwords($pharmacydetails->state)."</div></div>";
						?>	
								</b></div>
								<div class="editbtn">
									<input type="submit" name="submit" id="submit" value="Submit" class="editbutton" style="float:right; margin-right:25px; margin-top:15px; margin-bottom:15px;">
									<input type="hidden" name="phar" id="phar" value="<?php print !empty($pharmacydetails->pharmacy)? ($pharmacydetails->pharmacy) : $this->input->post('pharmacy');?>" class="editbutton">
								</div>
						<?php
							}
						?>	
							
						

					</div>
				</form>

			</div>
		</div>
	</div>
</div>

<p>&nbsp;</p>
</div>
<div class="clear">

</div>
<script type="text/JavaScript">
	function changePhar()
	{
		if(document.getElementById('pharmacy').value!=null)
		document.location.href="<?php echo $base;?>index.php/myaccount_controller/edit_pharmacy_store/"+<?php echo $memid;?>+"/"+document.getElementById('pharmacy').value;
	}
</script> 

<!--<div class="clear"></div>
<div id="frame" style="display:none;">
</div>

<div id="consultation_outer">
<div id="refill_outer">
<div id="createaccount_head">Store Locator</div>
<div id="createaccount_line"></div>

	<div id="online_outer">.
      <div id="profile_outer">
    	<div id="myaccount_box" style="width:955px;">
        	<div id="box_head" style="width:945px;">Store Details</div>
            <div class="storelocator_main" style="width:415px;">
           	  <div class="store_dtls"><select name="select" class="small_select_box02">
                      <option>Select Store</option>
                    </select>
           	  </div>
                
                
                </div>
            <div class="store_address"></div>
          </div>
      </div>
    </div>
</div>
</div>
<p>&nbsp;</p>
</div>
<div class="clear">
                
                </div>-->
