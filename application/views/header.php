<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MAIN STREET PHARMACY</title>

<?php 
	if(!empty($extra))
	{
		print_r($extra);
	}
?>

<!-- ##################CSS#################-->

<link href="<?php echo $base;?>css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $base;?>css/jMask.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $base;?>css/calendar.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $base;?>css/SpryTabbedPanels.css" rel="stylesheet" type="text/css"/>


<script type="text/javascript" src="<?php echo $base;?>js/slidegallery.js"></script>
<script type="text/javascript" src="<?php echo $base;?>js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="<?php echo $base;?>js/jquery.easing.1.2.js"></script>
<script type="text/javascript" src="<?php echo $base;?>js/jquery.movingboxes.js"></script>
<script type="text/javascript" src="<?php echo $base;?>js/jquery.movingboxes.min.js"></script>
<script type="text/javascript" src="<?php echo $base;?>js/SpryTabbedPanels.js"  ></script>
<script type="text/javascript" src="<?php echo $base;?>js/jquery.sheepItPlugin.js"></script>
<script type="text/javascript" src="<?php echo $base;?>js/jMask.js"></script>
<script type="text/javascript" src="<?php echo $base;?>js/cufon-yui.js"></script>
<script type="text/javascript" src="<?php echo $base;?>js/raphael-min.js"  ></script>
<script type="text/javascript" src="<?php echo $base;?>js/custom.js"  ></script>
<script type="text/javascript" src="<?php echo $base;?>js/common.js"  ></script>
<script type="text/javascript" src="<?php echo $base;?>js/calendar.js"  ></script>
<script type="text/javascript" src="<?php echo $base;?>js/jquery.validate.js"></script>
<!--

<script type="text/javascript" src="<?php //echo $base;?>js/jquery.js"></script>
<script type="text/javascript" src="<?php //echo $base;?>js/slider.js"></script>

<script type="text/javascript" src="<?php //echo $base;?>js/slidegallery.js"></script>
<script type="text/javascript" src="<?php //echo $base;?>js/jquery.jcarousel.min.js"></script>



<script type="text/javascript" src="<?php //echo $base;?>js/jquery.min.js"></script>-->



<!--script type="text/javascript" src="<?php //echo $base;?>js/jquery.easing.1.2.js"></script>
<script type="text/javascript" src="<?php //echo $base;?>js/jquery.movingboxes.js"></script>
<script type="text/javascript" src="<?php //echo $base;?>js/jquery.movingboxes.min.js"></script>
<script type="text/javascript" src="<?php //echo $base;?>js/SpryTabbedPanels.js"  ></script>-->


<!--<script type="text/javascript" src="<?php //echo $base;?>js/jquery-1.4.2.js"></script>
<script type="text/javascript" src="<?php //echo $base;?>js/jquery-1.4.2.min.js" ></script>-->


<!--<script type="text/javascript" src="<?php //echo $base;?>js/jquery.sheepItPlugin.js"></script>
<script type="text/javascript" src="<?php //echo $base;?>js/jMask.js"></script>
<script type="text/javascript" src="<?php //echo $base;?>js/cufon-yui.js"></script>
<script type="text/javascript" src="<?php //echo $base;?>js/raphael-min.js"  ></script>
<script type="text/javascript" src="<?php //echo $base;?>js/custom.js"  ></script>
<script type="text/javascript" src="<?php //echo $base;?>js/common.js"  ></script>
<script type="text/javascript" src="<?php //echo $base;?>js/calendar.js"  ></script>
<script type="text/javascript" src="<?php //echo $base;?>js/jquery.validate.js"></script>
-->




<script type="text/javascript">
	//jQuery(document).ready(function(){
	$(document).ready(function(){
		$("#hide").click(function(){
  			$(".login_box").hide();
		});
		$("#show").click(function(){
  			$(".login_box").show();
		});
	});

	</script>
<script type="text/javascript">
function add()
{
	var a=1;
	var b=parseInt(document.getElementById('num').value);  
	document.getElementById('num').value=a+b;
}

function minus()
{
	var a=1;
	var b=parseInt(document.getElementById('num').value);  
	document.getElementById('num').value=b-a;
}

