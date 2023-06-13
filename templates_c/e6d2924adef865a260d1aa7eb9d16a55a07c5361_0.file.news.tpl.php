<?php
/* Smarty version 4.3.1, created on 2023-05-28 19:21:42
  from 'D:\article\xampp\htdocs\article\templates\news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64738da60fce63_64415535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6d2924adef865a260d1aa7eb9d16a55a07c5361' => 
    array (
      0 => 'D:\\article\\xampp\\htdocs\\article\\templates\\news.tpl',
      1 => 1685294500,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:card.tpl' => 1,
  ),
),false)) {
function content_64738da60fce63_64415535 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_news']->value['data'], 'news');
$_smarty_tpl->tpl_vars['news']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->do_else = false;
$_smarty_tpl->_subTemplateRender('file:card.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item <?php if (!$_smarty_tpl->tpl_vars['all_news']->value['prev_pages']) {?>disabled<?php }?>">
            <a class="page-link" href="<?php echo $_smarty_tpl->tpl_vars['all_news']->value['prev_pages'];?>
">Prev</a>
        </li>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_news']->value['pages'], 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
        <li class="page-item <?php if ($_smarty_tpl->tpl_vars['page']->value['isCurrent']) {?>active<?php }?>">
            <a class="page-link" href="<?php echo $_smarty_tpl->tpl_vars['page']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value['num'];?>
</a>
        </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <li class="page-item <?php if (!$_smarty_tpl->tpl_vars['all_news']->value['next_pages']) {?>disabled<?php }?>">
            <a class="page-link" href="<?php echo $_smarty_tpl->tpl_vars['all_news']->value['next_pages'];?>
">Next</a>
        </li>
    </ul>
</nav><?php }
}
