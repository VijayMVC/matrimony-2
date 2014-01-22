<div region="center" border="false">
    <div style="padding:20px">
        <h3>Member Form</h3>
        <hr>
    </div>
<div id="form" style="padding-left:50px">
<form id="form-member" method="post" enctype="multipart/form-data">
            <div style="float:left;padding-left:100px">
                <table align="center">
                    <tr>
                          <td width="34%" ><label><?=lang('username')?>:</label></td>
                          <td width="66%"><input name="username" id="username" class="easyui-validatebox" required="true" value="<?php echo $member['username']?>"></td>
                   </tr><tr>
                          <td width="34%" ><label><?=lang('gender')?>:</label></td>
                          <td width="66%"><label><input type="radio" name="gender" id="gender1" value="1" required="true" <?php echo ($member['gender']=='1')?'checked="checked"':''?>> Male </label>
                                <label><input type="radio" name="gender" id="gender2" value="2" required="true" <?php echo ($member['gender']=='2')?'checked="checked"':''?>> Female</label>
                          </td>
                   </tr><tr>
                          <td width="34%" ><label><?=lang('dob')?>:</label></td>
                          <td width="66%"><input name="dob" id="dob" class="easyui-datebox" required="true" value="<?php echo $member['dob']?>"></td>
                   </tr><tr>
                          <td width="34%" ><label><?=lang('profile_of')?>:</label></td>
                          <td width="66%"><select name="profile_of" id="profile_of" class="easyui-combobox" required="true">
                                            <option value="">Select</option>
                                            <option value="1" <?php echo ($member['profile_of']=='1')?'selected="selected"':''?>>Myself</option>
                                            <option value="2" <?php echo ($member['profile_of']=='2')?'selected="selected"':''?>>Son</option>
                                            <option value="3" <?php echo ($member['profile_of']=='3')?'selected="selected"':''?>>Daughter</option>
                                            <option value="4" <?php echo ($member['profile_of']=='4')?'selected="selected"':''?>>Brother</option>
                                            <option value="5" <?php echo ($member['profile_of']=='5')?'selected="selected"':''?>>Sister</option>
                                            <option value="6" <?php echo ($member['profile_of']=='6')?'selected="selected"':''?>>Relative</option>
                                            <option value="7" <?php echo ($member['profile_of']=='7')?'selected="selected"':''?>>Friend</option>
                                        </select>
                          </td>
                   </tr><tr>
                          <td width="34%" ><label><?=lang('religion')?>:</label></td>
                          <td width="66%"><select name="religion" id="religion" class="easyui-combobox" required="true">
                                            <option value="">Select</option>
                                            <option value="1" <?php echo ($member['religion']=='1')?'selected="selected"':''?>>Hindu</option>
                                            <option value="2" <?php echo ($member['religion']=='2')?'selected="selected"':''?>>Muslim</option>
                                            <option value="3" <?php echo ($member['religion']=='3')?'selected="selected"':''?>>Christian</option>
                                            <option value="4" <?php echo ($member['religion']=='4')?'selected="selected"':''?>>Sikh</option>
                                            <option value="5" <?php echo ($member['religion']=='5')?'selected="selected"':''?>>Jain</option>
                                            <option value="6" <?php echo ($member['religion']=='6')?'selected="selected"':''?>>Parsi</option>
                                            <option value="7" <?php echo ($member['religion']=='7')?'selected="selected"':''?>>Buddhist</option>
                                            <option value="8" <?php echo ($member['religion']=='8')?'selected="selected"':''?>>Inter-Religion</option>
                                            <option value="9" <?php echo ($member['religion']=='9')?'selected="selected"':''?>>No Religious Belief</option>
                                        </select>
                          </td>
                   </tr><tr>
                          <td width="34%" ><label><?=lang('mother_lang')?>:</label></td>
                          <td width="66%"><input name="mother_lang" id="mother_lang" class="easyui-numberbox" required="true" value="<?php echo $member['mother_lang']?>"></td>
                   </tr><tr>
                          <td width="34%" ><label><?=lang('caste')?>:</label></td>
                          <td width="66%"><input name="caste" id="caste" class="easyui-numberbox" required="true" value="<?php echo $member['caste']?>"></td>
                   </tr><tr>
                          <td width="34%" ><label><?=lang('country')?>:</label></td>
                          <td width="66%"><input name="country" id="country" class="easyui-combobox" required="true" value="<?php echo $member['country']?>"></td>
                   </tr><tr>
                          <td width="34%" ><label><?=lang('contact')?>:</label></td>
                          <td width="66%"><input name="contact" id="contact" class="easyui-validatebox" required="true" value="<?php echo $member['contact']?>"></td>
                   </tr><tr>
                          <td width="34%" ><label><?=lang('mobile')?>:</label></td>
                          <td width="66%"><input name="mobile" id="mobile" class="easyui-validatebox" required="true" value="<?php echo $member['mobile']?>"></td>
                   </tr><tr>
                          <td width="34%" ><label><?=lang('email')?>:</label></td>
                          <td width="66%"><input name="email" id="email" class="easyui-validatebox" required="true" value="<?php echo $member['email']?>"></td>
                   </tr>
                   <tr>
                          <td width="34%" ><label><?=lang('martial_status')?>:</label></td>
                          <td width="66%"><input name="martial_status" id="martial_status" class="easyui-numberbox" required="true" value="<?php echo $member['martial_status']?>"></td>
                   </tr><tr>
                          <td width="34%" ><label><?=lang('caste_allowed')?>:</label></td>
                          <td width="66%"><input name="caste_allowed" id="caste_allowed" class="easyui-numberbox" required="true" value="<?php echo $member['caste_allowed']?>"></td>
                   </tr><tr>
                          <td width="34%" ><label><?=lang('sub_caste')?>:</label></td>
                          <td width="66%"><input name="sub_caste" id="sub_caste" class="easyui-validatebox" required="true" value="<?php echo $member['sub_caste']?>"></td>
                   </tr><tr>
                          <td width="34%" ><label><?=lang('state')?>:</label></td>
                          <td width="66%"><input name="state" id="state" class="easyui-validatebox" required="true" value="<?php echo $member['state']?>"></td>
                   </tr><tr>
                          <td width="34%" ><label><?=lang('city')?>:</label></td>
                          <td width="66%"><input name="city" id="city" class="easyui-validatebox" required="true" value="<?php echo $member['city']?>"></td>
                   </tr><tr>
                          <td width="34%" ><label><?=lang('citizenship')?>:</label></td>
                          <td width="66%"><input name="citizenship" id="citizenship" class="easyui-numberbox" required="true" value="<?php echo $member['citizenship']?>"></td>
                   </tr><tr>
                          <td width="34%" ><label><?=lang('height')?> in feet:</label></td>
                          <td width="66%"><input name="height_feet" id="height_feet" class="easyui-numberbox" required="true" value="<?php echo $member['height_feet']?>" placeholder="in feet"> OR <input name="height_cms" id="height_cms" class="easyui-numberbox" required="true" value="<?php echo $member['height_cms']?>" placeholder="in cms"></td>
                   </tr>
                   <tr>
                          <td width="34%" ><label><?=lang('weight')?> in kgs:</label></td>
                          <td width="66%"><input name="weight_kgs" id="weight_kgs" class="easyui-numberbox" required="true" value="<?php echo $member['weight_kgs']?>" placeholder="in kgs"> OR <input name="weight_lbs" id="weight_lbs" class="easyui-numberbox" required="true" value="<?php echo $member['weight_lbs']?>" placeholder="in lbs"></td>
                   </tr>
                   <tr>
                          <td width="34%" ><label><?=lang('body_type')?>:</label></td>
                          <td width="66%"><input name="body_type" id="body_type" class="easyui-numberbox" required="true" value="<?php echo $member['body_type']?>"></td>
                   </tr><tr>
                          <td width="34%" ><label><?=lang('complexion')?>:</label></td>
                          <td width="66%"><input name="complexion" id="complexion" class="easyui-numberbox" required="true" value="<?php echo $member['complexion']?>"></td>
                   </tr><tr>
                          <td width="34%" ><label><?=lang('physical_status')?>:</label></td>
                          <td width="66%"><input name="physical_status" id="physical_status" class="easyui-numberbox" required="true" value="<?php echo $member['physical_status']?>"></td>
                   </tr>
               </table>
           </div>
           <div style="float:right;padding-right:100px">
               <table>
               		<tr>
                          <td width="34%" ><label><?=lang('qualification')?>:</label></td>
                          <td width="66%"><input name="qualification" id="qualification" class="easyui-numberbox" required="true" value="<?php echo $member['qualification']?>"></td>
                   </tr><tr>
                          <td width="34%" ><label><?=lang('occupation')?>:</label></td>
                          <td width="66%"><input name="occupation" id="occupation" class="easyui-numberbox" required="true" value="<?php echo $member['occupation']?>"></td>
                   </tr><tr>
                          <td width="34%" ><label><?=lang('emp_field')?>:</label></td>
                          <td width="66%"><input name="emp_field" id="emp_field" class="easyui-numberbox" required="true" value="<?php echo $member['emp_field']?>"></td>
                   </tr><tr>
                          <td width="34%" ><label><?=lang('income_type')?>:</label></td>
                          <td width="66%"><label><input type="radio" name="income_type" id="income_type1" value="1" <?php echo ($member['income_type']=='1')? 'selected="selected"':''?>> Monthly </label>
                                    <label><input type="radio" name="income_type" id="income_type2" value="2" <?php echo ($member['income_type']=='2')? 'selected="selected"':''?>> Yearly </label></td>
                   </tr><tr>
                          <td width="34%" ><label><?=lang('income')?>:</label></td>
                          <td width="66%"><input name="inc_currency" id="inc_currency" class="easyui-numberbox" required="true" value="<?php echo $member['inc_currency']?>" placeholder="Currency"> <input name="income" id="income" class="easyui-validatebox" required="true" value="<?php echo $member['income']?>" placeholder="Income"></td>
                   </tr><tr>
                          <td width="34%" ><label><?=lang('food')?>:</label></td>
                          <td width="66%"><input name="food" id="food" class="easyui-numberbox" required="true" value="<?php echo $member['food']?>"></td>
                   </tr><tr>
                          <td width="34%" ><label><?=lang('smoke')?>:</label></td>
                          <td width="66%"><input name="smoke" id="smoke" class="easyui-numberbox" required="true" value="<?php echo $member['smoke']?>"></td>
                   </tr><tr>
                          <td width="34%" ><label><?=lang('drink')?>:</label></td>
                          <td width="66%"><input name="drink" id="drink" class="easyui-numberbox" required="true" value="<?php echo $member['drink']?>"></td>
                   </tr><tr>
                          <td width="34%" ><label><?=lang('family_stat')?>:</label></td>
                          <td width="66%"><input name="family_stat" id="family_stat" class="easyui-numberbox" required="true" value="<?php echo $member['family_stat']?>"></td>
                   </tr><tr>
                          <td width="34%" ><label><?=lang('family_value')?>:</label></td>
                          <td width="66%"><input name="family_value" id="family_value" class="easyui-numberbox" required="true" value="<?php echo $member['family_value']?>"></td>
                   </tr><tr>
                          <td width="34%" ><label><?=lang('family_type')?>:</label></td>
                          <td width="66%"><input name="family_type" id="family_type" class="easyui-numberbox" required="true" value="<?php echo $member['family_type']?>"></td>
                   </tr><tr>
                          <td width="34%" ><label><?=lang('description')?>:</label></td>
                          <td width="66%"><textarea name="description" id="description" class="easyui-validatebox" required="true" style="width:300px;height:100px"><?php echo $member['description']?></textarea></td>
                   </tr><tr>
                          <td width="34%" ><label><?=lang('photo')?>:</label></td>
                          <td width="66%"><label id="upload_image_name" style="display:none"></label>
                            <input name="photo" id="photo" type="text" style="display:none"/>
                            <input type="file" id="upload_image" name="userfile" style="display:block"/>
                            <a href="#" id="change-image" title="Delete" style="display:none"><img src="<?= base_url() ?>assets/icons/delete.png" border="0"/></a></td>
                   </tr><tr>
                          <td width="34%" ><label><?=lang('photo_validation')?>:</label></td>
                          <td width="66%"><input type="radio" value="1" name="photo_validation" id="photo_validation1" /><?=lang("general_yes")?> <input type="radio" value="0" name="photo_validation" id="photo_validation0" /><?=lang("general_no")?></td>
                   </tr><tr>
                          <td width="34%" ><label><?=lang('member_status')?>:</label></td>
                          <td width="66%"><input type="radio" value="1" name="member_status" id="member_status1" /><?=lang("general_yes")?> <input type="radio" value="0" name="member_status" id="member_status0" /><?=lang("general_no")?></td>
                   </tr>
               </table>
           </div>
           <div style="clear:both">
       <br/>
       <div align="center">
           <input type="hidden" name="member_id" id="member_id" value="<?php echo $member['member_id']?>"/>
           <a href="#" class="easyui-linkbutton" iconCls="icon-ok" onClick="save()"><?php  echo  lang('general_save')?></a>
           <a href="<?php echo site_url('member/admin/member/index')?>" iconCls="icon-cancel" class="easyui-linkbutton">Cancel</a>
       </div>
