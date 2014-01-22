<div region="center" border="false">
<div style="padding:20px">
<div id="search-panel" class="easyui-panel" data-options="title:'<?php  echo lang('member_search')?>',collapsible:true,iconCls:'icon-search'" style="padding:5px">
<form action="" method="post" id="member-search-form">
<table width="100%" border="1" cellspacing="1" cellpadding="1">
<tr><td><label><?=lang('username')?></label>:</td>
<td><input type="text" name="search[username]" id="search_username"  class="easyui-validatebox"/></td>
<td><label><?=lang('gender')?></label>:</td>
<td><input type="text" name="search[gender]" id="search_gender"  class="easyui-numberbox"/></td>
</tr>
<!--<tr>
<td><label><?=lang('dob')?></label>:</td>
<td><input type="text" name="date[dob][from]" id="search_dob_from"  class="easyui-datebox"/> ~ <input type="text" name="date[dob][to]" id="search_dob_to"  class="easyui-datebox"/></td>
<td><label><?=lang('profile_of')?></label>:</td>
<td><input type="text" name="search[profile_of]" id="search_profile_of"  class="easyui-numberbox"/></td>
</tr>
<tr>
<td><label><?=lang('religion')?></label>:</td>
<td><input type="text" name="search[religion]" id="search_religion"  class="easyui-numberbox"/></td>
<td><label><?=lang('mother_lang')?></label>:</td>
<td><input type="text" name="search[mother_lang]" id="search_mother_lang"  class="easyui-numberbox"/></td>
</tr>-->
<tr>
<td><label><?=lang('caste')?></label>:</td>
<td><input type="text" name="search[caste]" id="search_caste"  class="easyui-numberbox"/></td>
<td><label><?=lang('country')?></label>:</td>
<td><input type="text" name="search[country]" id="search_country"  class="easyui-numberbox"/></td>
</tr>
<tr>
<td><label><?=lang('contact')?></label>:</td>
<td><input type="text" name="search[contact]" id="search_contact"  class="easyui-validatebox"/></td>
<td><label><?=lang('mobile')?></label>:</td>
<td><input type="text" name="search[mobile]" id="search_mobile"  class="easyui-validatebox"/></td>
</tr>
<tr>
<td><label><?=lang('email')?></label>:</td>
<td><input type="text" name="search[email]" id="search_email"  class="easyui-validatebox"/></td>
<td><label><?=lang('martial_status')?></label>:</td>
<td><input type="text" name="search[martial_status]" id="search_martial_status"  class="easyui-numberbox"/></td>
</tr>
<!--<tr>
<td><label><?=lang('caste_allowed')?></label>:</td>
<td><input type="text" name="search[caste_allowed]" id="search_caste_allowed"  class="easyui-numberbox"/></td>
<td><label><?=lang('sub_caste')?></label>:</td>
<td><input type="text" name="search[sub_caste]" id="search_sub_caste"  class="easyui-validatebox"/></td>
</tr>
<tr>
<td><label><?=lang('state')?></label>:</td>
<td><input type="text" name="search[state]" id="search_state"  class="easyui-validatebox"/></td>
<td><label><?=lang('city')?></label>:</td>
<td><input type="text" name="search[city]" id="search_city"  class="easyui-validatebox"/></td>
</tr>
<tr>
<td><label><?=lang('citizenship')?></label>:</td>
<td><input type="text" name="search[citizenship]" id="search_citizenship"  class="easyui-numberbox"/></td>
<td><label><?=lang('height')?></label>:</td>
<td><input type="text" name="search[height]" id="search_height"  class="easyui-numberbox"/></td>
</tr>
<tr>
<td><label><?=lang('weight')?></label>:</td>
<td><input type="text" name="search[weight]" id="search_weight"  class="easyui-numberbox"/></td>
<td><label><?=lang('body_type')?></label>:</td>
<td><input type="text" name="search[body_type]" id="search_body_type"  class="easyui-numberbox"/></td>
</tr>
<tr>
<td><label><?=lang('complexion')?></label>:</td>
<td><input type="text" name="search[complexion]" id="search_complexion"  class="easyui-numberbox"/></td>
<td><label><?=lang('physical_status')?></label>:</td>
<td><input type="text" name="search[physical_status]" id="search_physical_status"  class="easyui-numberbox"/></td>
</tr>
--><tr>
<td><label><?=lang('qualification')?></label>:</td>
<td><input type="text" name="search[qualification]" id="search_qualification"  class="easyui-numberbox"/></td>
<td><label><?=lang('occupation')?></label>:</td>
<td><input type="text" name="search[occupation]" id="search_occupation"  class="easyui-numberbox"/></td>
</tr>
<!--<tr>
<td><label><?=lang('emp_field')?></label>:</td>
<td><input type="text" name="search[emp_field]" id="search_emp_field"  class="easyui-numberbox"/></td>
<td><label><?=lang('income_type')?></label>:</td>
<td><input type="text" name="search[income_type]" id="search_income_type"  class="easyui-numberbox"/></td>
</tr>
<tr>
<td><label><?=lang('inc_currency')?></label>:</td>
<td><input type="text" name="search[inc_currency]" id="search_inc_currency"  class="easyui-numberbox"/></td>
<td><label><?=lang('income')?></label>:</td>
<td><input type="text" name="search[income]" id="search_income"  class="easyui-validatebox"/></td>
</tr>-->
<!--<tr>
<td><label><?=lang('food')?></label>:</td>
<td><input type="text" name="search[food]" id="search_food"  class="easyui-numberbox"/></td>
<td><label><?=lang('smoke')?></label>:</td>
<td><input type="text" name="search[smoke]" id="search_smoke"  class="easyui-numberbox"/></td>
</tr>-->
<tr>
<!--<td><label><?=lang('drink')?></label>:</td>
<td><input type="text" name="search[drink]" id="search_drink"  class="easyui-numberbox"/></td>-->
<td><label><?=lang('family_stat')?></label>:</td>
<td><input type="text" name="search[family_stat]" id="search_family_stat"  class="easyui-numberbox"/></td>
</tr>
<!--<tr>
<td><label><?=lang('family_value')?></label>:</td>
<td><input type="text" name="search[family_value]" id="search_family_value"  class="easyui-numberbox"/></td>
<td><label><?=lang('family_type')?></label>:</td>
<td><input type="text" name="search[family_type]" id="search_family_type"  class="easyui-numberbox"/></td>
</tr>
<tr>
<td><label><?=lang('photo')?></label>:</td>
<td><input type="text" name="search[photo]" id="search_photo"  class="easyui-validatebox"/></td>
<td><label><?=lang('photo_validation')?></label>:</td>
<td><input type="radio" name="search[photo_validation]" id="search_photo_validation1" value="1"/><?=lang('general_yes')?>
								<input type="radio" name="search[photo_validation]" id="search_photo_validation0" value="0"/><?=lang('general_no')?></td>
