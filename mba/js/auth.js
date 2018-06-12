$(document).ready(function() {
  var inputPhone = $('.vphone'),
    inputVcode = $('.vcode'),
    inputIcode = $('.login-verification'),
    btnVcode = $('.btn-vcode'),
    btnSubmit = $('.btn-submit');
  inputPhone.focus(function(){
    inputPhone.val('');
    $('.login-phone').removeClass('error-phone');
  });

  inputVcode.focus(function(){
    inputVcode.val('');
    $('.login-message').removeClass('error-vcode');
  });

  inputIcode.on('focus', '.varify-input-code', function(){
    $(this).val('');
    $('.login-verification').removeClass('error-verification');
  });

  inputPhone.keyup(function(){
    if($(this).val().length <= 0) {
      $('.login-box-btn').removeClass('btn-activate');
    }else {
      $('.login-box-btn').addClass('btn-activate');
    } 
  });

  // inputIcode.keyup(function(){
  //   if (!Util.isMobile(phoneNum)) {
  //     inputPhone.val('请输入正确的手机号');
  //     $('.login-phone').addClass('error-phone');
  //     return;
  //   }else {
      
  //   }
  // });

  // 获取验证码
  btnVcode.click(function(e) {
    var phoneNum = inputPhone.val();
    if (btnVcode.hasClass('disabled')) {
      return;
    }
    inputVcode.val('');
    $('.login-message').removeClass('error-vcode');
    if (Util.isMobile(phoneNum) ) {
      $.ajax({
        url: "http://gw.sunlands.com/tuiguang/ajax_tuiguang_message.action",
        data: {
          tel: phoneNum,
          //填写手机号
          messageId: '141', //写死的id
          schoolId: '44', //写死的schoolId
          callback: 'afterSendVcode'
        },
        method: "get",
        dataType: "jsonp",
        jsonp: "afterSendVcode",
        success: function(data) {}
      });
    } else {
      inputPhone.val('请输入正确的手机号');
      $('.login-phone').addClass('error-phone');
    }
  });

  btnSubmit.click(function(e) {
    if(!btnSubmit.hasClass('btn-activate')) {
      return;
    }
    var phoneNum = inputPhone.val();
    var vcode = inputVcode.val();
    console.log(phoneNum, phoneNum)
    if (!Util.isMobile(phoneNum)) {
      inputPhone.val('请输入正确的手机号');
      $('.login-phone').addClass('error-phone');
      return;
    }
    if (vcode.length === 0 || vcode !== '1845') {
      inputVcode.val('请输入正确的验证码');
      $('.login-message').addClass('error-vcode');
      return;
    }

    // var pageName = location.pathname.slice(location.pathname.lastIndexOf("/") + 1).split('.')[0];
    $('.login-mask').css('display', 'none');
    $('body').css('overflow', 'inherit')
  });

})

function afterSendVcode(data) {
  var countdown = 58;
  var btnVcode = $('.btn-vcode');
  btnVcode.text('59s')
  btnVcode.addClass('disabled');
  var timer = setInterval(function() {
    if (countdown > 0) {
      btnVcode.text(countdown + 's');
    } else {
      btnVcode.text('获取验证码');
      btnVcode.removeClass('disabled');
      clearInterval(timer);
    }
    countdown--;
  }, 1000);
}

$('.login-mask').click(function(e) {
  if($(e.target).closest(".login-box").length == 0 && $(e.target).closest("font").length !== 1) {
    $('.login-mask').css('display', 'none');
    $('body').css('overflow', 'inherit')
  }
})
