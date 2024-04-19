<?php
use App\Models\NavigationItems;
?>
<div class="gallery-container">
        <h2 class="mb-5"
            style="color: #212529; font-size: 24px; font-family: Montserrat; font-weight: 500; line-height: 24px; letter-spacing: 2px;  font-size: 18px; text-align: center; word-wrap: break-word">
            Gallery</h2>
        <div class="gallery-items">
            @foreach ($photos->childs->sortByDesc('updated_at') as $photo)
                @if ($loop->iteration < 4)
                    <?php
                        $images = NavigationItems::query()->where('navigation_id',$photo->id)->latest()->get();
                    ?>
                    
                    <div class="gallery-item">
                       <a href="{{ route('GOTOGALLERY', $photo->nav_name) }}">
                            <img src="website/img/about.PNG" alt="">
                            <div class="info">
                                <div class="title">{{$photo->caption}}</div>
                                <div class="details">
                                    <div class="info-item">{{count($images)}} Pictures</div>
                                    <div class="separator">•</div>
                                    <div class="info-item">{{ \Carbon\Carbon::parse($photo->updated_at)->format('M d, Y') }}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif
            @endforeach
            {{-- <div class="gallery-item">
                <img src="website/img/about.PNG" alt="">
                <div class="info">
                    <div class="title">Seminar 2023</div>
                    <div class="details">
                        <div class="info-item">5 Pictures</div>
                        <div class="separator">•</div>
                        <div class="info-item">Jan 27,2023</div>
                    </div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="website/img/about.PNG" alt="">
                <div class="info">
                    <div class="title">Seminar 2023</div>
                    <div class="details">
                        <div class="info-item">5 Pictures</div>
                        <div class="separator">•</div>
                        <div class="info-item">Jan 27,2023</div>
                    </div>
                </div>
            </div> --}}
            <!-- Add more gallery items here -->
        </div>
    </div>