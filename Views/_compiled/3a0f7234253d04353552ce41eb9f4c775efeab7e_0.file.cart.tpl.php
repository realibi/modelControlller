<?php
/* Smarty version 3.1.34-dev-7, created on 2019-10-24 12:10:27
  from 'C:\OSPanel\domains\ishop.loc\Views\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5db16a83087ba3_31812130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a0f7234253d04353552ce41eb9f4c775efeab7e' => 
    array (
      0 => 'C:\\OSPanel\\domains\\ishop.loc\\Views\\cart.tpl',
      1 => 1571668807,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/blocks/navbar.tpl' => 1,
    'file:global/head.tpl' => 1,
  ),
),false)) {
function content_5db16a83087ba3_31812130 (Smarty_Internal_Template $_smarty_tpl) {
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
    <div class="title col-12 mt-50">

    </div>

    <div id="items" class="row mt-50">
    Sum: 0
    </div>
</div>

<div class="col-4"></div>
<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent col-4 mt-50" onclick="clearCart()">
  Очистить
</button>
<div class="col-4"></div>

<?php echo '<script'; ?>
>
    $(document).ready(getElements());
    var sum = 0;
    function getElements(){
        $.ajax({
            url: "/items/getCart",
            method: "GET",
            success: function(data) {
                console.log(data);
                if(data != null){
                    var array = JSON.parse(data);
                    $("#items").html(" "); 
                    array.forEach(function(item, i, data) {
                    $.ajax({
                    url: "/items/getItem/" + item,
                    method: "GET",
                    success: function(res){
                    var result = JSON.parse(res);
                    sum += parseInt(result["price"], 10);
                    $("#items").append('<div class="col-4 demo-card-square mdl-card mdl-shadow--2dp margin"><div class="mdl-card__title mdl-card--expand"><h2 class="mdl-card__title-text">' + result["price"] + ' тенге' +'</h2></div><div class="mdl-card__supporting-text">' + result["name"] + '<br>' + '</div><div class="mdl-card__actions mdl-card--border"><button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" onclick="removeItem(' + result["id"] + ', ' + result["price"] + ')">Убрать</button></div>');

                    $(".title").html("Sum: " + sum);
                    }
                    });
                });
                }
            }
        });
    }

    function clearCart(){
        $.ajax({
            url: "/items/clearCart",
            method: "GET",
            success: function (data) {
                getElements();
            }
        });
    }

    function removeItem(id, price){
        sum -= price;
        $.ajax({
            url: "/items/removeItem/" + id,
            method: "GET",
            success: function(){
                getElements();
            }
        });
    }
<?php echo '</script'; ?>
><?php }
}
