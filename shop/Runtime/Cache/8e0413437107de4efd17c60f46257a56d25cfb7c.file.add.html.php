<?php /* Smarty version Smarty-3.1.6, created on 2017-01-10 23:07:29
         compiled from "../Tpl/admin\Manager\add.html" */ ?>
<?php /*%%SmartyHeaderCode:204815874f753f28f39-97400955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e0413437107de4efd17c60f46257a56d25cfb7c' => 
    array (
      0 => '../Tpl/admin\\Manager\\add.html',
      1 => 1484060847,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204815874f753f28f39-97400955',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5874f7541c9b0',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5874f7541c9b0')) {function content_5874f7541c9b0($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'E:\\wamp\\www\\github\\thinkphp\\ThinkPHP\\Extend\\Vendor\\Smarty\\plugins\\function.html_options.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>添加管理员</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：管理员管理-》添加管理员信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__GROUP__;?>
/Good/showList">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>管理员名称</td>
                    <td><input type="text" name="mg_name" /></td>
                </tr>
                <tr>
                	<td>角色</td>
                	<td>
                		<select name="mg_role_id">
	                		<?php echo smarty_function_html_options(array('options'=>($_smarty_tpl->tpl_vars['role_info']->value),'selected'=>2),$_smarty_tpl);?>

                		</select>
                	</td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="添加角色">
                    </td>
                </tr>  
            </table>
            </form>
        </div>
    </body>
</html><?php }} ?>