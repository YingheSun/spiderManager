$(document).ready(function(){
  $(window).scroll(function() {
    var scroll = document.documentElement.scrollTop || document.body.scrollTop;
    scroll >= 850 ? $('.tabber').addClass('top') : $('.tabber').removeClass('top');
  });
  var Index = {
    translationNum:0,
    init: function() {
      this.jump();
      this.tabber();
    },
    jump: function() {
      $('.tab li a').click(function() {
        var id = $(this).attr('data-id');
        $(this).children('.tab-text').addClass('active');
        $(this).children('.tab-icon').addClass('tab-icon1 '+id+'-active-img');
        $(this).parent().siblings().children().children('.tab-text').removeClass('active');
        $(this).parent().siblings().children().children('.tab-icon').removeClass('tab-icon1');
        document.getElementById(id).scrollIntoView();
      })
    },
    tabber: function() {
      var _this=this;
      let x = document.getElementsByClassName('translation')[0];
      $('.switch-tab').click(function() {
        $(this).addClass('active').siblings().removeClass('active');
        var school = $(this).attr('data-school');
        if (school == 'aim') {
          _this.translationNum = 0
          x.style.transform = `translateX(${_this.translationNum}px)`;
          $('.switch-container').eq(0).addClass('show-switch').siblings().removeClass('show-switch');
        }
        if ((school == 'aeu' && _this.translationNum < 400) || _this.translationNum > 400) {
          _this.translationNum = 400;
          x.style.transform = `translateX(${_this.translationNum}px)`;
          $('.switch-container').eq(1).addClass('show-switch').siblings().removeClass('show-switch');
        }
        if (school == 'nus' && _this.translationNum < 800) {
          _this.translationNum = 800;
          x.style.transform = `translateX(${_this.translationNum}px)`;
          $('.switch-container').eq(2).addClass('show-switch').siblings().removeClass('show-switch');
        }  
      })
    }
  }
  Index.init()
})

