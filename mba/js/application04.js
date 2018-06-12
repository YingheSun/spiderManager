(function() {
  var Application04 = {
    init: function() {
      this.bindActions();
    },
    bindActions: function() {
      var items = $('.item-upload');
      items.each(function(index, el) {
        var el = $(el);
        var input = el.find('.item-upload-btn input');
        var img = el.find('img');
        var mark = el.find('.icon-question-mark');
        var popup = el.find('.question-popup');
        // upload preview
        Util.uploadImagePreview({
          fileDom: input,
          imgDom: img,
          complete: function(file, isPic) {
            if (!isPic) {
              img.parent().html(file.name);
            }
          }
        });

        // show mark's popup
        mark.on('mouseover', function() {
          popup.show();
        });
        mark.on('mouseout', function() {
          popup.hide();
        });
      });
    },
    showQuestionMarks: function() {

    }
  };
  Application04.init();
}())