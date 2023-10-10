<div id="feature" class="service2-sec pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sec-title">
                    <h1>Fitur BISA.AI </h1>
                    <p>Berikut merupakan fitur yang ditawarkan oleh BISA.AI</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($feature as $key => $value) : ?>
                <div class="col-md-4 col-sm-6">
                    <div class="service2-inner">
                        <div class="service2-img"></div>
                        <div class="service2-inner-text">
                            <div class="service2-row">
                                <ul><a href="https://bisa.ai/dashboard/List_fitur?id=<?= $value->id_fitur ?>">
                                        <h2><?php echo $value->judul; ?>
                                    </a></h2>
                                </ul>
                                <ul>
                                    <p style="font-size: 10px;"><?php echo $value->deskripsi; ?></p>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            endforeach ?>
        </div>
    </div>
</div>