

function Comments(){
  let comments_up = $('.box_result').length;
  let comments_reply = $('.box_reply .result_comment').length;
  const total_comments = comments_reply + comments_up;
  return total_comments
}

function submit_comment(){
    var comment = $('.commentar').val();
    el = document.createElement('li');
    el.className = "box_result row sm-flex";
    el.innerHTML =
          '<div class=\"avatar_comment col-md-1 \">'+
            '<img src=\"https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg\" alt=\"avatar\"/>'+
          '</div>'+
          '<div class=\"result_comment col-md-11\">'+
          '<div class=\"comment-body\ principal">'+
            '<h4>Anonimous</h4>'+
            '<p class="comment-content">'+ comment +'</p>'+
            '<span class="collapse">This comment is collapsed. <a class="uncollapse" href="#">Undo</a></span>'+
            '<div class=\"tools_comment\">'+
            '<a class=\"like\" href=\"#\">Like</a><span aria-hidden=\"true\"> · </span>'+
            '<a class=\"first replay\" href=\"#\">Reply</a><span aria-hidden=\"true\"> · </span>'+
            '<span><i class="_3-8_ _4iy4 img sp_kf5oT7e76uM sx_7e6187" alt="" data-visualcompletion="css-img"></i><span class="count">0</span></span>s'+
            '</div>'+
            '<a href="#" class="actions comment_menu tooltip">'+
            '<span class="tooltip-box">Menu</span>'+
            '<i data-tooltip-content="Menu" data-hover="tooltip" alt="" data-visualcompletion="css-img" class="img sp_kf5oT7e76uM sx_b0af5b" id="js_6sy"></i>'+
            '</a>'+
            '<div class="dropdown-status">'+
              '<ul class="status">'+
                  '<li class="item-menu">'+
                    '<a class="to-collapse">'+
                      '<span>Collapse comment</span>'+
                    '</a>'+
                  '</li>'+
                  '<li class="item-menu">'+
                    '<a class="to-edit">'+
                      '<span>Edit comment</span>'+
                    '</a>'+
                  '</li>'+
                  '<li class="item-menu">'+
                    '<a class="to-delete">'+
                      '<span>Delete comment</span>'+
                    '</a>'+
                  '</li>'+
                  '<li class="item-menu">'+
                    '<a class="to-embed">'+
                      '<span>Embed</span>'+
                    '</a>'+
                  '</li>'+
                '</ul>'+
              '</div>'+
            '</div>'+
            '<ul class="child_replay"></ul>'+
          '</div>';
          
      document.getElementById('list_comment').prepend(el);
      $('.commentar').val('');
      renderCountComments();
  }
    
