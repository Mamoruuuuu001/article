<?php
/* Smarty version 4.3.1, created on 2023-06-11 19:05:27
  from 'D:\article\xampp\htdocs\article\templates\op_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6485fed7ad7656_52537743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b09cd99a3210dd9dc3efc150f5663b167e1a757' => 
    array (
      0 => 'D:\\article\\xampp\\htdocs\\article\\templates\\op_edit.tpl',
      1 => 1686503079,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:op_create.tpl' => 1,
  ),
),false)) {
function content_6485fed7ad7656_52537743 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:op_create.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row row-cols-1 row-cols-md-4 g-4 my-3">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news']->value['files'], 'thumb', false, 'file');
$_smarty_tpl->tpl_vars['thumb']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['file']->value => $_smarty_tpl->tpl_vars['thumb']->value) {
$_smarty_tpl->tpl_vars['thumb']->do_else = false;
?>
    <div class="col">
        <div class="card h-100">
            <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/uploads/<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
/thumbs/<?php echo $_smarty_tpl->tpl_vars['thumb']->value;?>
" class="card-img-top" alt="<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
" />
            <div class="card-body">
                <div class="card-text">
                    <a href="index.php?op=destroy_file&id=<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
&file=<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
&thumb=<?php echo $_smarty_tpl->tpl_vars['thumb']->value;?>
"
                        class="btn btn-danger">
                        <i class="fas fa-times"></i>
                        Delete Image
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
