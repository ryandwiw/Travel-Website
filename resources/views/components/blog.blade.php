<div style="background-color:#f8f7f7;">
    <div class="container p-4 mt-3">
        <h3 class="text-center mb-5 mt-3 text-primary fw-bolder">News on The Blogs</h3>
        <div class="row">
            @foreach ($artikels as $article)
                <div class="col-md-4 " >
                    <div class="mb-3">
                        @php
                            $jumlahKomentar = $article->comments->count();
                        @endphp
                        <div class="text-center" >
                            <div class="img-hover-zoom-tours-blog mb-3">
                                <img src="{{ asset($article->gambar_1) }}" alt="{{ $article->gambar_1 }}"
                                    class=" mb-3 " loading="lazy">
                            </div>
                        </div>

                        <a href="{{ route('artikels.show', $article->slug) }}" style="text-decoration: none; color:inherit;"><h5>{{ $article->judul }}</h5></a>

                        <p class="mt-3 mb-3">
                            @foreach ($article->categories as $item)
                                <a href="{{ route('categories.show', ['category' => $item->slug]) }}" class="btn btn-secondary btn-sm">
                                    {{ $item->name }}
                                </a>
                            @endforeach
                        </p>
                        
                        <p class="mt-3" style="text-align: justify;">
                            {{ \Illuminate\Support\Str::limit(strip_tags($article->isi), 300) }}
                        </p>
                       
                        <div class="row" >
                            <div class="col-6 text-start" >
                                <a href="{{ route('artikels.show', $article->slug) }}"
                                    style="text-decoration: none; color:inherit; font-size:13px;">Lihat Selengkapnya <i
                                        class="fas fa-chevron-right" style="margin-left: 1px; font-size:10px;"></i></a>
                            </div>
                            <div class="col-6 text-end" >
                                <a href="{{ route('artikels.show', $article->slug) }}"
                                    style="text-decoration: none; color:inherit; font-size:13px;"><i
                                        class="fa-solid fa-comment" style="font-size:15px; margin-right:6px;"></i>{{ $jumlahKomentar }} Comment</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <hr>
</div>