</tr>-->
<tr>
<td><label><?=lang('member_status')?></label>:</td>
<td><input type="radio" name="search[member_status]" id="search_member_status1" value="1"/><?=lang('general_yes')?>
								<input type="radio" name="search[member_status]" id="search_member_status0" value="0"/><?=lang('general_no')?></td>
</tr>
  <tr>
    <td colspan="4">
    <a href="#" class="easyui-linkbutton" id="search" iconCls="icon-search"><?php  echo lang('search')?></a>  
    <a href="#" class="easyui-linkbutton" id="clear" iconCls="icon-clear"><?php  echo lang('clear')?></a>
    </td>
    </tr>
</table>

</form>
</div>
<br/>
<table id="member-table" data-options="pagination:true,title:'<?php  echo lang('member')?>',pagesize:'20', rownumbers:true,toolbar:'#toolbar',collapsible:true,fitColumns:true">
    <thead>
    <th field="checkbox" checkbox="true"></th>
    <th field="member_id" sortable="true" width="30"><?=lang('member_id')?></th>
<th field="username" sortable="true" width="50"><?=lang('username')?></th>
<th field="gender" sortable="true" width="50"><?=lang('gender')?></th>
<th field="dob" sortable="true" width="50"><?=lang('dob')?></th>
<th field="profile_of" sortable="true" width="50"><?=lang('profile_of')?></th>
<!--<th field="religion" sortable="true" width="50"><?=lang('religion')?></th>
<th field="mother_lang" sortable="true" width="50"><?=lang('mother_lang')?></th>-->
<!--<th field="caste" sortable="true" width="50"><?=lang('caste')?></th>-->
<th field="country" sortable="true" width="50"><?=lang('country')?></th>
<th field="contact" sortable="true" width="50"><?=lang('contact')?></th>
<!--<th field="mobile" sortable="true" width="50"><?=lang('mobile')?></th>-->
<th field="email" sortable="true" width="50"><?=lang('email')?></th>
<!--<th field="martial_status" sortable="true" width="30" align="center" formatter="formatStatus"><?=lang('martial_status')?></th>
<th field="caste_allowed" sortable="true" width="50"><?=lang('caste_allowed')?></th>
<th field="sub_caste" sortable="true" width="50"><?=lang('sub_caste')?></th>
<th field="state" sortable="true" width="50"><?=lang('state')?></th>
<th field="city" sortable="true" width="50"><?=lang('city')?></th>
<th field="citizenship" sortable="true" width="50"><?=lang('citizenship')?></th>
<th field="height" sortable="true" width="50"><?=lang('height')?></th>
<th field="weight" sortable="true" width="50"><?=lang('weight')?></th>
<th field="body_type" sortable="true" width="50"><?=lang('body_type')?></th>
<th field="complexion" sortable="true" width="50"><?=lang('complexion')?></th>
<th field="physical_status" sortable="true" width="30" align="center" formatter="formatStatus"><?=lang('physical_status')?></th>
<th field="qualification" sortable="true" width="50"><?=lang('qualification')?></th>
<th field="occupation" sortable="true" width="50"><?=lang('occupation')?></th>
<th field="emp_field" sortable="true" width="50"><?=lang('emp_field')?></th>
<th field="income_type" sortable="true" width="50"><?=lang('income_type')?></th>
<th field="inc_currency" sortable="true" width="50"><?=lang('inc_currency')?></th>
<th field="income" sortable="true" width="50"><?=lang('income')?></th>
<th field="food" sortable="true" width="50"><?=lang('food')?></th>
<th field="smoke" sortable="true" width="50"><?=lang('smoke')?></th>
<th field="drink" sortable="true" width="50"><?=lang('drink')?></th>-->
<th field="family_stat" sortable="true" width="50"><?=lang('family_stat')?></th>
<!--<th field="family_value" sortable="true" width="50"><?=lang('family_value')?></th>
<th field="family_type" sortable="true" width="50"><?=lang('family_type')?></th>
<th field="photo" sortable="true" width="50"><?=lang('photo')?></th>-->
<th field="photo_validation" sortable="true" width="50"><?=lang('photo_validation')?></th>
<th field="member_status" sortable="true" width="30" align="center" formatter="formatStatus"><?=lang('member_status')?></th>

    <th field="action" width="100" formatter="getActions"><?php  echo lang('action')?></th>
    </thead>
