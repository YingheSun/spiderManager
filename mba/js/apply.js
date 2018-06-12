(function() {
  var Apply = {
    init: function() {
      this.loginPop();
    },
    loginPop: function() {
      $('.login-pop').click(function(e) {
        e.preventDefault()
        $('.login-mask').css('display', 'block');
        $('body').css('overflow', 'hidden')
      })
    }
  }
  Apply.init();
}())