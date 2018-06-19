<?php 

include_once 'vendor/autoload.php';

use TienNguyen\File\FileManager;

$file = new FileManager();

$path = $_GET['path'] ?? null;
$delete = $_GET['delete'] ?? null;

if ($path) {
	$file->go($path);
}

if ($delete) {
	$file->deleteFile($delete);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>File</title>
</head>
<body>
	<table border="">
		<thead>
			<tr>
				<th>Tên</th>
				<th>Loại</th>
				<th>Phần mở rộng</th>
				<th>Kích cỡ</th>
			</tr>
		</thead>
		<tbody>
		<?php
			foreach ($file->classify()['folders'] as $value) {
		?>
			<tr>
				<!-- <td>Thumbnail</td> -->
				<td><a href="?path=<?=$path.'/'.$value['name'] ?>"><?=$value['name'] ?></a></td>
				<td>Folder</td>
				<td>Folder</td>
				<td>Unknown</td>
			</tr>
		<?php
			}
		?>
		<?php
			foreach ($file->classify()['files'] as $value) {
		?>
			<tr>
				<!-- <td><img src="<? //=$value['thumbnail'] ?>" alt=""></td> -->
				<td><?=$value['name'] ?></td>
				<td><?=$value['type'] ?></td>
				<td><?=$value['extension'] ?></td>
				<td><?=$value['size'] ?></td>
			</tr>
		<?php
			}
		?>
		</tbody>
	</table>
</body>
</html>
