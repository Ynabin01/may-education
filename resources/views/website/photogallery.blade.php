@extends("layouts.master")
@section('content')

    <!-- breadcrumb start -->
    <div class="container-xxl bg-primary page-header"
        style="background-image: url('/website/img/public/xx.jpg'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="bread-container">
                <div>Home</div>
                <div class="divider"> / </div>
                <div>{{$slug1->caption ?? $slug1 }} </div>
            </div>
            <div class="b-title">{{$slug2->caption ?? $slug2 }}</div>
        </div>
    </div>
        <br>
    <!-- breadcrumb end -->
 
 
        <!-- gallery start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="row-gallery-section">
                    @foreach ($photos as $photo)
                        <div class="column">
                            <a href="/uploads/photo_gallery/{{ $photo->file }}" data-lightbox="gallery" data-title="{{ $photo->caption }}">
                            <img src="/uploads/photo_gallery/{{ $photo->file }}" alt="{{ $photo->caption }}" >
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>            
        </div>        
        <!-- gallery end -->
    
@endsection
 
<style>
  .row-gallery-section {
    display: flex;
    flex-wrap: wrap;
    margin: 0 -8px;
  }

  .column {
    flex: 25%;
    max-width: 25%;
    padding: 0 8px;
    box-sizing: border-box;
  }

  .column img {
    width: 100%;
    height: auto;
    cursor: pointer;
    transition: transform 0.2s ease;
  }
  .row-gallery-section .column img {
    width: 270px;
    height: 200px;
    object-fit: cover; /* Maintain aspect ratio and fill container */
}


  .column img:hover {
    transform: scale(1.05);
  }

  @media screen and (max-width: 800px) {
    .column {
      flex: 50%;
      max-width: 50%;
    }
  }

  @media screen and (max-width: 600px) {
    .column {
      flex: 100%;
      max-width: 100%;
    }
  }

  /* Adjust the position of the close button */
.lb-data .lb-close {
    position: absolute;
    top: 10px; /* Adjust the distance from the top */
    right: 10px; /* Adjust the distance from the right */
    z-index: 1032;
    cursor: pointer;
    display: block;
    width: 25px;
    height: 25px;
    background: #fff;
    color: #000;
    text-align: center;
    text-decoration: none;
    font: bold 30px Arial, sans-serif;
    opacity: 0.8;
    border-radius: 50%;
}

</style>