</table>

<div id="toolbar" style="padding:5px;height:auto">
    <p>
    <a href="<?php echo site_url('member/admin/member/form')?>" class="easyui-linkbutton" iconCls="icon-add" plain="false" title="<?php  echo lang('create_member')?>"><?php  echo lang('create')?></a>
    <a href="#" class="easyui-linkbutton" iconCls="icon-cancel" plain="false" onclick="removeSelected()"  title="<?php  echo lang('delete_member')?>"><?php  echo lang('remove_selected')?></a>
    </p>

</div> 

<!--for create and edit member form-->
<div id="dlg" class="easyui-dialog" style="width:600px;height:auto;padding:10px 20px"
        data-options="closed:true,collapsible:true,buttons:'#dlg-buttons',modal:true">
    <form id="form-member" method="post" >
    <table>
		<tr>
		              <td width="34%" ><label><?=lang('username')?>:</label></td>
					  <td width="66%"><input name="username" id="username" class="easyui-validatebox" required="true"></td>
		       </tr><tr>
		              <td width="34%" ><label><?=lang('gender')?>:</label></td>
					  <td width="66%"><input name="gender" id="gender" class="easyui-numberbox" required="true"></td>
		       </tr><tr>
		              <td width="34%" ><label><?=lang('dob')?>:</label></td>
					  <td width="66%"><input name="dob" id="dob" class="easyui-datebox" required="true"></td>
		       </tr><tr>
		              <td width="34%" ><label><?=lang('profile_of')?>:</label></td>
					  <td width="66%"><input name="profile_of" id="profile_of" class="easyui-numberbox" required="true"></td>
		       </tr><tr>
		              <td width="34%" ><label><?=lang('religion')?>:</label></td>
					  <td width="66%"><input name="religion" id="religion" class="easyui-numberbox" required="true"></td>
		       </tr><tr>
		              <td width="34%" ><label><?=lang('mother_lang')?>:</label></td>
					  <td width="66%"><input name="mother_lang" id="mother_lang" class="easyui-numberbox" required="true"></td>
		       </tr><tr>
		              <td width="34%" ><label><?=lang('caste')?>:</label></td>
					  <td width="66%"><input name="caste" id="caste" class="easyui-numberbox" required="true"></td>
		       </tr><tr>
		              <td width="34%" ><label><?=lang('country')?>:</label></td>
					  <td width="66%"><input name="country" id="country" class="easyui-numberbox" required="true"></td>
		       </tr><tr>
		              <td width="34%" ><label><?=lang('contact')?>:</label></td>
					  <td width="66%"><input name="contact" id="contact" class="easyui-validatebox" required="true"></td>
		       </tr><tr>
		              <td width="34%" ><label><?=lang('mobile')?>:</label></td>
					  <td width="66%"><input name="mobile" id="mobile" class="easyui-validatebox" required="true"></td>
		       </tr><tr>
		              <td width="34%" ><label><?=lang('email')?>:</label></td>
					  <td width="66%"><input name="email" id="email" class="easyui-validatebox" required="true"></td>
		       </tr><tr>
		              <td width="34%" ><label><?=lang('martial_status')?>:</label></td>
					  <td width="66%"><input name="martial_status" id="martial_status" class="easyui-numberbox" required="true"></td>
		       </tr><tr>
		              <td width="34%" ><label><?=lang('caste_allowed')?>:</label></td>
					  <td width="66%"><input name="caste_allowed" id="caste_allowed" class="easyui-numberbox" required="true"></td>
		       </tr><tr>
		              <td width="34%" ><label><?=lang('sub_caste')?>:</label></td>
					  <td width="66%"><input name="sub_caste" id="sub_caste" class="easyui-validatebox" required="true"></td>
		       </tr><tr>
		              <td width="34%" ><label><?=lang('state')?>:</label></td>
					  <td width="66%"><input name="state" id="state" class="easyui-validatebox" required="true"></td>
		       </tr><tr>
		              <td width="34%" ><label><?=lang('city')?>:</label></td>
					  <td width="66%"><input name="city" id="city" class="easyui-validatebox" required="true"></td>
		       </tr><tr>
		              <td width="34%" ><label><?=lang('citizenship')?>:</label></td>
					  <td width="66%"><input name="citizenship" id="citizenship" class="easyui-numberbox" required="true"></td>
		       </tr><tr>
		              <td width="34%" ><label><?=lang('height')?>:</label></td>
					  <td width="66%"><input name="height" id="height" class="easyui-numberbox" required="true"></td>
		       </tr><tr>
		              <td width="34%" ><label><?=lang('weight')?>:</label></td>
					  <td width="66%"><input name="weight" id="weight" class="easyui-numberbox" required="true"></td>
		       </tr><tr>
		              <td width="34%" ><label><?=lang('body_type')?>:</label></td>
					  <td width="66%"><input name="body_type" id="body_type" class="easyui-numberbox" required="true"></td>
		       </tr><tr>
		              <td width="34%" ><label><?=lang('complexion')?>:</label></td>
					  <td width="66%"><input name="complexion" id="complexion" class="easyui-numberbox" required="true"></td>
		       </tr><tr>
		              <td width="34%" ><label><?=lang('physical_status')?>:</label></td>
					  <td width="66%"><input name="physical_status" id="physical_status" class="easyui-numberbox" required="true"></td>
		       </tr><tr>
		              <td width="34%" ><label><?=lang('qualification')?>:</label></td>
					  <td width="66%"><input name="qualification" id="qualification" class="easyui-numberbox" required="true"></td>
		       </tr><tr>
		              <td width="34%" ><label><?=lang('occupation')?>:</label></td>
					  <td width="66%"><input name="occupation" id="occupation" class="easyui-numberbox" required="true"></td>
		       </tr><tr>
		              <td width="34%" ><label><?=lang('emp_field')?>:</label></td>
					  <td width="66%"><input name="emp_field" id="emp_field" class="easyui-numberbox" required="true"></td>
		       </tr><tr>
		              <td width="34%" ><label><?=lang('income_type')?>:</label></td>
					  <td width="66%"><input name="income_type" id="income_type" class="easyui-numberbox" required="true"></td>
		       </tr><tr>
		              <td width="34%" ><label><?=lang('inc_currency')?>:</label></td>
					  <td width="66%"><input name="inc_currency" id="inc_currency" class="easyui-numberbox" required="true"></td>
		       </tr><tr>
		              <td width="34%" ><label><?=lang('income')?>:</label></td>
					  <td width="66%"><input name="income" id="income" class="easyui-validatebox" required="true"></td>
		       </tr><tr>
		              <td width="34%" ><label><?=lang('food')?>:</label></td>
					  <td width="66%"><input name="food" id="food" class="easyui-numberbox" required="true"></td>
		       </tr><tr>
		              <td width="34%" ><label><?=lang('smoke')?>:</label></td>
					  <td width="66%"><input name="smoke" id="smoke" class="easyui-numberbox" required="true"></td>
		       </tr><tr>
		              <td width="34%" ><label><?=lang('drink')?>:</label></td>
					  <td width="66%"><input name="drink" id="drink" class="easyui-numberbox" required="true"></td>
		       </tr><tr>
		              <td width="34%" ><label><?=lang('family_stat')?>:</label></td>
					  <td width="66%"><input name="family_stat" id="family_stat" class="easyui-numberbox" required="true"></td>
		       </tr><tr>
		              <td width="34%" ><label><?=lang('family_value')?>:</label></td>
					  <td width="66%"><input name="family_value" id="family_value" class="easyui-numberbox" required="true"></td>
		       </tr><tr>
		              <td width="34%" ><label><?=lang('family_type')?>:</label></td>
					  <td width="66%"><input name="family_type" id="family_type" class="easyui-numberbox" required="true"></td>
		       </tr><tr>
		              <td width="34%" ><label><?=lang('description')?>:</label></td>
					  <td width="66%"><textarea name="description" id="description" class="easyui-validatebox" required="true" style="width:300px;height:100px"></textarea></td>
		       </tr><tr>
		              <td width="34%" ><label><?=lang('photo')?>:</label></td>
					  <td width="66%"><input name="photo" id="photo" class="easyui-validatebox" required="true"></td>
		       </tr><tr>
		              <td width="34%" ><label><?=lang('photo_validation')?>:</label></td>
					  <td width="66%"><input type="radio" value="1" name="photo_validation" id="photo_validation1" /><?=lang("general_yes")?> <input type="radio" value="0" name="photo_validation" id="photo_validation0" /><?=lang("general_no")?></td>
		       </tr><tr>
		              <td width="34%" ><label><?=lang('member_status')?>:</label></td>
					  <td width="66%"><input type="radio" value="1" name="member_status" id="member_status1" /><?=lang("general_yes")?> <input type="radio" value="0" name="member_status" id="member_status0" /><?=lang("general_no")?></td>
		       </tr><input type="hidden" name="member_id" id="member_id"/>
    </table>
    </form>
	<div id="dlg-buttons">
		<a href="#" class="easyui-linkbutton" iconCls="icon-ok" onClick="save()"><?php  echo  lang('general_save')?></a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onClick="javascript:$('#dlg').window('close')"><?php  echo  lang('general_cancel')?></a>
	</div>    
