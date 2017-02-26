<?php $__env->startSection('content'); ?>
<script> 

function edit_id(id) {
	if (confirm('sure to edit?')) {
		window.location.href = 'edit.php?edit_id='+id;
		}
		}
		function delete_id(id) {
			if (confirm('Sure to delete?')) {
				window.location.href = 'index.php?delete_id='+id;
			}
		}
		</script>
<!-- <style>
div.container {
	width:100px;
	border: 1px solid gray;
}
header, footer {
	padding: 1em;
	color:#FFFFFF;
	background-color:#663300;
	clear:left;
	text-align :center;
}
nav {
	float:left; 
	max-width: 160px;
	margin:0;
	padding:1em;
}
nav ul {
	list-style-type:none;
	padding:0;
}
nav ul a{
	text-decoration:none;
}
artitle {
	margin-left:170px;
	border-left:1px solid gray;
	padding:1em;
	overflow:hidden;
}
</style> -->
<div class="Container">
<header>
	<h1>Operator CRUD</h1>
</header>

<nav>
	<ul>
		<li><b>MENU</b></li>
		<li><a href="#">Menu 1</a></li>
		<li><a href="#">Menu 2</a></li>
		<li><a href="#">Menu 3</a></li>
	</ul>
</nav>>
<form>
<table border="1" width="60%" align="center">
<tr>
<th><align ="center" colspan="2">Tambah data</th>
</tr>
<tr>
	<td>Nama</td>
	<td><Input style="text" name="nama" size="80"></td>
</tr>
<tr>
	<td>Nim</td>
	<td><input type=" text" name="Nim" size="80"></td>
</tr>
<tr>
	<td>Alamat</td>
	<td><input type=" text" name="alamat" size="80"></td>
</tr>
<td colspan="2" align="right"><input type="button" value="batal" /></td>
</tr>
</table>
</form>
</artitle>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>