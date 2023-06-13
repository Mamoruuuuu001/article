<?php
/* Smarty version 4.3.1, created on 2023-06-11 11:16:40
  from 'D:\article\xampp\htdocs\article\templates\aside.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_648590f82e9672_08028815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0aec4cb74f304c3d4932e3d5ebf5da8c51e4a08d' => 
    array (
      0 => 'D:\\article\\xampp\\htdocs\\article\\templates\\aside.tpl',
      1 => 1686474998,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648590f82e9672_08028815 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article_count']->value, 'yc');
$_smarty_tpl->tpl_vars['yc']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['yc']->value) {
$_smarty_tpl->tpl_vars['yc']->do_else = false;
?>
    <a 
    href="index.php?year=<?php echo $_smarty_tpl->tpl_vars['yc']->value['year'];?>
" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center <?php if ($_smarty_tpl->tpl_vars['year']->value == $_smarty_tpl->tpl_vars['yc']->value['year']) {?>active<?php }?>"
        aria-current="true">
        <?php echo $_smarty_tpl->tpl_vars['yc']->value['year'];?>
<span class="badge badge-success rounded-pill"><?php echo $_smarty_tpl->tpl_vars['yc']->value['count'];?>
</span>
    </a>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if ($_smarty_tpl->tpl_vars['is_admin']->value) {?>
<div class="d-grid gap-2 mt-3">
    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/admin/index.php" class="btn btn-primary">
        <i class="fas fa-pencil-alt"></i> Create New Article
    </a>
</div>
<?php }?>
</div><?php }
}
