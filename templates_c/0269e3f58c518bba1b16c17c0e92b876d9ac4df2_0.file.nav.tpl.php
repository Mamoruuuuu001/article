<?php
/* Smarty version 4.3.1, created on 2023-06-11 09:23:47
  from 'D:\article\xampp\htdocs\article\templates\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_648576836eaf27_66930033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0269e3f58c518bba1b16c17c0e92b876d9ac4df2' => 
    array (
      0 => 'D:\\article\\xampp\\htdocs\\article\\templates\\nav.tpl',
      1 => 1686468226,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648576836eaf27_66930033 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand toplogo" href="index.php">
            <img src="./image/Real_Madrid_CF.png" alt="Real Madrid C.F." width="250" height="75">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ABOUT</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        NEWS CATEGORIES
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category', false, 'k');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                        <a class="dropdown-item <?php if ($_smarty_tpl->tpl_vars['cate_id']->value == $_smarty_tpl->tpl_vars['k']->value) {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index.php?cate_id=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
</a>
                        <div class="dropdown-divider"></div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">MEMBERSHIP</a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index.php">
                <input name="keyword" class="form-control mr-sm-2" type="search" placeholder="Search for articles" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i
                        class="fas fa-search"></i></button>
            </form>
        </div>
    </div>
</nav><?php }
}