function reply_down(){
  $('#list_comment').on('click', '.replay-r', e =>{
    e.preventDefault();
    const reply_anterior = $('.reply-container');
    const div_comentario = reply_anterior.closest('.result_comment').find('.comment-body');
    const replay_a = $(div_comentario).find('.replay-active');
    replay_a.removeClass('replay-active');
    const is_principal = div_comentario.hasClass('principal');
    if(is_principal){
      replay_a.addClass('replay');
    }else{
      replay_a.addClass('replay-r');
    }
    reply_anterior.remove();

    current = e.target.closest('.box_result');
    const name = $(e.target).closest('.comment-body').find('h4').text()
    el = document.createElement('li');
    el.className = "box_reply row reply-container";
    el.innerHTML = `<div class=\"col-md-12 reply_comment\">
                    <div class=\"row\">
                        <div class=\"avatar_comment col-md-1 avatar-post\">
                          <img src=\"https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg\" alt=\"avatar\"/>
                        </div>
                        <div class=\"box_comment col-md-10 px-0\">
                        <textarea class=\"comment_replay\" placeholder=\"Add a comment...\">${name}</textarea>
                        <div class="box_post flex items-center justify-between flex-column">
                          <div class="">
                            <table cols="1" class="uiGrid _51mz" cellspacing="0" cellpadding="0">
                              <tbody>
                                <tr class="post-facebook">
                                  <td>
                                    <input type="checkbox" id="post_fb">
                                    <label for="post_fb">Also post on Facebook</label>
                                  </td>
                                </tr>
                                <tr class="tr-character" style="display: none;">
                                  <td class="td-character">Write <span class="character-post">-1</span> more characters to post to Facebook</td>
                                </tr>
                                <tr class="lh-32">
                                  <td>
                                    <div class="_3-95 user-mobile">
                                      <span class="_1y5f _2pih  _2ieq">
                                        Commenting as
                                      </span>
                                      <select class="_1y5g">
                                        <option class="user-option" value="">Anonymous</option>
                                      </select>
                                    </div>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="flex relative align-item-start align-self-end">
                            <div class="user tooltip user-desktop">
                              <a href="#" class="profile">
                                <span class="tooltip-you">Commenting as Anonymous</span>
                                <span alt="" class="_-xe _3-8_">
                                  <span>
                                    <img class="_6vg img" height="16" src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" width="16" alt="">
                                  </span>
                                </span>
                                <span alt="" class="_4o_3">
                                  <i class="fa fa-caret-down"></i>
                                </span>
                              </a>
                            </div>
                            <div class="isYou" style="display: none;">
                              <div class="flex items-center">
                                <div class="avatar">
                                  <img class="_4-rj img" height="30" src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" width="30" alt="">
                                </div>
                                <div class="name">
                                  Eres tu 
                                  <span class="_uyb">(You)</span>
                                  <div class="_55fc"></div>
                                </div>
                              </div>
                            </div>
                            <button class=\"cancel mt-0\" type=\"button\">Cancel</button>
                            <button class=\"disabled-b mt-0\" type=\"button\" disabled value=\"1\">Reply</button>
                          </div>
                        </div>

                      </div>
                    </div>
                </div>`
    $(current).find('.child_replay').first().append(el);

    cancel_reply('replay-r');
  });
  $('#list_comment').on('click', '.submit-reply', e =>{
    e.preventDefault();
    submit_reply(e, false, 'replay-r');
  }); 
}

function eventReply(){
  $('#list_comment').on('click', '.replay', e =>{
    e.preventDefault();
    const reply_anterior = $('.reply-container');
    const div_comentario = reply_anterior.closest('.result_comment').find('.comment-body');
    const replay_a = $(div_comentario).find('.replay-active');
    replay_a.removeClass('replay-active');
    const is_principal = div_comentario.hasClass('principal');
    if(is_principal){
      replay_a.addClass('replay');
    }else{
      replay_a.addClass('replay-r');
    }
    reply_anterior.remove();

    $(e.target).removeClass('replay');
    $(e.target).addClass('replay-active');
    const element = $(e.target.closest('.comment-body')).next();
    $(element).append(`<li class="box_reply row reply-container"><div class=\"col-md-12 reply_comment\">
    <div class=\"row\">
        <div class=\"avatar_comment col-md-1 avatar-post\">
          <img src=\"https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg\" alt=\"avatar\"/>
        </div>
        <div class=\"box_comment col-md-10 px-0\">
        <textarea class=\"comment_replay\" placeholder=\"Add a comment...\">${name}</textarea>
        <div class="box_post flex items-center justify-between flex-column">
          <div class="">
            <table cols="1" class="uiGrid _51mz" cellspacing="0" cellpadding="0">
              <tbody>
                <tr class="post-facebook">
                  <td>
                    <input type="checkbox" id="post_fb">
                    <label for="post_fb">Also post on Facebook</label>
                  </td>
                </tr>
                <tr class="tr-character" style="display: none;">
                  <td class="td-character">Write <span class="character-post">-1</span> more characters to post to Facebook</td>
                </tr>
                <tr class="lh-32">
                  <td>
                    <div class="_3-95 user-mobile">
                      <span class="_1y5f _2pih  _2ieq">
                        Commenting as
                      </span>
                      <select class="_1y5g">
                        <option class="user-option" value="">Anonymous</option>
                      </select>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="flex relative align-item-start align-self-end mt-0">
            <div class="user tooltip user-desktop">
              <a href="#" class="profile">
                <span class="tooltip-you">Commenting as Anonymous</span>
                <span alt="" class="_-xe _3-8_">
                  <span>
                    <img class="_6vg img" height="16" src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" width="16" alt="">
                  </span>
                </span>
                <span alt="" class="_4o_3">
                  <i class="fa fa-caret-down"></i>
                </span>
              </a>
            </div>
            <div class="isYou" style="display: none;">
              <div class="flex items-center">
                <div class="avatar">
                  <img class="_4-rj img" height="30" src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" width="30" alt="">
                </div>
                <div class="name">
                  Eres tu 
                  <span class="_uyb">(You)</span>
                  <div class="_55fc"></div>
                </div>
              </div>
            </div>
            <button class=\"cancel mt-0\" type=\"button\">Cancel</button>
            <button class=\"disabled-b mt-0\" type=\"button\" disabled value=\"1\">Reply</button>
          </div>
        </div>

      </div>
    </div>
</div></li>`);
    
    cancel_reply('replay');           
  });
  $('#list_comment').on('click', '.submit-reply', e =>{
    e.preventDefault();
    submit_reply(e, false, 'replay');
  });
}
  
