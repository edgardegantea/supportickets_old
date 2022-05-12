<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Supportickets</title>
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bulma.min.css'); ?>"> -->

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">

</head>
<body>

	<?= $this->include('layout/navbar') ?>
	<?= $this->include('layout/header') ?>

	<?= $this->renderSection('content') ?>

	<?= $this->include('layout/footer') ?>

	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>" charset="utf-8"></script>

</body>
</html>
