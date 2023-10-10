$(function() {
  
    // Set the command-line prompt to include the user's IP Address
    //$('.prompt').html('[' + codehelper_ip["IP"] + '@HTML5] # ');
      $('.prompt').html("<b style='color:#2ed573'>admin@login</b>:<b style='color:#1e90ff'>~</b><b style='color:#fafafa'>$</b> ");
  
    // Initialize a new terminal object
    var term = new Terminal('#input-line .cmdline', '#container output');
    term.init();
    
    // Update the clock every second

    
  });