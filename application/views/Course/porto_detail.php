<?php
$this->load->view('Templates/Link-css');
$this->load->view('Templates/Navbar'); 
$this->CI = &get_instance();
?>
<script async charset="UTF-8" src="https://cdn.embedly.com/widgets/platform.js"></script>
<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=628752ee3b2aa70012029e98&product=inline-share-buttons" async="async"></script>
<?php 
$carousel = array();
if ($data['data'][0]['carousel1'] != NULL || $data['data'][0]['carousel1'] != "" ) {
   array_push($carousel, $data['data'][0]['carousel1']);
}
if ($data['data'][0]['carousel2'] != NULL || $data['data'][0]['carousel2'] != "" ) {
    array_push($carousel, $data['data'][0]['carousel2']);
}
if ($data['data'][0]['carousel3'] != NULL || $data['data'][0]['carousel3'] != "" ) {
    array_push($carousel, $data['data'][0]['carousel3']);
}

// var_dump($carousel);

?>
<section class="mt-5 py-5">
    <div class="container">
        <div class="row">
             
            <div class="col-sm-2 col-lg-1">
                <img src="<?php $foto = ($data['data'][0]['foto_user'] == "" || $data['data'][0]['foto_user'] == null) ? base_url()."assets/images/blank.png" : $this->CI->config->item('bisaUrl')."users/media/".$data['data'][0]['foto_user']; echo $foto;?>" style="width:75px; height:75px; object-fit:cover;" class="img-thumbnail mx-auto d-block mb-2">
            </div>
            <div class="col-sm-10 col-lg-11">
                <h5 style="font-weight: bold; margin-bottom: 0px"><?=$data['data'][0]['nama_portofolio']?></h5>
                <p><?=$data['data'][0]['nama_user']?></p>
            </div>

        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-8 mt-3">
                <div id="carouselId" class="carousel slide" data-ride="carousel" style="background: #333333; text-align: center; border-radius: 10px">
                        <ol class="carousel-indicators">
                            <?php $no = 0;  foreach ($carousel as $s) : ?>
                            <li data-target="#carouselId" data-slide-to="<?=$no?>"
                                class="<?=($no == 0) ? "active" : "";  ?>"></li>
                            <?php $no++; endforeach; ?>

                        </ol>
                        <div class="carousel-inner" role="listbox">

                            <?php $no = 0;  foreach ($carousel as $s) : ?>
                            <div class="carousel-item <?=($no == 0) ? "active" : "";  ?>">
                                <img src="<?=$this->CI->config->item('bisaUrl')."portofolio/media/carousel_portofolio/".$s?>"
                                    alt="First slide" style="max-height:450px;">
                            </div>
                            <?php $no++; endforeach; ?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
            </div>

            <div class="col-sm-12 col-md-4 mt-3">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">Sosial Media</h5>
                        <p class="card-text">
                            <img class="img-thumbnail" src="<?php $foto = ($data['data'][0]['foto_portofolio'] == "" || $data['data'][0]['foto_portofolio'] == null) ? base_url()."assets/images/blankdoc.jpg" : $this->CI->config->item('bisaUrl')."portofolio/media/foto_portofolio/".$data['data'][0]['foto_portofolio']; echo $foto;?>"
                            width="100%">
                            
                            <a class="btn btn-primary d-block d-md-inline-block mt-3 mb-4" href="<?=$data['data'][0]['sosmed_linkedin']?>" role="button" target="_blank"> <i class="fab fa-linkedin"></i> </a>

                            <a class="btn btn-danger d-block d-md-inline-block mt-3 mb-4" href="<?=$data['data'][0]['sosmed_instagram']?>" role="button" target="_blank"> <i class="fab fa-instagram"></i></a>

                            <br>

                            <i class="fa fa-heart" aria-hidden="true" style="color:red"></i> <span> <?=$data['data'][0]['jumlah_like']?> </span> orang menyukai ini <br>
                            <?php if($like['data']['is_like'] == 0) { ?>
                                <a class="btn btn-danger d-block mt-3 mb-4" role="button" href="#" id="likeBtn" > <i class="fa fa-heart" aria-hidden="true"></i> Suka</a>
                            <?php } else { ?>
                                <a class="btn btn-secondary d-block mt-3 mb-4" href="#" role="button" id="likeBtn"> <i class="fa fa-thumbs-down" aria-hidden="true"></i> Tidak Suka </a>
                            <?php } ?>                        
                        <p>

                        <div class="sharethis-inline-share-buttons"></div>
        
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-sm-12 col-md-8">
                <div class="card mb-3 shadow" style="width:100%">
                  <div class="card-body">
                    <h5 class="card-title">Summary </h5>
                     <p class="card-text">
                        <?=$data['data'][0]['deskripsi_singkat']?>   
                     </p>
                  </div>
                </div>

                <div class="card shadow" style="width:100%">
                  <div class="card-body">
                    <h5 class="card-title">Description </h5>
                     <p class="card-text">
                     <?=$data['data'][0]['deskripsi_lengkap']?>   
                     </p>
                  </div>
                </div> 
                
            </div>

            <div class="col-sm-12 col-md-4 " style="line-height: 1.6;">
                <h5>Informasi Course Terkait</h5>
                <i class="fab fa-elementor"></i> &nbsp; Kategori: <?=$data['data'][0]['deskripsi_kategori_portofolio']?> <br>
                <i class="fas fa-university"></i> &nbsp; Course: <?=$data['data'][0]['nama_course']?>
            </div>
        </div>
    </div>
