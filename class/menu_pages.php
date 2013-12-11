<?php

class MenuManagerSwitcher {

  function MenuManagerSwitcher() {
    add_action('admin_menu', array(&$this, 'my_admin_menu'));
  }

  function my_admin_menu() { //create a main admin panel
    //create a sub admin panel link above
    add_menu_page('Annunci', 'Annunci', 'administrator', 'main_handle', array(&$this, 'overview'), plugin_dir_url(__DIR__) . 'images/banane-icon_16x16x32.png');
    add_submenu_page('main_handle', 'Platform Settings', 'Impostazioni', 'administrator', 1, array(&$this, 'settings'));
    add_submenu_page('main_handle', 'Manage classifications', 'Classificazioni', 'administrator', 2, array(&$this, 'manage_classification'));
    add_submenu_page('main_handle', 'Gestisci Annunci', 'gestisci_annunci', 'administrator', 3, array(&$this, 'gestisci_annunci'));



    //These functions adds sub menu for different kinds of admin panel on back end
//        add_options_page('Mahesh Options', 'Mahesh  Plugin', 'administrator', basename(__file__),array(&$this, 'my_plugin_options'));
//        add_posts_page('Mahesh posts', 'Mahesh  Plugin', 'administrator', basename(__file__),array(&$this, 'my_plugin_posts'));
//        add_media_page('Mahesh media', 'Mahesh  Plugin', 'administrator', basename(__file__),array(&$this, 'my_plugin_media'));
//        add_pages_page('Mahesh pages', 'Mahesh  Plugin', 'administrator', basename(__file__),array(&$this, 'my_plugin_pages'));
//        add_users_page('Mahesh users', 'Mahesh  Plugin', 'administrator', basename(__file__),array(&$this, 'my_plugin_users'));
//        add_management_page('maheshchari', 'Mahesh  Plugin', 'administrator', basename(__file__),array(&$this, 'my_plugin_tools'));
//        add_theme_page('maheshchari', 'Mahesh  Plugin', 'administrator', basename(__file__),array(&$this, 'my_plugin_themes'));
  }

  function overview() {
    ?>

    <!-- dashboard begin -->

    <div id = 'wp-content'>
        <div id = 'wpbody-content'>
          <div class = 'wrap'>

            <div id = 'icon-index' class = 'icon32'  >
              <br />
            </div>

            <h2><?php echo PLUGIN_NAME; ?></h2>

            <!-- welcome panel begin -->
            
            <div id = 'welcome-panel' class = 'welcome-panel'>
              <a class = 'welcome-panel-close' href = '#'><img src='<?php echo PLUGIN_BASE_URL;?>/images/banane-icon_32x32x32.png' /></a>


              <div class = 'welcome-panel-content'>
                <h3>Benvenuto su Banannounce!</h3>
                <p class = 'about-description'>Eccoti alcune funzionalità rapide per iniziare alla grande!</p>
                <div class = 'welcome-panel-column-container'>
                  <div class = 'welcome-panel-column'>
                    <h4>Get Started</h4>

                    <a class = "button button-primary button-hero load-customize hide-if-no-customize" href = "#">Customize Your Site</a>
                    <a class = "button button-primary button-hero hide-if-customize" href = "#">Customize Your Site</a>
                    <p class = "hide-if-no-customize">or, <a href = "#">change your theme completely</a></p>
                  </div>
                  <div class = "welcome-panel-column">
                    <h4>Next Steps</h4>
                    <ul>
                      <li><a href = "<?php echo PLUGIN_BASE_URL; ?>class/module_location/languageSetupManager.php" class = "welcome-icon welcome-write-blog">Installa dati locazioni</a></li>
                      <li><a href = "#" class = "welcome-icon welcome-add-page">Add an About page</a></li>
                      <li><a href = "#" class = "welcome-icon welcome-view-site">View your site</a></li>
                    </ul>
                  </div>
                  <div class = "welcome-panel-column welcome-panel-last">
                    <h4>More Actions</h4>
                    <ul>
                      <li><div class = "welcome-icon welcome-widgets-menus">Manage <a href = "#">widgets</a> or <a href = "#">menus</a></div></li>
                      <li><a href = "#" class = "welcome-icon welcome-comments">Turn comments on or off</a></li>
                      <li><a href = "#" class = "welcome-icon welcome-learn-more">Learn more about getting started</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- welcome panel ends  -->
            
            
            
            
            
            
          </div>
        </div>
      </div>
    </div>
    <?php
  }

  function settings() {
    echo '<h2>My Wordpress Plugin Settings</h2>';
  }

  function manage_classification() {
    echo '<h2>My Wordpress Plugin Manage Classifications</h2>';
  }

  function gestisci_annunci() {
    echo '<h2>My Wordpress Plugin Gestisci Annunci</h2>';
  }

//
//    
//    
//    
//    function my_plugin_options()
//    {
//        echo '<h2>My Wordpress Plugin Options</h2>';
// 
//    }
//    function my_plugin_posts()
//    {
//        echo '<h2>My Wordpress Plugin posts</h2>';
//    }
//    function my_plugin_media()
//    {
//        echo '<h2>My Wordpress Plugin media</h2>';
//    }
//    function my_plugin_pages()
//    {
//        echo '<h2>My Wordpress Plugin pages</h2>';
//    }
//    function my_plugin_users()
//    {
//        echo '<h2>My Wordpress Plugin users</h2>';
//    }
// 
//    function my_plugin_tools()
//    {
//        echo '<h2>My Wordpress Plugin tools</h2>';
//    }
// 
//    function my_plugin_themes()
//    {
//        echo '<h2>My Wordpress Plugin themes</h2>';
//    }
// 
}

$mybackuper = &new MenuManagerSwitcher(); //instance of the plugin class
?>