<?php echo theme_js('jquery-2.0.0.min.js')?>
<?php echo theme_js('jquery.smartWizard.js')?>

<script type="text/javascript">
    $(document).ready(function(){
    	// Smart Wizard 	
  		$('#wizard').smartWizard({
			
			ajaxType: 'POST',
			//onFinish:onFinishCallback
			
			});
		$('.buttonFinish').on('click',function(){
//			
//			//console.log('saazan is a dumb ass');
//			//console.log($('#detail-form'));
		$.post( "<?php echo site_url('home/detail')?>", function( data ) {
			$( ".result" ).html( data );
		console.log('after post');
				});
		});
      
      function onFinishCallback(){
       // $('#wizard').smartWizard('showMessage','Finish Clicked');
	   //$('form').submit();
        alert('Finish Clicked');
      }     
		});
</script>
<form id="detail-form" action="<?php echo site_url('home/save_details')?>" method="post" enctype="multipart/form-data">
<table align="center" border="0" cellpadding="0" cellspacing="0">
<tr><td> 
<!-- Smart Wizard -->
        <h2>Your Details</h2> 
  		<div id="wizard" class="swMain">
  			<ul class="anchor">
  				<li><a href="#step-1" class="selected">
                <label class="stepNumber">1</label>
                <span class="stepDesc">
                   Step 1<br />
                   <small>More Personal Details</small>
                </span>
            </a></li>
  				<li><a href="#step-2" class="disabled">
                <label class="stepNumber">2</label>
                <span class="stepDesc">
                   Step 2<br />
                   <small>Physical Attributes</small>
                </span>
            </a></li>
  				<li><a href="#step-3" class="disabled">
                <label class="stepNumber">3</label>
                <span class="stepDesc">
                   Step 3<br />
                   <small>Education/Employment</small>
                </span>                   
             </a></li>
  				<li><a href="#step-4" class="disabled">
                <label class="stepNumber">4</label>
                <span class="stepDesc">
                   Step 4<br />
                   <small>Habits/Family/Description</small>
                </span>                   
            </a></li>
  			</ul>
        
  			<div id="step-1" >	
                <h2 class="StepTitle">More Personal Details</h2>
                    <table cellpadding="3px" class="table table-bordered">
                    	<tr>
                        	<td>Photo <span class="imp">* </span>:</td>
                            <td><input type="file" name="photo" id="photo"></td>
                        </tr>
                        <tr>
                            <td>Martial Status <span class="imp">* </span>:</td>
                            <td>
                            <label class="radio inline"><input type="radio" name="martial_status" id="martial_status1" value="1"> Never Married </label>
                            <label class="radio inline"><input type="radio" name="martial_status" id="martial_status2" value="2"> Widower</label>
                            <label class="radio inline"><input type="radio" name="martial_status" id="martial_status3" value="3"> Awaiting Divorce </label>
                            <label class="radio inline"><input type="radio" name="martial_status" id="martial_status4" value="4"> Divorced </label>
                            
                            </td>
                        </tr>
                        <tr>
                            <td>Caste <span class="imp">* </span>:</td>
                            <td>
                             <label class="radio"><input type="radio" name="caste_allowed" id="caste_allowed1" value="1"> Willing to marry from Other communities. </label>
                               <label class="radio"><input type="radio" name="caste_allowed" id="caste_allowed0" value="0"> Willing to marry from Same communities.</label>
                            </td>
                        </tr>
                        <tr>
                            <td>Sub-Caste :</td>
                            <td><input type="text" name="sub_caste" id="sub_caste" placeholder="Enter Sub-Caste"></td>
                        </tr>
                        <tr>
                            <td>Residing State <span class="imp">* </span>:</td>
                            <td><input type="text" name="state" id="state" placeholder="Enter Your State">
                               <?php /*?> <span><?php echo form_error('state')?></span><?php */?>
                            </td>
                        </tr>
                        <tr>
                            <td>Residing City <span class="imp">* </span>:</td>
                            <td><input type="text" name="city" id="city" placeholder="Enter Your City">
                            <?php /*?><span><?php echo form_error('city')?></span><?php */?></td>
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
                        <input type="hidden" name="member_id" id="member_id" value="<?php echo $member_id?>">
                </table>	
       		</div>
  			<div id="step-2" >
           		<h2 class="StepTitle">Physical Attributes</h2>	
               		<table cellpadding="3px" class="table table-bordered ">
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
                            <td><label class="radio inline"><input type="radio" name="body_type" id="body_type1" value="1"> Slim </label>
                                <label class="radio inline"><input type="radio" name="body_type" id="body_type2" value="2"> Average </label>
                                <label class="radio inline"> <input type="radio" name="body_type" id="body_type3" value="3"> Athletic </label>
                                <label class="radio inline"><input type="radio" name="body_type" id="body_type4" value="4"> Heavy </label>
                            </td>
                        </tr>
                        <tr>
                            <td>Complexion :</td>
                            <td><label class="radio inline"><input type="radio" name="complexion" id="complexion1" value="1"> Very Fair</label>
                                <label class="radio inline"><input type="radio" name="complexion" id="complexion2" value="2"> Fair</label>
                                <label class="radio inline"><input type="radio" name="complexion" id="complexion3" value="3"> Wheatish</label>
                                <label class="radio inline"><input type="radio" name="complexion" id="complexion4" value="4"> Wheatish Brown</label>
                                <label class="radio inline"><input type="radio" name="complexion" id="complexion5" value="5"> Dark</label>
                            </td>
                        </tr>
                        <tr>
                            <td>Physical Status <span class="imp">* </span>:</td>
                            <td><label class="radio inline"><input type="radio" name="physical_status" id="physical_status1" value="1"> Normal </label>
                                <label class="radio inline"><input type="radio" name="physical_status" id="physical_status2" value="2"> Physically Challenged </label>
                            </td>
                        </tr>

           		 </table>
        	</div>                      
  			<div id="step-3" >
                <h2 class="StepTitle">Education/Employment</h2>	
                	<table cellpadding="3px" class="table table-bordered ">
                        <tr>
                            <td>Highest Education/Qualification <span class="imp">* </span>:</td>
                            <td><select name="qualification" id="qualification">
                                    <option value="">Select</option>
                                    <optgroup class='a' label='&nbsp;&nbsp;&nbsp;&nbsp;-- Bachelors - Engineering / Computers / Others --'>
                                    <option value='6'>Aeronautical Engineering</option>
                                    <option value='8'>B Arch</option>
                                    <option value='5'>BCA</option>
                                    <option value='49'>BE</option>
                                    <option value='9'>B Plan</option>
                                    <option value='95'>BSc IT / Computer Science</option>
                                    <option value='50'>B Tech</option>
                                    <option value='83'>Other Bachelor Degree</option>
                                    </optgroup>
                                    <optgroup class='a' label='&nbsp;&nbsp;&nbsp;&nbsp;-- Masters - Engineering / Computers / Others --'>
                                    <option value='7'>M Arch</option>
                                    <option value='51'>MCA</option>
                                    <option value='53'>ME</option>
                                    <option value='55'>MSc IT / Computer Science</option>
                                    <option value='3'>MS (Engg.)</option>
                                    <option value='54'>M Tech</option>
                                    <option value='52'>PGDCA</option>
                                    <option value='84'>Other Master Degree</option>
                                    </optgroup>
                                    <optgroup class='a' label='&nbsp;&nbsp;&nbsp;&nbsp;-- Bachelors - Arts / Science / Commerce / Others --'>
                                    <option value='43'>Aviation Degree</option>
                                    <option value='18'>BA</option>
                                    <option value='16'>B Com</option>
                                    <option value='39'>B Ed</option>
                                    <option value='56'>BFA</option>
                                    <option value='66'>BFT</option>
                                    <option value='57'>BLIS</option>
                                    <option value='59'>BMM (MASS MEDIA)</option>
                                    <option value='17'>BSc</option>
                                    <option value='58'>BSW</option>
                                    <option value='15'>B Phil</option>
                                    <option value='85'>Other Bachelor Degree</option>
                                    </optgroup>
                                    <optgroup class='a' label='&nbsp;&nbsp;&nbsp;&nbsp;-- Masters - Arts / Science / Commerce / Others --'>
                                    <option value='13'>MA</option>
                                    <option value='11'>M Com</option>
                                    <option value='38'>M Ed</option>
                                    <option value='98'>MFA</option>
                                    <option value='60'>MLIS</option>
                                    <option value='12'>MSc</option>
                                    <option value='63'>MSW</option>
                                    <option value='10'>M Phil</option>
                                    <option value='86'>Other Master Degree</option>
                                    </optgroup>
                                    <optgroup class='a' label='&nbsp;&nbsp;&nbsp;&nbsp;-- Bachelors - Management / Others --'>
                                    <option value='35'>BBA</option>
                                    <option value='65'>BFM (Financial Management)</option>
                                    <option value='19'>BHM (Hotel Management)</option>
                                    <option value='87'>Other Bachelor Degree in Management</option>
                                    </optgroup>
                                    <optgroup class='a' label='&nbsp;&nbsp;&nbsp;&nbsp;-- Masters - Management / Others --'>
                                    <option value='61'>MBA</option>
                                    <option value='76'>MFM (Financial Management)</option>
                                    <option value='14'>MHM  (Hotel Management)</option>
                                    <option value='64'>MHRM (Human Resource Management)</option>
                                    <option value='62'>PGDM</option>
                                    <option value='96'>Other Master Degree  in Management</option>
                                    </optgroup>
                                    <optgroup class='a' label='&nbsp;&nbsp;&nbsp;&nbsp;-- Bachelors - Medicine - General / Dental / Surgeon / Others --'>
                                    <option value='29'>BAMS</option>
                                    <option value='25'>BDS</option>
                                    <option value='28'>BHMS</option>
                                    <option value='68'>BSMS</option>
                                    <option value='31'>B Pharm</option>
                                    <option value='27'>BPT</option>
                                    <option value='69'>BUMS</option>
                                    <option value='26'>BVSc</option>
                                    <option value='21'>MBBS</option>
                                    <option value='88'>Other Bachelor Degree in Medicine</option>
                                    </optgroup>
                                    <optgroup class='a' label='&nbsp;&nbsp;&nbsp;&nbsp;-- Masters - Medicine - General / Dental / Surgeon / Others --'>
                                    <option value='22'>MDS</option>
                                    <option value='20'>MD / MS (Medical)</option>
                                    <option value='30'>M Pharm</option>
                                    <option value='24'>MPT</option>
                                    <option value='23'>MVSc </option>
                                    <option value='97'>Other Master Degree in Medicine</option>
                                    </optgroup>
                                    <optgroup class='a' label='&nbsp;&nbsp;&nbsp;&nbsp;-- Bachelors - Legal / Others --'>
                                    <option value='72'>BGL</option>
                                    <option value='73'>BL</option>
                                    <option value='74'>LLB</option>
                                    <option value='90'>Other Bachelor Degree in Legal</option>
                                    </optgroup>
                                    <optgroup class='a' label='&nbsp;&nbsp;&nbsp;&nbsp;-- Masters - Legal / Others --'>
                                    <option value='71'>LLM</option>
                                    <option value='70'>ML</option>
                                    <option value='89'>Other Master Degree in  Legal</option>
                                    </optgroup>
                                    <optgroup class='a' label='&nbsp;&nbsp;&nbsp;&nbsp;-- Finance - ICWAI / CA / CS/ CFA / Others --'>
                                    <option value='36'>CA</option>
                                    <option value='75'>CFA (Chartered Financial Analyst)</option>
                                    <option value='48'>CS</option>
                                    <option value='37'>ICWA</option>
                                    <option value='91'>Other Degree in Finance</option>
                                    </optgroup>
                                    <optgroup class='a' label='&nbsp;&nbsp;&nbsp;&nbsp;-- Service - IAS / IPS / IRS / IES / IFS / Others --'>
                                    <option value='77'>IAS</option>
                                    <option value='80'>IES</option>
                                    <option value='81'>IFS</option>
                                    <option value='79'>IRS</option>
                                    <option value='78'>IPS</option>
                                    <option value='92'>Other Degree in Service</option>
                                    </optgroup>
                                    <optgroup class='a' label='&nbsp;&nbsp;&nbsp;&nbsp;-- PhD --'>
                                    <option value='33'>Ph D</option>
                                    </optgroup>
                                    <optgroup class='a' label='&nbsp;&nbsp;&nbsp;&nbsp;-- Diploma / Others --'>
                                    <option value='46'>Diploma</option>
                                    <option value='82'>Polytechnic</option>
                                    <option value='45'>Trade School</option>
                                    <option value='94'>Others in Diploma</option>
                                    </optgroup>
                                    <optgroup class='a' label='&nbsp;&nbsp;&nbsp;&nbsp;-- Higher Secondary / Secondary --'>
                                    <option value='47'>Higher Secondary School / High School</option>
                                    </optgroup>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Occupation <span class="imp">* </span>:</td>
                            <td><select name="occupation" id="occupation">
                                    <option value="">Select</option>
                                        <optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- ADMIN --' class='a' >
                                        <option value='49'>&nbsp; Manager</option>
                                        <option value='48'>&nbsp; Supervisor</option>
                                        <option value='47'>&nbsp; Officer</option>
                                        <option value='39'>&nbsp; Administrative Professional</option>
                                        <option value='50'>&nbsp; Executive</option>
                                        <option value='46'>&nbsp; Clerk</option>
                                        <option value='63'>&nbsp; Human Resources Professional</option>
                                    </optgroup>
                                    <optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- AGRICULTURE --' class='a' >
                                        <option value='37'>&nbsp; Agriculture & Farming Professional</option>
                                    </optgroup>
                                    <optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- AIRLINE --' class='a' >
                                        <option value='30'>&nbsp; Pilot</option>
                                        <option value='28'>&nbsp; Air Hostess</option>
                                        <option value='29'>&nbsp; Airline Professional</option>
                                    </optgroup>
                                        <optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- ARCHITECT & DESIGN --' class='a' >
                                        <option value='19'>&nbsp; Architect</option>
                                        <option value='20'>&nbsp; Interior Designer</option>
                                    </optgroup>
                                    <optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- BANKING & FINANCE --' class='a' >
                                        <option value='7'>&nbsp; Chartered Accountant</option>
                                        <option value='10'>&nbsp; Company Secretary</option>
                                        <option value='8'>&nbsp; Accounts/Finance Professional</option>
                                        <option value='16'>&nbsp; Banking Service Professional</option>
                                        <option value='9'>&nbsp; Auditor</option><option value='69'>&nbsp; Financial Accountant</option>
                                        <option value='64'>&nbsp; Financial Analyst / Planning</option>
                                    </optgroup>
                                    <optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- BEAUTY & FASHION --' class='a' >
                                        <option value='25'>&nbsp; Fashion Designer</option>
                                        <option value='33'>&nbsp; Beautician</option>
                                    </optgroup>
                                        <optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- CIVIL SERVICES --' class='a' >
                                        <option value='52'>&nbsp; Civil Services (IAS/IPS/IRS/IES/IFS)</option>
                                    </optgroup>
                                    <optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- DEFENCE --' class='a' >
                                        <option value='53'>&nbsp; Army</option>
                                        <option value='54'>&nbsp; Navy</option>
                                        <option value='55'>&nbsp; Airforce</option>
                                    </optgroup>
                                    <optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- EDUCATION --' class='a' >
                                        <option value='5'>&nbsp; Professor / Lecturer</option>
                                        <option value='4'>&nbsp; Teaching / Academician</option>
                                        <option value='6'>&nbsp; Education Professional</option>
                                    </optgroup>
                                        <optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- HOSPITALITY --' class='a' >
                                        <option value='34'>&nbsp; Hotel / Hospitality Professional</option>
                                    </optgroup>
                                    <optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- IT & ENGINEERING --' class='a' >
                                        <option value='1'>&nbsp; Software Professional</option>
                                        <option value='2'>&nbsp; Hardware Professional</option>
                                        <option value='3'>&nbsp; Engineer - Non IT</option>
                                        <option value='65'>&nbsp; Designer</option>
                                    </optgroup>
                                    <optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- LEGAL --' class='a' >
                                        <option value='17'>&nbsp; Lawyer & Legal Professional</option>
                                    </optgroup>
                                    <optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- LAW ENFORCEMENT --' class='a' >
                                        <option value='18'>&nbsp; Law Enforcement Officer</option>
                                    </optgroup>
                                    <optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- MEDICAL --' class='a' >
                                        <option value='12'>&nbsp; Doctor</option>
                                        <option value='14'>&nbsp; Health Care Professional</option>
                                        <option value='15'>&nbsp; Paramedical Professional</option>
                                        <option value='13'>&nbsp; Nurse</option></optgroup>
                                    <optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- MARKETING & SALES --' class='a' >
                                        <option value='42'>&nbsp; Marketing Professional</option>
                                        <option value='43'>&nbsp; Sales Professional</option>
                                    </optgroup>
                                    <optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- MEDIA & ENTERTAINMENT --' class='a' >
                                        <option value='27'>&nbsp; Journalist</option>
                                        <option value='22'>&nbsp; Media Professional</option>
                                        <option value='24'>&nbsp; Entertainment Professional</option>
                                        <option value='26'>&nbsp; Event Management Professional</option>
                                        <option value='21'>&nbsp; Advertising / PR Professional</option>
                                        <option value='66'>&nbsp; Designer</option>
                                    </optgroup>
                                    <optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- MERCHANT NAVY --' class='a' >
                                        <option value='32'>&nbsp; Mariner / Merchant Navy</option>
                                    </optgroup>
                                    <optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- SCIENTIST --' class='a' >
                                        <option value='35'>&nbsp; Scientist / Researcher</option>
                                    </optgroup>
                                        <optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- TOP MANAGEMENT --' class='a' >
                                        <option value='41'>&nbsp; CXO / President, Director, Chairman</option>
                                        <option value='70'>&nbsp; Business Analyst</option>
                                    </optgroup>
                                    <optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- OTHERS --' class='a' >
                                        <option value='45'>&nbsp; Consultant</option>
                                        <option value='40'>&nbsp; Customer Care Professional</option>
                                        <option value='36'>&nbsp; Social Worker</option>
                                        <option value='51'>&nbsp; Sportsman</option>
                                        <option value='44'>&nbsp; Technician</option>
                                        <option value='38'>&nbsp; Arts & Craftsman</option>
                                        <option value='67'>&nbsp; Student</option>
                                        <option value='68'>&nbsp; Librarian</option>
                                        <option value='888' >&nbsp; Not Working</option>
                                    </optgroup>
                                            
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Employed in <span class="imp">* </span>:</td>
                            <td>
                                <label class="radio inline"><input type="radio" name="emp_field" id="emp_field1" value="1"> Government </label>
                              <label class="radio inline">  <input type="radio" name="emp_field" id="emp_field2" value="2"> Business </label>
                              <label class="radio inline">  <input type="radio" name="emp_field" id="emp_field3" value="3"> Private </label>
                              <label class="radio inline">  <input type="radio" name="emp_field" id="emp_field4" value="4"> Defence </label>
                             <label class="radio inline">   <input type="radio" name="emp_field" id="emp_field5" value="5"> Self Employed </label>
                            </td>
                        </tr>
                        <tr>
                            <td>Income :</td>
                            <td>
                                
                                <label class="radio inline"><input type="radio" name="income_type" id="income_type1" value="1"> Monthly </label>
                                <label class="radio inline"> <input type="radio" name="income_type" id="income_type0" value="0"> Yearly </label>
                              
                                   <select name="inc_currency" id="inc_currency">
                                        <option value="">Select</option>
                                        <option value="1" >Nepal - NPR</option>
                                        <option value="2" >India - Rs.</option>
                                        <option value="3" >United States of America - USD</option>
                                        <option value="4" >United Arab Emirates - AED</option>
                                        <option value="5" >United Kingdom - GBP</option>
                                        <option value="6" >Australia - AUD</option>
                                        <option value="7" >Singapore - SGD</option>
                                        <option value="8" >Canada - CAD</option>
                                        <option value="9" >Qatar - QAR</option>
                                        <option value="10" >Kuwait - KWD</option>
                                        <option value="11" >Oman - OMR</option>
                                        <option value="12" >Bahrain - BHD</option>
                                        <option value="13" >Saudi Arabia - SAR</option>
                                        <option value="14">Malaysia - MYR</option>
                                        <option value="15" >Germany - EUR</option>
                                        <option value="16" >New Zealand - NZD</option>
                                        <option value="17" >France - EUR</option>
                                        <option value="18" >Ireland - EUR</option>
                                        <option value="19" >Switzerland - CHF</option>
                                        <option value="20" >South Africa - ZAR</option>
                                        <option value="21" >Sri Lanka - LKR</option>
                                        <option value="22" >Pakistan - PKR</option>
                                        <option value="23" >Bangladesh - BDT</option>
                                        <option value="24" >Afghanistan - AFA</option>
                                    </select>	
                                    
                                    <input type="text" name="income" id="income">
                                
                                   
                            </td>
                        </tr>
                    </table>            				          
        	</div>
  			<div id="step-4" >
                <h2 class="StepTitle">Habits/Description/Family Profile</h2>	
                    <table cellpadding="3px" class="table table-bordered ">
                    <tr>
                        <th colspan="2">Habits</th>
                    </tr>
                    <tr>
                        <td>Food :</td>
                        <td><label class="radio inline"><input type="radio" name="food" id="food1" value="1"> Vegetarian </label>
                            <label class="radio inline"><input type="radio" name="food" id="food1" value="2"> Non-Vegetarian </label>
                            <label class="radio inline"><input type="radio" name="food" id="food1" value="3"> Eggetarian </label>
                        </td>
                    </tr>
                    <tr>
                        <td>Smoking :</td>
                        <td><label class="radio inline"><input type="radio" name="smoke" id="smoke1" value="1"> No </label>
                            <label class="radio inline"><input type="radio" name="smoke" id="smoke2" value="2"> Ocassionally</label>
                            <label class="radio inline"><input type="radio" name="smoke" id="smoke3" value="3"> Yes </label>
                        </td>
                    </tr>
                    <tr>
                        <td>Drinking :</td>
                        <td><label class="radio inline"><input type="radio" name="drink" id="drink1" value="1"> No </label>
                            <label class="radio inline"><input type="radio" name="drink" id="drink2" value="2"> Ocassionally</label>
                           <label class="radio inline"> <input type="radio" name="drink" id="drink3" value="3"> Yes </label>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="2">Family Profile</th>
                    </tr>
                    <tr>
                        <td>Family Status <span class="imp">* </span>:</td>
                        <td><label class="radio inline"><input type="radio" name="family_stat" id="family_stat1" value="1"> Middle Class </label>
                            <label class="radio inline"><input type="radio" name="family_stat" id="family_stat2" value="2"> Upper Middle Class</label>
                            <label class="radio inline"><input type="radio" name="family_stat" id="family_stat3" value="3"> Rich</label>
                            <label class="radio inline"><input type="radio" name="family_stat" id="family_stat4" value="4"> Affluent </label>
                        </td>
                    </tr>
                    <tr>
                        <td>Family Type <span class="imp">* </span>:</td>
                        <td><label class="radio inline"><input type="radio" name="family_type" id="family_type1" value="1"> Joint </label>
                           <label class="radio inline"> <input type="radio" name="family_type" id="family_type2" value="2"> Nuclear</label>
                        </td>
                    </tr>
                    <tr>
                        <td>Family Values <span class="imp">* </span>:</td>
                        <td><label class="radio inline"><input type="radio" name="family_value" id="family_value1" value="1"> Orthodox </label>
                            <label class="radio inline"><input type="radio" name="family_value" id="family_value2" value="2"> Traditional</label>
                           <label class="radio inline"> <input type="radio" name="family_value" id="family_value3" value="3"> Moderate </label>
                            <label class="radio inline"><input type="radio" name="family_value" id="family_value4" value="4"> Liberal </label>
                        </td>
                    </tr>
                    <tr>
                        <th>Description <span class="imp">* </span></th>
                        <td>
                                        
                            <p>Write about your unique characteristics, the most important things in your life like your aspirations, interests, things you like to do, places you like to visit, etc.,</p>
                            <textarea name="description" id="description"></textarea>
                        </td>
                    </tr>
                    </table>

       		</div>
      
        

  		</div>
<!-- End SmartWizard Content -->  		
 		
</td></tr>

</table>
</form>

<style>
.imp{
	color:#F00;
}
</style>