function submit_reply(e, r_r=true, current='replay-r'){
  const comment_replay = $('.comment_replay').val();
  if(r_r){
    active = 'replay';
  }else{
    active = 'replay-r';
  }
  const li_box = e.target.closest('.reply-container');
  element = e.target.closest('.child_replay');
  let ele = document.createElement('li');
  ele.classList.add('box_reply');
  ele.classList.add('row');
  ele.classList.add('sm-flex');
  ele.classList.add('mr-0');

  ele.innerHTML =
        '<div class=\"avatar_comment col-md-1\">'+
          '<img src=\"https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg\" alt=\"avatar\"/>'+
        '</div>'+
        '<div class=\"result_comment col-md-11\">'+
        '<div class="comment-body">'+
        '<h4>Anonimous</h4>'+
        '<p class="comment-content">'+ comment_replay +'</p>'+
        '<span class="collapse">This comment is collapsed. <a class="uncollapse" href="#">Undo</a></span>'+
        '<div class=\"tools_comment\">'+
        '<a class=\"like\" href=\"#\">Like</a><span aria-hidden=\"true\"> · </span>'+
        '<a class=\"'+active+'\" href=\"#\">Reply</a><span aria-hidden=\"true\"> · </span>'+
        '<span><i class="_3-8_ _4iy4 img sp_kf5oT7e76uM sx_7e6187" alt="" data-visualcompletion="css-img"></i><span class="count">0</span></span>s'+
        '</div>'+
        '<ul class="child_replay"></ul>'+
        '<a href="#" class="actions comment_menu tooltip">'+
        '<span class="tooltip-box">Menu</span>'+
        '<i data-tooltip-content="Menu" data-hover="tooltip" alt="" data-visualcompletion="css-img" class="img sp_kf5oT7e76uM sx_b0af5b" id="js_6sy"></i>'+
        '</a>'+
        '<div class="dropdown-status">'+
        '<ul class="status">'+
            '<li class="item-menu">'+
              '<a class="to-collapse">'+
                '<span>Collapse comment</span>'+
              '</a>'+
            '</li>'+
            '<li class="item-menu">'+
              '<a class="to-edit">'+
                '<span>Edit comment</span>'+
              '</a>'+
            '</li>'+
            '<li class="item-menu">'+
              '<a class="to-delete">'+
                '<span>Delete comment</span>'+
              '</a>'+
            '</li>'+
            '<li class="item-menu">'+
              '<a class="to-embed">'+
                '<span>Embed</span>'+
              '</a>'+
            '</li>'+
          '</ul>'+
          '</div>'+
        '</div>'+
        '</div>';

  $(element).append(ele);
  renderCountComments();
  const div_ = $(element).prev();
  const reply_a = $(div_).find('.replay-active');
  $(reply_a).addClass(current);
  $(reply_a).removeClass('replay-active');
  li_box.remove();
}
  
