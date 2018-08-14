<ul id="slide-out" class="sidenav sidenav-fixed">
      <li <?php if (isset($page_title)) { if ($page_title=='Dashboard') {echo 'class="active"';}} ?>><a href="<?php echo base_url(); ?>backend/dashboard"><i class="material-icons">dashboard</i>Dashboard</a></li>
      
      <li <?php if (isset($page_title)) { if ($page_title=='User Role') {echo 'class="active"';}} ?>><a href="<?php echo base_url(); ?>backend/user_role"><i class="material-icons">nature_people</i>User Role</a></li>
      
       <li <?php if (isset($page_title)) { if ($page_title=='Users') {echo 'class="active"';}} ?>><a href="<?php echo base_url(); ?>backend/users"><i class="material-icons">people</i>Users</a></li>

        <li <?php if (isset($page_title)) { if ($page_title=='Settings') {echo 'class="active"';}} ?>><a href="<?php echo base_url(); ?>backend/settings"><i class="material-icons">settings_applications</i>Settings</a></li>

    </ul>
