<?= $this->include('template/header'); ?>
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
<?= $this->include('template/footer'); ?>