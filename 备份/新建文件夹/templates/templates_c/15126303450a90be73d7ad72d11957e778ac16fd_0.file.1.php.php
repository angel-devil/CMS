<?php /* Smarty version 3.1.27, created on 2015-09-09 02:22:03
         compiled from "D:\wamp\www\menhu_v1.0\1.php" */ ?>
<?php
/*%%SmartyHeaderCode:67055ef97cb292ba9_50740360%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15126303450a90be73d7ad72d11957e778ac16fd' => 
    array (
      0 => 'D:\\wamp\\www\\menhu_v1.0\\1.php',
      1 => 1441290985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67055ef97cb292ba9_50740360',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55ef97cb2e09c3_41733297',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55ef97cb2e09c3_41733297')) {
function content_55ef97cb2e09c3_41733297 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '67055ef97cb292ba9_50740360';
echo '<?php 
';?>date_default_timezone_set("Asia/Shanghai");
echo date("y-m-d h:i:sa");


$date = date("y-m-d h:i:sa");
// echo $date;
sleep(2);
$date1 = date("y-m-d h:i:sa");
echo strtotime($date)."<br>";
echo strtotime($date1)."<br>";
$date2 = strtotime($date1)-strtotime($date);
echo $date2;
<?php echo '?>';
}
}
?>