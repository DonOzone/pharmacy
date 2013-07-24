<?php
class Home_model extends CI_Model  {
//memberid 	firstname 	lastname 	email 	phone 	mobile 	address 	country
    var $firstname   = '';//must
    var $lastname = '';
    var $email    = '';//must
    var $screen_name    = '';//must
    var $password    = '';//must
    var $phone    = '';
    var $mobile    = '';
    var $address    = '';//must
    var $country    = '';
    var $zip    = '';
    var $memstatus    = '';//must
    var $hash    = '';
    var $source    = '';
    	

   var $member = array ("firstname"  => "","lastname" => "",
    
    "email"   => "","screen_name"   => "",
    "email"   => "",
    "password"   => "",
    "phone"   => "",
    "mobile"   => "",
    "address"   => "",
    "country"   => "",
    "zip"   => "",
    "memstatus"   => "",
    "hash"   =>"",
    "source"   =>""
    
    );      

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    /* ---------- Common functions ----------------- */
	
	function insertquery($insert,$table)
	{		
		$data['ins']=$this->db->insert($table, $insert); 
		//$data['ins_id']=$this->db->insert_id();	
		return $data;
	}
	
	function viewquery($table,$id,$field)
	{		
		return $query = $this->db->get_where($table, array($field => $id));		
	}
	
	function updatequery($table,$id,$field,$insert)
	{		
		return $this->db->update($table, $insert, array($field => $id));	
	}
	function deletequery($table,$id,$field)
	{		
		return $this->db->delete($table, array($field => $id)); 
	}	
	function lastid($table,$field)
	{		
		 $this->db->select_max($field);
         $query=$this->db->get($table);
		
		
		return $query->result();		
	}
	/*******************    prescription    *********************/
	
	
	function drugid($string)
	{
		
		$query="select * from  drug where medication='".$string."'";
		$result= $this->db->query($query);
		return($result);		
	}

 	function refill($tablename,$update_data,$id,$rxno)
    	{
		$this->db->insert($tablename,$update_data);
		//$this->db->update($tablename,$update_data,array('memberid'=>$id,'prescriptionno'=>$rxno));
		return true;
		
		
	}
	function addpatient($insert)
	{
		
		$query="insert into patient (memberid,firstname,initial,lastname,dob,phone) values ('".$insert['memberid']."','".$insert['firstname']."','".$insert['initial']."','".$insert['lastname']."','".$insert['dob']."','".$insert['phone']."')";
		
		$result= $this->db->query($query);
		
		$rs=$this->db->insert_id();
		
		$count=$insert['count'];
		
		for($i=0;$i<$count+1;$i++)
		{
			$mid="medication".$i;
			$rid="rxnumber".$i;
			$pid="prescriber".$i;
			$phid="prescriberphone".$i;
			$pc="pharmacy".$i;
			if($this->input->post($mid)!="")
			{
			$insert['medication']=$this->input->post($mid);
		    }
			$insert['rxnumber']="";
			if($this->input->post($rid)!="")
			{
			$insert['rxnumber']=$this->input->post($rid);
		    }
			if($this->input->post($pid)!="")
			{
			$insert['prescriber']=$this->input->post($pid);
		    }
			if($this->input->post($pid)!="")
			{
			$insert['prescriberphone']=$this->input->post($phid);
		    }
			if($this->input->post($pc)!="")
			{
			$insert['pharmacy']=$this->input->post($pc);
		    }
			
		    $query1="insert into prescription(memberid,patientid,medicationid,rxnumber,pharmacyid,prescriber,phone) values ('".$insert['memberid']."',".$rs.",'".$insert['medication']."','".$insert['rxnumber']."','". $insert['pharmacy']."','".$insert['prescriber']."','".$insert['prescriberphone']."')";
		 
		    $result1= $this->db->query($query1);
	    }
		return($result1);
	}

   
function view($table,$where="")
	{
		
		
         $query="select  * from ".$table."";	
		 if($where!="")
		 {
			 $query.=" where email='".$where."'";
		 }	
		
		 $result= $this->db->query($query);
		 return($result);
		
		
		
	}
	   
function category()
	{
		$this->db->order_by('category','asc');
		$query=$this->db->get('maincategory');
		 return($query);			
	}
	
