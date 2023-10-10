<div id="about" class="about-us-short pt-100 pb-50">
    <div class="container">
        <?php foreach ($about as $key => $value) : ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="about-us-short">
                        <h1><?php echo $value->nama; ?></h1>
                        <h2>Deliver AI for Everyone </h2>
                        <p class="text-justify"><?php echo $value->deskripsi; ?></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="about-us-thumb">
                            <iframe style=" margin-left: 25px; width: 85%; height:380px;" src="https://www.youtube.com/embed/IQOFRXMoANw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="row">
                        <a href="https://www.youtube.com/bisaai"><button type="button" style="position: bottom; margin-left: 25px; width: 85%" class="btn btn-primary btn-lg">More Videos</button></a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>