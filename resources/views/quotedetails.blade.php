<x-guest-layout>
    <!-- Start of Breadcrumb section -->
    <section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative"
        data-background="{{ asset('assets/img/bg/bread-bg.jpg') }}">
        <span class="background_overlay"></span>
        <span class="design-shape position-absolute"><img src="{{ asset('assets/img/shape/tmd-sh.png') }}" alt="" /></span>
        <div class="container">
            <div class="ft-breadcrumb-content headline text-center position-relative">
                <h2>Air Freight</h2>
                <div class="ft-breadcrumb-list ul-li">
                    <ul>
                        <li>Quote Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Breadcrumb section -->

    <section id="ft-service-details" class="ft-service-details-section page-padding">
        <div class="container">
            <div class="ft-service-details-content">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ft-service-sidebar">
                            <div class="ft-service-sidebar-widget headline ul-li-block">
                                <div class="service-category-widget">
                                    <h3 class="widget-title">Package Details</h3>
                                    <ul>
                                        <li><a href="#">Email <br> {{ $quote->email }}</a></li>
                                        <li><a href="#">Shipment Type <br> {{ $quote->shipment_type }}</a></li>
                                        <li><a href="#">City Departure <br> {{ $quote->city_departure }}</a></li>
                                        <li><a href="#">Delivery City <br> {{ $quote->delivery_city }}</a></li>
                                        <li><a href="#">Weight <br> {{ $quote->weight }} kg</a></li>
                                        <li><a href="#">Height <br> {{ $quote->height }} cm</a></li>
                                        <li><a href="#">Length <br> {{ $quote->length }} cm</a></li>
                                        <li><a href="#">Width <br> {{ $quote->width }} cm</a></li>
                                        <li><a href="#">Current Location <br> {{ $quote->current_location ?? 'N/A' }}</a></li>
                                        <li><a href="#">Status <br> {{ ucfirst($quote->status) }}</a></li>
                                        <li><a href="#">Amount <br> ${{ number_format($quote->price ?? 0, 2) }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="ft-service-details-content-wrapper headline pera-content">
                            <div class="ft-service-details-img-wrapper">
                                <div class="row">
                                    <div class="ft-service-details-img-wrapper">
                                        <div class="row">
                                            @foreach ([$quote->image_1, $quote->image_2, $quote->image_3, $quote->image_4] as $image)
                                                @if ($image)
                                                    <div class="col-md-6">
                                                        <div class="ft-service-details-img">
                                                            <img src="{{ asset('storage/' . $image) }}" alt="Package Image" style="width: 300px; height: 200px; object-fit: cover;" />
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ft-service-details-text-wrapper">
                                <h3>Overview</h3>
                                <p>
                                    Track your shipment with ease. The details provided here reflect the current status and specifications of your package. For further assistance, please contact our support team.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>

