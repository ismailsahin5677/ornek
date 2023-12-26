<div class="row">
    <div class="col-md-8 offset-md-2 mb-2">
        <div class="card">
            <img src="<?= $postData['image'] ?>" class="card-img-top" alt="Placeholder Image">
            <div class="card-body">
                <h5 class="card-title">
                    <?= $postData['title'] ?>
                </h5>

                <p class="card-text">
                    <?= $postData['content'] ?>
                </p>

                <p class="card-text">
                    <small class="text-muted"><?= $postData['date'] ?></small>
                </p>
            </div>
        </div>
    </div>
</div>