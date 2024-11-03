<div class="container d-flex flex-column align-items-center gap-4">
  @foreach ($article as $item)
  <div class="border-0 card d-flex flex-row align-items-center" style="width: 70rem; border-radius: 20px; overflow: hidden;">
      
      <!-- Container untuk gambar dengan border-radius dan ukuran tetap -->
      <div style="width: 470px; height: 160px; border-radius: 20px; overflow: hidden;">
          <img src="{{ asset('images/course/' . $item->id . '.png') }}" 
               alt="..." 
               style="width: 100%; height: 100%; object-fit: cover;">
      </div>
      
      <!-- Konten dari card -->
      <div class="card-body">
        <h5 class="card-title">{{ $item->title }}</h5>
        <div>{{ $item->created_at->format('d M Y') }} | by {{ strstr($item->author->name, " ", true) }}</div>
        <p class="card-text">{{ substr($item->desc, 0, 150) }}.......</p>
        <a href="{{route('readmore.view',$item->id)}}" class="btn btn-primary d-flex float-end" style="background-color: #0c0a46; border-radius: 90px;">read more...</a>
      </div>
    </div>
  @endforeach 
</div>
