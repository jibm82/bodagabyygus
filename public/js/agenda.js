$(document).on('ready', function() {
    $('#dress-code-men-trigger').on("click", (e) => {
        e.preventDefault();
        Swal.fire({
            text: 'Camisa o playera blanca y pantalón o short caqui',
            imageUrl: 'images/dress-code/dress-code-icebreaker-men.webp',
            imageAlt: 'A tall image'
          });
    });

    $('#dress-code-women-trigger').on("click", (e) => {
        e.preventDefault();
        Swal.fire({
            text: 'Todo blanco',
            imageUrl: 'images/dress-code/dress-code-icebreaker-women.webp',
            imageAlt: 'A tall image'
          });
    });
});
