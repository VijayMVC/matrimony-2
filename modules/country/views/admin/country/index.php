<div region="center" border="false">
<div style="padding:20px">
<div id="search-panel" class="easyui-panel" data-options="title:'<?php  echo lang('country_search')?>',collapsible:true,iconCls:'icon-search'" style="padding:5px">
<form action="" method="post" id="country-search-form">
<table width="100%" border="1" cellspacing="1" cellpadding="1">
<tr><td><label><?=lang('country_name')?></label>:</td>
<td><input type="text" name="search[country_name]" id="search_country_name"  class="easyui-validatebox"/></td>
<td><label><?=lang('code')?></label>:</td>
<td><input type="text" name="search[code]" id="search_code"  class="easyui-validatebox"/></td>
</tr>
<tr>
<td><label><?=lang('status')?></label>:</td>
<td><input type="radio" name="search[status]" id="search_status1" value="1"/><?=lang('general_yes')?>
								<input type="radio" name="search[status]" id="search_status0" value="0"/><?=lang('general_no')?></td>
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
<table id="country-table" data-options="pagination:true,title:'<?php  echo lang('country')?>',pagesize:'20', rownumbers:true,toolbar:'#toolbar',collapsible:true,fitColumns:true">
    <thead>
    <th field="checkbox" checkbox="true"></th>
    <th field="country_id" sortable="true" width="30"><?=lang('country_id')?></th>
<th field="country_name" sortable="true" width="50"><?=lang('country_name')?></th>
<th field="code" sortable="true" width="50"><?=lang('code')?></th>
<th field="status" sortable="true" width="30" align="center" formatter="formatStatus"><?=lang('status')?></th>

    <th field="action" width="100" formatter="getActions"><?php  echo lang('action')?></th>
    </thead>
</table>

<div id="toolbar" style="padding:5px;height:auto">
    <p>
    <a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="false" onclick="create()" title="<?php  echo lang('create_country')?>"><?php  echo lang('create')?></a>
    <a href="#" class="easyui-linkbutton" iconCls="icon-cancel" plain="false" onclick="removeSelected()"  title="<?php  echo lang('delete_country')?>"><?php  echo lang('remove_selected')?></a>
    </p>

</div> 

<!--for create and edit country form-->
<div id="dlg" class="easyui-dialog" style="width:600px;height:auto;padding:10px 20px"
        data-options="closed:true,collapsible:true,buttons:'#dlg-buttons',modal:true">
    <form id="form-country" method="post" >
    <table>
		<tr>
		              <td width="34%" ><label><?=lang('country_name')?>:</label></td>
					  <td width="66%"><input name="country_name" id="country_name" class="easyui-validatebox" required="true"></td>
		       </tr><tr>
		              <td width="34%" ><label><?=lang('code')?>:</label></td>
					  <td width="66%"><input name="code" id="code" class="easyui-validatebox" required="true"></td>
		       </tr><tr>
		              <td width="34%" ><label><?=lang('status')?>:</label></td>
					  <td width="66%"><input type="radio" value="1" name="status" id="status1" /><?=lang("general_yes")?> <input type="radio" value="0" name="status" id="status0" /><?=lang("general_no")?></td>
		       </tr><input type="hidden" name="country_id" id="country_id"/>
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
			$('#country-search-form').form('clear');
			$('#country-table').datagrid({
				queryParams:null
				});

		});

		$('#search').click(function(){
			$('#country-table').datagrid({
				queryParams:{data:$('#country-search-form').serialize()}
				});
		});		
		$('#country-table').datagrid({
			url:'<?php  echo site_url('country/admin/country/json')?>',
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
		var e = '<a href="#" onclick="edit('+index+')" class="easyui-linkbutton l-btn" iconcls="icon-edit"  title="<?php  echo lang('edit_country')?>"><span class="l-btn-left"><span style="padding-left: 20px;" class="l-btn-text icon-edit"></span></span></a>';
		var d = '<a href="#" onclick="removecountry('+index+')" class="easyui-linkbutton l-btn" iconcls="icon-remove"  title="<?php  echo lang('delete_country')?>"><span class="l-btn-left"><span style="padding-left: 20px;" class="l-btn-text icon-cancel"></span></span></a>';
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
		$('#form-country').form('clear');
		$('#dlg').window('open').window('setTitle','<?php  echo lang('create_country')?>');
		//uploadReady(); //Uncomment This function if ajax uploading
	}	

	function edit(index)
	{
		var row = $('#country-table').datagrid('getRows')[index];
		if (row){
			$('#form-country').form('load',row);
			//uploadReady(); //Uncomment This function if ajax uploading
			$('#dlg').window('open').window('setTitle','<?php  echo lang('edit_country')?>');
		}
		else
		{
			$.messager.alert('Error','<?php  echo lang('edit_selection_error')?>');				
		}		
	}
	
		
	function removecountry(index)
	{
		$.messager.confirm('Confirm','<?php  echo lang('delete_confirm')?>',function(r){
			if (r){
				var row = $('#country-table').datagrid('getRows')[index];
				$.post('<?php  echo site_url('country/admin/country/delete_json')?>', {id:[row.country_id]}, function(){
					$('#country-table').datagrid('deleteRow', index);
					$('#country-table').datagrid('reload');
				});

			}
		});
	}
	
	function removeSelected()
	{
		var rows=$('#country-table').datagrid('getSelections');
		if(rows.length>0)
		{
			selected=[];
			for(i=0;i<rows.length;i++)
			{
				selected.push(rows[i].country_id);
			}
			
			$.messager.confirm('Confirm','<?php  echo lang('delete_confirm')?>',function(r){
				if(r){				
					$.post('<?php  echo site_url('country/admin/country/delete_json')?>',{id:selected},function(data){
						$('#country-table').datagrid('reload');
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
		$('#form-country').form('submit',{
			url: '<?php  echo site_url('country/admin/country/save')?>',
			onSubmit: function(){
				return $(this).form('validate');
			},
			success: function(result){
				var result = eval('('+result+')');
				if (result.success)
				{
					$('#form-country').form('clear');
					$('#dlg').window('close');		// close the dialog
					$.messager.show({title: '<?php  echo lang('success')?>',msg: result.msg});
					$('#country-table').datagrid('reload');	// reload the user data
				} 
				else 
				{
					$.messager.show({title: '<?php  echo lang('error')?>',msg: result.msg});
				} //if close
			}//success close
		
		});		
		
	}
	
	
</script>