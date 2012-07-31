//live comment preview
$(document).ready(function() {
  $('#comment').one('focus',function() {
    $('#comment').parent().after('<div id="preview-box"><div class="comment-by">Live Comment Preview</div><div id="live-preview"></div></div>');
  });
  var $comment = '';
  $('#comment').keyup(function() {
    $comment = $(this).val();
    $comment = $comment.replace(/\n\n+/g, '<br /><br />').replace(/\n/g, "<br />");
    $('#live-preview').html( $comment );
  });
});

// basic show and hide
 $(document).ready(function() {
   $('#hideh1').click( function() {
    $('div.showhide,h1').hide();
   });
   $('#showh1').click( function() {
    $('div.showhide,h1').show();
   });
   $('#toggleh1').click( function() {
    $('div.showhide,h1').toggle();
   });

//blur link after click   
   $('a.fun').click(function() {
     this.blur();
     return false;
   });   
 });

// auto page contents
$(document).ready(function() {
  if ( $('#content h2').length > 1) {
    $('<div id="page-contents"></div>')
      .prepend('<h3>Page Contents</h3>')
      .append('<div></div>')
      .prependTo('body');
      
    var thisId = '';
    $('#content h2').each(function(index) {
      $this = $(this);
      thisId = this.id;
      $this
        .clone()
        .find('a')
          .attr({
            'title': 'jump to ' + $this.text(), 
            'href': '#' + thisId
          })
        .end()
        .attr('id', 'pc-' + index)
        .appendTo('#page-contents div');
    });
      
    $('#page-contents h3').click(function() {
      $(this).toggleClass('arrow-down')
        .next().slideToggle('fast');
    });
  }
});

//set hover class for anything
$(document).ready(function() {
  $('#hover-demo2 p').hover(function() {
    $(this).addClass('pretty-hover');
  }, function() {
    $(this).removeClass('pretty-hover');
  });
});