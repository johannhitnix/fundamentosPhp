var url = 'http://my-laravel-project.com.devel/'
window.addEventListener('load', () => {

    $('.btn-like').css('cursor', 'pointer')
    $('.btn-dislike').css('cursor', 'pointer')

    // BOTON DISLIKE
    function like(){
        $('.btn-dislike').off('click').on('click', function(event){
            console.log('like')
            $(this).addClass('btn-like').removeClass('btn-dislike')
            // concatenar la url para que no bote error
            $(this).attr('src', url+'img/heart-red.png')

            $.ajax({
                url: url+'like/'+$(this).data('id'),
                type: 'GET',
                success: function(response){
                    if(response.like) console.log('You liked')
                    else console.log('error at liking')
                }
            })
            // para q vuelva a recorrer el dom y vuelva a bindear el evento
            dislike()
        })
    }
    like()

    // BOTON LIKE
    function dislike(){
        $('.btn-like').off('click').on('click', function(event){
            console.log('dislike')
            $(this).addClass('btn-dislike').removeClass('btn-like')
            // concatenar la url para que no bote error
            $(this).attr('src', url+'img/heart-grey.png')

            $.ajax({
                url: url+'dislike/'+$(this).data('id'),
                type: 'GET',
                success: function(response){
                    if(response.like) console.log('You disliked')
                    else console.log('error at disliking')
                }
            })
            // para q vuelva a recorrer el dom y vuelva a bindear el evento
            like()
        })
    }
    dislike()

    // BUSCADOR
    $('#search_form').on('submit', function(){
        $(this).attr('action', url+'people/'+$('#search').val())
    })
})