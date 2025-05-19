document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    const formMessage = document.getElementById('formMessage');

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        const formData = new FormData(form);

        fetch('contact_process.php', {  // đổi đường dẫn
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(response => {
            formMessage.innerHTML = response;
            form.reset();
        })
        .catch(error => {
            formMessage.innerHTML = '<p class="error">Đã xảy ra lỗi khi gửi biểu mẫu.</p>';
        });
    });
});
