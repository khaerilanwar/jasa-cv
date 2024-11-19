@if (session()->has('code_review'))
    <form action="/testimoni" method="post">
        @csrf
        <input type="hidden" name="code_review" value="{{ Request::session()->get('code_review') }}">
        <div class="rating mb-5 flex justify-center gap-1">
            <input type="radio" name="rating" value="1" class="rating-input mask mask-star-2 bg-yellow-300" />
            <input type="radio" name="rating" value="2" class="rating-input mask mask-star-2 bg-yellow-300" />
            <input type="radio" name="rating" value="3" class="rating-input mask mask-star-2 bg-yellow-300" />
            <input type="radio" name="rating" value="4" class="rating-input mask mask-star-2 bg-yellow-300" />
            <input type="radio" name="rating" value="5" style="background: #FDE047"
                class="rating-input mask mask-star-2 bg-yellow-300" checked />
        </div>

        {{-- Element input testimoni --}}
        <div class="mb-3">
            <input type="text" placeholder="Nama Konsumen"
                class="input input-bordered w-full
            @error('customer_name')
                {{ 'input-error border-red-500' }}
            @enderror
              bg-gray-700 border border-gray-300 text-gray-300 placeholder-gray-300 placeholder:text-base"
                name="customer_name" value="{{ old('comment') ?: '' }}" />
            @error('customer_name')
                <span class="text-red-500 ms-2 text-sm">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="mb-2">
            <textarea
                class="textarea textarea-bordered @error('customer_name')
                {{ 'input-error border-red-500' }}
            @enderror w-full bg-gray-700 border border-gray-300 text-gray-300 placeholder-gray-300 placeholder:text-base"
                placeholder="Tulis Testimoni" name="comment" rows="3">{{ old('comment') ?: '' }}</textarea>
            @error('comment')
                <span class="text-red-500 ms-2 text-sm">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Kirim
            Testimoni</button>

    </form>
@else
    <form action="/testimoni/check-access" method="post">
        @csrf
        {{-- Element input kode review --}}
        <div class="flex gap-4 mb-4">
            <div class="mb-3 w-full">
                <input type="text" placeholder="Kode Akses" name="kode_review"
                    class="input input-bordered w-full bg-gray-700 border border-gray-300 text-gray-300 placeholder-gray-300 placeholder:text-base" />
            </div>

            <button type="submit"
                class="btn btn-info text-gray-50 bg-blue-600 border-none text-base hover:border-none hover:bg-blue-800">Kirim</button>
        </div>
    </form>
@endif

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const ratinges = document.querySelectorAll('.rating-input');
        ratinges.forEach(rating => {
            rating.addEventListener('click', function() {
                ratinges.forEach(rating => {
                    rating.style.background = '';
                });
                ratinges.forEach(rating => {
                    if (rating.checked) {
                        rating.style.background = '#FDE047';
                    }
                });
            });
        });
    });
</script>

@error('code_review')
    <script>
        Toast.fire({
            icon: "error",
            title: @json($message)
        });
    </script>
@enderror
