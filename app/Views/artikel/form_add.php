<?= $this->include('template/admin_header'); ?>
<h2><?= $title; ?></h2>
<form action="" method="post">
    <p>
        <input type="text" name="judul">
    </p>
    <p>
        <textarea name="isi" cols="50" rows="10"></textarea>
    </p>
    <p><input type="submit" value="Kirim" class="btn btn-large"></p>

    <p>
        <input type="file" name="gambar">
    </p>
</form>
<form action="" method="post" enctype="multipart/form-data">
    <?= $this->include('template/admin_footer'); ?>