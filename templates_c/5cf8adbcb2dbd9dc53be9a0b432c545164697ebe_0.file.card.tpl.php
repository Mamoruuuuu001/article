<?php
/* Smarty version 4.3.1, created on 2023-05-28 17:45:45
  from 'D:\article\xampp\htdocs\article\templates\card.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64737729ea4639_78015428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cf8adbcb2dbd9dc53be9a0b432c545164697ebe' => 
    array (
      0 => 'D:\\article\\xampp\\htdocs\\article\\templates\\card.tpl',
      1 => 1685288744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64737729ea4639_78015428 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card mb-3">
    <div class="row no-gutters">
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index.php?op=show&id=<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</a>
                </h5>
                <p class="card-text">
                    <small><?php echo $_smarty_tpl->tpl_vars['news']->value['info'];?>
</small>
                </p>
                <p class="card-text">
                    <small class="text-muted"><?php echo $_smarty_tpl->tpl_vars['news']->value['date'];?>
 <i class="far fa-eye"> </i><?php echo $_smarty_tpl->tpl_vars['news']->value['counter'];?>
</small>
                </p>
                <p class="card-text">
                    <?php echo $_smarty_tpl->tpl_vars['news']->value['summary'];?>

                </p>
            </div>
        </div>
        <div class="col-md-4">
            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index.php?op=show&id=<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
">
                <?php if ($_smarty_tpl->tpl_vars['news']->value['files']) {?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/uploads/<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
/thumbs/<?php echo reset($_smarty_tpl->tpl_vars['news']->value['files']);?>
"
                    alt="<?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
" class="img-fluid img-thumbnail">

                <?php } else { ?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/images/none.png" alt="No Image" class="img-fluid img-thumbnail" />
                <?php }?>
            </a>
        </div>
    </div>
</div><?php }
}
