<?php
ob_start();
?>

<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <div class="row align-items-center">
            <div class="col">
                <h2 class="mb-1"><i class="bi bi-shield-lock-fill text-primary me-2"></i>Welcome to SmaDool</h2>
                <p class="text-muted mb-0">We sell smart door locks for your home. Choose the unlock method and door type that suits you.</p>
            </div>
            <div class="col-auto">
                <a href="products.php" class="btn btn-primary"><i class="bi bi-box-seam me-1"></i>View Products</a>
            </div>
        </div>
    </div>
</div>

<div id="homeCarousel" class="carousel slide mb-4 shadow-sm" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 0"></button>
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="3" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner rounded">
        <div class="carousel-item active">
            <div class="bg-dark text-white text-center py-5 px-5">
                <i class="bi bi-fingerprint fs-1"></i>
                <h4 class="mt-2">Fingerprint</h4>
                <p class="mb-4">Unlock the door with your fingerprint.</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="bg-dark text-white text-center py-5 px-5">
                <i class="bi bi-credit-card fs-1"></i>
                <h4 class="mt-2">Key Card</h4>
                <p class="mb-4">Unlock the door with your key card.</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="bg-dark text-white text-center py-5 px-5">
                <i class="bi bi-phone fs-1"></i>
                <h4 class="mt-2">Smart App (Wi-Fi/Bluetooth)</h4>
                <p class="mb-4">Lock and unlock the door from your phone.</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="bg-dark text-white text-center py-5 px-5">
                <i class="bi bi-person-bounding-box fs-1"></i>
                <h4 class="mt-2">Face Recognition</h4>
                <p class="mb-4">The door opens when it recognises your face.</p>
            </div>
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<div class="mb-3" id="products">
    <h4 class="mb-1"><i class="bi bi-box-seam text-primary me-2"></i>Our Products</h4>
    <p class="text-muted mb-0">Browse our smart door locks by unlock type</p>
</div>
<hr>


<ul class="nav nav-pills gap-2 mb-4" id="productTabs" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active btn-sm" data-bs-toggle="pill" data-bs-target="#tab-all" type="button" role="tab">All</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link btn-sm" data-bs-toggle="pill" data-bs-target="#tab-fingerprint" type="button" role="tab"><i class="bi bi-fingerprint me-1"></i>Fingerprint</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link btn-sm" data-bs-toggle="pill" data-bs-target="#tab-keycard" type="button" role="tab"><i class="bi bi-credit-card me-1"></i>Key Card</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link btn-sm" data-bs-toggle="pill" data-bs-target="#tab-smartapp" type="button" role="tab"><i class="bi bi-phone me-1"></i>Smart App</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link btn-sm" data-bs-toggle="pill" data-bs-target="#tab-face" type="button" role="tab"><i class="bi bi-person-bounding-box me-1"></i>Face Recognition</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link btn-sm" data-bs-toggle="pill" data-bs-target="#tab-allinone" type="button" role="tab"><i class="bi bi-shield-lock me-1"></i>All in One</button>
    </li>
</ul>

