<?php
/* Smarty version 3.1.34-dev-7, created on 2019-10-16 18:42:46
  from 'C:\OSPanel\domains\ishop\Views\admin\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5da73a76e07785_21242657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0df982d926dbd9284d5ff845f95af78602d0c134' => 
    array (
      0 => 'C:\\OSPanel\\domains\\ishop\\Views\\admin\\dashboard.tpl',
      1 => 1571240564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/blocks/head.tpl' => 1,
    'file:global/footer.tpl' => 1,
  ),
),false)) {
function content_5da73a76e07785_21242657 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/blocks/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 src="/Views/admin/logic.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>

        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"><?php echo '</script'; ?>
>

<button id="btnn">Ready</button>

<div class="result"></div>

<?php echo '<script'; ?>
>
    $("#btnn").click(function(){
        $.ajax({
            url: "http://ishop:8000/admin/dashboard/categories",
            contentType: "application/json",
            method: "GET",
            success: function(data) {
                $(".result").html(" ");
                forEach(function(item, i, data) {
                    $(".result").append("<p><h5>" + item.name + "</h5></p>");
                });
            }
        });
    });
<?php echo '</script'; ?>
>

<div class="items"></div>
<?php $_smarty_tpl->_subTemplateRender("file:global/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
