  <!-- BEGIN: Main Menu-->
  <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item me-auto"><a class="navbar-brand" href="<?php echo base_url(); ?>assets/html/ltr/vertical-menu-template/index.html"><span class="brand-logo"></span>
              <h2 class="brand-text">Ring Central</h2></a></li>
          <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
      </div>
      <div class="shadow-bottom"></div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class=" nav-item"><a class="d-flex align-items-center" href="<?php echo base_url(); ?>"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboards</span></a></li>
          <li class=" nav-item"><a class="d-flex align-items-center" href="<?php echo site_url('ChatController/index') ?>"><i data-feather="message-square"></i><span class="menu-title text-truncate" data-i18n="Chat">Messages</span></a>
          </li>
          <li class=" nav-item"><a class="d-flex align-items-center" href="<?php echo site_url('ContactController/index') ?>"><i data-feather="check-square"></i><span class="menu-title text-truncate" data-i18n="Todo">Contacts</span></a>
          </li>
          <li class=" nav-item"><a class="d-flex align-items-center" href="<?php echo site_url('TemplateController/index') ?>"><i data-feather="calendar"></i><span class="menu-title text-truncate" data-i18n="Calendar">Template</span></a>
          </li>
        </ul>
      </div>
    </div>
    <!-- END: Main Menu-->