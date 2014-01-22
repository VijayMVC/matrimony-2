<div id="detail">
	<form id="detail-form" action="<?php echo site_url('home/detail')?>" method="post">
    	<table cellpadding="3px" class="table table-bordered table-striped">
        	<tr>
            	<th colspan="2">More Personal Details</th>
            </tr>
            <tr>
            	<td>Martial Status <span class="imp">* </span>:</td>
                <td><input type="radio" name="martial_status" id="martial_status1" value="1"> Never Married 
                	<input type="radio" name="martial_status" id="martial_status2" value="2"> Widower
                    <input type="radio" name="martial_status" id="martial_status3" value="3"> Awaiting Divorce 
                    <input type="radio" name="martial_status" id="martial_status4" value="4"> Divorced 
                
                </td>
            </tr>
            <tr>
            	<td>Caste <span class="imp">* </span>:</td>
                <td><input type="radio" name="caste_allowed" id="caste_allowed1" value="1"> Willing to marry from Other communities. <br/>
               		<input type="radio" name="caste_allowed" id="caste_allowed0" value="0"> Willing to marry from Same communities.
                </td>
            </tr>
            <tr>
            	<td>Sub-Caste :</td>
                <td><input type="text" name="sub_caste" id="sub_caste" placeholder="Enter Sub-Caste"></td>
            </tr>
            <tr>
            	<td>Residing State <span class="imp">* </span>:</td>
                <td><input type="text" name="state" id="state" placeholder="Enter Your State" required="required"></td>
            </tr>
            <tr>
            	<td>Residing City <span class="imp">* </span>:</td>
                <td><input type="text" name="city" id="city" placeholder="Enter Your City" required="required"></td>
            </tr>
            <tr>
            	<td>Citizenship <span class="imp">* </span>:</td>
                <td><select name="citizenship" id="citizenship">
                		<option value="">Select</option>
                        <?php foreach($countries as $country){?>
                        	<option value="<?php echo $country['country_id']?>"><?php echo $country['country_name']?></option>
                        <?php }?>
                	</select>
                </td>
            </tr>
        </table>
        <table cellpadding="3px" class="table table-bordered table-striped">
        	<tr>
            	<th colspan="2">Physical Attributes</th>
            </tr>
            <tr>
            	<td>Height <span class="imp">* </span>:</td>
                <td><select name="height_feet" id="height_feet">
                		<option value="">Select (in feet/inches)</option>
                        <option value="4-6" >4ft 6in</option>
                        <option value="4-7" >4ft 7in</option>
                        <option value="4-8" >4ft 8in</option>
                        <option value="4-9" >4ft 9in</option>
                        <option value="4-10" >4ft 10in</option>
                        <option value="4-11" >4ft 11in</option>
                        <option value="5" >5ft</option>
                        <option value="5-1" >5ft 1in</option>
                        <option value="5-2" >5ft 2in</option>
                        <option value="5-3" >5ft 3in</option>
                        <option value="5-4" >5ft 4in</option>
                        <option value="5-5" >5ft 5in</option>
                        <option value="5-6" >5ft 6in</option>
                        <option value="5-7" >5ft 7in</option>
                        <option value="5-8" >5ft 8in</option>
                        <option value="5-9" >5ft 9in</option>
                        <option value="5-10" >5ft 10in</option>
                        <option value="5-11" >5ft 11in</option>
                        <option value="6" >6ft</option>
                        <option value="6-1" >6ft 1in</option>
                        <option value="6-2" >6ft 2in</option>
                        <option value="6-3" >6ft 3in</option>
                        <option value="6-4" >6ft 4in</option>
                        <option value="6-5" >6ft 5in</option>
                        <option value="6-6" >6ft 6in</option>
                        <option value="6-7" >6ft 7in</option>
                        <option value="6-8" >6ft 8in</option>
                        <option value="6-9" >6ft 9in</option>
                        <option value="6-10" >6ft 10in</option>
                        <option value="6-11" >6ft 11in</option>
                        <option value="7" >7ft</option>
                    </select>
                    
                    OR 
                    
                    <select name="height_cm" id="height_cm">
                    	<option value="">Select (in cms)</option>
                        <?php for($i=137; $i<=213; $i++){?>
                        	<option value="<?php echo $i?>"><?php echo $i?> Kg</option>
                        <?php }?>
                    </select>
                </td>
            </tr>
            <tr>
            	<td>Weight :</td>
                <td>
                	 <select name="weight_kgs" id="weight_kgs">
                    	<option value="">Select (in Kgs)</option>
                        <?php for($i=40; $i<=140; $i++){?>
                        	<option value="<?php echo $i?>"><?php echo $i?> Kg</option>
                        <?php }?>
                    </select>
                    
                    OR
                    
                    <select name="weight_lbs" id="weight_lbs">
                    	<option value="">Select (in lbs)</option>
                        <?php for($i=90; $i<=300; $i++){?>
                        	<option value="<?php echo $i?>"><?php echo $i?> lbs</option>
                        <?php }?>
                    </select>
                </td>
            </tr>
            <tr>
            	<td>Body Type :</td>
                <td><label><input type="radio" name="body_type" id="body_type1" value="1"> Slim </label>
                    <label><input type="radio" name="body_type" id="body_type2" value="2"> Average </label>
                   	<label> <input type="radio" name="body_type" id="body_type3" value="3"> Athletic </label>
                    <label><input type="radio" name="body_type" id="body_type4" value="4"> Heavy </label>
                </td>
            </tr>
            <tr>
            	<td>Complexion :</td>
                <td><label><input type="radio" name="complexion" id="complexion1" value="1"> Very Fair</label>
                    <label><input type="radio" name="complexion" id="complexion2" value="2"> Fair</label>
                    <label><input type="radio" name="complexion" id="complexion3" value="3"> Wheatish</label>
                    <label><input type="radio" name="complexion" id="complexion4" value="4"> Wheatish Brown</label>
                    <label><input type="radio" name="complexion" id="complexion5" value="5"> Dark</label>
                </td>
            </tr>
            <tr>
            	<td>Physical Status <span class="imp">* </span>:</td>
                <td><label><input type="radio" name="physical_status" id="physical_status1" value="1"> Normal </label>
                    <label><input type="radio" name="physical_status" id="physical_status2" value="2"> Physically Challenged </label>
                </td>
            </tr>
            <tr>
            	<input type="hidden" name="member_id" id="member_id" value="<?php echo $member_id?>">
            	<td colspan="2"><input type="submit" name="submit" id="submit" value="Save" class="btn"></td>
            </tr>
        </table>
        
      <!--  <a href="<?php echo site_url('home/other_details')?>" class="btn btn-warning">Next</a>-->
    </form>
</div>

<style>
.imp{
	color:#FF0000;
}
</style>