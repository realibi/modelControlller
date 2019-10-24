<?php
/* Smarty version 3.1.34-dev-7, created on 2019-10-21 09:14:59
  from 'C:\OSPanel\domains\ishop.loc\Views\admin\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dad4ce332a866_39807000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9cca261fb56969c07180d201f4dfabf5bd51fba' => 
    array (
      0 => 'C:\\OSPanel\\domains\\ishop.loc\\Views\\admin\\dashboard.tpl',
      1 => 1571623855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/blocks/head.tpl' => 1,
    'file:global/footer.tpl' => 1,
  ),
),false)) {
function content_5dad4ce332a866_39807000 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/blocks/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 src="/Views/admin/logic.js"><?php echo '</script'; ?>
>

<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
<?php echo '<script'; ?>

        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"><?php echo '</script'; ?>
>

<style>
    .mt-20 {
        margin-top: 20px;
    }

    .mt-40 {
        margin-top: 50px;
    }

    .title {
        font-size: 20px;
        color: #ff4081;
        text-align: center;
    }

    .spaceline {
        width: 100%;
        margin-top: 20px;
        margin-bottom: 20px;
        height: 20px;
    }

    .tac{
        text-align: center;
    }

    .block{
        box-shadow: 0 0 2px;
        padding: 20px;
    }
</style>

<div class="col-12 mt-20 title"><b>Категории</b></div>

<table class="col-12 mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp mt-20 categoryTable">
    <thead>
        <tr>
            <th class="mdl-data-table__cell--non-numeric">Наименование</th>
            <th>Количество товаров</th>
            <th></th>
        </tr>
    </thead>
    <tbody id="categoryTableBody">
    
    </tbody>
</table>

<div class="col-12 mt-40 title"><b>Товары</b></div>

<table class="col-12 mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp itemtable mt-20">
    <thead>
        <tr>
            <th class="mdl-data-table__cell--non-numeric">Наименование</th>
            <th>Количество</th>
            <th>Цена</th>
            <th></th>
        </tr>
    </thead>
    <tbody id="itemTableBody">
    
    </tbody>
</table>





<div class="col-5 tac mt-50 block">
<div class="col-12 mt-50 title"><b>Создание категории</b></div>

<!-- Simple Textfield -->


  <div class="mdl-textfield mdl-js-textfield col-12 mt-20">
    <input class="mdl-textfield__input" type="text" id="categoryNameInput">
    <label class="mdl-textfield__label tac" for="categoryNameInput">Наименование</label>
  </div>


<div class="col-4 mt-50"></div>
<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent col-4" onclick="createCategory()">
  Создать
</button>
<div class="col-4"></div>
</div>

<div class="col-2"></div>

<div class="col-5 tac mt-50 block">
<div class="col-12 mt-50 title"><b>Создание товара</b></div>
<!--создание товара-->
  <div class="mdl-textfield mdl-js-textfield col-12 mt-20">
    <input class="mdl-textfield__input" type="text" id="itemNameInput">
    <label class="mdl-textfield__label tac" for="itemNameInput">Наименование</label>
  </div>
  <br>
  <div class="mdl-textfield mdl-js-textfield col-12 mt-20">
    <input class="mdl-textfield__input" type="number" id="itemPriceInput">
    <label class="mdl-textfield__label tac" for="itemPriceInput">Цена</label>
  </div>
  <br>
  <div class="mdl-textfield mdl-js-textfield col-12 mt-20">
    <select id="itemCategorySelect">
        
    </select>
  </div>
<div class="col-4"></div>
<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent col-4" onclick="createItem()">
  Создать
</button>
<div class="col-4"></div>
</div>

<div class="mt-50">.</div>

<?php echo '<script'; ?>
>

    $(document).ready(loadData());

    function loadData(){
        $.ajax({
            url: "dashboard/categories",
            method: "GET",
            success: function(data) {
                var array = JSON.parse(data);
                $("#categoryTableBody").html(" "); 
                $("#itemCategorySelect").html(" "); 
                array.forEach(function(item, i, data) {
                    $("#categoryTableBody").append("<tr><td class='mdl-data-table__cell--non-numeric'>" + item["name"] + "</td><td>" + array.length + "</td><td>" + "<button class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent' onclick='deleteCategory("+ item["id"] +")'>Удалить</button></tr>");  
                    $("#itemCategorySelect").append("<option value='" + item["id"] + "'>" + item["name"] + "</option>") ;
                });
                  
            }
        });

        $.ajax({
            url: "dashboard/items",
            method: "GET",
            success: function(data) {
                var array = JSON.parse(data);
                $("#itemTableBody").html(" "); 
                array.forEach(function(item, i, data) {
                    $("#itemTableBody").append("<tr><td class='mdl-data-table__cell--non-numeric'>" + item["name"] + "</td><td>" + array.length + "</td><td>" + item["price"] + "</td><td>" + "<button class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent' onclick='deleteItem("+ item["id"] +")'>Удалить</button></tr>");
                });
                  
            }
        });

        
    }

    function deleteCategory(id){
        $.ajax({
            url: "dashboard/categories/delete/" + id,
            method: "GET",
            success: loadData()
        });

        loadData();
    }

    function deleteItem(id){
        $.ajax({
            url: "dashboard/items/delete/" + id,
            method: "GET",
            success: loadData()
        });

        loadData();
    }

    function createCategory(){
        $.ajax({
            url: "dashboard/categories/create/" + $("#categoryNameInput").val(),
            method: "GET",
            success: loadData()
        });

        loadData();
    }

    function createItem(){
        $.ajax({
            url: "dashboard/items/create/",
            contentType: "application/json",
            method: "POST",
            data: JSON.stringify({
                itemName: $("#itemNameInput").val(),
                itemPrice: $("#itemPriceInput").val(),
                itemCategory: $("#itemCategorySelect").val()
            })
        });
    }
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:global/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
