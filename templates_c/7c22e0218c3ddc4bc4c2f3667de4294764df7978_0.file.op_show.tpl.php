<?php
/* Smarty version 4.3.1, created on 2023-06-11 20:50:28
  from 'D:\article\xampp\htdocs\article\templates\op_show.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_648617743a9bc9_51426230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c22e0218c3ddc4bc4c2f3667de4294764df7978' => 
    array (
      0 => 'D:\\article\\xampp\\htdocs\\article\\templates\\op_show.tpl',
      1 => 1686509425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648617743a9bc9_51426230 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-md-9">
        <h3><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</h3>
        <p class="text-muted"><?php echo $_smarty_tpl->tpl_vars['news']->value['info'];?>
</p>
        <article>
            <?php echo nl2br((string) $_smarty_tpl->tpl_vars['news']->value['content'], (bool) 1);?>

        </article>

            <div class="mt-5">
                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index.php" class="btn btn-outline-primary">
                    <i class="fas fa-undo-alt"></i>Return
                </a>
                <?php if ($_smarty_tpl->tpl_vars['is_admin']->value) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/admin/index.php?op=edit&id=<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
" class="btn btn-outline-warning">
                    <i class="fas fa-pencil-alt"></i>Edit
                </a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/admin/index.php?op=destroy&id=<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
" class="btn btn-outline-danger">
                    <i class="fas fa-trash-alt"></i>Delete
                </a>
                <?php }?>
            </div>
    </div>
    <div class="col-md-3">
        <!-- 縮圖列表 -->
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news']->value['files'], 'thumb', false, 'file');
$_smarty_tpl->tpl_vars['thumb']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['file']->value => $_smarty_tpl->tpl_vars['thumb']->value) {
$_smarty_tpl->tpl_vars['thumb']->do_else = false;
?>
<a data-fancybox="gallery" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/uploads/<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
">
    <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/uploads/<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
/thumbs/<?php echo $_smarty_tpl->tpl_vars['thumb']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
" class="img-fluid img-thumbnail mb-3" />
</a>
<?php
}
if ($_smarty_tpl->tpl_vars['thumb']->do_else) {
?>
<img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/images/none.png" alt="無圖檔" class="img-fluid img-thumbnail mb-3" />
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div><?php }
}