</form>
 </div>
</div>  
<script>
$(function(){
	$("#country").combobox({url:"<?php echo site_url('country/admin/country/combo_json')?>", valueField:"country_id", textField:"country_name"});
	$("#citizenship").combobox({url:"<?php echo site_url('country/admin/country/combo_json')?>", valueField:"country_id", textField:"country_name"});
	
	uploadReady();
	
	});
	
	function save()
	{
		$('#form-member').form('submit',{
			url: '<?php  echo site_url('member/admin/member/save')?>',
			onSubmit: function(){
				return $(this).form('validate');
			},
			success: function(result){
				var result = eval('('+result+')');
				if (result.success)
				{
					$('#form-member').form('clear');
					$('#dlg').window('close');		// close the dialog
					$.messager.show({title: '<?php  echo lang('success')?>',msg: result.msg});
					$('#member-table').datagrid('reload');	// reload the user data
				} 
				else 
				{
					$.messager.show({title: '<?php  echo lang('error')?>',msg: result.msg});
				} //if close
			}//success close
		
		});		
		
	}
	$('#change-image').click(function(){
            var filename = $('#photo').val();
            $.messager.confirm('Confirm','Are you sure?',function(r){
                if(r) {
                    $.post('<?php echo site_url('member/admin/member/upload_delete') ?>',{ filename: filename },function(){
            
                        $('#photo').val('');
                        $('#upload_image_name').html('');
                        $('#upload_image_name').hide();
                        $('#change-image').hide();
                        $('#upload_image').show();
                    });
                }
            });
        }); 
		
	
function uploadReady()
	{
		uploader=$('#upload_image');
		new AjaxUpload(uploader, {
			action: '<?php  echo site_url('member/admin/member/upload_image')?>',
			name: 'userfile',
			responseType: "json",
			onSubmit: function(file, ext){
				 if (! (ext && /^(jpg|png|jpeg|gif)$/.test(ext))){ 
                    // extension is not allowed 
					$.messager.show({title: '<?php  echo lang('error')?>',msg: 'Only JPG, PNG or GIF files are allowed'});
					return false;
				}
				//status.text('Uploading...');
			},
			onComplete: function(file, response){
				if(response.error==null){
					var filename = response.file_name;
					$('#upload_image').hide();
					$('#photo').val(filename);
					$('#upload_image_name').html(filename);
					$('#upload_image_name').show();
					$('#change-image').show();
				}
                else
                {
					$.messager.show({title: '<?php  echo lang('error')?>',msg: response.error});                
                }
			}		
		});		
	}   
</script>