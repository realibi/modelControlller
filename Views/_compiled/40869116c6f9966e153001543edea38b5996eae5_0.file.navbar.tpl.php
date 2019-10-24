<?php
/* Smarty version 3.1.34-dev-7, created on 2019-10-21 04:43:20
  from 'C:\OSPanel\domains\ishop.loc\Views\admin\blocks\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dad0d389dc488_85214477',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40869116c6f9966e153001543edea38b5996eae5' => 
    array (
      0 => 'C:\\OSPanel\\domains\\ishop.loc\\Views\\admin\\blocks\\navbar.tpl',
      1 => 1571622193,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dad0d389dc488_85214477 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">iShop.kz</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        <a href="items/cart" class="mdl-navigation__link" href="">Корзина</a>
      </nav>
    </div>
  </header>
  <main class="mdl-layout__content">
    
<?php }
}
