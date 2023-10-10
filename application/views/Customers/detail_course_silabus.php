<?php
$this->load->view('Templates/Link-css');
$this->load->view('Templates/Navbar'); 
$this->CI = &get_instance();
?>
<style>
    .pertanyaan{
        font-weight: bold;
    }
    .jawaban{
        margin-left: 1rem;
    }

    #overlay{
        z-index: 9999 !important;
        position: fixed;
        top:0;
        left:0;
        width:100%;
        height:100%;
        background: rgba(0,0,0,0.8) none 50% / contain no-repeat;
        cursor: pointer;
        transition: 0.3s;
        
        visibility: hidden;
        opacity: 0;
    }
    #overlay.open {
        visibility: visible;
        opacity: 1;
    }

    #overlay:after { /* X button icon */
        content: "\2715";
        position: absolute;
        color:#fff;
        top: 10px;
        right:20px;
        font-size: 2em;
    }

    img:hover{
        cursor: zoom-in;
    }
</style>

<div id="overlay"></div>

<section class="container_in">
    <div class="container">
        <div class="row mt-7" >
            <div class="col">
                <div class="card text-justify">
                <div class="card-header">
                    <h3><?=$data['name_course'];?> : <?=$data['name'];?></h3>
                </div>
                <div class="card-body">
                    <?php if ($data['video'] != "" || $data['video'] != null ){ ?>
                    <iframe style="width: 100%; height: 400px;" class="mt-2" src="https://www.youtube.com/embed/<?=$data['video'];?>?autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
                    <?php } ?>
                    <h5 class="card-title">Dasar teori</h5>
                    <hr>
                    <p class="card-text">
                        <?=$data['theory'];?>
                    </p>
                
                    <hr>

                    <?php if ($lulus == 2) {
                        echo "Anda sudah lulus dengan score : <strong>".$score."</strong";
                    } else {?>
                    <button class="btn btn-primary btn-lg btn-block" id="takeQuiz">
                        Quiz
                    </button>
                    <?php } ?>
                     
                </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<?php if ($lulus == 1) { ?>
<!-- Modal -->
<div class="modal fade" id="quizModal" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 90%;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Q_title">Quiz: <?=$data['name'];?></h5>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col">
                <form id="formQuiz">
                    <div id="quiz">
                        
                    </div>
                </form>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="submitQuiz" >Submit Quiz </button>
      </div> 
    </div>
  </div>
</div>
<?php } ?>
<?php
$this->load->view('Templates/Footer');
$this->load->view('Templates/Link-js'); ?>



