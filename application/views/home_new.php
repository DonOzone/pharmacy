<script>
	function report()
	{
		alert("Your request is posted succefully!!!");
	}
</script>

<div class="clear"></div>
<div id="middileside">
<div id="highlight_tabs">
<div class="tab">
<div class="tab_img"><a href="#"><img src="<?php echo $base;?>images/rx.jpg" alt="img" /></a></div>
<div class="tab_text">
<div class="tab_text2"><a href="<?php echo $base;?>index.php/prescription/refillprescription">Refill Prescription</a></div>
<div class="tab_text3">Prescription Information</div>
</div>
</div>

<div class="dotlines"></div>

<div class="tab">
<div class="tab_img"><a href="#"><img src="<?php echo $base;?>images/transfer.jpg" alt="img" /></a></div>
<div class="tab_text">
<div class="tab_text2"><a href="<?php echo $base;?>index.php/prescription/transferprescription">Transfer Prescription</a></div>
<div class="tab_text3">Prescription Information</div>
</div>
</div>
<div class="dotlines"></div>

<div class="tab">
<div class="tab_img"><a href="#"><img src="<?php echo $base;?>images/consultation.jpg" alt="img" /></a></div>
<div class="tab_text">
<div class="tab_text2"><a href="<?php echo $base;?>index.php/healthinfo/comming_soon">Consultation Corner</a></div>
<div class="tab_text3">Prescription Information</div>
</div>
</div>
<div class="dotlines"></div>

<div class="tab">
	<div class="tab_img"><a href="#"><img src="<?php echo $base;?>images/healthinfo.jpg" alt="img" /></a></div>
	<div class="tab_text">
		<div class="tab_text2"><a href="<?php echo $base;?>index.php/healthinfo/comming_soon">Health Information Center</a></div>
		<div class="tab_text3">Prescription Information</div>
</div>
</div>
</div>


<div id="container">
	<div id="outerblock">
		<div id="innerblock">
		  <div id="slideshow">
   			<div>
    	<ul>
    	 <li><img src="<?php echo $base;?>images/img/im10.jpg" /></li>
         <li><img src="<?php echo $base;?>images/img/im7.jpg"/></li>
         <li><img src="<?php echo $base;?>images/img/im6.jpg"/></li>
         <li><img src="<?php echo $base;?>images/img/im5.jpg"/></li>
         <li><img src="<?php echo $base;?>images/img/im4.jpg"/></li>
         <li><img src="<?php echo $base;?>images/img/im3.jpg"/></li>
         <li><img src="<?php echo $base;?>images/img/im2.jpg"/></li>
         <li><img src="<?php echo $base;?>images/img/im1.jpg"/></li>

<li></li>
</ul>
    	</div>
    	</div>
<!--<span id="ribbon-left"></span>-->
		</div>
		<div id="frame"></div>
	</div>
</div>

</div>

<div class="clear"></div>
<!--midside-->
<div id="middileside2">
  <p>&nbsp;</p> 
  <!--left row-->
  
<div class="left_contain">
	<div class="sicknes_awares heart_add">
    	<h2>Make Your Whole Heart Happy</h2>
        <p>Acqire a Healthy heart. Make your Heart to be proud of a fit body </p>
        <a href="<?php echo $base;?>index.php/healthinfo/comming_soon" style="text-decoration:none;">Read more </a>
    </div> 
    <div class="sicknes_awares diabeticsadd">
    	<h2>Doing a Number on Diabetics?</h2>
        <p>Acqire a Healthy heart. Make your Heart to be proud of a fit body </p>
        <a href="<?php echo $base;?>index.php/healthinfo/comming_soon" style="text-decoration:none;">Read more </a>
    </div> 
    <div class="sicknes_awares lifebalance_aware">
    	<h2>Work and Life Balance Assessment</h2>
        <p>Acqire a Healthy heart. Make your Heart to be proud of a fit body </p>
        <a href="<?php echo $base;?>index.php/healthinfo/comming_soon" style="text-decoration:none;">Read more </a>
    </div> 
    
  <!--sickness add end-->  

  
<div class="newproducts_outer">
	<img src="<?php echo $base;?>images/newproducts_outerbullet.jpg" />
    <h2 class="test">New Products</h2>
    <span><a href="<?php echo $base;?>index.php/home/viewmore_newproducts/"> View More</a></span>
    
</div> 

<!--<script type="text/javascript" src="<?php echo $base;?>js/jquery.jcarousel.min.js"></script>-->
<div class="newproducts_lightbox">
	<div class="leftbutton" id='prev'></div>
	<div class="rghtbutton" id='nex'></div>
	<div id='galeryslider1' style="width:659px; position:absolute; overflow-x: hidden; overflow-y: hidden; z-index:10; left: 60px; height:152px;margin-left:30px;" >
       <div class="products_scrol_area">
          <ul >
          <?php foreach($pr_image as $pr_image1)
          {?>
          <li><a href="<?php echo $base;?>index.php/onlineshop/items/<?php echo $pr_image1->hamcode;?>"><img src="<?php echo $base;?>images/products/<?php echo $pr_image1->hamcode.".Jpg"?>"/></a><div style="margin-left:px;"><a href="#"><b>$150</b> 0ff</a><br /><?php echo $pr_image1->description;?></div></li>
          <?php }?>
            <!--<li><a href=""> <img src="<?php echo $base;?>images/img1.jpg" /></a> <a href="#"><b>$150</b> 0ff</a><br />Loreal skin products</li>
            <li> <a href="#"><img src="<?php echo $base;?>images/img2.jpg" /> </a> <a href="#"><b>20%</b> 0ff</a><br />Loreal skin products</li>
            <li> <a href="#"><img src="<?php echo $base;?>images/img3.jpg" /></a> <a href="#"><b>25%</b> 0ff</a><br />Loreal skin products</li>
            <li> <a href="#"><img src="<?php echo $base;?>images/img4.jpg" /></a> <a href="#"><b>25%</b> 0ff</a><br />Loreal skin products</li>
            <li> <a href="#"><img src="<?php echo $base;?>images/img5.jpg" /></a> <a href="#"><b>10%</b> 0ff</a><br /> Loreal skin</li>-->
           </ul>
        </div>
	</div>
