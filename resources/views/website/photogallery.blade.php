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
                            {{-- <a href="/uploads/photo_gallery/{{ $photo->file }}" data-lightbox="gallery" data-title="{{ $photo->caption }}"> --}}
                            <img src="/uploads/photo_gallery/{{ $photo->file }}" class="myImg" alt="{{ $photo->caption }}" >
                            {{-- </a> --}}
                        </div>
                    @endforeach
                </div>
            </div>            
        </div>        
        <!-- gallery end -->

        <div id="myModal" class="modal">
          <span class="close">&times;</span>
          <img class="modal-content" id="img01">
          <div id="caption"></div>
        </div>
        <!-- The overlay -->
<div id="overlay"></div>
    
@endsection
 



<script>
  // Get the modal
  document.addEventListener("DOMContentLoaded", function() {
  var modal = document.getElementById("myModal");
  
  // Get all images with class="myImg" and loop through them
  var images = document.getElementsByClassName("myImg");
  var modalImg = document.getElementById("img01");
  var captionText = document.getElementById("caption");
  
  for (var i = 0; i < images.length; i++) {
    var img = images[i];
  //  alert(img);

    img.onclick = function(){
      modal.style.display = "block";
      modalImg.src = this.src;
      captionText.innerHTML = this.alt;
    }
  }
  
// Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
  });
  </script>

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
/* Add some styles for your images */
.myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
  width: 100%;
  max-width: 300px;
}

.myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  animation-name: zoom;
  animation-duration: 0.6s;
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>
