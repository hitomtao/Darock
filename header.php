<!DOCTYPE HTML>
<html prefix="og: http://ogp.me/ns#">
<head>
    <title>{content_meta_title}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta property="og:title" content="{content_meta_title}" />
    <meta name="keywords" content="{content_meta_keywords}" />
    <meta name="description" content="{content_meta_description}" />
    <meta property="og:type" content="{og_type}" />
    <meta property="og:url" content="{content_url}" />
    <meta property="og:image" content="{content_image}" />
    <meta property="og:description" content="{og_description}" />
    <meta property="og:site_name" content="{og_site_name}" />
    <link rel="alternate" type="application/rss+xml" title="{og_site_name}" href="<?php print site_url('rss'); ?>" />
    <link href='//fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto+Slab:400,300&subset=latin,cyrillic,cyrillic-ext,greek,latin-ext' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300italic&subset=latin,cyrillic,greek,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript">
        mw.lib.require("bootstrap3");
        mw.require(mw.settings.template_url + "js/functions.js");
    </script>
    <link rel="stylesheet" href="<?php print template_url(); ?>css/framework.css" type="text/css" />
    <link rel="stylesheet" href="<?php print template_url(); ?>css/darock.css" type="text/css" />
    <?php include THIS_TEMPLATE_DIR . 'header_options.php'; ?>
</head>
<body class="<?php print $font . ' ' . $bgimage; ?>" style="background-image: url('<?php print $custom_bg;  ?>');">
<div id="main-container">
    <div id="header">
       <div class="container edit" field="darock-header" rel="global">
            <div class="text-center">
                <module type="logo" id="logo" />
                <hr>
                <span id="mobile-menu"><span></span><span></span><span></span><span></span></span>
                <span id="mobilemenuclose"><span class="mw-icon-close"></span></span>
                <module type="menu" template="rock" id="header-main-menu" />
                <div id="header-cart"><module type="shop/cart" template="small"></div>
            </div>
       </div>
    </div> 
    <div id="content-holder">
    