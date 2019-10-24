<?php
/* Smarty version 3.1.34-dev-7, created on 2019-10-01 18:14:14
  from 'C:\OSPanel\domains\blog.loc\app\Views\admin\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d936d466845c8_52914510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c2c1a6e225e2139eb8921e283e890236707623d' => 
    array (
      0 => 'C:\\OSPanel\\domains\\blog.loc\\app\\Views\\admin\\login.tpl',
      1 => 1569942852,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:global/head.tpl' => 1,
    'file:global/footer.tpl' => 1,
  ),
),false)) {
function content_5d936d466845c8_52914510 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:global/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container py-3">

    <div class="row">

        <div class="col-12 col-lg-4 offset-lg-4">

            <h3 class="mb-3 text-center">
                <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

            </h3>

            <form action="/login" method="post">

                <div class="form-group">
                    <input type="text" class="form-control text-center" name="username" placeholder="Логин">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control text-center" name="password" placeholder="Пароль">
                </div>

                <div class="form-group m-0">
                    <button class="btn btn-primary btn-block" type="submit">
                        Войти
                    </button>
                </div>

            </form>

        </div>

    </div>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:global/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
