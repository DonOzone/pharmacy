<div class="navigation"><a href="<?php echo $base;?>index.php">Home</a> &rsaquo;&rsaquo; Drug Information</div>
<div class="clear"></div>

<div id="frame" style="display:none;">
</div>

<div id="createaccount_outer">
<div id="refill_outer">

<div >
<div id="createaccount_head">Drug Information Center</div>
<div id="createaccount_line"></div>
<div id="createaccount_desc">Know about the medicines, their use, and other details. The details are given as per the alphabetical order of the medicines. When you click one alphabet, you will reach the detailed page of drugs which start with that particular letter.</div>
</div>

<div id="drug_outer">
<div id="alphabet_outer">

<div id="alpha_left">
<div id="alpha_inner">
<div class="alpha_head">Browse alphabetically</div>
<div class="clear"></div>
<div class="alpha_outer">
<?php foreach(range('a','z') as $i) 
 { ?><div class="alphabet"><a href="<?php echo $base;?>index.php/drugs/alphadrug/<?php echo $i;?>"><?php echo $i;?></a></div>
<?php

}?>

</div>
</div>
</div>

<div id="alpha_right">
	<div id="alpha_rightinner">
		<div class="alpha_head">Search Drug name</div>
		<form action="<?php echo $base;?>index.php/drugs/search" method="post">
			<div id="drugtext_outer">			
  				<input type="text" name="drug" id="drug" class="drugtextarea" value="drug name" onblur="if (this.value==''){ this.value='drug name'; }" onfocus="if (this.value=='drug name') { this.value=''; }" />
			</div>
			<div id="drug_btn"><input type="submit" name="submit" id="submit" value="Search" class="button1" /></div>
		</form>
		
		<div class="alpha_head">Check Drug Interaction</div>
		<form action="<?php echo $base;?>index.php/drugs/druginformation" method="post">
			<div id="drugtext_outer">			
  				<input type="text" name="drugname" id="drugname" class="drugtextarea" value="drug name" onblur="if (this.value==''){ this.value='drug name'; }" onfocus="if (this.value=='drug name') { this.value=''; }" />
  			</div>
			<div id="drug_btn">
				<input type="submit" id="searchBtn" name="searchBtn" value="Search" class="button1" />
				<input type="hidden" id="interaction" name="interaction" value=""/>
			</div>
		</form>
	</div>
	</div>
</div>

<div id="scroll_druginformation">
<h2> Most commonly referenced drugs</h2>
<ul>

    <?php
foreach($drugs->result() as $drug)
{  
?><li>
	<a href="<?php echo $base;?>index.php/drugs/dosage/<?php echo $drug->drugsid?>"><?php echo $drug->medication; ?></a>
	 
	 </li>
	
	
 
 <?php  	  
} ?>
</ul>
</div>



<br />
</div>
   
 


 <div id="shop_right">
 <div id="shop_righthead">Shop by category</div>
 <div class="clear"></div>
<?php 
 if(!empty($category))
 {
	 $cat_no=$category->num_rows();	
	 $cat=$category->result(); 
	 $sh=1;
?>
	 <div>
<?php
	 for($i=0;$i<11;$i++)
	 {
?>
		<div class="shop_line"></div>
		<div class="category">
			<div class="icon7"></div>
			<a href="<?php echo $base;?>index.php/onlineshop/index/<?php echo $cat[$i]->id;?>/0/#<?php echo $cat[$i]->id;?>"><?php echo $cat[$i]->category;?></a>
		</div>		  
<?php
	 }
?>
	 <a href="" id="p<?php echo $sh;?>-show" class="showLink" onclick="showHide('p<?php echo $sh;?>');return false;"><pre> Show more...</pre></a></p>
	 </div>
	 <div id="p<?php echo $sh;?>" class="show_hide"  style="display:none;">
		<div>
<?php	
		for($i=11;$i<$cat_no;$i++)
		{
?>
			<div class="shop_line"></div>
			<div class="category">
				<div class="icon7"></div>
				<a href="<?php echo $base;?>index.php/onlineshop/index/<?php echo $cat[$i]->id;?>/0/#<?php echo $cat[$i]->id;?>"><?php echo $cat[$i]->category;?></a>
			</div>		  
<?php
		}
?>
		</div>
		<p><a href="" id="p<?php echo $sh;?>-hide" class="hideLink" onclick="showHide('p<?php echo $sh;?>');return false;"><pre> Hide</pre></a></p>
	 </div>
	 
<?php
	 $sh++;
 }  
?>
<div class="right_addspace"></div>
 
 </div>
</div>

</div>

<div class="clear"></div>


</div>
<style type="text/css">
   
   /* This CSS is used for the Show/Hide functionality. */
   .show_hide {
      display: none;
	  height:auto;
	  
	  }
   a.showLink, a.hideLink {
   width:100px;
      text-decoration: none;
	  font-size:13px;
      color: #c8070d;
      padding-left: 8px;
	  float:right;
      background: transparent url(<?php echo $base.'images/';?>down.gif) no-repeat left; }
   a.hideLink {
   height:auto;
      background: transparent url(<?php echo $base.'images/';?>up.gif) no-repeat left; }
</style>
<script language="javascript" type="text/javascript">
function showHide(shID) {
   if (document.getElementById(shID)) {
      if (document.getElementById(shID+'-show').style.display != 'none') {
         document.getElementById(shID+'-show').style.display = 'none';
         document.getElementById(shID).style.display = 'block';
      }
      else {
         document.getElementById(shID+'-show').style.display = 'inline';
         document.getElementById(shID).style.display = 'none';
      }
   }
}
</script>
