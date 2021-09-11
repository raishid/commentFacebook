$(() => {
  function Comments(){
    let comments_up = $('.box_result').length;
    let comments_reply = $('.box_reply .result_comment').length;
    const total_comments = comments_reply + comments_up;
    return total_comments
  }

  function submit_comment(){
      var comment = $('.commentar').val();
      el = document.createElement('li');
      el.className = "box_result row";
      el.innerHTML =
            '<div class=\"avatar_comment col-md-1\">'+
              '<img src=\"https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg\" alt=\"avatar\"/>'+
            '</div>'+
            '<div class=\"result_comment col-md-11\">'+
            '<h4>Anonimous</h4>'+
            '<p>'+ comment +'</p>'+
            '<div class=\"tools_comment\">'+
            '<a class=\"like\" href=\"#\">Like</a><span aria-hidden=\"true\"> · </span>'+
            '<i class=\"fa fa-thumbs-o-up\"></i> <span class=\"count\">0</span>'+
            '<span aria-hidden=\"true\"> · </span>'+
            '<a class=\"replay\" href=\"#\">Reply</a><span aria-hidden=\"true\"> · </span>'+
                '<span>1m</span>'+
            '</div>'+
            '<ul class="child_replay"></ul>'+
            '</div>';
        document.getElementById('list_comment').prepend(el);
        $('.commentar').val('');
        renderCountComments();
    }
    
        $('#list_comment').on('click', '.like', function (e) {
            $current = $(this);
            var x = $current.closest('div').find('.like').text().trim();
            var y = parseInt($current.closest('div').find('.count').text().trim());
            
            if (x === "Like") {
                $current.closest('div').find('.like').text('Unlike');
                $current.closest('div').find('.count').text(y + 1);
            } else if (x === "Unlike"){
                $current.closest('div').find('.like').text('Like');
                $current.closest('div').find('.count').text(y - 1);
            } else {
                var replay = $current.closest('div').find('.like').text('Like');
                $current.closest('div').find('.count').text(y - 1);
            }
        });
        
      $('#list_comment').on('click', '.replay', function (e) {
          cancel_reply();
          $current = $(this);
          el = document.createElement('li');
          el.className = "box_reply row";
          el.innerHTML =
              '<div class=\"col-md-12 reply_comment\">'+
                  '<div class=\"row\">'+
                      '<div class=\"avatar_comment col-md-1\">'+
                        '<img src=\"https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg\" alt=\"avatar\"/>'+
                      '</div>'+
                      '<div class=\"box_comment col-md-10 px-0\">'+
                        '<textarea class=\"comment_replay\" placeholder=\"Add a comment...\"></textarea>'+
                        '<div class=\"box_post\">'+
                          '<div class=\"pull-right\">'+
                            '<span>'+
                              '<img src=\"https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg\" alt=\"avatar\" />'+
                              '<i class=\"fa fa-caret-down\"></i>'+
                            '</span>'+
                            '<button class=\"cancel\" type=\"button\">Cancel</button>'+
                            '<button class=\"submit-reply\" type=\"button\" value=\"1\">Reply</button>'+
                          '</div>'+
                        '</div>'+
                      '</div>'+
                  '</div>'+
              '</div>';
          $current.closest('li').find('.child_replay').prepend(el);
          //cancelar comentario
          $('.cancel').on('click', () =>{
            cancel_reply();
          });

          //comentar en reply
          $('.submit-reply').on('click', () =>{
            submit_reply();
          });
      });
    
    function submit_reply(){
      var comment_replay = $('.comment_replay').val();
      el = document.createElement('li');
      el.className = "box_reply row";
      el.innerHTML =
            '<div class=\"avatar_comment col-md-1\">'+
              '<img src=\"https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg\" alt=\"avatar\"/>'+
            '</div>'+
            '<div class=\"result_comment col-md-11\">'+
            '<h4>Anonimous</h4>'+
            '<p>'+ comment_replay +'</p>'+
            '<div class=\"tools_comment\">'+
            '<a class=\"like\" href=\"#\">Like</a><span aria-hidden=\"true\"> · </span>'+
            '<i class=\"fa fa-thumbs-o-up\"></i> <span class=\"count\">0</span>'+
            '<span aria-hidden=\"true\"> · </span>'+
            '<a class=\"replay\" href=\"#\">Reply</a><span aria-hidden=\"true\"> · </span>'+
                '<span>1m</span>'+
            '</div>'+
            '<ul class="child_replay"></ul>'+
            '</div>';
        $current.closest('li').find('.child_replay').prepend(el);
        $('.comment_replay').val('');
        cancel_reply();
        renderCountComments()
    }
    
    function cancel_reply(){
        $('.reply_comment').remove();
    }

    function renderCountComments(){
      $('.count_comment').html(`${Comments()} Comments`);
    }

  // menu de comentario 
  $('.comment_menu').on('click', (e) =>{
    e.preventDefault();
    const element = $(e.target).parent();
    if($(element).hasClass('active')){
      const element = $(e.target).parent();
      element.removeClass('active');
      const list_menu = $(element).next();
      list_menu.css('display', 'none');
    }else{
      element.addClass('active');
      const list_menu = $(element).next();
      list_menu.toggle();
    }
  })

  $('.item-menu').hover(e => {
    const element = $(e.target).children();
    element.css('border-width', '0px 0')
  }, e =>{
    const element = $(e.target).children();
    element.css('border-width', '1px 0')
  });


  //renderizar comentarios
  renderCountComments()

  //postear event
  $('.post-comment').on('click', () =>{
    submit_comment()
  });

});