</script>

<script type="text/javascript">

$(document).ready(function() {

	//Default Action
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content
	
	//On Click Event
	$("ul.tabs li").click(function() {
		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content
		var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active content
		return false;
	});

});
function form_submit()
{
	document.forms["outsearch"].submit();
}
</script>


</head>
<?php $this->form_validation->set_error_delimiters('<div class="error">', '</div>'); ?>
<body>
<div>
<div id="main">
<div id="header">

<div id="top">
<?php  if($this->session->userdata('memberid')==""){?>
<div id="login">

<a href="#" id="show">Login</a></div>

<?php }?>
<div class="login_box">
<div class="login_inner">
<form action="<?php echo $base;?>index.php/home/signin" method="post">
<Div class="sign_in_form1">
<input name="email" id="email" type="text" class="sign_in_textarea" value="E-mail id" onblur="if (this.value=='') { this.value='E-mail id'; }" onfocus="if (this.value=='E-mail id') { this.value=''; }" />
</Div>

<Div class="sign_in_form1">
<input name="password"  type="password" class="sign_in_textarea" value="Password" onblur="if (this.value=='') { this.value='Password'; }" onfocus="if (this.value=='Password') { this.value=''; }" />
</Div>

<div class="keepme"> 
<div class="signin_top"><input type="submit" name="button" id="button" value="Sign In" class="button" />
</div>
<div class="clear"></div>
<div class="forgot_signin"><a href="<?php echo $base;?>index.php/home/forgotpassword" class="linkstyle">Forgot password</a></div>   
<div class="forgot_signin"><a href="<?php echo $base;?>index.php/home/createaccount" class="linkstyle">Register</a></div>  
</div>

<a href="#" id="hide" class="close"></a>
</form>

</div>
</div>
</div>
<div class="logo"></div>
<div id="logo-tag"><h1><a href="<?php echo $base;?>index.php"></a></h1>





</div>

<div id="right_links">

<div id="toplinks">
<div class="innertoplinks"><a href="<?php echo $base;?>index.php/home/view_all_comments">Feedback</a></div>
<div class="topline"></div>
<div class="innertoplinks"><a href="<?php echo $base;?>index.php/home/store_locator">Store Locator</a></div>
<div class="topline"></div>
<div class="innertoplinks"><a href="<?php echo $base;?>index.php/onlineshop/viewcart">Shopping Cart</a></div>
</div>

<form name="outsearch" id="outsearch" action="<?php echo $base;?>index.php/home/external_search/" method="post">
<div id="outersearch">

<div id="search">

<input type="text" name="search_field" id="search_field" class="textarea" onblur="if(this.value==''){ this.value='search our products';}" onfocus="if(this.value=='search our products'){this.value='';}" value="<?php if(!empty($search)==TRUE){ echo set_value('search_field',$search);}?>"/> <?php echo form_error('search_field');?>      
</div>

