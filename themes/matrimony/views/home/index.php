<div id="form" style="padding:50px">
	<form method="post" id="form-register" action="<?php echo site_url('home/index')?>">
    	<table cellpadding="3px" class="table table-bordered table-striped" style="width:40%">
        	<tr>
            	<td>Matrimony Profile for <span class="imp">*</span> :</td>
                <td><select name="profile_of" id="profile_of">
                		<option value="">Select</option>
                        <option value="1">Myself</option>
                        <option value="2">Son</option>
                        <option value="3">Daughter</option>
                        <option value="4">Brother</option>
                        <option value="5">Sister</option>
                        <option value="6">Relative</option>
                        <option value="7">Friend</option>
                    </select>
                </td>
            </tr>
            <tr>
            	<td>Name <span class="imp">*</span> :</td>
                <td><input type="text" name="username" id="username" required="required">
                    <span class="imp"><?php echo form_error('username')?></span>
                </td>
            </tr>
            <tr>
            	<td>Gender <span class="imp">*</span> :</td>
                <td><label class="radio inline"><input type="radio" name="gender" id="gender1" value="1" required="required"> Male </label>
                	<label class="radio inline"><input type="radio" name="gender" id="gender2" value="2" required="required"> Female</label>
                </td>
            </tr>
            <tr>
            	<td>Date of Birth <span class="imp">*</span> :</td>
                <td>
                      <div id="datetimepicker4" class="input-append">
                        <input data-format="yyyy-MM-dd" type="text" required="required" name="dob" id="dob"></input>
                        <span class="add-on">
                          <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                          </i>
                        </span>
                    </div></td>
            </tr>
            <tr>
            	<td>Religion :</td>
                <td><select name="religion" id="religion">
                		<option value="">Select</option>
                		<option value="1">Hindu</option><option value="10">Muslim - Shia</option>
                        <option value="2">Muslim</option><option value="2">Muslim - Others</option>
                        <option value="3">Christian</option>
                        <option value="7">Sikh</option>
                        <option value="8">Jain</option>
                        <option value="11">Parsi</option>
                        <option value="12">Buddhist</option>
                        <option value="13">Inter-Religion</option>
                        <option value="14">No Religious Belief</option>
                    </select>
                </td>
            </tr>
            <tr>
            	<td>Mother Tounge <span class="imp">*</span> :</td>
                <td><select name="mother_lang" id="mother_lang">
                		<option value="">Select</option>
                		<option value=1>Arunachali</option>
                        <option value=2>Assamese</option>
                        <option value=3>Awadhi</option>
                        <option value=4>Bengali</option>
                        <option value=5>Bhojpuri</option>
                        <option value=6>Brij</option>
                        <option value=7>Bihari</option>
                        <option value=53>Badaga</option>
                        <option value=8>Chatisgarhi</option>
                        <option value=9>Dogri</option>
                        <option value=10>English</option>
                        <option value=11>French</option>
                        <option value=12>Garhwali</option>
                        <option value=13>Garo</option>
                        <option value=14>Gujarati</option>
                        <option value=15>Haryanvi</option>
                        <option value=16>Himachali/Pahari</option>
                        <option value=17 >Hindi</option>
                        <option value=18>Kanauji</option>
                        <option value=19>Kannada</option>
                        <option value=20>Kashmiri</option>
                        <option value=21>Khandesi</option>
                        <option value=22>Khasi</option>
                        <option value=23>Konkani</option>
                        <option value=24>Koshali</option>
                        <option value=25>Kumoani</option>
                        <option value=26>Kutchi</option>
                        <option value=27>Lepcha</option>
                        <option value=28>Ladacki</option>
                        <option value=29>Magahi</option>
                        <option value=30>Maithili</option>
                        <option value=31>Malayalam</option>
                        <option value=32>Manipuri</option>
                        <option value=33>Marathi</option>
                        <option value=34>Marwari</option>
                        <option value=35>Miji</option>
                        <option value=36>Mizo</option>
                        <option value=37>Monpa</option>
                        <option value=38>Nicobarese</option>
                        <option value=39>Nepali</option>
                        <option value=40>Oriya</option>
                        <option value=41>Punjabi</option>
                        <option value=42>Rajasthani</option>
                        <option value=43>Sanskrit</option>
                        <option value=44>Santhali</option>
                        <option value=45>Sindhi</option>
                        <option value=46>Sourashtra</option>
                        <option value=47>Tamil</option>
                        <option value=48>Telugu</option>
                        <option value=49>Tripuri</option>
                        <option value=50>Tulu</option>
                        <option value=51>Urdu</option>
                    </select>
                </td>
            </tr>
            <tr>
            	<td>Caste/Division <span class="imp">*</span> :</td>
                <td><select name="caste" id="caste">
                		<option value="">Select</option>
                    </select>
                </td>
            </tr>
            <tr>
            	<td>Country <span class="imp">*</span> :</td>
                <td><select name="country" id="country">
                		<option value="">Select</option>
                        <?php foreach($countries as $country){?>
                        	<option value="<?php echo $country['country_id']?>"><?php echo $country['country_name']?></option>
                        <?php }?>
                	</select>
                </td>
            </tr>
            <tr>
            	<td>Contact no. <span class="imp">*</span> :</td>
                <td><input type="text" name="contact" id="contact" required="required"></td>
            </tr>
            <tr>
            	<td>Mobile no. :</td>
                <td><input type="text" name="mobile" id="mobile"></td>
            </tr>
            <tr>
            	<td>Email Id <span class="imp">*</span> :</td>
                <td><input type="text" name="email" id="email" required="required">
               </td>
            </tr>
            <tr>
            	<td colspan="2"><input type="submit" name="submit" id="submit" class="btn btn-warning btn-large" value="Register"></td>
            </tr>
        </table>
           <a href="<?php echo site_url('home/detail')?>" class="btn btn-warning">Next</a>
    </form>
</div>

<style>
.imp{
	color:#FF0000;
}
</style>

<script type="text/javascript">
  $(function() {
    $('#datetimepicker4').datetimepicker({
      pickTime: false
    });
  });
  
</script>

<script type="text/javascript">
    $(document).ready(function(){
    	// Smart Wizard 	
  		$('#wizard').smartWizard();
      
      function onFinishCallback(){
        $('#wizard').smartWizard('showMessage','Finish Clicked');
        //alert('Finish Clicked');
      }     
		});
</script>