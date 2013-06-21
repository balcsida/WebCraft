<?php include('header.php'); ?>
					<h1 class="title">Downloads</h1>				
<?php
$directory = "downloads/";
$files = array_reverse(glob($directory . "*.*"));
?>
					<table class="table-center">
						<tr>
							<th>Filename</th>
							<th>Size</th>
							<th>Download</th>
						</tr>
<?php
foreach($files as $file){
	$filename = $file;
	$filename = str_replace("downloads/", "", $filename);
	$size = number_format(filesize($file) / 1024, 0);
?>
						<tr>
							<td><?php echo $filename; ?></td>
							<td><?php echo $size; ?>KB</td>
							<td><a class="btn" href="<?php echo $file; ?>">Download</a></td>
						</tr>
<?php } ?>
					</table>
<?php include('footer.php') ?>