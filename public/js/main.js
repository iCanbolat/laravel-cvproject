$('#location , #sector').on('change',function(){
    var location = $('#location').val();
    var sector = $('#sector').val();
    
   $.ajax({
       url:'search',
       type:'GET',
       data:{
           'location':location,
           'sector':sector,
       },
       success:function(data){
           $('#content').html(data);
       }
   })
}) ;
$(".item").on("click"(function(){
        
    $('.details').toggleClass('details-view');
    var image = $(this).children().children().children('.resim').attr('src');
    var name = $(this).children().children().children().children('h4').text();
    var title = $(this).children().children().children().children('h5').text();
    var description = $(this).children().children().children().children('p').text();
    var sector = $(this).children().children().children().children().children().children('.sector').text();
    var location = $(this).children().children().children().children().children().children('.location').text();


    $('.isim').text(name);
    $('.resimm').attr('src', image);
    $('.title').text(title);
    $('.description').text(description);
    $('.sectorr').text(sector);
    $('.locationn').text(location);


}));