$(document).ready( function() {

  //ref
  var container = $('.container');
  var filter = $('.album_filter');

  //handlebars
  var source = $('#template').html();
  var template = Handlebars.compile(source);

  //ajax
  $.ajax ({
    url: 'http://localhost/php-ajax-dischi/data/json-script.php',
    method: 'GET',
    success: function(res) {
      console.log(res);
      for (var i = 0; i < res.length; i++) {
        var context = {
          img: res[i].img,
          artist: res[i].artist,
          title: res[i].title,
          genre: res[i].genre
        }

        var result = template(context);
        container.append(result);
        console.log(result);
      }
    },
    error: function () {
      console.log('Errore');
    }
  });

  //filter
  // filter.on('change', function() {
  //   var genre = $(this).val();
  // });

}); //END DOCUMENT READY
