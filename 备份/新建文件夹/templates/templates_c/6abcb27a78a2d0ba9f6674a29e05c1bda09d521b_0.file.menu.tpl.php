<?php /* Smarty version 3.1.27, created on 2015-08-29 15:18:38
         compiled from "templates\templates\menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1884455e1cd4e974d72_51313116%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6abcb27a78a2d0ba9f6674a29e05c1bda09d521b' => 
    array (
      0 => 'templates\\templates\\menu.tpl',
      1 => 1440861506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1884455e1cd4e974d72_51313116',
  'variables' => 
  array (
    'navid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55e1cd4ea4b003_38869594',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e1cd4ea4b003_38869594')) {
function content_55e1cd4ea4b003_38869594 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1884455e1cd4e974d72_51313116';
?>
<!DOCTYPE html>
<html>
<meta charset="utf8">
<head>
<?php $_smarty_tpl->tpl_vars["navid"] = new Smarty_Variable(5, null, 0);?>
<?php echo '<script'; ?>
 src="./jquery-2.1.4.min.js">
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>

function myFunction(navid)
{
// alert(navid);

temp = navid;
navid = temp + 1;
// alert(navid);

$("#temp").append("<p id=navid>navid</p>");
}

$(document).ready(function(){
function myFunction(navid)
{
// alert(navid);
navid=navid+1;
alert(navid);

// $("#navid").append("<p id=navid>navid</p>");
}

  // $("#btn1").click(function(){
  //   $("#<?php echo $_smarty_tpl->tpl_vars['navid']->value;?>
").append("<p id=<?php echo $_smarty_tpl->tpl_vars['navid']->value;?>
><?php echo $_smarty_tpl->tpl_vars['navid']->value;?>
</p>");

  // });

  $("#btn2").click(function(){
    $("ol").append("<li>Appended item</li>");
  });
});
<?php echo '</script'; ?>
>
</head>

<body>
<p id=<?php echo $_smarty_tpl->tpl_vars['navid']->value;?>
><?php echo $_smarty_tpl->tpl_vars['navid']->value;?>
</p>
<ol>
<li>List item 1</li>
<li>List item 2</li>
<li>List item 3</li>
</ol>

<button id="btn1" onclick="myFunction(6)">追加文本</button>
<button id="btn2">追加列表项</button>

</body>
</html>
<?php }
}
?>