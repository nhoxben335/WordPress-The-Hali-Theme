
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="container">
<nav class="navbar navbar-expand">
	<div class="container-fluid">
		<div class="navbar navbar-header">
			<a style="font-weight: bold; font-size: 40px; color: black;" class="navbar navbar-brand" href="<?php echo get_home_url(); ?>">the HALI</a>
		</div>
		<ul class="nav navbar-nav">
			<?php
				$menu_main_items = wp_get_nav_menu_items("Secondary Menu"); 
				foreach($menu_main_items as $menu_item)
				{
					echo "<li class='nav-item'><a style='color: gray;' class='nav-link' href='".$menu_item->url."'>".$menu_item->title."</a></li>";
				}
			?>
		</ul>
		

	</div>
</nav>
</div>

<nav style="background: black;" class="navbar navbar-expand">
	<div class="container">
    <ul class="nav navbar-nav">
    <?php
        $menu_bottom_items = wp_get_nav_menu_items("Primary Menu");
        // echo "<li class='nav-item'><a style='color: white;' class='nav-link'  href='".$get_home_url."'>News</a></li>";
	?>
		<a style='color: white;' class='nav-link' href="<?php echo get_home_url(); ?>">News</a>
	<?php
        foreach($menu_bottom_items as $menu_item){
            echo "<li class='nav-item'><a href=".$menu_item->url." style='color: gray;' class='nav-link'>".$menu_item->title."</a></li>";
        }
    ?>
    </ul>
	<ul class="nav navbar-nav">
    <?php
        $menu_bottom_items = wp_get_nav_menu_items("Secondary Menu");
    ?>
    </ul>
	</div>
</nav>

<hr />
<div class="container">