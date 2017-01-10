<?php /* Smarty version Smarty-3.1.6, created on 2017-01-10 22:40:21
         compiled from "../Tpl/admin\Role\distribute.html" */ ?>
<?php /*%%SmartyHeaderCode:60525874bacf1983a8-08908465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b96aa88ecf82e35982ac3b1470ffd523e2fd70f' => 
    array (
      0 => '../Tpl/admin\\Role\\distribute.html',
      1 => 1484059091,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60525874bacf1983a8-08908465',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5874bacf23424',
  'variables' => 
  array (
    'role_name' => 0,
    'p_auth' => 0,
    'p_v' => 0,
    'role_auth_ids' => 0,
    's_auth' => 0,
    's_v' => 0,
    't_auth' => 0,
    't_v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5874bacf23424')) {function content_5874bacf23424($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>添加角色</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
        <style>
        	
        	li, ul {
        		list-style: none;
        	}
        	
        </style>
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：角色管理-》添加角色信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__GROUP__;?>
/Good/showList">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
        		<h2>当前权限：<?php echo $_smarty_tpl->tpl_vars['role_name']->value;?>
</h2>
            <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
            	<ul>
            		<?php  $_smarty_tpl->tpl_vars['p_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p_v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['p_auth']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p_v']->key => $_smarty_tpl->tpl_vars['p_v']->value){
$_smarty_tpl->tpl_vars['p_v']->_loop = true;
?>
            		<li>
            			<h3>
            				<?php echo $_smarty_tpl->tpl_vars['p_v']->value['auth_name'];?>
<input type="checkbox" name="auth_name[]" value="<?php echo $_smarty_tpl->tpl_vars['p_v']->value['auth_id'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['p_v']->value['auth_id'],$_smarty_tpl->tpl_vars['role_auth_ids']->value)){?> checked="checked"  <?php }?> />
            			</h3>
            			<?php  $_smarty_tpl->tpl_vars['s_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s_v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['s_auth']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s_v']->key => $_smarty_tpl->tpl_vars['s_v']->value){
$_smarty_tpl->tpl_vars['s_v']->_loop = true;
?>
            			<?php if ($_smarty_tpl->tpl_vars['s_v']->value['auth_pid']==$_smarty_tpl->tpl_vars['p_v']->value['auth_id']){?>
            			<ul>
            				<li>
            					<?php echo $_smarty_tpl->tpl_vars['s_v']->value['auth_name'];?>
 <input type="checkbox" name="auth_name[]" value="<?php echo $_smarty_tpl->tpl_vars['s_v']->value['auth_id'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['s_v']->value['auth_id'],$_smarty_tpl->tpl_vars['role_auth_ids']->value)){?> checked="checked" <?php }?>/>
            					<?php  $_smarty_tpl->tpl_vars['t_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t_v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['t_auth']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t_v']->key => $_smarty_tpl->tpl_vars['t_v']->value){
$_smarty_tpl->tpl_vars['t_v']->_loop = true;
?>
            						<?php if ($_smarty_tpl->tpl_vars['t_v']->value['auth_pid']==$_smarty_tpl->tpl_vars['s_v']->value['auth_id']){?>
            						<ul>
            							<li><?php echo $_smarty_tpl->tpl_vars['t_v']->value['auth_name'];?>
 <input type="checkbox" name="auth_name[]" value="<?php echo $_smarty_tpl->tpl_vars['t_v']->value['auth_id'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['t_v']->value['auth_id'],$_smarty_tpl->tpl_vars['role_auth_ids']->value)){?> checked="checked" <?php }?> /></li>
            						</ul>
            						<?php }?>
            					<?php } ?>
            				</li>
            			</ul>
            			<?php }?>
            			<?php } ?>
            		</li>
            		<?php } ?>
            	</ul>
            	<div><input type="submit" value="分配权限"></div>
            </form>
        </div>
    </body>
</html><?php }} ?>