<!doctype html>
<html class="no-js" lang="">
<head>

<?php 
# Set up an absolute path for includes:
$root = $_SERVER["DOCUMENT_ROOT"];
# Usage:
# include($root."/path/to/file.php");
?>

<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php if( $current_page == 'index' ): ?>
<title>Stringer | A Responsive Framework</title>
<?php else: ?>
<title><?php echo $page_title; ?> | Stringer</title>
<?php endif; ?>

<link rel="apple-touch-icon" href="apple-touch-icon.png">
<link rel="shortcut icon" href="favicon.ico"> 
<link rel="icon" type="image/ico" href="favicon.ico">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700">
<link rel="stylesheet" href="/assets/css/styles.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<!-- Removed:
<script src="/assets/js/modernizr-2.8.3.min.js"></script>
-->

<style>
/*
#checkw {
  position: absolute;
  top: 10px;
  left: 10px;
  border: 2px solid red;
  background: yellow;
  color: red;
  padding: 10px 20px;
  z-index: 9999;
}
*/
</style>
<!-- <div id="checkw"></div> -->