function cancel_reply(current_r){
  $('#list_comment').on('click', '.cancel', e => {
    e.preventDefault();
    const elemet = e.target.closest('.reply-container');
    $(elemet).remove();
    $('.replay-active').addClass(current_r);
    $('.replay-active').removeClass('replay-active');
  });
}
  

function renderCountComments(){
  $('.count_comment').html(`${Comments()} Comments`);
}

var previos;
function EventMenuFacebook(){
  // menu de comentario 
  $('#list_comment').on('click', '.comment_menu', (e) =>{
    e.preventDefault();

    const menu_before = $('.comment_menu.active');
    if(menu_before && menu_before.hasClass('active')){
      const current_menu = $(e.target).parent()
      if(!current_menu.hasClass('active')){
        current_menu.addClass('active');
        const list_menu = $(current_menu).next();
        list_menu.toggle(); 
      }
      menu_before.removeClass('active');
      const comment_body = menu_before.closest('.comment-body');
      comment_body.find('.dropdown-status').css('display', 'none');
    }else{
      const element = $(e.target).parent();
      element.addClass('active');
      const list_menu = $(element).next();
      list_menu.toggle(); 
    }
    
  });
}

function Colapse(e, spam=false){
    const element = e.target.closest('.result_comment');
    $(element).find('.child_replay').css('display', 'none');
    $(element).find('.comment-content').css('display', 'none');
    const colapse_content = $(element).find('.collapse');
    const ul = e.target.closest('.status');
    if(spam){
      colapse_content.html(`This comment is marked as spam. <a class="uncollapse" href="#">Undo</a>`);
      const li_embed = $(ul).find('.to-embed').parent();
      li_embed.css('display', 'none');
    }
    colapse_content.css('display', 'inline');
    const li = $(ul).find('.to-collapse').parent();
    const li_span = $(ul).find('.to-spam').parent();
    $(li).css('display', 'none');
    $(li_span).css('display', 'none');
    $(element).find('.dropdown-status').css('display', 'none');
    const menu = $(element).find('.actions.comment_menu.active');
    menu.removeClass('active');
}

function unCollapse(){
  $('#list_comment').on('click', '.uncollapse', e =>{
    e.preventDefault();
    const element = e.target.closest('.result_comment');
    $(element).find('.child_replay').css('display', '');
    $(element).find('.comment-content').css('display', '');
    $(element).find('.collapse').css('display', 'none');
    const li = $(element).find('.status li');
    $(li).css('display', 'block');
  });
}

function renderEditComment(e){
  const element = e.target.closest('.result_comment');
  const last_content = $(element).find('.comment-content').text();
  $(element).html(`<div class=\"col-md-12 reply_comment\">
  <div class=\"row\">
      <div class=\"box_comment col-md-10 px-0\">
      <textarea class=\"edit-content\" placeholder=\"Add a comment...\"></textarea>
      <div class="box_post flex items-center justify-end">
      <div class="flex relative box-reply">
        <button class="cancel-edit" type="button" value="2">Cancel</button>
        <button class="edit-comment" type="button" value="1">Save</button>
      </div>
    </div>
  </div>
</div>
`);
  $('.edit-content').val(last_content);
  $('.edit-content').focus();
  $('.cancel-edit').on('click', e =>{
    editComment(e, last_content);
  });
}

