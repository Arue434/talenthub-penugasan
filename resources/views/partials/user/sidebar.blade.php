<h2 class="text-xl text-gray-900 font-bold mb-4">Berita Terpopuler</h2>
<ul class="bg-white-500 text-black p-4 rounded-lg shadow-lg mx-5">
    @foreach ($popularNews as $news)
        <li class="mb-4 flex items-center space-x-4 p-2 bg-gray-200 rounded-lg hover:bg-blue-700 transition-colors duration-200">
            <img src="{{ asset('storage/' . $news->image_url) }}" alt="{{ $news->image_caption }}" class="w-12 h-12 rounded-full ring-2 ring-white object-cover flex-shrink-0">
            <div class="flex flex-col">
                <a href="#" class="text-black-300 hover:text-black-200 text-sm font-medium leading-tight mb-1">{{ $news->title }}</a>
                <span class="text-xs text-black-200">{{ \Carbon\Carbon::parse($news->date)->format('F j, Y') }} - {{ $news->category->name }}</span>
            </div>
        </li>
    @endforeach
</ul>

<h2 class="text-xl text-gray-900 font-bold mt-6 mb-4">Kategori</h2>
<ul>
    @foreach ($categories as $category)
        <li class="mb-2">
            <a href="#" class="text-gray-800 hover:text-blue-800">{{ $category->name }}</a>
        </li>
    @endforeach
</ul>