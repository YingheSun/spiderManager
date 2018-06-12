(function() {
  var application = {
    init: function() {
      this.bindActions();
    },
    bindActions: function() {
      var input = $('.condition-person-file');
      var img = $('.application-file-img');
      console.log(input)
      Util.uploadImagePreview({
        fileDom: input,
        imgDom: img,
        complete: function(file, isPic) {
          if (!isPic) {
            img.html(file.name);
          }
        }
      });
    }
  }
  application.init();
})()