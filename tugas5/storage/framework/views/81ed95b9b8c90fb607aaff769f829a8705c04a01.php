<?php $__env->startSection('content'); ?>
  <nav>
    <ul>
      <li><b>MENU</b></li>
      <li><a href="#">Menu 1</a></li>
      <li><a href="#">Menu 2</a></li>
      <li><a href="logout.php">logout</a></li>
    </ul>
  </nav>
  <article>
    <table width="75%" height="0" border="1" align="center">
      <tr>
        <th><p><a href="tambah.php">
            <button type="submit"> TAMBAH </button>
        </a> </p></th>
      </tr>
      <tr>
        <th><p><a href="tambah.php">
            <button type="submit"> DELETE </button>
        </a></p>
          </th>
      </tr>
      <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Nim</td>
        <td>Alamat</td>
        <td>Aksi</td>
      </tr>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>