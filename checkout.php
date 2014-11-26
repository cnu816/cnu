<?php $this->load->view('head');  
$user_id=$this->session->userdata('user_id');
if($user_id=='')
{
	header('location:index.php');
}
?>
<style type="text/css">
.error {color: #F00;}
.red{ color:#F00; }	
.controls { float:right; margin-right:150px; }
select{ width:160px; }
</style>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script type="text/javascript">

function valid(){

	var flag=1;
    var nameReg = /^[A-Za-z]+$/;
    var numberReg =  /^[0-9]+$/;
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

	var fname = $('#fname').val();
	var lname = $('#lname').val();
    var email = $('#email').val();
    var mobile = $('#mobile').val();
    var address1 = $('#address1').val();
	var address2 = $('#address2').val();
	var city = $('#city').val();
	var postcode = $('#postcode').val();
	var country = $('#country').val();
	
	var bfname = $('#bfname').val();
	var blname = $('#blname').val();
    var bemail = $('#bemail').val();
    var bmobile = $('#bmobile').val();
    var baddress1 = $('#baddress1').val();
	var baddress2 = $('#baddress2').val();
	var bcity = $('#bcity').val();
	var bpostcode = $('#bpostcode').val();
	var bcountry = $('#bcountry').val();

    var inputVal = new Array(fname, lname, email, mobile, address1,address2,city,postcode,country,bfname, blname, bemail, bmobile, baddress1,baddress2,bcity,bpostcode,bcountry);
    var inputMessage = new Array("firstname", "lastname", "email address", "Phone number", "address1","address2","city","postcode","country");
   $('.error').hide();
	    if(inputVal[0] == ""){
            $('#fnameerr').after('<span class="error"> Please enter your ' + inputMessage[0] + '</span>');
			return false;	
     	 } 
       	 if(!nameReg.test(fname)){
            $('#fnameerr').after('<span class="error"> Letters only</span>');
			return false;	
        }
		
		if(inputVal[1] == ""){
            $('#lnameerr').after('<span class="error"> Please enter your ' + inputMessage[1] + '</span>');
			return false;	
        } 
         if(!nameReg.test(lname)){
            $('#lnameerr').after('<span class="error"> Letters only</span>');
			return false;	
        }
		
		 if(inputVal[2] == ""){
            $('#emailerr').after('<span class="error"> Please enter your ' + inputMessage[2] + '</span>');
			return false;	
        } 
         if(!emailReg.test(email)){
            $('#emailerr').after('<span class="error"> Please enter a valid email address</span>');
			return false;	
        }

        if(inputVal[3] == ""){
            $('#mobileerr').after('<span class="error"> Please enter your ' + inputMessage[3] + '</span>');
			return false;	
        } 
         if(!numberReg.test(mobile)){
            $('#mobileerr').after('<span class="error"> Numbers only</span>');
			return false;	
        }

        if(inputVal[4] == ""){
            $('#address1err').after('<span class="error"> Please enter your ' + inputMessage[4] + '</span>');
			return false;	
        }  
		
		if(inputVal[5] == ""){
            $('#address2err').after('<span class="error"> Please enter your ' + inputMessage[5] + '</span>');
			return false;	
        }  
		
		if(inputVal[6] == ""){
            $('#cityerr').after('<span class="error"> Please enter your ' + inputMessage[6] + '</span>');
			return false;	
        }  
		
		if(inputVal[7] == ""){
            $('#postcodeerr').after('<span class="error"> Please enter your ' + inputMessage[7] + '</span>');
			return false;	
        }
		if(inputVal[8] == ""){
            $('#country').after('<span class="error"> Please enter your ' + inputMessage[8] + '</span>');
			return false;	
        }
		
		
		 if(inputVal[9] == ""){
            $('#bfnameerr').after('<span class="error"> Please enter your ' + inputMessage[0] + '</span>');
			return false;	
     	 } 
         if(!nameReg.test(fname)){
            $('#bfnameerr').after('<span class="error"> Letters only</span>');
			return false;	
        }
		 if(inputVal[10] == ""){
            $('#blnameerr').after('<span class="error"> Please enter your ' + inputMessage[1] + '</span>');
			return false;	
        } 
         if(!nameReg.test(lname)){
            $('#blnameerr').after('<span class="error"> Letters only</span>');
			return false;	
        }

        if(inputVal[11] == ""){
            $('#bemailerr').after('<span class="error"> Please enter your ' + inputMessage[2] + '</span>');
			return false;	
        } 
         if(!emailReg.test(email)){
            $('#bemailerr').after('<span class="error"> Please enter a valid email address</span>');
			return false;	
        }

        if(inputVal[12] == ""){
            $('#bmobileerr').after('<span class="error"> Please enter your ' + inputMessage[3] + '</span>');
			return false;	
        } 
         if(!numberReg.test(mobile)){
            $('#bmobileerr').after('<span class="error"> Numbers only</span>');
			return false;	
        }

        if(inputVal[13] == ""){
            $('#baddress1err').after('<span class="error"> Please enter your ' + inputMessage[4] + '</span>');
			return false;	
        }  
		
		if(inputVal[14] == ""){
            $('#baddress2err').after('<span class="error"> Please enter your ' + inputMessage[5] + '</span>');
			return false;	
        }  
		
		if(inputVal[14] == ""){
            $('#bcityerr').after('<span class="error"> Please enter your ' + inputMessage[6] + '</span>');
			return false;	
        }  
		
		if(inputVal[15] == ""){
            $('#bpostcodeerr').after('<span class="error"> Please enter your ' + inputMessage[7] + '</span>');
			return false;	
        }
		if(inputVal[16] == ""){
            $('#bcountry').after('<span class="error"> Please enter your ' + inputMessage[8] + '</span>');
			return false;	
        }
		document.form1.submit();
	}  

function copy()
{
	var frm=document.form1;
	if(frm.ck.checked == true){
		frm.bfname.value = frm.fname.value;
		frm.blname.value = frm.lname.value;
		frm.bemail.value = frm.email.value;
		frm.bmobile.value = frm.mobile.value;
		frm.baddress1.value = frm.address1.value;
		frm.baddress2.value = frm.address2.value;
		frm.bcity.value = frm.city.value;
		frm.bpostcode.value = frm.postcode.value;
		frm.bcountry.value = frm.country.value;
		frm.bfax.value = frm.fax.value;
		frm.btelephone.value = frm.telephone.value;
		frm.bcompany.value = frm.company.value;
	}
}	
</script>
<div id="maincontainer">
  <section>
    <div class="container">
      <div class="row">
        <div  style="margin-top:60px;">
          <div class="btn btn-info">SHOPPING BAG <img alt="shoppingCart" src="<?php echo base_url(); ?>includes/images/tick.gif"></div>
          <div class="btn btn-info">LOGIN &amp; SHIPPING INFO
            <?php
            if($user_id!="")
            {  ?>
            <img alt="shoppingCart" src="<?php echo base_url(); ?>includes/images/tick.gif">
            <?php }?>
          </div>
          <div class="btn btn-info">CHECKOUT <img alt="shoppingCart" src="<?php echo base_url(); ?>includes/images/tick.gif"></div>
          <div class="btn btn-success">PAYMENT</div>
        </div>
        <br />
     
        <div class="span4">
          <table class="table table-striped table-bordered" style="display:none;">
            <tbody>
              <tr>
                <td><span class="extra bold">Total Qty </span></td>
                <td><span class="bold"><?php echo $this->cart->total_items(); ?></span></td>
                <td><span class="extra bold totalamout">Total Amount</span></td>
                <td><span class="bold totalamout"><?php echo $this->cart->format_number($this->cart->total()); ?></span></td>
              </tr>
            </tbody>
          </table>
          <br>
        </div>
        
        <form class="form-horizontal" action="<?php echo base_url();?>cart/paymentval" method="post"  name="form1" id="fcheckout">
          <div class="col-sm-5 col-sm-offset-0">
            <div class="login-form">
              <fieldset>
                <div class="span4">
              <?php 
						$user_id=$this->session->userdata('user_id');
						if($user_id!="")
						{
							$sql=mysql_query("select * from users where id='$user_id'");
							$count=mysql_num_rows($sql);
							$row=mysql_fetch_assoc($sql);
							$fname=$row['firstname'];
							$lname=$row['lastname'];
							$email=$row['email'];
							$phone=$row['phone'];
							$fax=$row['fax'];
							$company=$row['company'];
							$address1=$row['address1'];
							$address2=$row['address2'];
							$city=$row['city'];
							$zipcode=$row['zipcode'];
							$country=$row['country'];
						}
					?>
	              Step 1: Billing Details
                  <div class="control-group">
                    <label class="control-label">First Name<span class="red">*</span></label>
                    <div class="controls">
                      <input type="text"  name="fname" id="fname" value="<?php echo $fname; ?>">
                      <div id="fnameerr"></div>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Last Name<span class="red">*</span></label>
                    <div class="controls">
                      <input type="text" class="" value="<?php echo $lname; ?>" name="lname" id="lname">
                      <div id="lnameerr"></div>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">E-Mail<span class="red">*</span></label>
                    <div class="controls">
                      <input type="text" class="" value="<?php echo $email; ?>"  name="email"  id="email"/>
                      <div id="emailerr"></div>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Mobile<span class="red">*</span></label>
                    <div class="controls">
                      <input type="text" class="" value="<?php echo $phone; ?>" name="mobile"  id="mobile"/>
                      <div id="mobileerr"></div>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Fax</label>
                    <div class="controls">
                      <input type="text" class="" value="<?php echo $fax; ?>" name="fax" />
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Telephone<span class="red"></span></label>
                    <div class="controls">
                      <input type="text" class="" value="" name="telephone">
                    </div>
                  </div>
                </div>
                <div class="span4">
                  <div class="control-group">
                    <label class="control-label">Company</label>
                    <div class="controls">
                      <input type="text" class="" value="<?php echo $company; ?>"   name="company">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Address 1<span class="red">*</span></label>
                    <div class="controls">
                      <input type="text" class="" value="<?php echo $address1; ?>"  name="address1" id="address1">
                      <div id="address1err"></div>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Address 2<span class="red">*</span></label>
                    <div class="controls">
                      <input type="text" class="" value="<?php echo $address2; ?>"  name="address2" id="address2">
                      <div id="address2err"></div>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">City<span class="red">*</span></label>
                    <div class="controls">
                      <input type="text" class="" value="<?php echo $city; ?>"  name="city" id="city">
                      <div id="cityerr"></div>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Post Code<span class="red">*</span></label>
                    <div class="controls">
                      <input type="text" class="" value="<?php echo $zipcode; ?>"  name="postcode" id="postcode">
                      <div id="postcodeerr"></div>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Country<span class="red">*</span></label>
                    <div class="controls">
                      <select  name="country" id="country" class="">
                        <option value="">Select Country</option>
                        <?php 
                      $sql=mysql_query("select * from  countries");
					  while($row=mysql_fetch_assoc($sql))
					  { ?>
                        <option value="<?php echo $row['countries_id']; ?>" 
						<?php if($country==$row['countries_id']) { 		echo 'selected="selected"'; } ?>
						><?php echo $row['name']; ?></option>
                        <?php  } ?>
                      </select>
                      <div id="countryerr"></div>
                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
          </div>
          <div class="col-sm-5 col-sm-offset-0">
         
            <div class="signup-form">
              <fieldset>
                <div class="span4">
                Step 2: Delivery Details   <input type="checkbox" name="ck" id="ck"  onclick="copy();" />
        Same as Billing 
                  <div class="control-group">
                    <label class="control-label">First Name<span class="red">*</span></label>
                    <div class="controls">
                      <input type="text" value="" name="bfname" id="bfname">
                      <div id="bfnameerr"></div>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Last Name<span class="red">*</span></label>
                    <div class="controls">
                      <input type="text" class="" value="" name="blname" id="blname">
                      <div id="blnameerr"></div>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">E-Mail<span class="red">*</span></label>
                    <div class="controls">
                      <input type="text" class="" value="" name="bemail"  id="bemail"/>
                      <div id="bemailerr"></div>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Mobile<span class="red">*</span></label>
                    <div class="controls">
                      <input type="text" class="" value="" name="bmobile"  id="bmobile"/>
                      <div id="bmobileerr"></div>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Fax</label>
                    <div class="controls">
                      <input type="text" class="" value="" name="bfax" />
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Telephone<span class="red"></span></label>
                    <div class="controls">
                      <input type="text" class="" value="" name="btelephone">
                    </div>
                  </div>
                </div>
                <div class="span4">
                  <div class="control-group">
                    <label class="control-label">Company</label>
                    <div class="controls">
                      <input type="text" class="" value=""  name="bcompany">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Address 1<span class="red">*</span></label>
                    <div class="controls">
                      <input type="text" class="" value="" name="baddress1" id="baddress1">
                      <div id="baddress1err"></div>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Address 2<span class="red">*</span></label>
                    <div class="controls">
                      <input type="text" class="" value="" name="baddress2" id="baddress2">
                      <div id="baddress2err"></div>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">City<span class="red">*</span></label>
                    <div class="controls">
                      <input type="text" class="" value="" name="bcity" id="bcity">
                      <div id="bcityerr"></div>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Post Code<span class="red">*</span></label>
                    <div class="controls">
                      <input type="text" class="" value="" name="bpostcode" id="bpostcode">
                      <div id="bpostcodeerr"></div>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Country<span class="red">*</span></label>
                    <div class="controls">
                      <select  name="bcountry" id="bcountry">
                        <option value="">Select Country</option>
                        <?php 
                      $sql=mysql_query("select * from  countries");
					  while($row=mysql_fetch_assoc($sql))
					  { ?>
                        <option value="<?php echo $row['countries_id']; ?>"><?php echo $row['name']; ?></option>
                        <?php  } ?>
                      </select>
                      <br />
                       <button  value="MakePayment" class="btn btn-success pull-right" onclick="valid(); return false;">Check Out</button>
                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>
<footer id="footer">
  <?php $this->load->view('footer');   // footer  ?>
</footer>
</div>
<!-- maincontainer End --> 
<!-- javascript
    ================================================== -->
<?php $this->load->view('includejs');   // include js footer  ?>
<!-- Placed at the end of the document so the pages load faster -->
</body></html>