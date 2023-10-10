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
                    <h3>Ujian : <?=$section['data'][0]['nama']?> </h3>
                </div>
                <div class="card-body">
                
                    <h5 class="card-title">Petunjuk Pengerjaan</h5>
                    <hr>
                    <p class="card-text">
                       <ol>
                           <li>Pastikan koneksi internet lancar</li>
                           <li>Kerjakan soal dengan durasi waktu <strong> <?=$section['data'][0]['durasi_ujian']?></strong> menit</li>
                           <li>Pasiing grade untuk ujian section ini adalah <strong> <?=$section['data'][0]['passing_grade']?> </strong></li>
                           <li>Bila waktu habis, jawaban auto submit. </li>
                           <li>Periksa kembali dan pastikan semua jawaban telah terpilih sebelum menekan tombol submit</li>
                       </ol>
                    </p>
                
                    <hr>
                    <button class="btn btn-primary btn-lg btn-block" id="takeQuiz">
                        Ambil Ujian
                    </button>   
                     
                </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="quizModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" role="document" style="max-width: 90%;">
    <div class="modal-content">
      <div class="modal-header">
        <div style="width: 80%;">
            <h5 class="modal-title" id="Q_title">Quiz: <?=$data['name'];?></h5>
        </div>
        <div style="width:20%" id="timer">

        </div>
        
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
        <button type="button" class="btn btn-primary" id="submitQuiz" >Submit </button>
      </div> 
    </div>
  </div>
</div>

<?php
// var_dump($section);
$this->load->view('Templates/Footer');
$this->load->view('Templates/Link-js'); ?>
<script>

var currentQuestion = 0;
var viewingAns = 0;
var correctAnswers = 0;
var quizOver = false;
var iSelectedAnswer = [];
var c=<?=$section['data'][0]['durasi_ujian']?> * 60;
// var c=20;
var t;
$(document).ready(function(){

    $('#quiz').on('click', 'img', function() {
        $('#overlay')
            .css({backgroundImage: `url(${this.src})`})
            .addClass('open')
            .one('click', function() { $(this).removeClass('open'); });
            console.log("zoomm");
    });


    function timedCount()
	{
	
		var hours = parseInt( c / 3600 ) % 24;
		var minutes = parseInt( c / 60 ) % 60;
		var seconds = c % 60;
		var result = (hours < 10 ? "0" + hours : hours) + ":" + (minutes < 10 ? "0" + minutes : minutes) + ":" + (seconds  < 10 ? "0" + seconds : seconds);            
		$('#timer').html(result);
		
		if(c == 0 )
		{
            $('#iTimeShow').html('Quiz Time Completed!');
            $('#timer').html("00:00");
            c=<?=$section['data'][0]['durasi_ujian']?> * 60;
            alert("Waktu habis");
            $("#submitQuiz").trigger("click");	
            quizOver = true;
            return false;
				
		}
		c = c - 1;
		t = setTimeout(function()
		{
			timedCount()
		},1000);
	}


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


    var isi = 0;
    var no = 1;
    var html ="";
    var page =1;
    // setTimeout(() => {
    //  $( "#takeQuiz" ).trigger( "click" );

    // }, 200);

    $( "#takeQuiz" ).click(function() {
        var txt;
        var r = confirm("Apakah yakin akan memulai Ujian, pastikan koneksi internet anda lancar ?");
        if (r == true) {
            get_quiz(1);
            isi = 0;
            html = "";
            no = 1;
            mulai();
        } 
    });

    function mulai(){
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>exam_certification/start_ujian', 
            dataType : "JSON",
            data:{
                id: <?=$section['data'][0]['id_customer_certification_exam']?>
            },
            beforeSend: function(){
                
            },
            success: function(data){ 
                $('#quizModal').modal('show');
                timedCount();
            },
            complete:function(data){
                $("#loading").html("");
            },
            error: function(){
                
            }
        });
    }

    $( "#submitQuiz" ).click(function() {
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>exam_certification/submitQuiz', 
            dataType : "JSON",
            data: {
                id : <?=$section['data'][0]['id_customer_certification_exam']?>,
                id_cert: <?=$section['data'][0]['id_customer_certification']?>,
                answer: $("#formQuiz").serialize()
            }, 
            success: function(data){ 
                
                if(data.status_code == 200 ){
                    alert("Anda telah menyelesaikan ujian section : <?=$section['data'][0]['nama']?>");
                } else {
                    // alert("Error : "+data.description);
                    alert("Gagal submit jawaban ujian.");
                }
                $('#quizModal').modal('hide');
                    
                setTimeout(() => {
                    window.location = '<?php echo base_url(); ?>exam_certification/detail/<?=$section['data'][0]['id_customer_certification']?>';
                }, 300);
            },
            error: function(data){
                 alert('Gagal submit jawaban ujian. pastikan koneksi anda berjalan lancar.');
            }
        });

    });


    function get_quiz($page=1){
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>exam_certification/get_soal', 
            dataType : "JSON",
            data:{
                page:page,
                id_exam: <?=$section['data'][0]['id_certification_exam']?>
            },
            beforeSend: function(){
                
            },
            success: function(data){ 
                if(data.data.length == 0){
                    html = '<div class="alert alert-secondary text-center" role="alert" style="width: 100%"> Tidak ada data. </div>';
                }
                
                $.each(data.data, function(i, item) {
                    html += '<div class="form-group">';
                    html += '        <label for="Pertanyaan" class="pertanyaan">'+no+' . Pertanyaan : '+item.pertanyaan+'</label>';
                    html += '            <div class="jawaban">';
                    var arr = ['jawaban1', 'jawaban2', 'jawaban3', 'jawaban4', 'jawaban5'];
                    arr = shuffle(arr);
                    currentCode = 1;
                    $(arr).each(function(i, key) {
                        
                        html += '                <div class="form-check">';
                        html += '                    <input class="form-check-input" type="radio" name="id_quiz_'+item.id_certification_exam_quiz+'" id="id_quiz['+item.id_certification_exam_quiz+']_'+key+'" value="'+key+'">';
                        html += '                    <label class="form-check-label" for="id_quiz['+item.id_certification_exam_quiz+']_'+key+'">';
                        html += '                    <strong>'+nextChar()+'. </strong>    '+item[key]+'';
                        html += '                    </label>';
                        html += '                </div>';

                    });

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