</section>

<?php
$this->load->view('Templates/Footer');
$this->load->view('Templates/Link-js'); ?>

<script>
function goto(url) {
    window.open(url, "_self");
}

changeTitle(`Portofolio :: <?=$data['data'][0]['nama_portofolio']?>`);

$(document).ready(function() {

    var jumlah = 1;
    var allLoad = 0;
    var pageIni = 1;
    var no = 1;

    function delay(callback, ms) {
        var timer = 0;
        return function() {
            var context = this,
                args = arguments;
            clearTimeout(timer);
            timer = setTimeout(function() {
                callback.apply(context, args);
            }, ms || 0);
        };
    }

    <?php if($this->session->userdata('token') == "") { ?>
        $("#likeBtn").click(function (e) { 
            e.preventDefault();
            Msg("Mohon login terlebih dahulu.", "alert-danger");
        });
    <?php } else { ?>
        tokenName = "";
        tokenHash = "";

        like = "<?=($like['data']['is_like'] == 0 ) ? "1": "2"; ?>";
        
        function getToken(){
            $.ajax({
                type: 'GET',
                url: '<?php echo base_url(); ?>transaction_history/get_token', 
                dataType : "JSON",
                success: function(data){ 
                    tokenName = data.csrf.name;
                    tokenHash = data.csrf.hash;
                },
                error: function(data){
                    tokenName = "";
                    tokenHash = "";
                }
            });
        }

        getToken();


        $("#likeBtn").click(function (e) { 
            e.preventDefault();
            
            $.ajax({
                type: "POST",
                url: "<?=base_url();?>course/like",
                data: {
                    id_portofolio: <?=$id?>,
                    action: like,
                    [tokenName]: tokenHash
                },
                dataType: "JSON",
                success: function (res) {
                    window.location.reload();
                }, 
                error: function (){
                    Msg("Opps.. kesalahan sistem", 'alert-danger');
                    setTimeout(() => {
                        window.location.reload();
                    }, 2000);
                }
            });
        });
    <?php } ?>
    

});


document.querySelectorAll('oembed[url]').forEach( element => {
    const anchor = document.createElement('a');
    anchor.setAttribute('href',element.getAttribute('url'));
    anchor.className = 'embedly-card';
    element.appendChild(anchor);
});

</script>