<?php
$m_judul = (isset($meta_title) ) ? $meta_title : "Bisa Design Academy"; 
$m_desc = (isset($meta_desc) ) ? strip_tags($meta_desc) : "Belajar Seru di BISA Design Academy untuk membangun portofolio pada bidang Desain, UI/UX dan Game"; 
$m_images = (isset($meta_images) ) ? $meta_images : base_url()."assets/images/logo_putih2.png"; 
?>
<title><?=$m_judul?></title>
<meta name="description" content="<?=$m_desc;?>">
<meta name="keywords" content="Bisa Design, Bisa, Design, Academy">

<meta name="content" content="<?=$m_desc;?>">
<meta name="robots" content="index, follow" />

<META NAME="geo.position" CONTENT="-6.941450629402952; 107.61653412977515">
<META NAME="geo.placename" CONTENT="Bisa Design">
<META NAME="geo.region" CONTENT="ID-JW">

<!-- Twitter Card data -->
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="<?=$m_judul;?>">
<meta name="twitter:description" content="<?=$m_desc;?>">
<meta name="twitter:image" content="<?=$m_images?>">

<!-- Open Graph data -->
<meta property="og:title" content="<?=$m_judul;?>" />
<meta property="og:type" content="article" />
<meta property="og:url" content="https://bisa.design" />
<meta property="og:image" content="<?=$m_images?>" />
<meta property="og:description" content="<?=$m_desc;?>" /> 
<meta property="og:site_name" content="<?=$m_judul;?>" />