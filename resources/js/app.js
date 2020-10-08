require('./bootstrap');

window.$ = require('jquery');

function getData() {

  $.ajax({
    url:"/api/posts/all",
    method:'GET',
    success: function(posts){

      var target = $('#target');

      for (var i = 0; i < posts.length; i++) {
        var post = posts[i];

        var html = '<li>' + post['title'] + ':<br> like: ' + post['like'] + '</li>';
        target.append(html);

      }
    },
    error: function(err) {
      console.log('error', err);
    }
  });
}

function init(){
   getData();
}
$(document).ready(init)
