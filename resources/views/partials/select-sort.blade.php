<form class="max-w-sm mx-auto mb-4" method="GET" action="{{ Request::url() }}">
    <label for="sorted" class="block mb-2 text-sm font-medium text-gray-200 dark:text-white">Urut berdasarkan</label>
    <select id="sorted"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
        onchange="this.form.submit()" name="sort">
        <option value="code" {{ Request::query('sort') === 'code' ? 'selected' : '' }}>Kode CV</option>
        <option value="favorite" {{ Request::query('sort') === 'favorite' ? 'selected' : '' }}>Favorite</option>
    </select>
</form>
