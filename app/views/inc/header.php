<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
    <title><?php echo SITENAME; ?></title>
    
    <!-- DataTable -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
   
    <!-- FixedHeader -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.5/css/fixedHeader.dataTables.min.css">
    
    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    
    <!-- Buttons -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
    
    <!-- Select -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.2.7/css/select.dataTables.min.css">
    
    <!-- ColReorder -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/colreorder/1.5.1/css/colReorder.dataTables.min.css">
    
    <!-- RowReorder -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/rowreorder/1.2.5/css/rowReorder.dataTables.min.css">
    
    <!-- KeyTable - Excel like navigation on table - blue border -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/keytable/2.4.1/css/keyTable.dataTables.min.css">
        
    <!-- AutoFill -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/autofill/2.3.1/css/autoFill.dataTables.min.css">
    
    
</head>
<body>

<header>
   
    <h1><?php echo $data['title']; ?></h1>
    
    <?php if(isset($_POST['create_table']) && empty(!$data['selected_columns']) || isset($_POST['configure_table'])): ?>
    
    <nav class="navbar">
    	<form action="" method="post">
    		<button id="back-btn" type="submit" name="back_btn">Back</button>
		</form>
    </nav>
    
    <?php endif; ?>
</header>
