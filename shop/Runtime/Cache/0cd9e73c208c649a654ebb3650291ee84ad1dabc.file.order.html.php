<?php /* Smarty version Smarty-3.1.6, created on 2017-01-07 23:47:06
         compiled from "../Tpl/home\Ucenter\order.html" */ ?>
<?php /*%%SmartyHeaderCode:2763258710617b25187-43793702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cd9e73c208c649a654ebb3650291ee84ad1dabc' => 
    array (
      0 => '../Tpl/home\\Ucenter\\order.html',
      1 => 1483802987,
      2 => 'file',
    ),
    'c4865507a796473fe02d38cbc004832b2d6455e4' => 
    array (
      0 => '../Tpl/home\\public\\layout.html',
      1 => 1483801647,
      2 => 'file',
    ),
    '0a6e46cd9ea730bad79b3970b4636d781648bf58' => 
    array (
      0 => '../Tpl/home\\public\\ucenterleft.tpl',
      1 => 1483804020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2763258710617b25187-43793702',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_587106185bea4',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587106185bea4')) {function content_587106185bea4($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="Generator" content="YONGDA v1.0" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="Keywords" content="YONGDA商城" />
        <meta name="Description" content="YONGDA商城" />
        
        <title>YONGDA商城 - Powered by YongDa</title>
        
        <link href="<?php echo @CSS_URL;?>
style.css" rel="stylesheet" type="text/css" />
        
    </head>
    <body class="index_body">
        <div class="block clearfix" style="position: relative; height: 98px;">
            <a href="#" name="top"><img class="logo" src="<?php echo @IMAGE_URL;?>
logo.gif"></a>

            <div id="topNav" class="clearfix">
                <div style="float: left;"> 
                    <font id="ECS_MEMBERZONE">
                        <div id="append_parent"></div>
                        欢迎光临本店&nbsp;
                        <a href="#"> 登录</a>
                        <a href="#">注册</a>
                    </font>
                </div>
                <div style="float: right;">
                    <a href="#">查看购物车</a>
                    |
                    <a href="#">选购中心</a>
                    |
                    <a href="#">标签云</a>
                    |
                    <a href="#">报价单</a>
                </div>
            </div>
            <div id="mainNav" class="clearfix">
                <a href="#" class="cur">首页<span></span></a>
                <a href="#">GSM手机<span></span></a>
                <a href="#">双模手机<span></span></a>
                <a href="#">手机配件<span></span></a>
                <a href="#">优惠活动<span></span></a>
                <a href="#">留言板<span></span></a>
            </div>
        </div>

        <div class="header_bg">
            <div style="float: left; font-size: 14px; color:white; padding-left: 15px;">
            </div>  

            <form id="searchForm" method="get" action="#">
                <input name="keywords" id="keyword" type="text" />
                <input name="imageField" value=" " class="go" style="cursor: pointer; background: url('<?php echo @IMAGE_URL;?>
sousuo.gif') no-repeat scroll 0% 0% transparent; width: 39px; height: 20px; border: medium none; float: left; margin-right: 15px; vertical-align: middle;" type="submit" />

            </form>
        </div>
        <div class="blank5"></div>
        <div class="header_bg_b">
            <div class="f_l" style="padding-left: 10px;">
                <img src="<?php echo @IMAGE_URL;?>
biao6.gif" />
                    北京市区，现在下单(截至次日00:30已出库)，<b>明天上午(9-14点)</b>送达 <b>免运费火热进行中！</b>
            </div>
            <div class="f_r" style="padding-right: 10px;">
                <img style="vertical-align: middle;" src="<?php echo @IMAGE_URL;?>
biao3.gif">
                    <span class="cart" id="ECS_CARTINFO">
                        <a href="#" title="查看购物车">您的购物车中有 0 件商品，总计金额 ￥0.00元。</a></span>
                    <a href="#"><img style="vertical-align: middle;" src="<?php echo @IMAGE_URL;?>
biao7.gif"></a>

            </div>
        </div>
        <div class="block box">
            <div class="blank"></div>
            <div id="ur_here">
                当前位置: <a href="#">首页</a> <code>&gt;</code> 用户中心 
            </div>
        </div>
        <div class="blank"></div>
				
				
       <div class="block clearfix">
       	
       		<?php /*  Call merged included template "public/ucenterleft.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("public/ucenterleft.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '2763258710617b25187-43793702');
content_58710d7ad3439($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "public/ucenterleft.tpl" */?>
       	
            <div class="AreaR">
                <div class="box">
                    <div class="box_1">
                        <div class="userCenterBox boxCenterList clearfix" style="">
                            <h5><span>收货人信息</span></h5>
                            <div class="blank"></div>
                            <form action="#" method="post" name="theForm">
                                <table bgcolor="#dddddd" border="0" cellpadding="5" cellspacing="1" width="100%">
                                    <tbody><tr>
                                            <td align="right" bgcolor="#ffffff">配送区域：</td>
                                            <td colspan="3" align="left" bgcolor="#ffffff">
                                                <select name="country" id="selCountries_0" >
                                                    <option value="0">请选择国家</option>
                                                    <option value="1" selected="selected">中国</option>
                                                </select>
                                                <select name="province" id="selProvinces_0">
                                                    <option value="0">请选择省</option>
                                                    <option value="2" selected="selected">北京</option>
                                                    <option value="3">安徽</option>
                                                    <option value="4">福建</option>
                                                    <option value="5">甘肃</option>
                                                    <option value="6">广东</option>
                                                    <option value="7">广西</option>
                                                    <option value="8">贵州</option>
                                                    <option value="9">海南</option>
                                                    <option value="10">河北</option>
                                                    <option value="11">河南</option>
                                                    <option value="12">黑龙江</option>
                                                    <option value="13">湖北</option>
                                                    <option value="14">湖南</option>
                                                    <option value="15">吉林</option>
                                                    <option value="16">江苏</option>
                                                    <option value="17">江西</option>
                                                    <option value="18">辽宁</option>
                                                    <option value="19">内蒙古</option>
                                                    <option value="20">宁夏</option>
                                                    <option value="21">青海</option>
                                                    <option value="22">山东</option>
                                                    <option value="23">山西</option>
                                                    <option value="24">陕西</option>
                                                    <option value="25">北京</option>
                                                    <option value="26">四川</option>
                                                    <option value="27">天津</option>
                                                    <option value="28">西藏</option>
                                                    <option value="29">新疆</option>
                                                    <option value="30">云南</option>
                                                    <option value="31">浙江</option>
                                                    <option value="32">重庆</option>
                                                    <option value="33">香港</option>
                                                    <option value="34">澳门</option>
                                                    <option value="35">台湾</option>
                                                </select>
                                                <select name="city" id="selCities_0">
                                                    <option value="0">请选择市</option>
                                                    <option value="52" selected="selected">北京</option>
                                                </select>
                                                <select name="district" id="selDistricts_0">
                                                    <option value="0">请选择区</option>
                                                    <option value="500">东城区</option>
                                                    <option value="501">西城区</option>
                                                    <option value="502">海淀区</option>
                                                    <option value="503">朝阳区</option>
                                                    <option value="504">崇文区</option>
                                                    <option value="505">宣武区</option>
                                                    <option value="506">丰台区</option>
                                                    <option value="507">石景山区</option>
                                                    <option value="508">房山区</option>
                                                    <option value="509">门头沟区</option>
                                                    <option value="510">通州区</option>
                                                    <option value="511">顺义区</option>
                                                    <option value="512" selected="selected">昌平区</option>
                                                    <option value="513">怀柔区</option>
                                                    <option value="514">平谷区</option>
                                                    <option value="515">大兴区</option>
                                                    <option value="516">密云县</option>
                                                    <option value="517">延庆县</option>
                                                </select>
                                                (必填) </td>
                                        </tr>
                                        <tr>
                                            <td align="right" bgcolor="#ffffff">收货人姓名：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <input name="consignee" class="inputBg" id="consignee_0" value="孙书华" type="text" />
                                                (必填) </td>
                                            <td align="right" bgcolor="#ffffff">电子邮件地址：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <input name="email" class="inputBg" id="email_0" value="shuhua141@163.com" type="text" />
                                                (必填)</td>
                                        </tr>
                                        <tr>
                                            <td align="right" bgcolor="#ffffff">详细地址：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <input name="address" class="inputBg" id="address_0" value="上地" type="text" />
                                                (必填)</td>
                                            <td align="right" bgcolor="#ffffff">邮政编码：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <input name="zipcode" class="inputBg" id="zipcode_0" value="232322" type="text" /></td>
                                        </tr>
                                        <tr>
                                            <td align="right" bgcolor="#ffffff">电话：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <input name="tel" class="inputBg" id="tel_0" value="23232" type="text" />
                                                (必填)</td>
                                            <td align="right" bgcolor="#ffffff">手机：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <input name="mobile" class="inputBg" id="mobile_0" value="1232323" type="text" /></td>
                                        </tr>
                                        <tr>
                                            <td align="right" bgcolor="#ffffff">标志建筑：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <input name="sign_building" class="inputBg" id="sign_building_0" type="text" /></td>
                                            <td align="right" bgcolor="#ffffff">最佳送货时间：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <input name="best_time" class="inputBg" id="best_time_0" type="text" /></td>
                                        </tr>
                                        <tr>
                                            <td align="right" bgcolor="#ffffff">&nbsp;</td>
                                            <td colspan="3" align="center" bgcolor="#ffffff">                    
                                                <input name="submit" class="bnt_blue_1" value="确认修改" type="submit" />
                                                <input name="button" class="bnt_blue" value="删除" type="button" />
                                                <input name="act" value="act_edit_address" type="hidden" />
                                                <input name="address_id" value="3" type="hidden" />
                                            </td>
                                        </tr>
                                    </tbody></table>
                            </form>
                            <form action="#" method="post" name="theForm">
                                <table bgcolor="#dddddd" border="0" cellpadding="5" cellspacing="1" width="100%">
                                    <tbody><tr>
                                            <td align="right" bgcolor="#ffffff">配送区域：</td>
                                            <td colspan="3" align="left" bgcolor="#ffffff">
                                                <select name="country" id="selCountries_1" >
                                                    <option value="0">请选择国家</option>
                                                    <option value="1" selected="selected">中国</option>
                                                </select>
                                                <select name="province" id="selProvinces_1">
                                                    <option selected="selected" value="0">请选择省</option>
                                                    <option value="2">北京</option>
                                                    <option value="3">安徽</option>
                                                    <option value="4">福建</option>
                                                    <option value="5">甘肃</option>
                                                    <option value="6">广东</option>
                                                    <option value="7">广西</option>
                                                    <option value="8">贵州</option>
                                                    <option value="9">海南</option>
                                                    <option value="10">河北</option>
                                                    <option value="11">河南</option>
                                                    <option value="12">黑龙江</option>
                                                    <option value="13">湖北</option>
                                                    <option value="14">湖南</option>
                                                    <option value="15">吉林</option>
                                                    <option value="16">江苏</option>
                                                    <option value="17">江西</option>
                                                    <option value="18">辽宁</option>
                                                    <option value="19">内蒙古</option>
                                                    <option value="20">宁夏</option>
                                                    <option value="21">青海</option>
                                                    <option value="22">山东</option>
                                                    <option value="23">山西</option>
                                                    <option value="24">陕西</option>
                                                    <option value="25">北京</option>
                                                    <option value="26">四川</option>
                                                    <option value="27">天津</option>
                                                    <option value="28">西藏</option>
                                                    <option value="29">新疆</option>
                                                    <option value="30">云南</option>
                                                    <option value="31">浙江</option>
                                                    <option value="32">重庆</option>
                                                    <option value="33">香港</option>
                                                    <option value="34">澳门</option>
                                                    <option value="35">台湾</option>
                                                </select>
                                                <select name="city" id="selCities_1">
                                                    <option selected="selected" value="0">请选择市</option>
                                                </select>
                                                <select name="district" id="selDistricts_1" style="display: none;">
                                                    <option selected="selected" value="0">请选择区</option>
                                                </select>
                                                (必填) </td>
                                        </tr>
                                        <tr>
                                            <td align="right" bgcolor="#ffffff">收货人姓名：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <input name="consignee" class="inputBg" id="consignee_1" type="text" />
                                                (必填) </td>
                                            <td align="right" bgcolor="#ffffff">电子邮件地址：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <input name="email" class="inputBg" id="email_1" value="shuhua141@163.com" type="text" />
                                                (必填)</td>
                                        </tr>
                                        <tr>
                                            <td align="right" bgcolor="#ffffff">详细地址：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <input name="address" class="inputBg" id="address_1" type="text" />
                                                (必填)</td>
                                            <td align="right" bgcolor="#ffffff">邮政编码：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <input name="zipcode" class="inputBg" id="zipcode_1" type="text" /></td>
                                        </tr>
                                        <tr>
                                            <td align="right" bgcolor="#ffffff">电话：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <input name="tel" class="inputBg" id="tel_1" type="text" />
                                                (必填)</td>
                                            <td align="right" bgcolor="#ffffff">手机：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <input name="mobile" class="inputBg" id="mobile_1" type="text" /></td>
                                        </tr>
                                        <tr>
                                            <td align="right" bgcolor="#ffffff">标志建筑：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <input name="sign_building" class="inputBg" id="sign_building_1" type="text" /></td>
                                            <td align="right" bgcolor="#ffffff">最佳送货时间：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <input name="best_time" class="inputBg" id="best_time_1" type="text" /></td>
                                        </tr>
                                        <tr>
                                            <td align="right" bgcolor="#ffffff">&nbsp;</td>
                                            <td colspan="3" align="center" bgcolor="#ffffff">                    
                                                <input name="submit" class="bnt_blue_2" value="新增收货地址" type="submit" />
                                                <input name="act" value="act_edit_address" type="hidden" />
                                                <input name="address_id" value="" type="hidden" />
                                            </td>
                                        </tr>
                                    </tbody></table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="blank"></div>
        <div class="block">
            <a href="#" target="_blank" title="YONGDA商城"><img alt="YONGDA商城" src="<?php echo @IMAGE_URL;?>
