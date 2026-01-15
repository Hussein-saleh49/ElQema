@extends("front.master")
@section("services-activation","active")
@section("content")
<!-- Services Section -->
<div class="service2 container">
    <h4 class="section-title">Our Services</h4>

    <div class="row g-3">
        <!-- Card 1 -->
        <div class="col-6 col-md-3">
            <div class="card">
                <img src="{{ asset("assets") }}/images/service1.png" alt="Service 1">
                <div class="card-body">
                    <h5>Sales & Consultation</h5>
                    <p>Expert strategies to grow your business.</p>
                    <a href="#" class="btn btn-primary btn-sm">Read More</a>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-6 col-md-3">
            <div class="card">
                <img src="{{ asset("assets") }}/images/service2.png" alt="Service 2">
                <div class="card-body">
                    <h5>Technical Support</h5>
                    <p>Advanced support for system stability.</p>
                    <a href="#" class="btn btn-primary btn-sm">Read More</a>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-6 col-md-3">
            <div class="card">
                <img src="{{ asset("assets") }}/images/service3.png" alt="Service 3">
                <div class="card-body">
                    <h5>Maintenance & Upgrades</h5>
                    <p>Keep your infrastructure up to date.</p>
                    <a href="#" class="btn btn-primary btn-sm">Read More</a>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="col-6 col-md-3">
            <div class="card">
                <img src="{{ asset("assets") }}/images/service4.png" alt="Service 4">
                <div class="card-body">
                    <h5>Consulting</h5>
                    <p>Expert advice for your business strategies.</p>
                    <a href="#" class="btn btn-primary btn-sm">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection