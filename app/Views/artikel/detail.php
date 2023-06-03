<?= $this->include('template/header'); ?>
<article class="entry">
<<<<<<< HEAD
  <h2><?= $artikel['judul']; ?></h2>
  <img src="/img/<?= $artikel['gambar'] == null ? 'image-null.png' : $artikel['gambar'] ?>" alt="<?= $artikel['judul']; ?>">
  <p><?= $artikel['isi']; ?></p>
=======
    <h2><?= $artikel['judul']; ?></h2>
    <img src="<?= base_url('/gambar/' . $artikel['gambar']); ?>" alt="<?=
                                                                        $artikel['judul']; ?>">
    <p><?= $row['isi']; ?></p>
>>>>>>> 89bd271c0e591dc712b7e0607ce67a2d60b75ee8
</article>
<?= $this->include('template/footer'); ?>