function editComment(e, new_comment=null){
  const element = e.target.closest('.result_comment');
  if(new_comment == null){
    new_comment = $(element).find('.edit-content').val();
  }
  element.innerHTML =
        '<div class=\"comment-body\ principal">'+
          '<h4>Anonimous</h4>'+
          '<p class="comment-content">'+ new_comment +'</p>'+
          '<span class="collapse">This comment is collapsed. <a class="uncollapse" href="#">Undo</a></span>'+
          '<div class=\"tools_comment\">'+
          '<a class=\"like\" href=\"#\">Like</a><span aria-hidden=\"true\"> · </span>'+
          '<span aria-hidden=\"true\"> · </span>'+
          '<a class=\"replay\" href=\"#\">Reply</a><span aria-hidden=\"true\"> · </span>'+
          '<span><i class="_3-8_ _4iy4 img sp_kf5oT7e76uM sx_7e6187" alt="" data-visualcompletion="css-img"></i><span class="count">0</span></span>s'+
          '</div>'+
          '<a href="#" class="actions comment_menu">'+
            '<i data-tooltip-content="Menu" data-hover="tooltip" alt="" data-visualcompletion="css-img" class="img sp_kf5oT7e76uM sx_b0af5b" id="js_6sy"></i>'+
          '</a>'+
          '<div class="dropdown-status">'+
            '<ul class="status">'+
                '<li class="item-menu">'+
                  '<a class="to-collapse">'+
                    '<span>Collapse comment</span>'+
                  '</a>'+
                '</li>'+
                '<li class="item-menu">'+
                  '<a class="to-edit">'+
                    '<span>Edit comment</span>'+
                  '</a>'+
                '</li>'+
                '<li class="item-menu">'+
                  '<a class="to-delete">'+
                    '<span>Delete comment</span>'+
                  '</a>'+
                '</li>'+
                '<li class="item-menu">'+
                  '<a class="to-embed">'+
                    '<span>Embed</span>'+
                  '</a>'+
                '</li>'+
              '</ul>'+
            '</div>'+
          '</div>'+
        '<ul class="child_replay"></ul>';

    renderCountComments();
}

function likes(){
  $('#list_comment').on('click', '.like', e => {
    e.preventDefault();
    $current = e.target;
    var x = $($current).closest('div').find('.like').text().trim();
    var y = parseInt($($current).closest('div').find('.count').text().trim());
    
    if (x === "Like") {
        $($current).closest('div').find('.like').text('Unlike');
        $($current).closest('div').find('.count').text(y + 1);
    } else if (x === "Unlike"){
        $($current).closest('div').find('.like').text('Like');
        $($current).closest('div').find('.count').text(y - 1);
    } else {
        var replay = $($current).closest('div').find('.like').text('Like');
        $($current).closest('div').find('.count').text(y - 1);
    }
  });
}

function deleteComment(e){
  e.preventDefault();
  let comment = e.target.closest('.box_reply');
  if(comment){
    $(comment).remove();
  }else{
    comment = e.target.closest('.box_result.row');
    console.log(comment);
    $(comment).remove();
  }
}

function focusComment(){
  $('#fbcomment .commentar').focus( () =>{
    $('#fbcomment .box_post').removeAttr('style');
  });
}

function enableComment(){
  $('#fbcomment').on('keyup', '.commentar', e =>{
    const button = $('.disabled-b');
    button.addClass('post-comment');
    button.removeClass('disabled-b');
    button.removeAttr('disabled');
    const value = $(e.target).val()
    if(value.length == 0){
      $('.post-comment').addClass('disabled-b');
      $('.disabled-b').attr('disabled', '');
      $('.post-comment').removeClass('post-comment');
    }
    minCharacter();
    
  });

  $('#list_comment').on('keyup', '.comment_replay', e =>{
    const button = $('.disabled-b');
    button.addClass('submit-reply');
    button.removeClass('disabled-b');
    button.removeAttr('disabled');
    const value = $(e.target).val()
    if(value.length == 0){
      $('.submit-reply').addClass('disabled-b');
      $('.disabled-b').attr('disabled', '');
      $('.submit-reply').removeClass('submit-reply');
    }
  });
}

