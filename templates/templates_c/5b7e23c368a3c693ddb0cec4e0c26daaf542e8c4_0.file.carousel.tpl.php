<?php /* Smarty version 3.1.27, created on 2015-09-06 05:34:44
         compiled from "templates\templates\carousel.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1075455ebd07485f871_94484397%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b7e23c368a3c693ddb0cec4e0c26daaf542e8c4' => 
    array (
      0 => 'templates\\templates\\carousel.tpl',
      1 => 1441517677,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1075455ebd07485f871_94484397',
  'variables' => 
  array (
    'array2' => 0,
    'sub' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55ebd074994b18_84975213',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55ebd074994b18_84975213')) {
function content_55ebd074994b18_84975213 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1075455ebd07485f871_94484397';
?>

<div id="myCarousel" class="carousel slide">
   <!-- 轮播（Carousel）指标 -->
   <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
   </ol> 
   <!-- 轮播（Carousel）项目 -->
      <div class="carousel-inner"  align='center'>
         <?php
$_from = $_smarty_tpl->tpl_vars['array2']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['sub'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['sub']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['sub']->value) {
$_smarty_tpl->tpl_vars['sub']->_loop = true;
$foreach_sub_Sav = $_smarty_tpl->tpl_vars['sub'];
?>
       <div class="item <?php if ($_smarty_tpl->tpl_vars['sub']->value['id'] == 1) {?>active<?php }?>">
         <img  height="300" width="300" src="<?php echo $_smarty_tpl->tpl_vars['sub']->value['pic1'];?>
" alt=<?php if ($_smarty_tpl->tpl_vars['sub']->value['id'] == 1) {?>"First slide"<?php }
if ($_smarty_tpl->tpl_vars['sub']->value['id'] == 2) {?>"Second slide"<?php }
if ($_smarty_tpl->tpl_vars['sub']->value['id'] == 3) {?>"Third slide"<?php }
if ($_smarty_tpl->tpl_vars['sub']->value['id'] == 4) {?>"Fourth slide"<?php }?>>
          <div class="carousel-caption">标题 <?php echo $_smarty_tpl->tpl_vars['sub']->value['id'];?>
</div> 
      </div>
      <?php
$_smarty_tpl->tpl_vars['sub'] = $foreach_sub_Sav;
}
?>
    </div>   
                       
   <!-- 轮播（Carousel）导航 -->
   <a class="carousel-control left" href="#myCarousel" 
      data-slide="prev">&lsaquo;</a>
   <a class="carousel-control right" href="#myCarousel" 
      data-slide="next">&rsaquo;</a>
</div> 

<?php }
}
?>