di.jpg"></a>
            <div class="blank"></div>
        </div>
        <div class="block">
            <div class="box">
                <div class="helpTitBg" style="clear: both;">
                    <dl>
                        <dt><a href="#" title="新手上路 ">新手上路 </a></dt>
                        <dd><a href="#" title="售后流程">售后流程</a></dd>
                        <dd><a href="#" title="购物流程">购物流程</a></dd>
                        <dd><a href="#" title="订购方式">订购方式</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#" title="手机常识 ">手机常识 </a></dt>
                        <dd><a href="#" title="如何分辨原装电池">如何分辨原装电池</a></dd>
                        <dd><a href="#" title="如何分辨水货手机 ">如何分辨水货手机</a></dd>
                        <dd><a href="#" title="如何享受全国联保">如何享受全国联保</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#" title="配送与支付 ">配送与支付 </a></dt>
                        <dd><a href="#" title="货到付款区域">货到付款区域</a></dd>
                        <dd><a href="#" title="配送支付智能查询 ">配送支付智能查询</a></dd>
                        <dd><a href="#" title="支付方式说明">支付方式说明</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#" title="会员中心">会员中心</a></dt>
                        <dd><a href="#" title="资金管理">资金管理</a></dd>
                        <dd><a href="#" title="我的收藏">我的收藏</a></dd>
                        <dd><a href="#" title="我的订单">我的订单</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#" title="服务保证 ">服务保证 </a></dt>
                        <dd><a href="#" title="退换货原则">退换货原则</a></dd>
                        <dd><a href="#" title="售后服务保证 ">售后服务保证</a></dd>
                        <dd><a href="#" title="产品质量保证 ">产品质量保证</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#" title="联系我们 ">联系我们 </a></dt>
                        <dd><a href="#" title="网站故障报告">网站故障报告</a></dd>
                        <dd><a href="#" title="选机咨询 ">选机咨询</a></dd>
                        <dd><a href="#" title="投诉与建议 ">投诉与建议</a></dd>
                    </dl>
                </div>
            </div>


        </div>
        <div class="blank"></div>
        <div id="bottomNav" class="box block">
            <div class="box_1">
                <div class="links clearfix"> 
                    <a href="#" target="_blank" title="YONGDA商城"><img src="<?php echo @IMAGE_URL;?>