<a href="#"><div id="searchbtn" onclick="javascript:form_submit()"></div></a></div>
</form>
</div>
</div>


  
  
  
<div id="nav">
	<ul>
    	<li class="link01"><a href="<?php echo $base;?>index.php" <?php if($menu=="" || $menu=="index") { ?> class="active_nav" <?php } ?>></a></li>
        <li class="link02"><a href="<?php echo $base;?>index.php/services" <?php if($menu=="services") { ?> class="active_nav" <?php } ?>></a></li>
        <li class="link03">
				<?php if($this->session->userdata('memberid')!="")
					{ ?>
					<a href="<?php echo $base;?>index.php/prescription/refillprescription" <?php if($menu=="refill") { ?> class="active_nav" <?php } ?>></a>
					<?php } else {
						?>
					<a href="<?php echo $base;?>index.php/home/signin" <?php if($menu=="refill") { ?> class="active_nav" <?php } ?>></a>

						<?php } ?>
        		
                   	<ul class="subnav">
                    <li>
					<?php if($this->session->userdata('memberid')!="")
					{ ?>
					<a href="<?php echo $base;?>index.php/prescription/refillprescription">Refill prescription</a>
					<?php } else {
						?>
					<a href="<?php echo $base;?>index.php/home/signin">Refill prescription</a>

						<?php } ?>
					</li>
                    <li>
					<?php if($this->session->userdata('memberid')!="")
					{ ?>
					<a href="<?php echo $base;?>index.php/prescription/transferprescription">Transfer prescription</a>
					<?php } else { ?>
				   <a href="<?php echo $base;?>index.php/home/signin">Transfer prescription</a>

					<?php } ?>
					</li>
                    <li><a href="<?php echo $base;?>index.php/prescription/presrequest">New prescription</a></li>
                </ul>
        </li>
        <li class="link04"><a href="<?php echo $base;?>index.php/drugs/druginformation"  <?php if($menu=="drug") { ?> class="active_nav" <?php } ?>></a></li>
        <li class="link05"><a href="<?php echo $base;?>index.php/onlineshop" <?php if($menu=="online") { ?> class="active_nav" <?php } ?>></a></li>
       <?php if($this->session->userdata('memberid')!="")
					{ ?>
        <li class="link06"><a href="<?php echo $base;?>index.php/myaccount_controller/account_details" <?php if($menu=="myaccount") { ?> class="active_nav" <?php } ?>></a></li>
			<?php } 
				else
				{
			?>
			  <li class="link06"><a href="<?php echo $base;?>index.php/home/signin"></a></li>
			  <?php }?>
        <li class="link07"><a href="<?php echo $base;?>index.php/lifestyle"<?php if($menu=="lifestyle") { ?> class="active_nav" <?php } ?>></a></li>
        <li class="link08"><a href="<?php echo $base;?>index.php/healthinfo/healthinformation"<?php if($menu=="info") { ?> class="active_nav" <?php } ?> ></a>
        <ul class="subnav" >
                   <li><a href="<?php echo $base;?>index.php/healthinfo/healthinformation"<?php if($menu=="info") { ?> class="active_nav" <?php } ?> >Health Information</a></li>
                   <li><a href="<?php echo $base;?>index.php/consultation"<?php if($menu=="info") { ?> class="active_nav" <?php } ?> >Consultation Corner</a></li>
                
        </ul>
        </li>
        <li class="link09"><a href="" ></a></li>
    </ul>
    
  </div>
 
 <div class="sub_toplink" style="z-index:2;">
	<div class="list_h">
	
	<?php  
	if(!empty($submenu)==TRUE)
	{
	foreach($submenu as $submenu1)
	{
		?>
	<a href="<?php echo $base;?>index.php/onlineshop/index/<?php echo $submenu1['id'];?>/0/#<?php echo $submenu1['id'];?>"><?php echo $submenu1['category'];?></a> 
	<?php }
	}?>
    	
        
        <a href="<?php echo $base;?>index.php/onlineshop" style="border-right:none">View all </a></div>	
</div>
<?php if($this->session->userdata('name')!="") { 
	foreach($cart_count as $cart_count1)
	{
?>
<div id="myaccount_name">
<div class="myaccount_name01"><a href="<?php echo $base;?>index.php/home/signout" class="linkstyle" >Sign out</a></div>

<div class="myaccount_name01"><a href="<?php echo $base;?>index.php/myaccount_controller/account_details" class="linkstyle" >My account</a></div>

<div class="myaccount_name01">
<a href="#" class="linkstyle" >Subtotal:</a>
<?php
if(!empty($total)==TRUE)
{
foreach($total as $tot){?>
<?php echo intval($tot->grandtotal);?>
<?php }}
else
{
echo "0";}?>
</div>

<div class="myaccount_name01"><a href="#" class="linkstyle">Items:</a><?php echo intval($cart_count1->noofitems);?></div>

<div class="myaccount_name01"><a href="<?php echo $base;?>index.php/onlineshop/viewcart" class="linkstyle">Shopping cart</a><div class="myaccount_icon"></div></div>

<div class="myaccount_name01"><a href="#" class="linkstyle">My list</a></div>

<div class="myaccount_name01">Welcome <?php echo $this->session->userdata('name');?></div>

	
</div>
<?php }} ?>
