$(document).ready( function() {
  console.log('ok');

  //ref
  var container = $('.container');

  //handlebars
  var source = $('#template').html();
  var template = Handlebars.compile(source);

  //ajax
  $.ajax ({
    url: 'http://localhost/php-ajax-dischi/data/json-script.php',
    method: 'GET',
    success: function(res) {
      console.log(res);
      for (var i = 0; i < res.lenght; i++) {
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

}); //END DOCUMENT READY