<div class="tab-content mb-4">
    
    <div class="tab-pane fade show active" id="tab-all" role="tabpanel">
        <div class="row g-3">
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border">
                    <img src="images/touch-lock-mini-f100.jpg" class="card-img-top object-fit-cover" style="aspect-ratio: 1 / 1;" alt="Touch Lock Mini F100">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Aqara</span>
                        <h6 class="card-title mb-1">Touch Lock Mini F100</h6>
                        <div class="text-muted small">Fingerprint &middot; Wooden Door</div>
                        <div class="fw-bold text-primary mt-2">RM 549.90</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border">
                    <img src="images/fingerprint-lock-f300.jpg" class="card-img-top object-fit-cover" style="aspect-ratio: 1 / 1;" alt="Fingerprint Lock F300">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Samsung</span>
                        <h6 class="card-title mb-1">Fingerprint Lock F300</h6>
                        <div class="text-muted small">Fingerprint &middot; Security Door</div>
                        <div class="fw-bold text-primary mt-2">RM 699.90</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border">
                    <img src="images/slim-fingerprint-lock-f200.jpg" class="card-img-top object-fit-cover" style="aspect-ratio: 1 / 1;" alt="Slim Fingerprint Lock F200">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Xiaomi</span>
                        <h6 class="card-title mb-1">Slim Fingerprint Lock F200</h6>
                        <div class="text-muted small">Fingerprint &middot; Aluminium Door</div>
                        <div class="fw-bold text-primary mt-2">RM 489.90</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border">
                    <img src="images/fingerprint-lock-pro-f500.jpg" class="card-img-top object-fit-cover" style="aspect-ratio: 1 / 1;" alt="Fingerprint Lock Pro F500">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Philips</span>
                        <h6 class="card-title mb-1">Fingerprint Lock Pro F500</h6>
                        <div class="text-muted small">Fingerprint &middot; Glass Door</div>
                        <div class="fw-bold text-primary mt-2">RM 799.90</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border">
                    <img src="images/slim-card-lock-c10.jpg" class="card-img-top object-fit-cover" style="aspect-ratio: 1 / 1;" alt="Slim Card Lock C10">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Xiaomi</span>
                        <h6 class="card-title mb-1">Slim Card Lock C10</h6>
                        <div class="text-muted small">Key Card &middot; Glass Door</div>
                        <div class="fw-bold text-primary mt-2">RM 279.90</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border">
                    <img src="images/card-access-lock-c50.jpg" class="card-img-top object-fit-cover" style="aspect-ratio: 1 / 1;" alt="Card Access Lock C50">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Philips</span>
                        <h6 class="card-title mb-1">Card Access Lock C50</h6>
                        <div class="text-muted small">Key Card &middot; Aluminium Door</div>
                        <div class="fw-bold text-primary mt-2">RM 349.90</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border">
                    <img src="images/card-lock-basic-c20.jpg" class="card-img-top object-fit-cover" style="aspect-ratio: 1 / 1;" alt="Card Lock Basic C20">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Aqara</span>
                        <h6 class="card-title mb-1">Card Lock Basic C20</h6>
                        <div class="text-muted small">Key Card &middot; Wooden Door</div>
                        <div class="fw-bold text-primary mt-2">RM 299.90</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border">
                    <img src="images/card-lock-plus-c80.jpg" class="card-img-top object-fit-cover" style="aspect-ratio: 1 / 1;" alt="Card Lock Plus C80">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Samsung</span>
                        <h6 class="card-title mb-1">Card Lock Plus C80</h6>
                        <div class="text-muted small">Key Card &middot; Security Door</div>
                        <div class="fw-bold text-primary mt-2">RM 399.90</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border">
                    <img src="images/bluetooth-lock-b80.jpg" class="card-img-top object-fit-cover" style="aspect-ratio: 1 / 1;" alt="Bluetooth Lock B80">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Samsung</span>
                        <h6 class="card-title mb-1">Bluetooth Lock B80</h6>
                        <div class="text-muted small">Smart App &middot; Aluminium Door</div>
                        <div class="fw-bold text-primary mt-2">RM 429.90</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border">
                    <img src="images/wi-fi-smart-lock-s200.jpg" class="card-img-top object-fit-cover" style="aspect-ratio: 1 / 1;" alt="Wi-Fi Smart Lock S200">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Aqara</span>
                        <h6 class="card-title mb-1">Wi-Fi Smart Lock S200</h6>
                        <div class="text-muted small">Smart App &middot; Wooden Door</div>
                        <div class="fw-bold text-primary mt-2">RM 599.90</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border">
                    <img src="images/smart-lock-lite-s100.jpg" class="card-img-top object-fit-cover" style="aspect-ratio: 1 / 1;" alt="Smart Lock Lite S100">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Xiaomi</span>
                        <h6 class="card-title mb-1">Smart Lock Lite S100</h6>
                        <div class="text-muted small">Smart App &middot; Security Door</div>
                        <div class="fw-bold text-primary mt-2">RM 499.90</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border">
                    <img src="images/wi-fi-smart-lock-s300.jpg" class="card-img-top object-fit-cover" style="aspect-ratio: 1 / 1;" alt="Wi-Fi Smart Lock S300">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Philips</span>
                        <h6 class="card-title mb-1">Wi-Fi Smart Lock S300</h6>
                        <div class="text-muted small">Smart App &middot; Glass Door</div>
                        <div class="fw-bold text-primary mt-2">RM 649.90</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border">
                    <img src="images/face-lock-fr300.jpg" class="card-img-top object-fit-cover" style="aspect-ratio: 1 / 1;" alt="Face Lock FR300">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Xiaomi</span>
                        <h6 class="card-title mb-1">Face Lock FR300</h6>
                        <div class="text-muted small">Face Recognition &middot; Security Door</div>
                        <div class="fw-bold text-primary mt-2">RM 799.90</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border">
                    <img src="images/face-lock-fr500.jpg" class="card-img-top object-fit-cover" style="aspect-ratio: 1 / 1;" alt="Face Lock FR500">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Philips</span>
                        <h6 class="card-title mb-1">Face Lock FR500</h6>
                        <div class="text-muted small">Face Recognition &middot; Wooden Door</div>
                        <div class="fw-bold text-primary mt-2">RM 949.90</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border">
                    <img src="images/face-lock-lite-fr200.jpg" class="card-img-top object-fit-cover" style="aspect-ratio: 1 / 1;" alt="Face Lock Lite FR200">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Aqara</span>
                        <h6 class="card-title mb-1">Face Lock Lite FR200</h6>
                        <div class="text-muted small">Face Recognition &middot; Aluminium Door</div>
                        <div class="fw-bold text-primary mt-2">RM 749.90</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border">
                    <img src="images/face-lock-max-fr700.jpg" class="card-img-top object-fit-cover" style="aspect-ratio: 1 / 1;" alt="Face Lock Max FR700">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Samsung</span>
                        <h6 class="card-title mb-1">Face Lock Max FR700</h6>
                        <div class="text-muted small">Face Recognition &middot; Glass Door</div>
                        <div class="fw-bold text-primary mt-2">RM 1,099.90</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border">
                    <img src="images/all-in-one-lock-a500.jpg" class="card-img-top object-fit-cover" style="aspect-ratio: 1 / 1;" alt="All-in-One Lock A500">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Aqara</span>
                        <h6 class="card-title mb-1">All-in-One Lock A500</h6>
                        <div class="text-muted small">All in One &middot; Wooden Door</div>
                        <div class="fw-bold text-primary mt-2">RM 899.90</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border">
                    <img src="images/ultimate-lock-pro-a900.jpg" class="card-img-top object-fit-cover" style="aspect-ratio: 1 / 1;" alt="Ultimate Lock Pro A900">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Samsung</span>
                        <h6 class="card-title mb-1">Ultimate Lock Pro A900</h6>
                        <div class="text-muted small">All in One &middot; Security Door</div>
                        <div class="fw-bold text-primary mt-2">RM 1,299.90</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border">
                    <img src="images/all-in-one-lock-a300.jpg" class="card-img-top object-fit-cover" style="aspect-ratio: 1 / 1;" alt="All-in-One Lock A300">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Xiaomi</span>
                        <h6 class="card-title mb-1">All-in-One Lock A300</h6>
                        <div class="text-muted small">All in One &middot; Aluminium Door</div>
                        <div class="fw-bold text-primary mt-2">RM 849.90</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border">
                    <img src="images/all-in-one-lock-a700.jpg" class="card-img-top object-fit-cover" style="aspect-ratio: 1 / 1;" alt="All-in-One Lock A700">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Philips</span>
                        <h6 class="card-title mb-1">All-in-One Lock A700</h6>
                        <div class="text-muted small">All in One &middot; Glass Door</div>
                        <div class="fw-bold text-primary mt-2">RM 1,149.90</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="tab-pane fade" id="tab-fingerprint" role="tabpanel">
        <div class="row g-3">
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border">
                    <img src="images/touch-lock-mini-f100.jpg" class="card-img-top object-fit-cover" style="aspect-ratio: 1 / 1;" alt="Touch Lock Mini F100">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Aqara</span>
                        <h6 class="card-title mb-1">Touch Lock Mini F100</h6>
                        <div class="text-muted small">Fingerprint &middot; Wooden Door</div>
                        <div class="fw-bold text-primary mt-2">RM 549.90</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border">
                    <img src="images/fingerprint-lock-f300.jpg" class="card-img-top object-fit-cover" style="aspect-ratio: 1 / 1;" alt="Fingerprint Lock F300">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Samsung</span>
                        <h6 class="card-title mb-1">Fingerprint Lock F300</h6>
                        <div class="text-muted small">Fingerprint &middot; Security Door</div>
                        <div class="fw-bold text-primary mt-2">RM 699.90</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border">
                    <img src="images/slim-fingerprint-lock-f200.jpg" class="card-img-top object-fit-cover" style="aspect-ratio: 1 / 1;" alt="Slim Fingerprint Lock F200">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Xiaomi</span>
                        <h6 class="card-title mb-1">Slim Fingerprint Lock F200</h6>
                        <div class="text-muted small">Fingerprint &middot; Aluminium Door</div>
                        <div class="fw-bold text-primary mt-2">RM 489.90</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border">
                    <img src="images/fingerprint-lock-pro-f500.jpg" class="card-img-top object-fit-cover" style="aspect-ratio: 1 / 1;" alt="Fingerprint Lock Pro F500">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Philips</span>
                        <h6 class="card-title mb-1">Fingerprint Lock Pro F500</h6>
                        <div class="text-muted small">Fingerprint &middot; Glass Door</div>
                        <div class="fw-bold text-primary mt-2">RM 799.90</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="tab-pane fade" id="tab-keycard" role="tabpanel">
        <div class="row g-3">
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border">
                    <img src="images/slim-card-lock-c10.jpg" class="card-img-top object-fit-cover" style="aspect-ratio: 1 / 1;" alt="Slim Card Lock C10">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Xiaomi</span>
                        <h6 class="card-title mb-1">Slim Card Lock C10</h6>
                        <div class="text-muted small">Key Card &middot; Glass Door</div>
                        <div class="fw-bold text-primary mt-2">RM 279.90</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border">
                    <img src="images/card-access-lock-c50.jpg" class="card-img-top object-fit-cover" style="aspect-ratio: 1 / 1;" alt="Card Access Lock C50">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Philips</span>
                        <h6 class="card-title mb-1">Card Access Lock C50</h6>
                        <div class="text-muted small">Key Card &middot; Aluminium Door</div>
                        <div class="fw-bold text-primary mt-2">RM 349.90</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border">
                    <img src="images/card-lock-basic-c20.jpg" class="card-img-top object-fit-cover" style="aspect-ratio: 1 / 1;" alt="Card Lock Basic C20">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Aqara</span>
                        <h6 class="card-title mb-1">Card Lock Basic C20</h6>
                        <div class="text-muted small">Key Card &middot; Wooden Door</div>
                        <div class="fw-bold text-primary mt-2">RM 299.90</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border">
                    <img src="images/card-lock-plus-c80.jpg" class="card-img-top object-fit-cover" style="aspect-ratio: 1 / 1;" alt="Card Lock Plus C80">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Samsung</span>
                        <h6 class="card-title mb-1">Card Lock Plus C80</h6>
                        <div class="text-muted small">Key Card &middot; Security Door</div>
                        <div class="fw-bold text-primary mt-2">RM 399.90</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="tab-pane fade" id="tab-smartapp" role="tabpanel">
        <div class="row g-3">
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border">
                    <img src="images/bluetooth-lock-b80.jpg" class="card-img-top object-fit-cover" style="aspect-ratio: 1 / 1;" alt="Bluetooth Lock B80">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Samsung</span>
                        <h6 class="card-title mb-1">Bluetooth Lock B80</h6>
                        <div class="text-muted small">Smart App &middot; Aluminium Door</div>
                        <div class="fw-bold text-primary mt-2">RM 429.90</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border">
                    <img src="images/wi-fi-smart-lock-s200.jpg" class="card-img-top object-fit-cover" style="aspect-ratio: 1 / 1;" alt="Wi-Fi Smart Lock S200">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Aqara</span>
                        <h6 class="card-title mb-1">Wi-Fi Smart Lock S200</h6>
                        <div class="text-muted small">Smart App &middot; Wooden Door</div>
                        <div class="fw-bold text-primary mt-2">RM 599.90</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border">
                    <img src="images/smart-lock-lite-s100.jpg" class="card-img-top object-fit-cover" style="aspect-ratio: 1 / 1;" alt="Smart Lock Lite S100">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Xiaomi</span>
                        <h6 class="card-title mb-1">Smart Lock Lite S100</h6>
                        <div class="text-muted small">Smart App &middot; Security Door</div>
                        <div class="fw-bold text-primary mt-2">RM 499.90</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border">
                    <img src="images/wi-fi-smart-lock-s300.jpg" class="card-img-top object-fit-cover" style="aspect-ratio: 1 / 1;" alt="Wi-Fi Smart Lock S300">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Philips</span>
                        <h6 class="card-title mb-1">Wi-Fi Smart Lock S300</h6>
                        <div class="text-muted small">Smart App &middot; Glass Door</div>
                        <div class="fw-bold text-primary mt-2">RM 649.90</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="tab-pane fade" id="tab-face" role="tabpanel">
        <div class="row g-3">
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border">
                    <img src="images/face-lock-fr300.jpg" class="card-img-top object-fit-cover" style="aspect-ratio: 1 / 1;" alt="Face Lock FR300">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Xiaomi</span>
                        <h6 class="card-title mb-1">Face Lock FR300</h6>
                        <div class="text-muted small">Face Recognition &middot; Security Door</div>
                        <div class="fw-bold text-primary mt-2">RM 799.90</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border">
                    <img src="images/face-lock-fr500.jpg" class="card-img-top object-fit-cover" style="aspect-ratio: 1 / 1;" alt="Face Lock FR500">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Philips</span>
                        <h6 class="card-title mb-1">Face Lock FR500</h6>
                        <div class="text-muted small">Face Recognition &middot; Wooden Door</div>
                        <div class="fw-bold text-primary mt-2">RM 949.90</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border">
                    <img src="images/face-lock-lite-fr200.jpg" class="card-img-top object-fit-cover" style="aspect-ratio: 1 / 1;" alt="Face Lock Lite FR200">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Aqara</span>
                        <h6 class="card-title mb-1">Face Lock Lite FR200</h6>
                        <div class="text-muted small">Face Recognition &middot; Aluminium Door</div>
                        <div class="fw-bold text-primary mt-2">RM 749.90</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border">
                    <img src="images/face-lock-max-fr700.jpg" class="card-img-top object-fit-cover" style="aspect-ratio: 1 / 1;" alt="Face Lock Max FR700">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Samsung</span>
                        <h6 class="card-title mb-1">Face Lock Max FR700</h6>
                        <div class="text-muted small">Face Recognition &middot; Glass Door</div>
                        <div class="fw-bold text-primary mt-2">RM 1,099.90</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="tab-pane fade" id="tab-allinone" role="tabpanel">
        <div class="row g-3">
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border">
                    <img src="images/all-in-one-lock-a500.jpg" class="card-img-top object-fit-cover" style="aspect-ratio: 1 / 1;" alt="All-in-One Lock A500">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Aqara</span>
                        <h6 class="card-title mb-1">All-in-One Lock A500</h6>
                        <div class="text-muted small">All in One &middot; Wooden Door</div>
                        <div class="fw-bold text-primary mt-2">RM 899.90</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border">
                    <img src="images/ultimate-lock-pro-a900.jpg" class="card-img-top object-fit-cover" style="aspect-ratio: 1 / 1;" alt="Ultimate Lock Pro A900">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Samsung</span>
                        <h6 class="card-title mb-1">Ultimate Lock Pro A900</h6>
                        <div class="text-muted small">All in One &middot; Security Door</div>
                        <div class="fw-bold text-primary mt-2">RM 1,299.90</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border">
                    <img src="images/all-in-one-lock-a300.jpg" class="card-img-top object-fit-cover" style="aspect-ratio: 1 / 1;" alt="All-in-One Lock A300">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Xiaomi</span>
                        <h6 class="card-title mb-1">All-in-One Lock A300</h6>
                        <div class="text-muted small">All in One &middot; Aluminium Door</div>
                        <div class="fw-bold text-primary mt-2">RM 849.90</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border">
                    <img src="images/all-in-one-lock-a700.jpg" class="card-img-top object-fit-cover" style="aspect-ratio: 1 / 1;" alt="All-in-One Lock A700">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Philips</span>
                        <h6 class="card-title mb-1">All-in-One Lock A700</h6>
                        <div class="text-muted small">All in One &middot; Glass Door</div>
                        <div class="fw-bold text-primary mt-2">RM 1,149.90</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<h4 class="mb-3" id="brands">Our Brands</h4>
<div class="row g-3 mb-4">
    <?php foreach (['Xiaomi', 'Samsung', 'Philips', 'Aqara'] as $brand): ?>
        <div class="col-6 col-md-3">
            <div class="card shadow-sm text-center">
                <div class="card-body">
                    <h5 class="mb-0"><?= $brand ?></h5>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<div class="row g-3">
    <div class="col-md-6">
        <div class="card shadow-sm h-100">
            <div class="card-body">
                <h5 class="mb-3"><i class="bi bi-unlock text-primary me-2"></i>Unlock Methods</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Fingerprint</li>
                    <li class="list-group-item">Key Card</li>
                    <li class="list-group-item">Smart App (Wi-Fi/Bluetooth)</li>
                    <li class="list-group-item">Face Recognition</li>
                    <li class="list-group-item">All in One</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card shadow-sm h-100">
            <div class="card-body">
                <h5 class="mb-3"><i class="bi bi-door-closed text-primary me-2"></i>Door Types</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Wooden Door</li>
                    <li class="list-group-item">Security Door</li>
                    <li class="list-group-item">Glass Door</li>
                    <li class="list-group-item">Aluminium Door</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>