	function listcat($id)
	{
       
        //$query="select distinct subcategory,mainid from category where mainid=".$id." ";     
        $query = "select id,subcategory,mainid from subcategory where mainid=".$id;
        $result= $this->db->query($query);
		return($result->result());	
				
	}
	
	function listmain($start,$limit)
	{
		$query="select * from  maincategory order by category ";
		if($limit!=0)
		{
			$query.=" LIMIT ".$start.",".$limit." ";
		}
		$result=$this->db->query($query);
		return($result);			
	}
	function submenu()
	{
		$query="select id,category from  maincategory order by category limit 8";
		$result=$this->db->query($query);
		return $result->result_array();			
	}
/*********************************DrugInformation*****************************/	
	function viewdrug($string="")
	{
		
		
         $query="select * from  drug ";	
		 
		 if($string!="")
		 {
			$query.=" where medication 	LIKE '".$string."%' " ;
		 }
		 else
		 {
			$query.=" where featured='yes'"; 
		 }
		 
		 $result= $this->db->query($query);
		 return($result);
		
		
		
	}
function viewdosage($id)
	{
		
		
         $query="select distinct GENPRODUCT_ID, GENERIC_PRODUCT_NAME from  CORE_GENPRODUCT where MANUFACT_GENERIC_PRODUCT_NAME ='".$id."' order by UPDATE_DATE desc";
         $result= $this->db->query($query);
		 return $result ;
		
	}
	function viewdrugs($id)
	{
		$query="select medication from drug where drugsid='".$id."'";
        $result= $this->db->query($query);
		return $result->row();
	}
	function drugs()
	{
		$query="select medication from drug";
        $result= $this->db->query($query);
		return $result->result();
	}
	function get_drugid($name)
	{
		$query="select drugsid from drug where medication='".$name."'";
        $result= $this->db->query($query);
		return $result->row();
	}
	function druginter($id)
	{
		$query="SELECT filename FROM druginteraction WHERE drugid LIKE '".$id."'";
		$result= $this->db->query($query);
		return $result->result();
	}
	function drugname($id)
	{
		$query="select medication from drug where drugsid='".$id."'";
        $result= $this->db->query($query);
		return $result->row();
	}
	function viewdrug_det($id)
	{
		$query="select generic_product_name from core_genproduct where genproduct_id='".$id."'";
        $result= $this->db->query($query);
		return $result->row();
	}
	function viewdet($id)
	{
		$query="select ac.* 

				from CORE_ACTIVE_INGRED as ac , CORE_GENPRODUCT_INGREDIENT as gi 

				where GENPRODUCT_ID  ='".$id."'
				and
				gi.ACTIVE_INGRED_ID=ac.ACTIVE_INGRED_ID
					
				group by ac.ACTIVE_INGRED_ID";	
			 
		$result= $this->db->query($query);
		return $result->result_array();
	}
	
	function get_sideeffect($productId)
	{
		$query="select sideeffect_text from sideeffects where 	genprodict_id=".$productId;
		$result = $this->db->query($query);
		return $result->result_array();
	}
	function get_drugname($productId)
	{
		$query="select GENERIC_PRODUCT_NAME from core_genproduct where 	GENPRODUCT_ID =".$productId;
		$result = $this->db->query($query);
		return $result->result_array();
	}
	function get_warning($ProductId)
	{
		$query="select warning_text from warning where genprodict_id =".$ProductId;
		$result = $this->db->query($query);
		return $result->result_array();
	}
	
	/****************************************SihnIn**********************************************************/
	
	function addprescription($insert)
	{
		 $query="insert into prescription values('','".$insert['memberid']."','','".$insert['rxno']."','".$insert['sno']."','','','')";
			
			$res=$this->db->query($query);		
			return($res);
		
	
	}
	
    function signin($insert)
	{
		
		
         $query="select * from  member where email='".$insert['email']."' and password='".$insert['password']."'";		
		 $result= $this->db->query($query);
		 return($result);
		
		
		
	}
   
	function getpharmacy($id)
	{
		
		$query="select * from pharmacy where id=".$id;
		$result= $this->db->query($query);
		return $result->row();
	}
/*
	function getphar($id="")
	{
		
		$query="select * from pharmacy where id=".$id;
		$result= $this->db->query($query);
		//print_r($result->result());
		return $result->result();
	}
*/
	function get_pharmacy_details($pharmacyId)
	{
		$query="select * from pharmacy where id=".$pharmacyId;
		$result=$this->db->query($query);
		return $result->row();
	}
	
	function reviewlst($table,$id)
	{
		$query="
						select 
							* 
						from 
							". $table ." 
						order by 
							posted DESC";
		if($id['count']==0)
		{
			$query .= " LIMIT  ".$id['start']  ." , ". $id['limit'] ."";
		}
							


		$result= $this->db->query($query);
		$data['totalrows']=$result->num_rows();			
		$data['result']=$result->result();    
		return $data;
	}
	
	/*********************************** product fn *******************************************/

	function fetch_category_id($id)
	{
		$query="select id from category where mainid=$id";
		
		$result=$this->db->query($query);
		
		$rs=$result->result();
		
		for($i=0;$i<count($rs);$i++)
		{
			$query1="select * from category c left join product_data p on c.id=p.id where c.id=".$rs[$i]->id."OREDER BY category";
			$result1=$this->db->query($query1);
			$rs1[$i]=$result1->result();
		}
		return $rs1;
	}
	function fetch_product($finestcategory)
	{
		$query="select hamcode,description,manufacturer,internetdesc,productsize,unitofmeasure,brand,weight,image from drug_data_dup where finestcategory LIKE '%".trim($finestcategory)."%'";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	function finestcategory($id)	
	{
		$query="select distinct `finestcategory`,finestcategoryId from finestcategory where `sub_id`=".$id." ORDER BY finestcategory ";
		$result=$this->db->query($query);
		return $result->result_array();
	}
	function categ($id)
	{
		$query="select category from category where mainid=(select mainid from subcategory where id=".$id.")";
		$result= $this->db->query($query);
		return $result->row();		 
	}
	function retrive_drugdata($drugname,$rxnumber)
	{
			$query1="select DRUG_ID from CORE_GENDRUG where GENERIC_NAME='".$drugname."' && RX_OTC_STATUS_CODE='".$rxnumber."'";
			$result = $this->db->query($query1);
			return $result->result_array();
	}
	function pharmacy()
	{
		$pharmacy = $this->db->get('pharmacy');
		return $pharmacy->result_array();
	}
	function states()
	{
		$query="select * from states";
		$result=$this->db->query($query);
		return $result->result_array();
	}
	function city($id)
	{
		$query="select id,city from city where state_id=".$id;
		$result=$this->db->query($query);
		return $result->result_array();
	}
	function list_rec($table, $id)
    	{
    	$query="select * from ".$table." ORDER BY posted DESC";			
						if($id['count']==0){
							$query .= " LIMIT  ".$id['start']  ." , ". $id['limit'];
							}	
		$result= $this->db->query($query);
		$data['totalrows']=$result->num_rows();			
		$data['result']=$result->result();    
		return $data;
	}
	function list_prod($finestcategory,$id,$sort_value)
    {
    $query="select hamcode,description,manufacturer,internetdesc,productsize,unitofmeasure,brand,weight,image from drug_data_dup where finestcategory LIKE '%".mysql_escape_string($finestcategory)."%'";
    if(!empty($sort_value)==TRUE)
		{
			$query.=" ORDER BY internetdesc ".$sort_value;
		}
		else
		{
			$query.=" ORDER BY internetdesc ASC ";
		}
		if($id['count']==0){
			$query .= " LIMIT  ".$id['start']  ." , ". $id['limit'];
			}
		
		$result= $this->db->query($query);
		$data['totalrows']=$result->num_rows();			
		$data['result']=$result->result();    
		return $data;
	}
	function item_details($hamcode)
	{
		$query="select pr.hamcode,pr.activeingred,pr.uses,pr.directions,pr.warnings,dr.internetdesc,dr.productsize,dr.unitofmeasure,dr.image,dr.brand from product_data_new as pr join drug_data_dup as dr on pr.hamcode=dr.hamcode where pr.hamcode = ".$hamcode;
			$result=$this->db->query($query);
			return $result->result_array();
	}
	function getdata($memid)
	{
		$query="select * from  member where memberid=".$memid;		
		$result= $this->db->query($query);
		return $result->row();
	}
	function state($table,$state)
	{
		$query="select * from ".$table." order by ".$state." ASC";
		$result= $this->db->query($query);
		return $result->result(); 
	}
	function product_image()
	{
			$query="select image,hamcode,description,internetdesc from drug_data_dup order by imagedate desc limit 20";
			$return_value = $this->db->query($query);
			return $return_value->result();
	}
	function latest_date()
	{
		$query="SELECT MAX(imagedate) as imagedate FROM drug_data_dup";
		$result= $this->db->query($query);
		return $result->row();
	}
	function viewmore_newproducts($imagedate,$id)
	{
		$query="select image,hamcode,description,internetdesc from drug_data_dup where TO_DAYS('".$imagedate."') - TO_DAYS(imagedate) <30 order by imagedate desc ";
		$result=$this->db->query($query);
		$data['totalrows']=$result->num_rows();	
		
		$query .= " LIMIT  ".$id['start']  ." , ". $id['limit'];
		$result1=$this->db->query($query);	
		$data['result']=$result1->result();
		return $data;
/*
		$return_value = $this->db->query($query);
		return $return_value->result();
*/
	}
	/********************************************cart Detais*************************************/

	function view_cart_items($hamcode,$id)
	{
		if(!empty($hamcode)==TRUE)
		{
		$query="select dr.hamcode,dr.image,dr.internetdesc,dr.productsize,dr.unitofmeasure,ca.cartdtlid,ca.total,ca.rate,ca.quantity,ca.cartdtlid from drug_data_dup as dr join cartdtl as ca on dr.hamcode=ca.itemid where dr.hamcode in (".$hamcode.") and ca.quantity!=0 ORDER BY ca.cartdtlid DESC";
		$result=$this->db->query($query);
		$data['totalrows']=$result->num_rows();					
				
					$query .= " LIMIT  ".$id['start']  ." , ". $id['limit'];
		$result1=$this->db->query($query);	
		$data['result']=$result1->result();
		}
		else
		{
			$data['result']="";
		}    
		return $data;
	}
	function cart_rate($id)
	{
		$query="select rate from cartdtl where cartdtlid=".$id;
		$result=$this->db->query($query);
		return $result->row();
	}
	function take_total()
	{
		$cartid=$this->session->userdata('cartid');
		$query= "select sum(total) as grandtotal from cartdtl where cartid=".intval($cartid);
		$result=$this->db->query($query);
		return $result->result();
	}
	function count_cart_items()
	{
		$cartid=$this->session->userdata('cartid');
		$query= "select sum(quantity) as noofitems,rate from cartdtl where cartid=".intval($cartid);
		$result=$this->db->query($query);
		return $result->result();
	}
	function get_cartdtl()
	{
		$cartid=$this->session->userdata('cartid');
		$query="select distinct itemid from cartdtl where cartid=".intval($cartid);
		$result=$this->db->query($query);
		return $result->result_array();
	}
	function check_cart($hamcode)
	{
		$query="select cartdtlid,itemid,quantity,rate from cartdtl where itemid = '$hamcode'";
		$result=$this->db->query($query);
		return $result->row();
	}	

/*********************************************Outer Search*************************************************************/
	function product_search_count($search,$start="",$limit="")
	{
		$query="select internetdesc,hamcode,price,brand from  drug_data_dup where internetdesc LIKE '".$search."%'";
		$result=$this->db->query($query);
		return $result->result();
	}
	function product_search($search,$start="",$limit="")
	{
		$query="select internetdesc,hamcode,price,brand from  drug_data_dup where internetdesc LIKE '".$search."%' limit ".$start.",".$limit;
		$result=$this->db->query($query);
		return $result->result();
	}
/*****************************************Refill Prescription*********************************************************/
	function check_instant_refill($Rxnumber)
	{
		$query="select * from prescription where prescriptionno='".$Rxnumber."'";
		$result=$this->db->query($query);
		return $result->row();
	}
}

?>
