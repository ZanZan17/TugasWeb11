<?= $this->include('template/admin_header'); ?>
<<<<<<< HEAD
<h2><?= $title; ?></h2>
<form action="" method="post" class="form">
  <input type="text" name="judul" value="<?= $data['judul']; ?>">
  <textarea name="isi" cols="50" rows="10"><?= $data['isi']; ?></textarea>
  <input type="submit" value="Kirim" class="button-kirim">
</form>
=======
<div class="form">
    <h2><?= $title; ?></h2>
    <form action="" method="post">
        <label for="judul"></label>
        <input type="text" id="judul" name="judul" value="<?= $data['judul']; ?>">
        <textarea name="isi" cols="50" rows="10"><?= $data['isi']; ?></textarea>
        <input type="submit" value="Kirim" class="btn btn-large">
    </form>
</div>
>>>>>>> 89bd271c0e591dc712b7e0607ce67a2d60b75ee8
<?= $this->include('template/admin_footer'); ?>