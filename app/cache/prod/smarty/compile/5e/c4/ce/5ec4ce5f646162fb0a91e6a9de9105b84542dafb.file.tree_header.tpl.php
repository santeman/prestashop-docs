<?php /* Smarty version Smarty-3.1.19, created on 2018-02-01 12:46:29
         compiled from "C:\xampp\htdocs\stage\webshop\admin378e5kpgu\themes\default\template\helpers\tree\tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18375748475a72fe15c364c8-10044655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ec4ce5f646162fb0a91e6a9de9105b84542dafb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\stage\\webshop\\admin378e5kpgu\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1508764756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18375748475a72fe15c364c8-10044655',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a72fe15cbf924_87593934',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a72fe15cbf924_87593934')) {function content_5a72fe15cbf924_87593934($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div>
<?php }} ?>
