<!-- Filter Section — dinamis dari kategori -->
<div class="mb-8 flex flex-wrap gap-2">
    <a href="/katalog" class="px-3 py-1 {{ !request('kategori') ? 'bg-slate-900 text-white' : 'border border-slate-300 text-slate-700 hover:bg-slate-50' }} rounded text-sm font-medium">Semua</a>
    @foreach($categories as $cat)
    <a href="/katalog?kategori={{ $cat->id }}"
       class="px-3 py-1 {{ request('kategori') == $cat->id ? 'bg-slate-900 text-white' : 'border border-slate-300 text-slate-700 hover:bg-slate-50' }} rounded text-sm font-medium">
        {{ $cat->name }}
    </a>
    @endforeach
</div>

<!-- Events List — dinamis dari database -->
<div class="space-y-3">
    @forelse($events as $event)
    <div class="border border-slate-200 rounded-lg p-4 hover:border-slate-300 transition">
        <div class="flex justify-between items-start gap-4">
            <div class="flex-1">
                @if($event->category)
                <span class="inline-block bg-slate-100 text-slate-700 px-2 py-1 rounded text-xs font-medium mb-2">
                    {{ $event->category->name }}
                </span>
                @endif
                <h3 class="font-bold mb-1">{{ $event->title }}</h3>
                <p class="text-sm text-slate-600 mb-2">{{ Str::limit($event->description, 100) }}</p>
                <p class="text-xs text-slate-500">
                    {{ \Carbon\Carbon::parse($event->date)->format('d M Y | H:i') }} WITA
                </p>
            </div>
            <div class="text-right flex flex-col items-end gap-2">
                <span class="font-bold text-slate-900">
                    @if(!$event->price || $event->price == 0)
                        Gratis
                    @else
                        Rp {{ number_format($event->price, 0, ',', '.') }}
                    @endif
                </span>
                <a href="{{ route('events.show', $event->id) }}"
                   class="px-4 py-1 border border-slate-900 text-slate-900 rounded text-sm font-medium hover:bg-slate-900 hover:text-white transition whitespace-nowrap">
                    Daftar
                </a>
            </div>
        </div>
    </div>
    @empty
    <div class="text-center py-12">
        <p class="text-slate-500">Belum ada event yang tersedia.</p>
    </div>
    @endforelse
</div>