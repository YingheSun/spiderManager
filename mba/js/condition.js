(function() {
  var Condition = {
    init: function() {
      this.imagePreview();
    },
    imagePreview: function() {
      var input = $('.condition-person-file');
      var img = $('.condition-person-photo img');
      Util.uploadImagePreview({
        fileDom: input,
        imgDom: img
      });
    }
  };
  Condition.init();
}())