<!-- Main Head -->
<?php $this->load->view("_temp/head.php"); ?>
<?= $style; ?>

<?php $this->load->view("_temp/navbar.php"); ?>

<!-- Main Content -->
<?= $contents; ?>

<!-- Main Footer -->
<?php $this->load->view("_temp/foot.php"); ?>
<?= $script; ?>