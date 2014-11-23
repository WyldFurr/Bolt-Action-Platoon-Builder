<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/stylesheet.css"/>

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body bgcolor="#727272" text="#DADADA" link="#FFFFFF" vlink="#FFFFFF" alink="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
        <!-- START: Menu bar -->
        <div class="menubar"><a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/menu.png" class="menu-left" alt="Menu"/></a>
            <a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/save.png" class="menu-right" alt="Save"/></a>
            <a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/load.png" class="menu-right" alt="Load"/></a>
            <a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/restart.png" class="menu-right" alt="Restart"/></a>
            <a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/export.png" class="menu-right" alt="Export"/></a>
            <a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/settings.png" class="menu-right" alt="Settings"/></a></div>
        <!-- END: Menu bar -->
        <!-- START: Main Content Wrapper -->
        <div class="content-wrapper">
            <!-- START: Insert content here -->
            <!-- START: Nationality Selector Header -->
            <div class="nationalityheader"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/ns-header-block.png" alt="Bolt Action Platoon Builder - Select a nationality to build a platoon with..."/></div>
            <!-- END: Nationality Selector Header -->
            <!-- START: Nation Selector Button -->
            <!-- NOTE: Only show the buttons that are currently active with army lists that function -->
            <div class="nationwrapper"><a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/nationality-selector-germany.png" class="nationbutton" alt="Germany"/></a></div>
            <div class="nationwrapper"><a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/nationality-selector-united-kingdom.png" class="nationbutton" alt="United Kingdom"/></a></div>
            <div class="nationwrapper"><a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/nationality-selector-soviet-union.png" class="nationbutton" alt="Soviet Union"/></a></div>
            <div class="nationwrapper"><a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/nationality-selector-united-states-of-america.png" class="nationbutton" alt="United States of America"/></a></div>
            <div class="nationwrapper"><a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/nationality-selector-empire-of-japan.png" class="nationbutton" alt="Empire of Japan"/></a></div>
            <!-- END: Nation Selector Button -->
            <!-- START: Studio WyldFurr -->
            <div class="logo"><a href="http://www.wyldfurr.com/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/studio-wyldfurr.png" class="studiowyldfurr" alt="Studio WyldFurr"/></a></div>
            <!-- END: Studio WyldFurr -->
            <!-- END: Insert content here -->
        </div>
        <!-- END: Main Content Wrapper -->
    </body>
</html>
