$(document).ready(function() {
    $('#search').on('input', function() {
        var query = $(this).val();
      
        $.ajax({
            url: 'php/search.php',
            type: 'POST',
            data: { query: query },
            dataType: 'json',
            success: function(response) {
                var results = response.results;
                var html = '';
  
                for (var i = 0; i < results.length; i++) {
                    html += '<div>' + results[i].title + '</div>';
                }
  
                $('#search-results').html(html);
            }
        });
    });
});
  