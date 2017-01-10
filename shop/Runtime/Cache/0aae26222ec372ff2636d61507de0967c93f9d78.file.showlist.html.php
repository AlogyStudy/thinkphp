<?php /* Smarty version Smarty-3.1.6, created on 2017-01-10 19:09:00
         compiled from "../Tpl/admin\Role\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:93575874b713c0fce8-88491810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0aae26222ec372ff2636d61507de0967c93f9d78' => 
    array (
      0 => '../Tpl/admin\\Role\\showlist.html',
      1 => 1484046527,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93575874b713c0fce8-88491810',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5874b7140092f',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'page_list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5874b7140092f')) {function content_5874b7140092f($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>角色列表</title>

        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
    	
        <style>
            .tr_color{background-color: #9F88FF}
        </style>
       
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：角色管理-》角色列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__URL__;?>
/add">【添加角色】</a>
                </span>
            </span>
        </div>
        <div></div>
        <div class="div_search">
            <span>
                <form action="#" method="get">
                    品牌<select name="s_product_mark" style="width: 100px;">
                        <option selected="selected" value="0">请选择</option>
                        <option value="1">苹果apple</option>
                    </select>
                    <input value="查询" type="submit" />
                </form>
            </span>
        </div>
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody><tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>角色名称</td>
                        <td>权限</td>
                        <td align="center" colspan="2" style="text-align: center;">操作</td>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v']->iteration++;
?>
                    <tr id="product1">
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['role_name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['role_auth_ac'];?>
</td>
                        <td><a href="<?php echo @__GROUP__;?>
/Role/distribute/role_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['role_id'];?>
">分配权限</a></td>
                        <td><a href="javascript:;" onclick="delete_product(1)">删除</a></td>
                    </tr>
                    <?php } ?>
                    
                    <tr>
                    	<td colspan="20" style="text-align: center;">
                    		<?php echo $_smarty_tpl->tpl_vars['page_list']->value;?>
		
                    	</td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </body>
</html><?php }} ?>