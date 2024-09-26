<div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
     <h1>list of all images</h1>
     @foreach($imgData as $img)
     <img src="{{url('storage/public/'. $img->path)}}" alt="sorry">
     @endforeach
</div>
