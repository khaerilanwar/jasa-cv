const loadingSpinner = document.getElementById('loading-spinner')
const inputReview = document.getElementById('kode_review');
const buttonReview = document.getElementById('button-review');
const inputKode = document.getElementById('input-kode');
const formTestimoni = document.getElementById('form-testimoni');

buttonReview.addEventListener('click', function () {
    const url = "http://jasa-cv.test/testimoni";
    loadingSpinner.classList.remove('hidden')
    loadingSpinner.classList.add('flex')
    fetch(url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                .getAttribute('content')
        },
        body: JSON.stringify({
            kode_review: inputReview.value
        })
    })
        .then(response => {
            loadingSpinner.classList.add('hidden')
            loadingSpinner.classList.remove('flex')
            if (response.ok) {
                inputKode.classList.remove('flex');
                inputKode.classList.add('hidden');
                formTestimoni.classList.remove('hidden');
            } else if (!response.ok) {
                Toast.fire({
                    icon: "error",
                    title: "Kode Akses Salah!"
                });
                inputReview.value = ''
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
});