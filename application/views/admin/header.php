<div class="fixed-navbar">
  <div class="pull-left">
    <button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
    <h1 class="page-title"><?=$title?></h1>
    <!-- /.page-title -->
  </div>
  <!-- /.pull-left -->
  <div class="pull-right">
    <div class="ico-item">
      <a href="#" class="ico-item fa fa-search js__toggle_open" data-target="#searchform-header"></a>
      <form action="#" id="searchform-header" class="searchform js__toggle"><input type="search" placeholder="Search..." class="input-search"><button class="fa fa-search button-search" type="submit"></button></form>
      <!-- /.searchform -->
    </div>
    <!-- /.ico-item -->
    <div class="ico-item fa fa-arrows-alt js__full_screen"></div>
    <!-- /.ico-item fa fa-fa-arrows-alt -->
    <div class="ico-item toggle-hover js__drop_down ">
      <span class="fa fa-th js__drop_down_button"></span>
      <div class="toggle-content">
        <ul>
          <li><a href="#"><i class="fa fa-github"></i><span class="txt">Github</span></a></li>
          <li><a href="#"><i class="fa fa-bitbucket"></i><span class="txt">Bitbucket</span></a></li>
          <li><a href="#"><i class="fa fa-slack"></i><span class="txt">Slack</span></a></li>
          <li><a href="#"><i class="fa fa-dribbble"></i><span class="txt">Dribbble</span></a></li>
          <li><a href="#"><i class="fa fa-amazon"></i><span class="txt">Amazon</span></a></li>
          <li><a href="#"><i class="fa fa-dropbox"></i><span class="txt">Dropbox</span></a></li>
        </ul>
        <a href="#" class="read-more">More</a>
      </div>
      <!-- /.toggle-content -->
    </div>
    <!-- /.ico-item -->
    <a href="#" class="ico-item fa fa-envelope notice-alarm js__toggle_open" data-target="#message-popup"></a>
    <a href="#" class="ico-item pulse"><span class="ico-item fa fa-bell notice-alarm js__toggle_open" data-target="#notification-popup"></span></a>
    <div class="ico-item">
      <img src="<?= asset_url() ?>admin/images/profile.jpg" alt="" class="ico-img">
      <ul class="sub-ico-item">
        <li><a href="#">Settings</a></li>
        <li><a href="#">Blog</a></li>
        <li><a class="js__logout" href="#">Log Out</a></li>
      </ul>
      <!-- /.sub-ico-item -->
    </div>
    <!-- /.ico-item -->
  </div>
  <!-- /.pull-right -->
</div>