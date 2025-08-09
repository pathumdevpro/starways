<div class="navigation">
    <div class="navbar">
        <div class="nav-container">
            <a href="/" class="brand">
                <img src="{{ asset('images/starway-logo.svg') }}" alt="Logo" width="120">
            </a>

            <!-- Mobile Menu Toggle Button -->
            <button class="mobile-menu-toggle" onclick="toggleMobileMenu()">
                <svg id="menu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <svg id="close-icon" style="display: none;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>

            <nav class="nav-menu" id="nav-menu">
                <!-- Business Setup -->
                <div class="compact-dropdown">
                    <a href="#" class="nav-link" onclick="toggleDropdown(event, 'business-setup')">
                        Business setup
                        <svg class="mobile-dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                        <div class="underline-hover"></div>
                    </a>
                    <div class="dropdown-menu" id="business-setup">
                        <ul>
                            <li><a href="{{ route('services.business-setup') }}">Business setup</a></li>
                            <li><a href="{{ route('services.company-registration-mainland') }}">Company registration in mainland</a></li>
                            <li><a href="{{ route('services.company-registration-freezone') }}">Company registration freezone</a></li>
                            <li class="has-popup navbar-link">
                                <a href="#" class="popup-trigger">
                                    Business license renewal
                                    <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                </a>
                                <div class="info-popup">
                                    <h4>Business license renewal</h4>
                                    <p>Quick and hassle-free support to renew your trade license and keep your operations running smoothly.</p>
                                </div>
                            </li>
                            <li class="has-popup navbar-link">
                                <a href="#" class="popup-trigger">
                                    Corporate bank account opening assistance
                                    <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                </a>
                                <div class="info-popup">
                                    <h4>Corporate bank account opening assistance</h4>
                                    <p>Guidance and documentation support to open a UAE business bank account with top local banks.</p>
                                </div>
                            </li>
                            <li><a href="{{ route('services.office-flexi-desk-arrangement') }}">Office flexi desk arrangement</a></li>
                            <li class="has-popup navbar-link">
                                <a href="#" class="popup-trigger">
                                    Labour/ work permit and employment services
                                    <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                </a>
                                <div class="info-popup">
                                    <h4>Labour/ work permit and employment services</h4>
                                    <p>We handle work permit processing and employee visa formalities for seamless onboarding.</p>
                                </div>
                            </li>
                            <li><a href="{{ route('services.corporate-pro-services') }}">Corporate PRO services</a></li>
                            <li class="has-popup navbar-link">
                                <a href="#" class="popup-trigger">
                                    Legal compliance assistance
                                    <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                </a>
                                <div class="info-popup">
                                    <h4>Legal compliance assistance</h4>
                                    <p>Stay compliant with UAE regulations through regular updates and expert advisory.</p>
                                </div>
                            </li>
                            <li class="has-popup navbar-link">
                                <a href="#" class="popup-trigger">
                                    Trademark registration assistance
                                    <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                </a>
                                <div class="info-popup">
                                    <h4>Trademark registration assistance</h4>
                                    <p>Protect your brand with full support for trademark search, filing, and registration.</p>
                                </div>
                            </li>
                            <li class="has-popup navbar-link">
                                <a href="#" class="popup-trigger">
                                    Company liquidation
                                    <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                </a>
                                <div class="info-popup">
                                    <h4>Company liquidation</h4>
                                    <p>End your business operations legally with clear steps and documentation handled for you.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Financial Services Assistance -->
                <div class="compact-dropdown">
                    <a href="#" class="nav-link" onclick="toggleDropdown(event, 'financial-services')">
                        Financial services assistance
                        <svg class="mobile-dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                        <div class="underline-hover"></div>
                    </a>
                    <div class="dropdown-menu" id="financial-services">
                        <ul>
                            <li class="has-popup navbar-link">
                                <a href="#" class="popup-trigger">
                                    Accounting service assistance
                                    <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                </a>
                                <div class="info-popup">
                                    <h4>Accounting service assistance</h4>
                                    <p>Professional accounting solutions tailored to your business needs in the UAE.</p>
                                </div>
                            </li>
                            <li class="has-popup navbar-link">
                                <a href="#" class="popup-trigger">
                                    Bookkeeping
                                    <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                </a>
                                <div class="info-popup">
                                    <h4>Bookkeeping</h4>
                                    <p>Accurate record-keeping of your financial transactions with ongoing support.</p>
                                </div>
                            </li>
                            <li><a href="{{ route('services.corporate-tax-registration') }}">Corporate tax registration</a></li>
                            <li><a href="{{ route('services.tax-and-vat') }}">Tax and Vat</a></li>
                            <li class="has-popup navbar-link">
                                <a href="#" class="popup-trigger">
                                    Auditing
                                    <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                </a>
                                <div class="info-popup">
                                    <h4>Auditing</h4>
                                    <p>Assistance in preparing and managing professional audit reports as per UAE law.</p>
                                </div>
                            </li>
                            <li class="has-popup navbar-link">
                                <a href="#" class="popup-trigger">
                                    Legal compliance
                                    <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                </a>
                                <div class="info-popup">
                                    <h4>Legal compliance</h4>
                                    <p>Stay compliant with UAE regulations through regular updates and expert advisory.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Property consulting -->
                <div class="compact-dropdown">
                    <a href="#" class="nav-link" onclick="toggleDropdown(event, 'property-consulting')">
                        Property consulting
                        <svg class="mobile-dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                        <div class="underline-hover"></div>
                    </a>
                    <div class="dropdown-menu" id="property-consulting">
                        <ul>
                            <li class="has-popup navbar-link">
                                <a href="#" class="popup-trigger">
                                    Property investment consulting
                                    <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                </a>
                                <div class="info-popup">
                                    <h4>Property investment consulting</h4>
                                    <p>Make smart real estate investments with expert market insights and legal guidance.</p>
                                </div>
                            </li>
                            <li class="has-popup navbar-link">
                                <a href="#" class="popup-trigger">
                                    Property valuation service
                                    <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                </a>
                                <div class="info-popup">
                                    <h4>Property valuation service</h4>
                                    <p>We connect you with certified valuers to determine accurate property values in the UAE.</p>
                                </div>
                            </li>
                            <li class="has-popup navbar-link">
                                <a href="#" class="popup-trigger">
                                    Mortgage advice
                                    <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                </a>
                                <div class="info-popup">
                                    <h4>Mortgage advice</h4>
                                    <p>Expert assistance in finding the right mortgage plans and bank offers suited to your needs.</p>
                                </div>
                            </li>
                            <li class="has-popup navbar-link">
                                <a href="#" class="popup-trigger">
                                    Advice on the official MOU
                                    <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                </a>
                                <div class="info-popup">
                                    <h4>Advice on the official MOU</h4>
                                    <p>Ensure clarity and protection with professional guidance on property Memorandum of Understanding documents.</p>
                                </div>
                            </li>
                            <li><a href="{{ route('services.the-will') }}">The will</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Services -->
                <div class="compact-dropdown">
                    <a href="#" class="nav-link" onclick="toggleDropdown(event, 'services')">
                        Services
                        <svg class="mobile-dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                        <div class="underline-hover"></div>
                    </a>
                    <div class="dropdown-menu wide" id="services">
                        <div class="menu-column">
                            <h4>Immigration services</h4>
                            <ul>
                                <!-- <li><a href="{{ route('services.immigration-services') }}">Immigration Services</a></li> -->
                                <li class="has-popup navbar-link">
                                    <a href="#" class="popup-trigger">
                                        UAE residence visa
                                        <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                    </a>
                                    <div class="info-popup">
                                        <h4>UAE residence visa</h4>
                                        <p>End-to-end support for obtaining a UAE residence visa for you and your dependents.</p>
                                    </div>
                                </li>
                                <li class="has-popup navbar-link">
                                    <a href="#" class="popup-trigger">
                                        UAE residence visa fast track
                                        <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                    </a>
                                    <div class="info-popup">
                                        <h4>UAE residence visa fast track</h4>
                                        <p>Get your UAE residency visa processed faster with priority handling.</p>
                                    </div>
                                </li>
                                <li class="has-popup navbar-link">
                                    <a href="#" class="popup-trigger">
                                        Medical & Emirates ID
                                        <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                    </a>
                                    <div class="info-popup">
                                        <h4>Medical & Emirates ID</h4>
                                        <p>We assist in completing medical tests and obtaining Emirates ID with minimal wait time.</p>
                                    </div>
                                </li>
                                <li class="has-popup navbar-link">
                                    <a href="#" class="popup-trigger">
                                        Entry permit
                                        <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                    </a>
                                    <div class="info-popup">
                                        <h4>Entry permit</h4>
                                        <p>Support with entry permits, including special handling for restricted nationalities.</p>
                                    </div>
                                </li>
                                <li><a href="{{ route('services.uae-golden-visa') }}">UAE golden visa</a></li>
                            </ul>
                        </div>
                        <div class="menu-column">
                            <h4>Documents clearing services</h4>
                            <ul>
                                <li class="has-popup navbar-link">
                                    <a href="#" class="popup-trigger">
                                        Tax residency certificate
                                        <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                    </a>
                                    <div class="info-popup">
                                        <h4>Tax residency certificate</h4>
                                        <p>Apply for a TRC in the UAE with our guided documentation and application process.</p>
                                    </div>
                                </li>
                                <li class="has-popup navbar-link">
                                    <a href="#" class="popup-trigger">
                                        Police clearance
                                        <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                    </a>
                                    <div class="info-popup">
                                        <h4>Police clearance</h4>
                                        <p>Get help with applying and receiving UAE police clearance certificates for legal or immigration needs.</p>
                                    </div>
                                </li>
                                <li class="has-popup navbar-link">
                                    <a href="#" class="popup-trigger">
                                        Power of attorney
                                        <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                    </a>
                                    <div class="info-popup">
                                        <h4>Power of attorney</h4>
                                        <p>We assist in drafting and notarizing Power of Attorney documents legally accepted in the UAE.</p>
                                    </div>
                                </li>
                                <li class="has-popup navbar-link">
                                    <a href="#" class="popup-trigger">
                                        Notary service assistance
                                        <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                    </a>
                                    <div class="info-popup">
                                        <h4>Notary service assistance</h4>
                                        <p>Support with preparing and notarizing official legal documents through UAE courts.</p>
                                    </div>
                                </li>
                                <li class="has-popup navbar-link">
                                    <a href="#" class="popup-trigger">
                                        UAE MOFA
                                        <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                    </a>
                                    <div class="info-popup">
                                        <h4>UAE MOFA attestation</h4>
                                        <p>Ensure your documents are attested by the UAE Ministry of Foreign Affairs smoothly.</p>
                                    </div>
                                </li>
                                <li class="has-popup navbar-link">
                                    <a href="#" class="popup-trigger">
                                        Embassy attestation
                                        <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                    </a>
                                    <div class="info-popup">
                                        <h4>Embassy attestation</h4>
                                        <p>Fast-track embassy attestation for your business or personal documents.</p>
                                    </div>
                                </li>
                                <li class="has-popup navbar-link">
                                    <a href="#" class="popup-trigger">
                                        Consulate attestation
                                        <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                    </a>
                                    <div class="info-popup">
                                        <h4>Consulate attestation</h4>
                                        <p>We manage document attestation through UAE consulates as per your needs.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="menu-column">
                            <h4>Exclusive services</h4>
                            <ul>
                                <li class="has-popup navbar-link">
                                    <a href="#" class="popup-trigger">
                                        UAE bank account opening as
                                        <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                    </a>
                                    <div class="info-popup">
                                        <h4>UAE bank account opening as</h4>
                                        <p>Guidance and support for opening your UAE bank account efficiently.</p>
                                    </div>
                                </li>
                                <li class="has-popup navbar-link">
                                    <a href="#" class="popup-trigger">
                                        UAE residence visa
                                        <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                    </a>
                                    <div class="info-popup">
                                        <h4>UAE residence visa</h4>
                                        <p>End-to-end support for obtaining a UAE residence visa for you and your dependents.</p>
                                    </div>
                                </li>
                                <li class="has-popup navbar-link">
                                    <a href="#" class="popup-trigger">
                                        UAE driving license
                                        <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                    </a>
                                    <div class="info-popup">
                                        <h4>UAE driving license</h4>
                                        <p>Get expert help to convert or apply for your UAE driving license in record time.</p>
                                    </div>
                                </li>
                                <li class="has-popup navbar-link">
                                    <a href="#" class="popup-trigger">
                                        UAE tourist visa
                                        <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                    </a>
                                    <div class="info-popup">
                                        <h4>UAE tourist visa</h4>
                                        <p>Fast and efficient processing of UAE tourist visas—approved in as little as 24 hours.</p>
                                    </div>
                                </li>
                                <li class="has-popup navbar-link">
                                    <a href="#" class="popup-trigger">
                                        Entry permit
                                        <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                    </a>
                                    <div class="info-popup">
                                        <h4>Entry permit</h4>
                                        <p>Support with entry permits, including special handling for restricted nationalities.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="compact-dropdown">
                    <a href="{{ route('blogs.index') }}" class="nav-link">
                        Blogs
                        <div class="underline-hover"></div>
                    </a>
                </div>
                <div class="compact-dropdown">
                    <a href="{{ route('contact.index') }}" class="nav-link">
                        Contact us
                        <div class="underline-hover"></div>
                    </a>
                </div>

            </nav>
        </div>
    </div>
</div>