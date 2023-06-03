<?= $this->include('template/header'); ?>
<<<<<<< HEAD
<h1><?= $title; ?></h1>
<hr>
<div id="artikel">
  <?php if ($artikel) : foreach ($artikel as $row) : ?>
      <article class="artikel">
        <a href="<?= base_url('/artikel/' . $row['slug']); ?>">
          <img src="/img/<?= $row['gambar'] == null ? 'image-null.png' : $row['gambar'] ?>" alt="<?= $row['judul']; ?>">
          <div>
            <h2>
              <?= $row['judul']; ?>
            </h2>
            <p><?= substr($row['isi'], 0, 200); ?></p>
          </div>
        </a>
      </article>
      <hr class="divider" />
    <?php endforeach;
  else : ?>
    <article class="entry">
      <h2>Belum ada data.</h2>
    </article>
  <?php endif; ?>
</div>
=======
<article class="hero">
    <?php if ($artikel) : foreach ($artikel as $row) : ?>
            <h2><a href="<?= base_url('/artikel/' . $row['slug']); ?>"><?= $row['judul']; ?></a>
            </h2>
            <img src="<?= base_url('/gambar/' . $row['gambar']); ?>" alt="<?= $row['judul']; ?>">
            <p><?= substr($row['isi'], 0, 200); ?></p>
            <a href="<?= base_url('/artikel/' . $row['slug']) ?>" class="btn btn-detail">Detail</a>
            <hr />
            <br />
        <?php endforeach;
    else : ?>

        <h2>Belum ada data.</h2>

    <?php endif; ?>
</article>
>>>>>>> 89bd271c0e591dc712b7e0607ce67a2d60b75ee8
<?= $this->include('template/footer'); ?>