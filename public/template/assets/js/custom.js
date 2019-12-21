$(document).ready(function () {

    $('.select2').select2();

    $('#carouselCoverImage').carousel({
        interval: 9000,
    });

    $('#carouselTestimoni').carousel({
    interval: 90000,
    });

    $('#appointment').addClass('animated swing');
    setTimeout(function(){
        $('#appointment').removeClass('animated swing');
    }, 1200);

    jQuery(document).ready(function ($) {
      $('#branch').on('change', function (e) {
          var branch = $(this).val();
          // Empty the input

          $("#div").empty();
          
          // AJAX request
          $.ajax({
              url: 'branches/getBranchesByCountry/' + branch,
              type: 'get',
              dataType: 'json',
              success: function (response) {
                var data = response['data'];
                if (data !== undefined){
                    var count = response['data'].length;
                    $("#count").append(count);                      
                    if(count > 0){
                        var data = response['data']; 
                        $.each(data, function(index, item){
                            var div = [
                            '<div class="row" style="border: 1px dotted black;">',
                                '<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">',
                                    '<iframe src="'+item.sourceMap+'" width="500" height="300" frameborder="0" style="" allowfullscreen=""></iframe>',
                                '</div>',
                                '<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">',
                                    '<h3 style="font-weight:bold;"> EL MEDINA SPA BEKAM '+item.branchName+'</h3>',
                                    '<div class="row">',
                                        '<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="font-size:1.4rem;">',
                                            '<i class="fas fa-home" title="Address"></i>',
                                        '</div>',
                                        '<div class="col-lg-11 col-md-11 col-sm-11 col-xd-11">',
                                            '<h5>'+item.address+'</h5>',
                                        '</div>',
                                    '</div>',
                                    '<div class="row">',
                                        '<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="font-size:1.3rem;">',
                                            '<i class="fas fa-phone" title="Telephone Number"></i>',
                                        '</div>',
                                        '<div class="col-lg-11 col-md-11 col-sm-11 col-xd-11">',
                                            '<h5>'+item.telephoneNo+'</h5>',
                                        '</div>',
                                    '</div>',
                                    '<div class="row">',
                                        '<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center" style="font-size:1.5rem;">',
                                            '<i class="fab fa-facebook" title="Facebook EL MEDINA SPA BEKAM '+item.branchName+'"></i>',
                                        '</div>',
                                        '<div class="col-lg-11 col-md-11 col-sm-11 col-xd-11">',
                                            '<h5> <a href="'+item.facebook+'" target="_blank" style="color:black;">'+item.facebook+'</a></h5>',
                                        '</div>',
                                    '</div>',
                                '</div>',
                            '</div>',
                            '<hr/>',
                            ].join('');
                            $('#div').append(div);
                        });                        
                    }
                }else{
                    
                var div = [
                    '<div class="row">',
                        '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">',
                        '<h1> Sorry, no branch at this place at the moment. </h1>',
                        '</div>',
                    '</div>'
                    ].join('');
                $('#div').append(div);
                }
              }
          });
      });
  });
    
});   