<?php /* Smarty version Smarty-3.1.6, created on 2017-01-10 16:53:29
         compiled from "../Tpl/admin\Index\left.html" */ ?>
<?php /*%%SmartyHeaderCode:19570587482fe1ed5a9-48209715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e80bddc6d6d23944cf22cac33b73ff14a943fe02' => 
    array (
      0 => '../Tpl/admin\\Index\\left.html',
      1 => 1484038407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19570587482fe1ed5a9-48209715',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_587482fee8b98',
  'variables' => 
  array (
    'p_auth' => 0,
    'p_v' => 0,
    's_auth' => 0,
    's_v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587482fee8b98')) {function content_587482fee8b98($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <link href="<?php echo @ADMIN_CSS_URL;?>
admin.css" type="text/css" rel="stylesheet" />
        <script language=javascript>
            function expand(el)
            {
                childobj = document.getElementById("child" + el);

                if (childobj.style.display == 'none')
                {
                    childobj.style.display = 'block';
                }
                else
                {
                    childobj.style.display = 'none';
                }
                return;
            }
        </script>
    </head>
    <body>
        <table height="100%" cellspacing=0 cellpadding=0 width=170 background=<?php echo @ADMIN_IMAGE_URL;?>
menu_bg.jpg border=0>
               
				<tr>
					<td valign=top align=middle>
						
						<table cellspacing=0 cellpadding=0 width="100%" border=0>
							<tr>
							    <td height=10></td>
							</tr>
						</table>
						<?php  $_smarty_tpl->tpl_vars['p_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p_v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['p_auth']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p_v']->key => $_smarty_tpl->tpl_vars['p_v']->value){
$_smarty_tpl->tpl_vars['p_v']->_loop = true;
?>
						    
						<table cellspacing=0 cellpadding=0 width=150 border=0>
							<tr height=22>
							    <td style="padding-left: 30px" background=<?php echo @ADMIN_IMAGE_URL;?>
menu_bt.jpg>
							    	<a class=menuparent onclick=expand(<?php echo $_smarty_tpl->tpl_vars['p_v']->value['auth_id'];?>
) href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['p_v']->value['auth_name'];?>
</a></td>
							</tr>
							<tr height=4>
							    <td></td>
							</tr>
						</table>
						
						<table id=child<?php echo $_smarty_tpl->tpl_vars['p_v']->value['auth_id'];?>
 style="display: none" cellspacing=0 cellpadding=0 width=150 border=0>
							<?php  $_smarty_tpl->tpl_vars['s_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s_v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['s_auth']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s_v']->key => $_smarty_tpl->tpl_vars['s_v']->value){
$_smarty_tpl->tpl_vars['s_v']->_loop = true;
?>
							<?php if ($_smarty_tpl->tpl_vars['s_v']->value['auth_pid']==$_smarty_tpl->tpl_vars['p_v']->value['auth_id']){?>
							<tr height=20>
							    <td align=middle width=30><img height=9 src="<?php echo @ADMIN_IMAGE_URL;?>
menu_icon.gif" width=9></td>
							    <td><a class=menuchild  href="<?php echo @__GROUP__;?>
/<?php echo $_smarty_tpl->tpl_vars['s_v']->value['auth_c'];?>
/<?php echo $_smarty_tpl->tpl_vars['s_v']->value['auth_a'];?>
" target="right"><?php echo $_smarty_tpl->tpl_vars['s_v']->value['auth_name'];?>
</a></td>
							</tr>
							<tr height=4>
							  <td colspan=2></td>
							</tr>
							<?php }?>
							<?php } ?>
						</table>
					
						<?php } ?>
					</td>
					
					<td width=1 bgcolor=#d1e6f7></td>
				</tr>
            		
        </table>
    </body>
</html><?php }} ?>