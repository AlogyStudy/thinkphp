<?php /* Smarty version Smarty-3.1.6, created on 2017-01-10 22:52:05
         compiled from "../Tpl/admin\Manager\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:321025874f353aecf84-80349628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ed605f434e5b2a28b689d03ef8619e5e094c6ec' => 
    array (
      0 => '../Tpl/admin\\Manager\\showlist.html',
      1 => 1484059923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '321025874f353aecf84-80349628',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5874f353eb79f',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'role_info' => 0,
    'page_list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5874f353eb79f')) {function content_5874f353eb79f($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>管理员列表</title>

        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
    	
        <style>
            .tr_color{background-color: #9F88FF}
        </style>
       
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：管理员管理-》管理员列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__URL__;?>
/add">【添加管理员】</a>
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
                        <td>管理员名称</td>
                        <td>角色</td>
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
                        <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['mg_name'];?>
</a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['role_info']->value[$_smarty_tpl->tpl_vars['v']->value['mg_role_id']];?>
</td>
                    </tr>
                    <?php } ?>
                    
                    <?php if ($_smarty_tpl->tpl_vars['page_list']->value){?>
                    <tr>
                    	<td colspan="20" style="text-align: center;">
                    		<?php echo $_smarty_tpl->tpl_vars['page_list']->value;?>
		
                    	</td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </body>
</html><?php }} ?>