<?php
/* Smarty version 4.3.1, created on 2023-06-11 18:31:25
  from 'D:\article\xampp\htdocs\article\templates\op_create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6485f6dd381e61_34347963',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9eded432bee6dd1b77235eea79401a353727e5b' => 
    array (
      0 => 'D:\\article\\xampp\\htdocs\\article\\templates\\op_create.tpl',
      1 => 1686501063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6485f6dd381e61_34347963 (Smarty_Internal_Template $_smarty_tpl) {
?>      <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/admin/index.php" method="post" enctype="multipart/form-data">

      <div class="row mb-3">
        <label for="title" class="col-md-2 col-form-label"> Article Title </label>
        <div class="col-md-10">
          <input type="text" name="title" id="title" class="form-control" placeholder="Please input the title of the article" value="<?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
" />
        </div>
      </div> 

      <div class="row mb-3">
        <label for="info" class="col-md-2 col-form-label"> Information </label>
        <div class="col-md-10">
          <input type="text" name="info" id="info" class="form-control" placeholder="Please input the information about the article" value="<?php echo $_smarty_tpl->tpl_vars['news']->value['info'];?>
" />
        </div>
      </div>

      <div class="row mb-3">
        <label for="date" class="col-md-2 col-form-label"> Date </label>
        <div class="col-md-10">
          <input type="date" name="date" id="date" class="form-control" placeholder="Input the date for the article" value="<?php echo $_smarty_tpl->tpl_vars['news']->value['date'];?>
" />
        </div>
      </div>
      
      <div class="row mb-3">
        <label for="files" class="col-md-2 col-form-label"> Related Image </label>
        <div class="col-md-10">
          <input type="file" name="files[]" id="files" class="form-control" placeholder="Please upload images that are related to the article"
            accept=".jpg,.jpeg,.png,.gif,.mp4" multiple/>
        </div>
      </div>

      <div class="row mb-3">
        <label for="content" class="col-sm-2 col-form-label"> Article Content </label>
        <div class="col-sm-10">
          <textarea class="form-control" name="content" id="content" placeholder="Please input the content of the article" rows="10"><?php echo $_smarty_tpl->tpl_vars['news']->value['content'];?>
</textarea>
        </div>
      </div>

      <div class="row mb-3">
        <label for="cate_id" class="col-sm-2 col-form-label"> Article Category </label>
        <div class="col-sm-10">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category', false, 'k');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="cate_id" id="cate_id_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['news']->value['cate_id'] == $_smarty_tpl->tpl_vars['k']->value) {?>checked<?php }?> />
            <label class="form-check-label" for="cate_id_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
</label>
          </div>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
      </div>

      <div class="text-center">
        <?php if ($_smarty_tpl->tpl_vars['news']->value['id']) {?>
        <input type="hidden" name="op" value="update" />
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
" />
        <?php } else { ?>
        <input type="hidden" name="op" value="store" />
        <?php }?>
        <button type="submit" class="btn btn-primary" >Submit</button>
      </div>
      </form><?php }
}
