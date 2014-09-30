<header id="site-header">
  <div class="site-title">
    <?php echo $site_title;
    ?>
  </div>

  <nav class="menu-main">
    <ul class="menu">
      <?php 
        foreach($menu_main as $title => $page) {
        echo '<li><a href="'.$page.'">'.$title.'</a></li>';
      }?>
    </ul>
  </nav>
</header>
<title><?php 
  echo $site_html_title ;
?></title>

