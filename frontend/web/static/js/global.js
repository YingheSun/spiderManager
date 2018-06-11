var Config = {
  URL: 'https://smallprogram.sunlands.com/wxapp-preview/frontend/web/index.php', // 生产
  CURRENT_PATH: location.href.split('?')[0].slice(0, location.href.split('?')[0].lastIndexOf('/')),
  APP_ID: '',
  IS_WEIXIN: false,
  VERSION: 'v1.1'
};
// mta统计使用
var _mtac = {
  "senseQuery": 1
};
var Util = {
  teacherX: 0,
  isMobile: function(mobile) {
    return /^1[34578][0-9]{9}$/.test(mobile);
  },
  getQuery: function(url) {
    var url = url,
      request = new Object(),
      strs;
    if (url.indexOf("?") != -1) {
      var str = url.slice(url.indexOf("?") + 1, url.indexOf("#") >= 0 ? url.indexOf("#") : url.length);
      strs = str.split("&");
      for (var i = 0; i < strs.length; i++) {
        request[strs[i].split("=")[0]] = strs[i].split("=")[1];
      }
    }
    return request;
  },
  addMTA: function() {
    var mta = document.createElement("script");
    mta.src = "http://pingjs.qq.com/h5/stats.js?v2.0.4";
    mta.setAttribute("name", "MTAH5");
    mta.setAttribute("sid", "500608263");
    mta.setAttribute("cid", "500608264");
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(mta, s);
  },
  getWXSignature: function(callback) {
    $.ajax({
      type: 'GET',
      url: Config.URL + '?r=spread/wechat',
      data: {
        url: location.href.split('#')[0]
      },
      dataType: 'json',
      jsonp: 'callback',
      success: function(result) {
        if (result.code == 0) {
          Config.APP_ID = result.appId;
          wx.config({
            debug: Util.GET['_debug'] ? true : false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
            appId: result.appId, // 必填，公众号的唯一标识
            timestamp: result.timestamp, // 必填，生成签名的时间戳
            nonceStr: result.nonceStr, // 必填，生成签名的随机串
            signature: result.signature, // 必填，签名，见附录1
            // jsApiList:['checkJsApi']
            jsApiList: ['checkJsApi', 'onMenuShareTimeline', 'onMenuShareAppMessage', 'onMenuShareQQ', 'onMenuShareWeibo', 'hideMenuItems', 'showMenuItems', 'hideAllNonBaseMenuItem', 'showAllNonBaseMenuItem', 'translateVoice', 'startRecord', 'stopRecord', 'onRecordEnd', 'playVoice', 'pauseVoice', 'stopVoice', 'uploadVoice', 'downloadVoice', 'chooseImage', 'previewImage', 'uploadImage', 'downloadImage', 'getNetworkType', 'openLocation', 'getLocation', 'hideOptionMenu', 'showOptionMenu', 'closeWindow', 'scanQRCode', 'chooseWXPay', 'openProductSpecificView', 'addCard', 'chooseCard', 'openCard'] // 必填，需要使用的JS接口列表，所有JS接口列表见附录2
          });
          wx.ready(function() {
            callback();
          });
        } else {
          weui.alert(result.msg);
        }
      }
    })
  },
  isWX: function() {
    var ua = window.navigator.userAgent;
    return (/MicroMessenger/ig).test(ua);
  },
  wechatShare: function(options) {

    //alert(JSON.stringify(options.shareToFriendData));
    options = options || {};
    options.shareData = options.shareData || {};
    options.shareToFriendData = options.shareToFriendData || options.shareData;
    options.shareToTimelineData = options.shareToTimelineData || options.shareData;
    options.shareToQQData = options.shareToQQData || options.shareData;
    options.shareToWeiboData = options.shareToWeiboData || options.shareData;
    options.shareCallback = options.shareCallback || function() {};


    //用户点击发送给朋友
    wx.onMenuShareAppMessage({
      title: options.shareToFriendData.title,
      desc: options.shareToFriendData.desc,
      link: options.shareToFriendData.url,
      imgUrl: options.shareToFriendData.imgUrl,
      trigger: function(res) {
        // alert(JSON.stringify(options.shareToFriendData));
        options.shareCallback.trigger && options.shareCallback.trigger.apply(null, [res]);
      },
      success: function(res) {
        //alert('已分享');
        options.shareCallback.success && options.shareCallback.success.apply(null, [res]);
      },
      cancel: function(res) {
        //alert('已取消');
        options.shareCallback.cancel && options.shareCallback.cancel.apply(null, [res]);
      },
      fail: function(res) {
        //alert(JSON.stringify(res));
        options.shareCallback.fail && options.shareCallback.fail.apply(null, [res]);
      }
    });

    //用户点击分享到朋友圈
    wx.onMenuShareTimeline({
      title: options.shareToTimelineData.title,
      link: options.shareToTimelineData.url,
      imgUrl: options.shareToTimelineData.imgUrl,
      trigger: function(res) {
        // alert('用户点击分享到朋友圈');
        // alert(JSON.stringify(options.shareToTimelineData));
        options.shareCallback.trigger && options.shareCallback.trigger.apply(null, [res]);
      },
      success: function(res) {
        //alert('已分享');
        options.shareCallback.success && options.shareCallback.success.apply(null, [res]);
      },
      cancel: function(res) {
        //alert('已取消');
        options.shareCallback.cancel && options.shareCallback.cancel.apply(null, [res]);
      },
      fail: function(res) {
        //alert(JSON.stringify(res));
        options.shareCallback.fail && options.shareCallback.fail.apply(null, [res]);
      }
    });

    //用户点击分享到微博
    wx.onMenuShareQQ({
      title: options.shareToQQData.title,
      desc: options.shareToQQData.desc,
      link: options.shareToQQData.url,
      imgUrl: options.shareToQQData.imgUrl,
      trigger: function(res) {
        //alert('用户点击分享到QQ');
        options.shareCallback.trigger && options.shareCallback.trigger.apply(null, [res]);
      },
      success: function(res) {
        //alert('已分享');
        options.shareCallback.success && options.shareCallback.success.apply(null, [res]);
      },
      cancel: function(res) {
        //alert('已取消');
        options.shareCallback.cancel && options.shareCallback.cancel.apply(null, [res]);
      },
      fail: function(res) {
        //alert(JSON.stringify(res));
        options.shareCallback.fail && options.shareCallback.fail.apply(null, [res]);
      }
    });

    //用户点击分享到微博
    wx.onMenuShareWeibo({
      title: options.shareToWeiboData.title,
      desc: options.shareToWeiboData.desc,
      link: options.shareToWeiboData.url,
      imgUrl: options.shareToWeiboData.imgUrl,
      trigger: function(res) {
        //alert('用户点击分享到微博');
        options.shareCallback.trigger && options.shareCallback.trigger.apply(null, [res]);
      },
      success: function(res) {
        //alert('已分享');
        options.shareCallback.success && options.shareCallback.success.apply(null, [res]);
      },
      cancel: function(res) {
        //alert('已取消');
        options.shareCallback.cancel && options.shareCallback.cancel.apply(null, [res]);
      },
      fail: function(res) {
        //alert(JSON.stringify(res));
        options.shareCallback.fail && options.shareCallback.fail.apply(null, [res]);
      }
    });
  },
  // 发送验证码
  sendVcode: function(options) {
    $.ajax({
      url: Config.URL + '?r=spread/send-authcode',
      type: 'GET',
      data: {
        mobile: options.mobile,
        userId: options.userId,
        sessionKey: options.sessionKey
      },
      dataType: 'json',
      jsonp: 'callback',
      success: function(res) {
        options.success && options.success(res);
      },
      fail: function(err) {
        options.fail && options.fail(err);
      }
    });
  },

  // 通过手机+验证码注册
  registerWithVcode: function(options) {
    $.ajax({
      url: Config.URL + '?r=spread/reg',
      type: 'GET',
      data: {
        userId: options.userId,
        sessionKey: options.sessionKey,
        authCode: options.authCode
      },
      dataType: 'json',
      jsonp: 'callback',
      success: function(res) {
        options.success && options.success(res);
      },
      fail: function(err) {
        options.fail && options.fail(err);
      }
    });
  },
  getCookieInfo: function() {
    var spread_wx_user_id_cookie = Util.getCookie('spread_wx_user_id');
    var spread_wx_user_id = decodeURIComponent(escape(spread_wx_user_id_cookie)) || '';

    var spread_wx_session_key_cookie = Util.getCookie('spread_wx_session_key');
    var spread_wx_session_key = decodeURIComponent(escape(spread_wx_session_key_cookie)) || '';

    var spread_wx_is_auth_cookie = Util.getCookie('spread_wx_is_auth');
    var spread_wx_is_auth = decodeURIComponent(escape(spread_wx_is_auth_cookie)) || '';

    var userInfo = {
      userId: spread_wx_user_id,
      sessionKey: spread_wx_session_key,
      auth: parseInt(spread_wx_is_auth)
    }
    return userInfo;
  },
  getCookie: function(name) {
    var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
    if (arr = document.cookie.match(reg)) {
      return unescape(arr[2]);
    } else {
      return null;
    }
  },
  openUrl: function(href, options) {
    interactive.openUrl(href, false, {
      moduleName: options && options.moduleName,
      elementName: options && options.elementName
    });
  },
  openXiaoneng: function(evt, pageName, options) {
    interactive.openNtkf(evt, pageName, {
      moduleName: options && options.moduleName,
      elemName: options && options.elementName
    });

    if (typeof gdt !== 'undefined') {
      gdt('track', 'RESERVATION', {
        'type': 'xiaoneng',
        'siteId': siteId,
        'moduleName': options && options.moduleName,
        'elementName': options && options.elementName
      });
    }
  },
  // 教师的切换
  chooseTeacher: function() {
    var _this = this;
    let x = document.getElementsByClassName('teacherX')[0];
    $('.now').click(function() {
      var teacher = $(this).attr('data-teacher');
      $(this).addClass('active').siblings().removeClass('active');
      if (teacher == 'teacher1') {
        _this.teacherX = 0;
        x.style.transform = `translateX(${_this.teacherX}px)`;
        $('.teacher-detail').eq(0).addClass('show-teacher').siblings().removeClass('show-teacher');
      }
      if ((teacher == 'teacher2' && _this.teacherX < 303) || _this.teacherX > 303) {
        _this.teacherX = 303;
        x.style.transform = `translateX(${_this.teacherX}px)`;
        $('.teacher-detail').eq(1).addClass('show-teacher').siblings().removeClass('show-teacher');
      }
      if ((teacher == 'teacher3' && _this.teacherX < 606) || _this.teacherX > 606) {
        _this.teacherX = 606;
        x.style.transform = `translateX(${_this.teacherX}px)`;
        $('.teacher-detail').eq(2).addClass('show-teacher').siblings().removeClass('show-teacher');
      }
      if (teacher == 'teacher4' && _this.teacherX < 909) {
        _this.teacherX = 909;
        x.style.transform = `translateX(${_this.teacherX}px)`;
        $('.teacher-detail').eq(3).addClass('show-teacher').siblings().removeClass('show-teacher');
      }
    })
  },
  //悬浮联系框
  contact: function() {
    $('.contact-text').on({
      mouseover: function() {
        var icon = $(this).attr('data-icon');
        $(this).css({
          'background-image': `url(static/images/${icon}1.png)`
        });
      },
      mouseout: function() {
        var icon = $(this).attr('data-icon');
        $(this).css('background-image', `url(static/images/${icon}.png)`);   
      }   
    });  
  },
  // 下拉菜单
  pullDown: function() {
    $('.section-content').click(function() {
      $('.section').find(".down-box").hide()
      $(this).next().show();
      
    })
  },
  // 下拉选项
  section: function() {
    $('.down-box li').click(function(e) {
      var str = $(this).text();
      $(this).parent().prev().text(str);
      $(this).parent().prev().css('color', '#000');
      $(this).parent().hide();
    })
  },
    /**
   * @param {object} options.fileDom 需要监听的input对象
   * @param {object} options.imgDom 文件变化后显示到的图片对象
   * @param {function} options.complete 执行完成后的回调函数
   */
  uploadImagePreview: function(options) {
    var input = $(options.fileDom);
    input.on('change', function(e) {
      var reader = new FileReader();
      var file = input[0].files[0];
      reader.readAsBinaryString(file);
      reader.onload = function() {
        var result = this.result;
        var isPic = false;
        console.log(file);
        if (file.type === 'image/png' || file.type === 'image/jpg' || file.type === 'image/jpeg' || file.type === 'image/gif') {
          $(options.imgDom).attr('src', 'data:' + file.type + ';base64,' + window.btoa(result));
          isPic = true;
        }
        options.complete && options.complete(file,isPic);
      }
    });
  }
};
Util.GET = Util.getQuery(location.href);
Util.userInfo = Util.getCookieInfo();
// siteId = Util.GET['siteId'] ? Util.GET['siteId'] * 1 : siteId;

(function() {
  Util.chooseTeacher();
  Util.contact();
  Util.addMTA();
  Util.pullDown();
  Util.section();
}())

$('body').click(function(e) {
  if($(e.target).closest(".down-box").length == 0 && $(e.target).closest(".section-content").length == 0) {
    $('.down-box').hide();
    return;
  }
})