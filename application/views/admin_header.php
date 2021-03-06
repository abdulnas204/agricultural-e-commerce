<!DOCTYPE html>
<html>
<title>FUTO Farms Admin Interface</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?=base_url("css/w3.css");?>">
<link rel="stylesheet" href="<?=base_url("css/google-fonts.css");?>">
<link rel="stylesheet" href="<?=base_url("css/fa/font-awesome.min.css");?>">
<link rel="stylesheet" href="<?=base_url("css/bootstrap.min.css");?>">
<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>
<body class="w3-content" style="max-width:1200px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-green w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide"><b>FUTO FARMS Admin Interface</b></h3>
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    <a href="<?=site_url("admin")?>" style="text-decoration:none;" class="w3-bar-item <?=$selected == 0 ? "w3-gray" : "";?> w3-button">Stocks</a>
    <a href="<?=site_url("admin/showOrders");?>" style="text-decoration:none;" class="w3-bar-item <?=$selected == 1 ? "w3-gray" : "";?> w3-button">Orders</a>
  </div>
  <a href="#footer" class="w3-bar-item w3-button w3-padding">Contact</a>
</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-green w3-hide-large w3-xlarge">
  <div class="w3-bar-item w3-green w3-padding-24 w3-wide">FUTO FARMS</div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>

  <!-- Top header -->
  <header class="w3-container w3-xlarge">
    <p class="w3-left"><?=$title?></p>
    <p class="w3-right">
      <i class="fa fa-search"></i>
    </p>
  </header>
  <header>
    <div class="w3-left w3-bar">
        <?php
        $menu_item = count($menu);
        for($x=0 ; $x<$menu_item; $x++){
           echo '<a href="' . $menu[$x][1] . '" style="text-decoration:none;" class="w3-bar-item w3-button w3-hover-green">' .
           $menu[$x][0] . '</a>';
        }
        ?>
    </div>
  </header>
  <p class="w3-margin"><?=$message?></p>
  <div class="w3-container w3-text-grey" id="jeans">
    <?php if (isset($items)) {?>
      <p><?php echo $items;?> items</p>
    <?php }?>
  </div>