ecmoban_link.jpg" alt="YONGDA商城" border="0"></a>

                    <a href="#" target="_blank" title="YONGDA 网上商店管理系统">
                        <img src="<?php echo @IMAGE_URL;?>
yongda_logo.gif" alt="YONGDA 网上商店管理系统" border="0" />
                    </a>


                    [<a href="#" target="_blank" title="免费申请网店">免费申请网店</a>]
                    [<a href="#" target="_blank" title="免费开独立网店">免费开独立网店</a>]


                    [<a href="#" target="_blank" title="免费开独立网店">yongda商城</a>]
                </div>
            </div>
        </div>
        <div class="blank"></div>
        <div id="bottomNav" class="box block">
            <div class="bNavList clearfix">
                <a href="#">免责条款</a>
                |
                <a href="#">隐私保护</a>
                |
                <a href="#">咨询热点</a>
                |
                <a href="#">联系我们</a>
                |
                <a href="#">Powered&nbsp;by&nbsp;<strong><span style="color: rgb(51, 102, 255);">YongDa</span></strong></a>
                |
                <a href="#">批发方案</a>
                |
                <a href="#">配送方式</a>

            </div>
        </div>

        <div id="footer">
            <div class="text">
                © 2005-2012 YONGDA 版权所有，并保留所有权利。<br />
            </div>
        </div>
    </body>
