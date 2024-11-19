<button data-tooltip-target="scroll" type="button" id="scroll-button"
    class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-full text-sm w-11 h-11 text-center z-10 fixed bottom-[4.5rem] right-2 flex items-center justify-center">
    <ion-icon class="text-2xl" name="chevron-down"></ion-icon>
</button>

<div id="scroll" role="tooltip"
    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
    Ke bawah
    <div class="tooltip-arrow" data-popper-arrow></div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const scrollButton = document.getElementById('scroll-button');
        scrollButton.addEventListener('click', function() {
            const dataTooltip = document.getElementById('scroll');
            const isAtBottom = (window.innerHeight + window.scrollY) >= document.body.offsetHeight;

            if (isAtBottom) {
                // Jika sudah di bagian paling bawah, scroll ke atas
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
                dataTooltip.textContent = "Ke bawah";
                scrollButton.innerHTML = '<ion-icon class="text-2xl" name="chevron-down"></ion-icon>';
            } else {
                // Jika belum di bagian bawah, scroll ke bawah
                window.scrollTo({
                    top: document.body.scrollHeight,
                    behavior: 'smooth'
                });
                dataTooltip.textContent = "Ke atas";
                scrollButton.innerHTML = '<ion-icon class="text-2xl" name="chevron-up"></ion-icon>';
            }

        });

        // Untuk memperbarui teks tombol saat scroll
        window.addEventListener('scroll', () => {
            const dataTooltip = document.getElementById('scroll');
            const isAtBottom = (window.innerHeight + window.scrollY) >= document.body.offsetHeight;
            dataTooltip.textContent = isAtBottom ? "Ke atas" : "Ke bawah";
            scrollButton.innerHTML = isAtBottom ?
                '<ion-icon class="text-2xl" name="chevron-up"></ion-icon>' :
                '<ion-icon class="text-2xl" name="chevron-down"></ion-icon>';
        });
    });
</script>
