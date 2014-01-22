<div id="other_details">
	<form id="other_details" action="<?php echo site_url('home/detail')?>" method="post">
    	<table cellpadding="3px" class="table table-bordered table-striped">
        	<tr>
            	<th colspan="2">Education/Employment</th>
            </tr>
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
                	<input type="radio" name="emp_field" id="emp_field1" value="1"> Government 
                    <input type="radio" name="emp_field" id="emp_field2" value="2"> Business 
                    <input type="radio" name="emp_field" id="emp_field3" value="3"> Private 
                    <input type="radio" name="emp_field" id="emp_field4" value="4"> Defence 
                    <input type="radio" name="emp_field" id="emp_field5" value="5"> Self Employed 
                </td>
            </tr>
            <tr>
            	<td>Income :</td>
                <td>
                	<input type="radio" name="income_type" id="income_type1" value="1"> Monthly 
                    <input type="radio" name="income_type" id="income_type0" value="0"> Yearly 
                   
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
        
        <table cellpadding="3px" class="table table-bordered table-striped">
        	<tr>
            	<th colspan="2">Habits</th>
            </tr>
            <tr>
            	<td>Food :</td>
                <td><input type="radio" name="food" id="food1" value="1"> Vegetarian 
                    <input type="radio" name="food" id="food1" value="2"> Non-Vegetarian 
                    <input type="radio" name="food" id="food1" value="3"> Eggetarian 
                </td>
            </tr>
			<tr>
            	<td>Smoking :</td>
                <td><input type="radio" name="smoke" id="smoke1" value="1"> No 
                    <input type="radio" name="smoke" id="smoke2" value="2"> Ocassionally
                    <input type="radio" name="smoke" id="smoke3" value="3"> Yes 
                </td>
            </tr>
            <tr>
            	<td>Drinking :</td>
                <td><input type="radio" name="drink" id="drink1" value="1"> No 
                    <input type="radio" name="drink" id="drink2" value="2"> Ocassionally
                    <input type="radio" name="drink" id="drink3" value="3"> Yes 
                </td>
            </tr>
        </table>
        <table cellpadding="3px" class="table table-bordered table-striped">
        	<tr>
            	<th colspan="2">Family Profile</th>
            </tr>
            <tr>
            	<td>Family Status <span class="imp">* </span>:</td>
                <td><input type="radio" name="family_stat" id="family_stat1" value="1"> Middle Class 
                    <input type="radio" name="family_stat" id="family_stat2" value="2"> Upper Middle Class
                    <input type="radio" name="family_stat" id="family_stat3" value="3"> Rich
                    <input type="radio" name="family_stat" id="family_stat4" value="4"> Affluent 
                </td>
            </tr>
			<tr>
            	<td>Family Type <span class="imp">* </span>:</td>
                <td><input type="radio" name="family_type" id="family_type1" value="1"> Joint 
                    <input type="radio" name="family_type" id="family_type2" value="2"> Nuclear
                </td>
            </tr>
            <tr>
            	<td>Family Values <span class="imp">* </span>:</td>
                <td><input type="radio" name="family_value" id="family_value1" value="1"> Orthodox 
                    <input type="radio" name="family_value" id="family_value2" value="2"> Traditional
                    <input type="radio" name="family_value" id="family_value3" value="3"> Moderate 
                    <input type="radio" name="family_value" id="family_value4" value="4"> Liberal 
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
        <input type="hidden" name="member_id" id="member_id" value="<?php echo $member_id?>">
        <input type="submit" name="save" id="save" value="Save" class="btn btn-success">
    </form>
</div>

<style>
.imp{
	color:#FF0000;
}
</style>