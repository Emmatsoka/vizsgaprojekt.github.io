document.addEventListener('DOMContentLoaded', function() {
    var likeButtons = document.querySelectorAll('.like-button');
    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    likeButtons.forEach(function(button) {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            var postId = this.closest('form').getAttribute('data-post-id');
            var likeCountSpan = this.querySelector('#likeCount');
            var emojiIcon = this.querySelector('.emoji-icon');

            fetch('/like/add', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({
                    postId: postId
                })
            })
            .then(function(response) {
                return response.json();
            })
            .then(function(data) {
                if (data.status === 'liked') {
                    likeCountSpan.textContent = parseInt(likeCountSpan.textContent) + 1;
                    emojiIcon.textContent = '❤️';
                } else if (data.status === 'unliked') {
                    likeCountSpan.textContent = parseInt(likeCountSpan.textContent) - 1;
                    emojiIcon.textContent = '🤍';
                }
            })
            .catch(function(error) {
                console.error(error);
            });
        });
    });
});

function hozzaszolasok(button) {

    let commentsSection = button.closest('.card').querySelector('.comments-section');
    if (commentsSection.classList.contains('inactive')) {

        commentsSection.classList.remove('inactive');
        commentsSection.classList.add('active');

    } else {

        commentsSection.classList.remove('active');
        commentsSection.classList.add('inactive');

    }
}

