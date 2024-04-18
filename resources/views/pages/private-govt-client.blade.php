<div class="col-md-10">
    <div class="client-wrap py-5"  data-aos="fade-up" data-aos-duration="3000">
        <div class="client-slider px-5" id="common-slider">
            <div class="owl-carousel owl-theme" id="clientSlider">
                @if(isset($privateGovCLients) && count($privateGovCLients)>0)
                    @foreach($privateGovCLients as $privateGovCLient)
                    <div class="item">
                        <a href="{{ $privateGovCLient->url }}"
                        onclick="return confirm('{{ $alertMessage }}')"
                        class="client-slider-content">
                        <img src="{{ asset('resources/uploads/clientlogo/'.$privateGovCLient->public_url) }}" alt="{{ $privateGovCLient->title_en }}" class="img-fluid" />
                        </a>
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
