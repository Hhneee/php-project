<?php
/* Smarty version 4.3.4, created on 2024-11-11 14:11:02
  from 'C:\xampp\htdocs\content\themes\default\templates\pages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6732107670cec8_72379412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e7baea32677fe75a5b9cc3c59f909e7d8da2ad4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\content\\themes\\default\\templates\\pages.tpl',
      1 => 1696931969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:__feeds_page.tpl' => 1,
    'file:_no_data.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_6732107670cec8_72379412 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page header -->
<div class="page-header">
  <img class="floating-img d-none d-md-block" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/headers/undraw_building_websites_i78t.svg">
  <div class="circle-2"></div>
  <div class="circle-3"></div>
  <div class="<?php if ($_smarty_tpl->tpl_vars['system']->value['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?>">
    <h2><?php echo __("Pages");?>
</h2>
    <p class="text-xlg"><?php echo __($_smarty_tpl->tpl_vars['system']->value['system_description_pages']);?>
</p>
    <div class="row mt20">
      <div class="col-sm-9 col-lg-6 mx-sm-auto">
        <form class="js_search-form" data-filter="pages">
          <div class="input-group">
            <input type="text" class="form-control" name="query" placeholder='<?php echo __("Search for pages");?>
'>
            <button type="submit" class="btn btn-light"><?php echo __("Search");?>
</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- page header -->

<!-- page content -->
<div class="<?php if ($_smarty_tpl->tpl_vars['system']->value['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> sg-offcanvas" style="margin-top: -25px;">

  <div class="position-relative">
    <!-- tabs -->
    <div class="content-tabs rounded-sm shadow-sm clearfix">
      <ul>
        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == '' || $_smarty_tpl->tpl_vars['view']->value == "category") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages"><?php echo __("Discover");?>
</a>
        </li>
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
          <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "liked") {?>class="active" <?php }?>>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/liked"><?php echo __("Liked Pages");?>
</a>
          </li>
          <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "manage") {?>class="active" <?php }?>>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/manage"><?php echo __("My Pages");?>
</a>
          </li>
        <?php }?>
      </ul>
      <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_create_pages']) {?>
        <div class="mt10 float-end">
          <button class="btn btn-md btn-primary d-none d-lg-block" data-toggle="modal" data-url="modules/add.php?type=page">
            <i class="fa fa-plus-circle mr5"></i><?php echo __("Create Page");?>

          </button>
          <button class="btn btn-sm btn-icon btn-primary d-block d-lg-none" data-toggle="modal" data-url="modules/add.php?type=page">
            <i class="fa fa-plus-circle"></i>
          </button>
        </div>
      <?php }?>
    </div>
    <!-- tabs -->
  </div>

  <div class="row">

    <?php if ($_smarty_tpl->tpl_vars['view']->value == '' || $_smarty_tpl->tpl_vars['view']->value == "category") {?>
      <!-- left panel -->
      <div class="col-md-4 col-lg-3 sg-offcanvas-sidebar">
        <!-- categories -->
        <div class="card">
          <div class="card-body with-nav">
            <ul class="side-nav">
              <?php if ($_smarty_tpl->tpl_vars['view']->value != "category") {?>
                <li class="active">
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages">
                    <?php echo __("All");?>

                  </a>
                </li>
              <?php } else { ?>
                <li>
                  <?php if ($_smarty_tpl->tpl_vars['current_category']->value['parent']) {?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/category/<?php echo $_smarty_tpl->tpl_vars['current_category']->value['parent']['category_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['current_category']->value['parent']['category_url'];?>
">
                      <i class="fas fa-arrow-alt-circle-left mr5"></i><?php echo __($_smarty_tpl->tpl_vars['current_category']->value['parent']['category_name']);?>

                    </a>
                  <?php } else { ?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages">
                      <?php if ($_smarty_tpl->tpl_vars['current_category']->value['sub_categories']) {?><i class="fas fa-arrow-alt-circle-left mr5"></i><?php }
echo __("All");?>

                    </a>
                  <?php }?>
                </li>
              <?php }?>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "category" && $_smarty_tpl->tpl_vars['current_category']->value['category_id'] == $_smarty_tpl->tpl_vars['category']->value['category_id']) {?>class="active" <?php }?>>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/category/<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['category']->value['category_url'];?>
">
                    <?php echo __($_smarty_tpl->tpl_vars['category']->value['category_name']);?>

                    <?php if ($_smarty_tpl->tpl_vars['category']->value['sub_categories']) {?>
                      <span class="float-end"><i class="fas fa-angle-right"></i></span>
                    <?php }?>
                  </a>
                </li>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
          </div>
        </div>
        <!-- categories -->
      </div>
      <!-- left panel -->
    <?php } else { ?>
      <!-- side panel -->
      <div class="col-12 d-block d-md-none sg-offcanvas-sidebar mt40">
        <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      </div>
      <!-- side panel -->
    <?php }?>

    <!-- content panel -->
    <?php if ($_smarty_tpl->tpl_vars['view']->value == '' || $_smarty_tpl->tpl_vars['view']->value == "category") {?><div class="col-md-8 col-lg-9 sg-offcanvas-mainbar"><?php } else { ?><div class="col-12 sg-offcanvas-mainbar"><?php }?>
        <!-- content -->
        <div>
          <?php if ($_smarty_tpl->tpl_vars['pages']->value) {?>
            <ul class="row">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, '_page');
$_smarty_tpl->tpl_vars['_page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_page']->value) {
$_smarty_tpl->tpl_vars['_page']->do_else = false;
?>
                <?php $_smarty_tpl->_subTemplateRender('file:__feeds_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>'box'), 0, true);
?>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>

            <!-- see-more -->
            <?php if (count($_smarty_tpl->tpl_vars['pages']->value) >= $_smarty_tpl->tpl_vars['system']->value['pages_results']) {?>
              <div class="alert alert-post see-more js_see-more" data-get="<?php echo $_smarty_tpl->tpl_vars['get']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['view']->value == "category") {?>data-id="<?php echo $_smarty_tpl->tpl_vars['current_category']->value['category_id'];?>
" <?php }?> <?php if ($_smarty_tpl->tpl_vars['view']->value == "liked" || $_smarty_tpl->tpl_vars['view']->value == "manage") {?>data-uid="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_id'];?>
" <?php }?>>
                <span><?php echo __("See More");?>
</span>
                <div class="loader loader_small x-hidden"></div>
              </div>
            <?php }?>
            <!-- see-more -->
          <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php }?>
        </div>
        <!-- content -->

      </div>
      <!-- content panel -->

    </div>
  </div>
  <!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