</div>

<div class="newproducts_outer">
	<img src="images/newproducts_outerbullet.jpg" />
    <h2 class="test">Shop by Brand</h2>
    <span><a href="#"> View More</a></span>
    
</div>

<div class="branddiv">
	<ul>
	<li> <a href=""> <img src="<?php echo $base;?>images/brand1.jpg" /></a> </li>
    <li> <a href=""> <img src="<?php echo $base;?>images/brand2.jpg" /></a> </li>
    <li> <a href=""> <img src="<?php echo $base;?>images/brand3.jpg" /></a> </li>
    <li> <a href=""> <img src="<?php echo $base;?>images/brand4.jpg" /></a> </li>
    <li> <a href=""> <img src="<?php echo $base;?>images/brand5.jpg" /></a> </li>
    <li> <a href=""> <img src="<?php echo $base;?>images/brand6.jpg" /></a> </li>
    <li> <a href=""> <img src="<?php echo $base;?>images/brand7.jpg" /></a> </li>
    <li> <a href=""> <img src="<?php echo $base;?>images/brand8.jpg" /></a> </li>
    </ul>
</div>




<div class="leftdown">
<form name="newsletter_sub" id="newsletter_sub" method="POST" action="<?php echo $base;?>index.php">
	<img src="<?php echo $base;?>images/leftdownadd.jpg" />
    <div class="factsdiv">
    <h2> <b>Get the facts</b></h2>
    <p>Special offers, Medication offers and more in your inbox</p>
    <input name="email" id="email" type="text" value=""/ style="width:125px; margin-left:10px;"> 
	
   <!-- <div style="visibility:hidden;border:1px #FF0000 medium;" id="messagediv" name="messagediv"><p>Thank U for downloading our news letter</p></div>-->
    <input type="submit" class="factsbutton" value="Submit" name="sub_btn" id="sub_btn"/>
    <?php echo form_error('email');?>
    
    </div>
   </form>
</div>





</div>
<!--left row end-->
  <script type="text/javascript"> 
  	    $(document).ready(function() { 

	      $("#home").validate(); 
	    }); 
	  </script> 
<form name="home" id="home" method="post" action="<?php echo $base;?>index.php/prescription/instant_refills/"  onsubmit="javascript:report();">
<div class="right_contain">
	<div class="signindiv"> 
    	<div class="signinlogo"></div>
        <h1>Instant refills</h1>
        <p>Store name<span> *</span><br />

        <input name="st_no" id="st_no" type="text" class="required"/></p>
        <?php //echo form_error('drugname'); ?>
        <p>Rx Number<span> *</span><br />
        <input name="rxnumber" id="rxnumber" type="text" class="required"/>
        </p>
        <?php //echo form_error('rxnumber'); ?>
        <input type="submit" class="factsbutton1" value="Submit" name="sub_btn" id="sub_btn" style="width:75px; margin-left:142px;"/>
        <p style="padding-bottom:0px;"><b>For Rx Management registered users</b></p>
        
        <div class="signinbot"><a href="<?php echo $base;?>index.php/home/signin">Sign in </a> <a href="<?php echo $base;?>index.php/home/createaccount">Register now</a> </div>
    
    </div>
    <div id="results"></div>
    </form>
    <div class="rightdivdown">
        <div class="chatdiv">
       	  <p> <a href="http://www.facebook.com/mainstreetpharmacy"><img src="<?php echo $base;?>images/facebook_icon.jpg" /> </a> <a href="http://www.twitter.com/"> <img src="<?php echo $base;?>images/twittericon.jpg" /> </a> <span>  <b> Connect with us</b></span>
          </p>
            <div class="chatwid_pharnacy">
            <?php 
				$atts = array(
			  'width'      => '450',
              'height'     => '300',
              'scrollbars' => 'no',
              'status'     => 'no',
              'resizable'  => 'no',
              'screenx'    => '500',
              'screeny'    => '300'
            );
			$image="<img src=".$base."images/chatwid_pharmacy.jpg>";
			echo anchor_popup($base.'chat/client.php',$image, $atts);
            ?>
            <!--<a href="<?php //echo $base;?>chat/client.php" target="_blank"> <img src="<?php //echo $base;?>images/chatwid_pharmacy.jpg" /> </a> --></div>
        </div>
        <div class="disclaimer">
        	<h3>Disclaimer </h3>
            <p> The information provided on this website does not replace medical advice.<br /> If you want to find out more or worried about any medical issue or symptoms that you may be experiancing please contact your local Main Street Pharmacy or personal doctor.</p>
        </div>
    </div>
    
</div>







</div>

    
    
    </div>
    </div>
</div>

</div>
<!--midside_end-->
</div>

</div>
<?php if($val==1)

{?>
<script type="text/javascript">
	alert("Thank U For Downloading Our News Letter");
</script>
<?php 
}
?>
<script type="text/javascript"> 
$("#galeryslider1").jCarouselLite({
     btnPrev: '#prev',
        btnNext: '#nex', 
        mouseWheel: false,
        auto: false,

        speed: 500,
        easing: false, 
        vertical: false,
        circular: true,
        visible: 5,
        start: 0,
        scroll: 1
  }); 
  </script>