function minCharacter(){
  let character_write;
  $('#fbcomment #post_fb').on('click', e =>{
    const checkbox = $('.tr-character').css('display');
    if(checkbox == 'none' && $('.commentar').val().length <= 6){
      $('.tr-character').css('display', 'block');
    }else if(checkbox == 'block'){
      console.log(checkbox, !e.target.checked);
      if(!e.target.checked){
        $('.tr-character').css('display', 'none')
      }
    }
    
  });

  $('#fbcomment').on('keyup', '.commentar', e =>{
    const writer = $('.commentar').val().length;
    const count_character = 6 - writer;
    $('.character-post').html(count_character);
    character_write = $('.commentar').val().length;
    if(character_write >= 6){
      $('.tr-character').css('display', 'none');
    }else{
      const check = document.getElementById('post_fb');
      if(check.checked){
        $('.tr-character').css('display', 'block');  
      }
    }
  });

}

function showMore(){
  $('#list_comment').on('click', '.more-link', e =>{
    e.preventDefault();
    const div_showmore = $(e.target).parent();
    div_showmore.css('display', 'none');
    const progress_bar = $(div_showmore).next();
    progress_bar.css('display', 'block');
  });
}

function menuOrder(){
  const promise = new Promise((res, reject) => {
    res(true);
  });
  promise.then(() =>{
    $('#fbcomment').on('click', '.select-item', '.select-item span', e =>{
      e.preventDefault();
      $('.order-item-active').removeClass('order-item-active');
      let value;
      if($(e.target).hasClass('select-item')){
        const current = $(e.target);
        current.addClass('order-item-active');
        value = current.find('span').html();
      }else{
        const current = $(e.target).closest('.select-item')
        current.addClass('order-item-active');
        value = $(e.target).html();
      }

      $('.dropdown_button').html(`${value}<span alt="" class="_3-99 _4o_3"><i alt="" data-visualcompletion="css-img" class="img sp_kf5oT7e76uM sx_0dafd9"></i></span>`);
      $('.dropdown_button').css('background', 'white');
      $('.dropdown_content').css('display', 'none');
    });
  });

  promise.then( () =>{
    sort();
  });
}

function openSortBy(){
  $('#fbcomment').on('click', '.dropdown_button', () =>{
    $('.dropdown_content').css('display', 'block');
  });
}

function sort(){
  $('#fbcomment').on('click', '#ordest', '#ordest > span', (e) =>{
    if(order == 'newlest'){
      $('#list_comment').append($('.box_result').detach().get().reverse());
      order = 'ordest';
    }
  });
  $('#fbcomment').on('click', '#newlest', '#newlest > span', (e) =>{
    if(order == 'ordest'){
      $('#list_comment').append($('.box_result').detach().get().reverse());
      order = 'newlest';
    }
  });
}

function profile(){
  $('#fbcomment').on('click', '.profile', e =>{
    e.preventDefault();
    let isyou = $('.isYou');
    if(isyou.css('display') === 'none'){
      isyou.css('display', 'block');
    }else if(isyou.css('display') === 'block'){
      isyou.css('display', 'none');
    }
  });
}



$(() => {
  // menu
  EventMenuFacebook();

  // event responder
  eventReply();

  //renderizar comentarios
  renderCountComments();

  //colpase
  $('#list_comment').on('click', '.to-collapse', e =>{
    Colapse(e, false);
  });

  //spam
  $('#list_comment').on('click', '.to-spam', e =>{
    Colapse(e, true);
  });

  //uncolapse
  unCollapse();

  //reply 
  reply_down();

  //likes
  likes();

  //show more
  showMore();

  //edit
  $('#list_comment').on('click', '.to-edit', e =>{
    renderEditComment(e);
  });
  $('#list_comment').on('click', '.edit-comment', e =>{
    editComment(e, null);
  });

  //delete
  $('#list_comment').on('click', '.to-delete', e => {
    deleteComment(e);
  });

  //postear event
  $('#fbcomment').on('click', '.post-comment', () =>{
    submit_comment()
  });

  //oldlist
  openSortBy();
  menuOrder();


  //posteando textarea
  focusComment();
  enableComment();
  minCharacter();

  //profile
  profile();


  $('.body_comment').on('click', '.show_more', e =>{
    e.preventDefault();
    const current = e.target;
    $(current).html('Cargando...');
  });
});