<script>
$(document).ready(function(){

    $('#quiz').on('click', 'img', function() {
        $('#overlay')
            .css({backgroundImage: `url(${this.src})`})
            .addClass('open')
            .one('click', function() { $(this).removeClass('open'); });
            console.log("zoomm");
    });



    var currentCode = 0;

    function nextChar() {
        var character = String.fromCharCode(64 + currentCode);
        currentCode++;
        return character;
    }

    function shuffle(arr) {
        for(var j, x, i = arr.length; i; j = parseInt(Math.random() * i), x = arr[--i], arr[i] = arr[j], arr[j] = x);
        return arr;
    }

    $('img').on('click', function() {

    $('#overlay')
        .css({backgroundImage: `url(${this.src})`})
        .addClass('open')
        .one('click', function() { $(this).removeClass('open'); });
        console.log("zoomm");
    });


    var id_s_c = <?=$id_syllabus_c;?>;
    var isi = 0;
    var no = 1;
    var html ="";
    var page =1;
    // setTimeout(() => {
    //  $( "#takeQuiz" ).trigger( "click" );

    // }, 200);

    $( "#takeQuiz" ).click(function() {
        $('#quizModal').modal('show');
        get_quiz(1);
        isi = 0;
        html = "";
        no = 1;
    });

    $( "#submitQuiz" ).click(function() {
        var tmpIsi = 0;
        $('input:checked').each(function(){
            tmpIsi++;
        });
        if ( isi != tmpIsi ) {
            alert('Soal: '+isi+', Soal terjawab: '+tmpIsi+' \n. Pastikan soal sudah terjawab semua.');
            return false;
        } 

        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>my_course/submitQuiz', 
            dataType : "JSON",
            data: {
                id : id_s_c,
                answer: $("#formQuiz").serialize()
            }, 
            success: function(data){ 
                if(data.status_code == 200 ){
                    alert("Quiz berhasil disubmit... \n Nilai anda : "+data.score);
                }
                $('#quizModal').modal('hide');

                setTimeout(() => {
                    window.location = '<?php echo base_url(); ?>my_course/detail/<?=$tipe;?>/<?=$id_course;?>';
                }, 300);
            },
            error: function(data){
                 alert('Gagal submit quiz. pastikan koneksi anda berjalan lancar.');
            }
        });

    });


    function get_quiz($page=1){
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>my_course/get_quiz_customer', 
            dataType : "JSON",
            data:{
                page:page,
                id_c_s: id_s_c
            },
            beforeSend: function(){
                
            },
            success: function(data){ 
                if(data.data.length == 0){
                    html = '<div class="alert alert-secondary text-center" role="alert" style="width: 100%"> Tidak ada data. </div>';
                }
                
                $.each(data.data, function(i, item) {
                    html += '<div class="form-group">';
                    html += '        <label for="Pertanyaan" class="pertanyaan">'+no+' . Pertanyaan : '+item.quiz+'</label>';
                    html += '            <div class="jawaban">';
                    var arr = ['answer1', 'answer2', 'answer3', 'answer4', 'answer5'];
                    arr = shuffle(arr);
                    currentCode = 1;
                    // $(arr).each(function(i, key) {
                        
                    //     html += '                <div class="form-check">';
                    //     html += '                    <input class="form-check-input" type="radio" name="id_quiz_'+item.id_quiz+'" id="id_quiz['+item.id_quiz+']_'+key+'" value="'+key+'">';
                    //     html += '                    <label class="form-check-label" for="id_quiz['+item.id_quiz+']_'+key+'">';
                    //     html += '                    <strong>'+nextChar()+'. </strong>    '+item[key]+'';
                    //     html += '                    </label>';
                    //     html += '                </div>';

                    // });

                    $(arr).each(function(i, key) {
                        
                        html += '                <div class="form-check">';
                        html += '                    <input class="form-check-input" type="radio" name="id_quiz_'+item.id_quiz+'_'+no+'" id="id_quiz['+item.id_quiz+']_'+key+'_'+no+'" value="'+key+'">';
                        html += '                    <label class="form-check-label" for="id_quiz['+item.id_quiz+']_'+key+'_'+no+'">';
                        html += '                    <strong>'+nextChar()+'. </strong>    '+item[key]+'';
                        html += '                    </label>';
                        html += '                </div>';

                    });

                    // html += '                <div class="form-check">';
                    // html += '                    <input class="form-check-input" type="radio" name="id_quiz_'+item.id_quiz+'" id="id_quiz['+item.id_quiz+']_answer1" value="answer1">';
                    // html += '                    <label class="form-check-label" for="id_quiz['+item.id_quiz+']_answer1">';
                    // html += '                        '+item.answer1+'';
                    // html += '                    </label>';
                    // html += '                </div>';

                    // html += '                <div class="form-check">';
                    // html += '                    <input class="form-check-input" type="radio" name="id_quiz_'+item.id_quiz+'" id="id_quiz['+item.id_quiz+']_answer2" value="answer2">';
                    // html += '                    <label class="form-check-label" for="id_quiz['+item.id_quiz+']_answer2">';
                    // html += '                    '+item.answer2+'';
                    // html += '                    </label>';
                    // html += '                </div>';

                    // html += '                <div class="form-check">';
                    // html += '                    <input class="form-check-input" type="radio" name="id_quiz_'+item.id_quiz+'" id="id_quiz['+item.id_quiz+']_answer3" value="answer3" >';
                    // html += '                    <label class="form-check-label" for="id_quiz['+item.id_quiz+']_answer3">';
                    // html += '                    '+item.answer3+'';
                    // html += '                    </label>';
                    // html += '                </div>';

                    // html += '                <div class="form-check">';
                    // html += '                    <input class="form-check-input" type="radio" name="id_quiz_'+item.id_quiz+'" id="id_quiz['+item.id_quiz+']_answer4" value="answer4" >';
                    // html += '                    <label class="form-check-label" for="id_quiz['+item.id_quiz+']_answer4">';
                    // html += '                    '+item.answer4+'';
                    // html += '                    </label>';
                    // html += '                </div>';

                    // html += '                <div class="form-check">';
                    // html += '                    <input class="form-check-input" type="radio" name="id_quiz_'+item.id_quiz+'" id="id_quiz['+item.id_quiz+']_answer5" value="answer5" >';
                    // html += '                    <label class="form-check-label" for="id_quiz['+item.id_quiz+']_answer5">';
                    // html += '                    '+item.answer5+'';
                    // html += '                    </label>';
                    // html += '                </div>';
                                    
                    html += '            </div>   '; 
                    html += '    </div>';
                    no++;
                    isi = isi +1;
                });
                $("#quiz").html(html);

                jumlah = Math.ceil( data.row_count / data.offset);
                if (page != jumlah) {
                    page++;
                    get_quiz(page);
                }
            },
            complete:function(data){
                $("#loading").html("");
            },
            error: function(){
                
                
            }
        });
    }
});
</script>