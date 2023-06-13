<?php
/* Smarty version 4.3.1, created on 2023-06-10 08:01:34
  from 'D:\article\xampp\htdocs\article\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_648411be08dfb0_64768698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '630424ad98c4a5c0254b87d6366b1bc893a90307' => 
    array (
      0 => 'D:\\article\\xampp\\htdocs\\article\\templates\\index.tpl',
      1 => 1686376892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:intro.tpl' => 1,
    'file:op_".((string)$_smarty_tpl->tpl_vars[\'op\']->value).".tpl' => 1,
    'file:aside.tpl' => 1,
  ),
),false)) {
function content_648411be08dfb0_64768698 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <title>Real Madrid Daily</title>
    <?php $_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</head>

<body>
    <?php $_smarty_tpl->_subTemplateRender('file:nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container mt-3">
        <?php $_smarty_tpl->_subTemplateRender('file:intro.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php $_smarty_tpl->_subTemplateRender("file:op_".((string)$_smarty_tpl->tpl_vars['op']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>

            <div class="col-md-3">
                <?php $_smarty_tpl->_subTemplateRender('file:aside.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        </div>
    </div>

    <?php echo '<script'; ?>
 src="js/script.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