</div>
<!--div ends-->
   
</div>
</div>
<script language="javascript" type="text/javascript">
	$(function(){
		$('#clear').click(function(){
			$('#member-search-form').form('clear');
			$('#member-table').datagrid({
				queryParams:null
				});

		});

		$('#search').click(function(){
			$('#member-table').datagrid({
				queryParams:{data:$('#member-search-form').serialize()}
				});
		});		
		$('#member-table').datagrid({
			url:'<?php  echo site_url('member/admin/member/json')?>',
			height:'auto',
			width:'auto',
			onDblClickRow:function(index,row)
			{
				edit(index);
			}
		});
	});
	
	function getActions(value,row,index)
	{
		var e = '<a href="<?php echo site_url('member/admin/member/form/')?>/'+row.member_id+'" class="easyui-linkbutton l-btn" iconcls="icon-edit"  title="<?php  echo lang('edit_member')?>"><span class="l-btn-left"><span style="padding-left: 20px;" class="l-btn-text icon-edit"></span></span></a>';
		var d = '<a href="#" onclick="removemember('+index+')" class="easyui-linkbutton l-btn" iconcls="icon-remove"  title="<?php  echo lang('delete_member')?>"><span class="l-btn-left"><span style="padding-left: 20px;" class="l-btn-text icon-cancel"></span></span></a>';
		return e+d;		
	}
	
	function formatStatus(value)
	{
		if(value==1)
		{
			return 'Yes';
		}
		return 'No';
	}

	function create(){
		//Create code here
		$('#form-member').form('clear');
		$('#dlg').window('open').window('setTitle','<?php  echo lang('create_member')?>');
		//uploadReady(); //Uncomment This function if ajax uploading
	}	

	function edit(index)
	{
		var row = $('#member-table').datagrid('getRows')[index];
		if (row){
			$('#form-member').form('load',row);
			//uploadReady(); //Uncomment This function if ajax uploading
			$('#dlg').window('open').window('setTitle','<?php  echo lang('edit_member')?>');
		}
		else
		{
			$.messager.alert('Error','<?php  echo lang('edit_selection_error')?>');				
		}		
	}
	
		
	function removemember(index)
	{
		$.messager.confirm('Confirm','<?php  echo lang('delete_confirm')?>',function(r){
			if (r){
				var row = $('#member-table').datagrid('getRows')[index];
				$.post('<?php  echo site_url('member/admin/member/delete_json')?>', {id:[row.member_id]}, function(){
					$('#member-table').datagrid('deleteRow', index);
					$('#member-table').datagrid('reload');
				});

			}
		});
	}
	
	function removeSelected()
	{
		var rows=$('#member-table').datagrid('getSelections');
		if(rows.length>0)
		{
			selected=[];
			for(i=0;i<rows.length;i++)
			{
				selected.push(rows[i].member_id);
			}
			
			$.messager.confirm('Confirm','<?php  echo lang('delete_confirm')?>',function(r){
				if(r){				
					$.post('<?php  echo site_url('member/admin/member/delete_json')?>',{id:selected},function(data){
						$('#member-table').datagrid('reload');
					});
				}
				
			});
			
		}
		else
		{
			$.messager.alert('Error','<?php  echo lang('edit_selection_error')?>');	
		}
		
	}
	
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
	
	
</script>