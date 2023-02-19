<?php foreach ($data as $app) : ?>
    <div class="app">
        <a href="<?= $app['url'] ?>" target="_blank"><img src="<?= base_url('assets/images/app.png') ?>" alt="<?= $app['name'] ?>"></a>
        <div class="app-details">
            <h2><a href="<?= $app['url'] ?>" target="_blank"><?= $app['name'] ?></a></h2>
            <p><strong>Platform:</strong> <?= $app['platform'] ?></p>
            <p><strong>Rating:</strong> <?= $app['rating'] ?></p>
        </div>
    </div>
<?php endforeach; ?>

<script>
    var page = <?= $page + 1 ?>;
    var search = "<?= $search ?>";

    $(window).scroll(function() {
        if($(window).scrollTop() + $(window).height() == $(document).height()) {
            loadMoreApps();
        }
    });

    function loadMoreApps() {
        $.ajax({
            url: "<?= base_url('application/leaderboard') ?>",
            type: "GET",
            data: {
                "page": page,
                "search": search
            },
            success: function(response) {
                $(".app-container").append(response);
                page++;
            }
        });
    }
</script>