</html>
<?php }} ?><?php /* Smarty version Smarty-3.1.6, created on 2017-01-07 23:47:06
         compiled from "../Tpl/home\public\ucenterleft.tpl" */ ?>
<?php if ($_valid && !is_callable('content_58710d7ad3439')) {function content_58710d7ad3439($_smarty_tpl) {?><div class="AreaL">
    <div class="box">
        <div class="box_1">
            <div class="userCenterBox">
                <div class="userMenu">
                	<div><?php echo @ACTION_NAME;?>
------</div>
                    <a href="#" <?php if (@ACTION_NAME=='welcome'){?> class="curs" <?php }?>><img src="<?php echo @IMAGE_URL;?>
/u1.gif" alt="" /> 欢迎页</a>
                    <a href="#"><img src="<?php echo @IMAGE_URL;?>
/u2.gif" alt="" /> 用户信息</a>
                    <a href="#" <?php if (@ACTION_NAME=='order'){?> class="curs" <?php }?>><img src="<?php echo @IMAGE_URL;?>
/u3.gif" alt="" /> 我的订单</a>
                    <a href="#" <?php if (@ACTION_NAME=='address'){?> class="curs" <?php }?>><img src="<?php echo @IMAGE_URL;?>
/u4.gif" alt="" /> 收货地址</a>
                    <a href="#"><img src="<?php echo @IMAGE_URL;?>
/u5.gif" alt="" /> 我的收藏</a>
                    <a href="#"><img src="<?php echo @IMAGE_URL;?>
/u6.gif" alt="" /> 我的留言</a>
                    <a href="#"><img src="<?php echo @IMAGE_URL;?>
/u7.gif" alt="" /> 我的标签</a>
                    <a href="#"><img src="<?php echo @IMAGE_URL;?>
/u8.gif" alt="" /> 缺货登记</a>
                    <a href="#"><img src="<?php echo @IMAGE_URL;?>
/u9.gif" alt="" /> 我的红包</a>
                    <a href="#"><img src="<?php echo @IMAGE_URL;?>
/u10.gif" alt="" /> 我的推荐</a>
                    <a href="#"><img src="<?php echo @IMAGE_URL;?>
/u11.gif" alt="" /> 我的评论</a>
                    <!--<a href="user.php?act=group_buy">我的团购</a>-->
                    <a href="#"><img src="<?php echo @IMAGE_URL;?>
/u12.gif" alt="" /> 跟踪包裹</a>
                    <a href="#"><img src="<?php echo @IMAGE_URL;?>
/u13.gif" alt="" /> 资金管理</a>
                    <a href="#" style="background: none repeat scroll 0% 0% transparent; text-align: right; margin-right: 10px;"><img src="<?php echo @IMAGE_URL;?>
/bnt_sign.gif" alt="" /></a>
                </div>      
            </div>
        </div>
    </div>
</div><?php }} ?>