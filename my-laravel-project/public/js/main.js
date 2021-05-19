window.addEventListener('load', () => {

    $('.btn-like').css('cursor', 'pointer')
    $('.btn-dislike').css('cursor', 'pointer')

    // BOTON DISLIKE
    function like(){
        $('.btn-dislike').off('click').on('click', function(event){
            console.log('like')
            $(this).addClass('btn-like').removeClass('btn-dislike')
            $(this).attr('src', 'img/heart-red.png')
            dislike()
        })
    }
    like()

    // BOTON LIKE
    function dislike(){
        $('.btn-like').off('click').on('click', function(event){
            console.log('dislike')
            $(this).addClass('btn-dislike').removeClass('btn-like')
            $(this).attr('src', 'img/heart-grey.png')
            like()
        })
    }
    dislike()
})