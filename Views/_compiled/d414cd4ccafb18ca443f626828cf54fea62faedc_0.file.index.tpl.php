<?php
/* Smarty version 3.1.34-dev-7, created on 2019-10-21 16:36:53
  from 'C:\OSPanel\domains\ishop.loc\Views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dadb475861ab5_39808568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd414cd4ccafb18ca443f626828cf54fea62faedc' => 
    array (
      0 => 'C:\\OSPanel\\domains\\ishop.loc\\Views\\index.tpl',
      1 => 1571664974,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/blocks/navbar.tpl' => 1,
    'file:global/head.tpl' => 1,
  ),
),false)) {
function content_5dadb475861ab5_39808568 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/blocks/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:global/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
<?php echo '<script'; ?>

        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"><?php echo '</script'; ?>
>

<style>
.demo-card-square.mdl-card {
  width: 320px;
  height: 320px;
}
.demo-card-square > .mdl-card__title {
  color: #fff;
  background:
    url('../assets/demos/dog.png') bottom right 15% no-repeat #46B6AC;
}

.mt-50{
    margin-top:50px;
}

.mdl-card__supporting-text{
    font-size: 20px;
}
</style>

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container">
    <div id="items" class="row mt-50">
    </div>
</div>

<?php echo '<script'; ?>
>
    $(document).ready(getElements());

    function getElements(){
        $.ajax({
            url: "/items/allItems",
            method: "GET",
            success: function(data) {
                var array = JSON.parse(data);
                $("#items").html(" "); 
                array.forEach(function(item, i, data) {
                    $("#items").append('<div class="col-4 demo-card-square mdl-card mdl-shadow--2dp margin"><div class="mdl-card__title mdl-card--expand"><h2 class="mdl-card__title-text">' + item["price"] + ' тенге' +'</h2></div><div class="mdl-card__supporting-text">' + item["name"] + '<br>' + '</div><div class="mdl-card__actions mdl-card--border"><button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" onclick="addToCart(' + item["id"] +')">В корзину</button></div>');
                })
            }
        });
    }

    function addToCart(id){
        $.ajax({
            url: "/items/add/" + id,
            method: "GET",
            success: function(data){
                var arr = JSON.parse(data);
            }
        });
    }
<?php echo '</script'; ?>
><?php }
}
