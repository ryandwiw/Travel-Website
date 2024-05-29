<!-- resources/views/artikel/show.blade.php -->

@extends('layouts.guest')

@section('isi')

<style>
  @media(max-width:767px){
    .img-artikels{
      height: 320px !important;
    }
  }
</style>
    <div class="container" style="margin-top: 70px;">

        <hr class="mb-5">
        <h1 class="text-center">{{ $artikel->judul }}</h1>
        <p class="text-center"><i class="fa fa-user" aria-hidden="true"
                style="margin-right: 5px;"></i><strong>{{ $artikel->penulis }}</strong> |
            {{ $artikel->created_at->format('F d , Y') }}</p>

        @if ($artikel->gambar_1)
            <img src="{{ asset($artikel->gambar_1) }}" alt="Gambar 1" class="img-fluid img-artikels" style=" width: 100%; height:580px;">
        @endif

        <div class="row mt-4">
            <div class="col-lg-12 col-md-12 col-sm-8">
                <div class="">
                    {!! $artikel->isi !!}
                </div>
                <p class="mt-3 mb-3"><strong>Tags:</strong>
                  @foreach ($artikel->categories as $item)
                      <a href="{{ route('categories.show', ['category' => $item->slug]) }}" class="btn btn-secondary mr-2 mb-2 d-inline-block">
                          {{ $item->name }}
                      </a>
                  @endforeach
              </p>
              

                <p><i class="fa-solid fa-eye"></i> {{ $artikel->views }}</p>

                <hr>
                      <div class="row d-flex">
                        <div class="col-12">
                            <button id="toggleComments" class="btn btn-primary mt-3 mb-3">Lihat Komentar</button>
                            <div id="commentsSection"  style="display: none;">
                  
                              @forelse($komens as $comment)
                              <div class="row">
                                <div class="col">
                                  <div class="d-flex flex-start">
                                    <img class="rounded-circle shadow-1-strong me-3"
                                      src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp" alt="avatar" width="65"
                                      height="65" />
                                    <div class="flex-grow-1 flex-shrink-1 mt-3 mb-3">
                                      <div>
                                        <div class="d-flex justify-content-between align-items-center">
                                          <p class="mb-1">
                                            {{ $comment->nama }} <span class="small">- {{ $comment->created_at->format('F d, Y \a\t h:i a') }}</span>
                                          </p>
                                          @auth
                                          {{-- IGQWRPVG50R2JtWV9xLUtuc2hwRTVZAdmpTdTlKZAEJYaTU0YjdsYkZA3WmN2M0l3LW03a0RIT1QyWmg2M1B6cmd1VnRIV2Fabml3MkxlRy10NEVlekliX1podC1qRHh0YV9IbDRHU2pGZAHRvTlBrbUZAvd3dQQlppa1kZD --}}
                                          {{-- <a href="#!" data-comment-id="{{ $comment->id }} " class="reply-btn" ><i class="fas fa-reply fa-xs"></i><span class="small"> reply</span></a> --}}
                                          <button class="btn btn-sm btn-primary reply-btn" data-comment-id="{{ $comment->id }}">Balas</button>
                                          <form class="reply-form d-none" action="{{ route('komens.reply', ['slug' => $artikel->slug]) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                                            <div class="form-group d-none">
                                                <label for="nama">Nama:</label>
                                                <input type="text" class="form-control" name="nama" value="{{ auth()->user()->name }}" required>
                                              </div>
                                              <div class="form-group d-none">
                                                <label for="email">Email:</label>
                                                <input type="email" class="form-control" name="email" value="{{ auth()->user()->email }}" required>
                                              </div>
                                            <div class="form-group">
                                                <label for="komentar">Balas Komentar:</label>
                                                <textarea class="form-control" name="komentar" rows="3" required></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Kirim Balasan</button>
                                        </form>
                                          @endauth
                                        </div>
                                        <p class="small mb-0">
                                            {{ $comment->komentar }}
                                        </p>
                                        <hr>
                                      </div>
                  
                                      <!-- Balasan -->
                                      @foreach ($comment->replies as $reply)
                                      <div class="d-flex flex-start mt-4">
                                        <a class="me-3" href="#">
                                          <img class="rounded-circle shadow-1-strong"
                                            src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(11).webp" alt="avatar"
                                            width="65" height="65" />
                                        </a>
                                        <div class="flex-grow-1 flex-shrink-1">
                                          <div>
                                            <div class="d-flex justify-content-between align-items-center">
                                              <p class="mb-1">
                                                {{ $reply->nama }} <span class="small">- {{ $reply->created_at->format('F d, Y \a\t h:i a') }}</span>
                                              </p>
                                            </div>
                                            <p class="small mb-0">
                                                {{ $reply->komentar }}
                                            </p>
                                            <hr class="mb-3">
                                          </div>
                                        </div>
                                      </div>
                                      @endforeach


                  
                                    </div>
                                  </div>
                                </div>
                              </div>
                              @empty
                              <p>Tidak ada komentar.</p>
                              @endforelse
                  
                            </div>
                            <div id="leaveReplySection" style="display: none;">
                                <hr>
                                <h4>Leave a Reply</h4>
                                <p class="mt-2">Alamat email Anda tidak akan dipublikasikan.</p>
                                <form action="{{ route('komens.store', ['slug' => $artikel->slug]) }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama">Nama:</label>
                                        <input type="text" class="form-control" id="nama" name="nama" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="komentar">Komentar:</label>
                                        <textarea class="form-control" id="komentar" name="komentar" rows="3" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Kirim Komentar</button>
                                </form>
                            </div>
                      </div>
                      </div>

                  
                <!-- Tambahkan jQuery atau script JavaScript lainnya di sini -->

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        var commentsSection = document.getElementById('commentsSection');
                        var leaveReplySection = document.getElementById('leaveReplySection');
                        var toggleCommentsButton = document.getElementById('toggleComments');

                        toggleCommentsButton.addEventListener('click', function() {
                            // Toggle tampilan komentar dan Leave a Reply
                            if (commentsSection.style.display === 'none') {
                                commentsSection.style.display = 'block';
                                leaveReplySection.style.display = 'block';
                                toggleCommentsButton.innerText = 'Sembunyikan Komentar';
                            } else {
                                commentsSection.style.display = 'none';
                                leaveReplySection.style.display = 'none';
                                toggleCommentsButton.innerText = 'Lihat Komentar';
                            }
                        });
                    });

                    document.querySelectorAll('.reply-btn').forEach(button => {
                        button.addEventListener('click', () => {
                            const form = button.nextElementSibling;
                            form.classList.toggle('d-none');
                        });
                    });
                </script>



                <hr>



            </div>
            <div class="col-lg-1 col-sm-1 col-md-0"></div>

            <div class="col-lg-12 col-md-12 col-sm-12" id="articleContainer">
                <strong class="mb-3 mt-3">Artikel Lainnya</strong>

                @php $counter = 0; @endphp

                @foreach ($artikels as $otherArticle)
                    @if ($counter < 14 && $otherArticle->id !== $artikel->id)
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <img src="{{ asset($otherArticle->gambar_1) }}"
                                    class="img-fluid float-left mr-3 fixed-height-img" alt="Blog Post Image"
                                    style="border-radius: 13px;">
                            </div>
                            <div class="col-md-8">
                                <p style="font-size: 12px;"><i class="fa fa-user" aria-hidden="true"
                                        style="margin-right: 5px;"></i><strong
                                        class="text-capitalize">{{ $otherArticle->penulis }}</strong> |
                                    {{ $otherArticle->created_at->format('F j, Y') }}</p>
                                <h4 class="mt-0 fw-bold">{{ $otherArticle->judul }}</h4>
                                <p style="font-size: 13px; margin-top:10px;">
                                    {{ str_replace('&nbsp;', ' ', substr(strip_tags($otherArticle->isi), 0, 300)) }}...</p>

                                <a href="{{ route('artikels.show', $otherArticle->slug) }}"
                                    class="fw-bold btn btn-secondary"
                                    style="color: inherit; text-decoration:none; font-size:13px;">Baca Selengkapnya</a>
                            </div>
                        </div>
                        <hr>
                        @php $counter++; @endphp
                    @endif
                @endforeach
            </div>







        </div>
        <hr class="mt-3 mb-3">

    </div>
@endsection
