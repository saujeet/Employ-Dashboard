<?= $this->extend("layouts/base");?>

<?= $this->section('content');?>

<!-- Slider Section -->
<section>
    <?= $this->include("partials/slider");?>
</section>

<!-- Feature Section -->
<section id="features">
    <?= $this->include("partials/features");?>
</section>

<!-- About Section -->
<section>
    <?= $this->include("partials/about");?>
</section>

<!-- Paricle Section -->
<section>
    <?= $this->include("partials/article");?>
</section>

<?= $this->endSection();?>