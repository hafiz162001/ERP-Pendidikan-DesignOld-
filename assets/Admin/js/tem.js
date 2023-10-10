

var util = util || {};
util.toArray = function(list) {
  return Array.prototype.slice.call(list || [], 0);
};
var Terminal = Terminal || function(cmdLineContainer, outputContainer) {
  window.URL = window.URL || window.webkitURL;
  window.requestFileSystem = window.requestFileSystem || window.webkitRequestFileSystem;

  var cmdLine_ = document.querySelector(cmdLineContainer);
  var output_ = document.querySelector(outputContainer);

  const CMDS_ = [
     'clear', 'date', 'echo',
  ];
  
  var fs_ = null;
  var cwd_ = null;
  var history_ = [];
  var histpos_ = 0;
  var histtemp_ = 0;

  window.addEventListener('click', function(e) {
    cmdLine_.focus();
  }, false);

  cmdLine_.addEventListener('click', inputTextClick_, false);
  cmdLine_.addEventListener('keydown', historyHandler_, false);
  cmdLine_.addEventListener('keydown', processNewCommand_, false);

  //
  function inputTextClick_(e) {
    this.value = this.value;
  }

  //
  function historyHandler_(e) {
    if (history_.length) {
      if (e.keyCode == 38 || e.keyCode == 40) {
        if (history_[histpos_]) {
          history_[histpos_] = this.value;
        } else {
          histtemp_ = this.value;
        }
      }

      if (e.keyCode == 38) { // up
        histpos_--;
        if (histpos_ < 0) {
          histpos_ = 0;
        }
      } else if (e.keyCode == 40) { // down
        histpos_++;
        if (histpos_ > history_.length) {
          histpos_ = history_.length;
        }
      }

      if (e.keyCode == 38 || e.keyCode == 40) {
        this.value = history_[histpos_] ? history_[histpos_] : histtemp_;
        this.value = this.value; // Sets cursor to end of input.
      }
    }
  }

  //
  function processNewCommand_(e) {

    if (e.keyCode == 9) { // tab
      e.preventDefault();
      // Implement tab suggest.
    } else if (e.keyCode == 13) { // enter
      // Save shell history.
      if (this.value) {
        history_[history_.length] = this.value;
        histpos_ = history_.length;
      }

      // Duplicate current input and append to output section.
      var line = this.parentNode.parentNode.cloneNode(true);
      line.removeAttribute('id')
      line.classList.add('line');
      var input = line.querySelector('input.cmdline');
      input.autofocus = false;
      input.readOnly = true;
      output_.appendChild(line);

      if (this.value && this.value.trim()) {
        var args = this.value.split(' ').filter(function(val, i) {
          return val;
        });
        var cmd = args[0].toLowerCase();
        args = args.splice(1); // Remove cmd from arg list.
      }

      let flag = 0;
      switch (cmd) {
        case 'clear' && flag != 1:
          output_.innerHTML = '';
          this.value = '';
          return;
        case 'cls' && flag != 1:
            output_.innerHTML = '';
            this.value = '';
            return;  
        case 'date' && flag != 1:
          output( new Date() );
          break;
        case 'help' && flag != 1:
          output('Command info : <br/><div class="ls-files">-' + CMDS_.join('<br>') + '</div>');
          break;
        default:
          flag = 1
    
      };

      if( flag == 1)
      {
        let inputan = $('#inputText').val();  
          // customize
          let base_url = $("meta[property='base_url']").attr('content');
          let Myurl = base_url + 'dapur/login/cuname';
          if( $('#inputText').attr('type') == 'text' )
          {
            let prpt = document.getElementsByClassName('prompt');
            let input = document.getElementsByTagName('input');
            output('wait a sec...')
            prpt[ prpt.length - 1].innerHTML = ''
            $('input').blur()
            $('input').removeAttr('disabled')
            // cek username
            $.ajax({
                type: 'POST',
                data: {
                    getData: inputan
                },
                url: Myurl,
                
                success: function(hasil) { 
                  let Convert = JSON.parse(hasil);
                  $('input').removeAttr('disabled')
                  $('input').focus()
                  if( Convert.status == 200 ){
                    prpt[ prpt.length - 1].innerHTML = 'password for ' + Convert.username + ':'
                    input[ input.length - 1 ].setAttribute('type','password')
                    // if passw enter
                    $('input[type=password]').on('keydown',function(evt){
                      if(evt.keyCode == 13){
                        prpt[ prpt.length - 1].innerHTML = ''
                        let psw = $(this).val();
                         $.ajax({
                           type : 'POST',
                           data : {
                             psw : psw,
                             unm : inputan
                           },
                           url : base_url + 'dapur/login/cpsw',
                           success : function(res){
                            $('input').blur()
                            let Convert2 = JSON.parse(res);
                            if( Convert2.status == 200 )
                                output('Go to page dashboard admin...')
                            else{
                              $('input').focus()
                              output(inputan + ' Invalid password, try again')
                              prpt[ prpt.length - 1].innerHTML = 'password for ' + Convert.username + ':'
                            }
                            }
                         })
                      }
                    })

                  }else output("Invalid Username, Try Again.")
                },error : function(){
                  output( "Something wrong :'( " );
                  prpt[ prpt.length - 1].innerHTML = "<b style='color:#2ed573'>admin@login</b>:<b style='color:#1e90ff'>~</b><b style='color:#fafafa'>$</b> "
                  input[ input.length - 1 ].setAttribute('type','text')
                  $('input').removeAttr('disabled')
                  $('input').focus()
                },
              }).fail(function() {
                output( "Something wrong :'( " );
              })
          
          }
      }
      window.scrollTo(0, getDocHeight_());
      this.value = ''; // Clear/setup line for next input.
    }
  }

  //
  function formatColumns_(entries) {
    var maxName = entries[0].name;
    util.toArray(entries).forEach(function(entry, i) {
      if (entry.name.length > maxName.length) {
        maxName = entry.name;
      }
    });

    var height = entries.length <= 3 ?
        'height: ' + (entries.length * 15) + 'px;' : '';

    // 12px monospace font yields ~7px screen width.
    var colWidth = maxName.length * 7;

    return ['<div class="ls-files" style="-webkit-column-width:',
            colWidth, 'px;', height, '">'];
  }

  //
  function output(html) {
    output_.insertAdjacentHTML('beforeEnd', '<p>' + html + '</p>');
  }

  // Cross-browser impl to get document's height.
  function getDocHeight_() {
    var d = document;
    return Math.max(
        Math.max(d.body.scrollHeight, d.documentElement.scrollHeight),
        Math.max(d.body.offsetHeight, d.documentElement.offsetHeight),
        Math.max(d.body.clientHeight, d.documentElement.clientHeight)
    );
  }

  //
  return {
    init: function() {
      output('<h2 style="letter-spacing: 4px">INSTA PRINT</h2><p> Welcome to terminal insta print, enjoy it :)</p><p>Enter "help" for more information.</p>');
    },
    output: output
  }
};