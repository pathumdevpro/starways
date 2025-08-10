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
                        Business Setup
                        <svg class="mobile-dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                        <div class="underline-hover"></div>
                    </a>
                    <div class="dropdown-menu" id="business-setup">
                        <ul>
                            <li><a href="{{ route('services.business-setup') }}">Business Setup</a></li>
                            <li><a href="{{ route('services.company-registration-mainland') }}">Company Registration in Mainland</a></li>
                            <li><a href="{{ route('services.company-registration-freezone') }}">Company Registration Freezone</a></li>
                            <li class="has-popup navbar-link">
                                <a href="#" class="popup-trigger">
                                    Business License Renewal
                                    <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                </a>
                                <a href="{{ route('contact.index') }}">
                                    <div class="info-popup">
                                        <h4>Business License Renewal</h4>
                                        <p>Quick and hassle-free support to renew your trade license and keep your operations running smoothly.</p>
                                    </div>
                                </a>
                            </li>
                            <li class="has-popup navbar-link">
                                <a href="#" class="popup-trigger">
                                    Corporate Bank Account Opening Assistance
                                    <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                </a>
                                <a href="{{ route('contact.index') }}">
                                    <div class="info-popup">
                                        <h4>Corporate Bank Account Opening Assistance</h4>
                                        <p>Guidance and documentation support to open a UAE business bank account with top local banks.</p>
                                    </div>
                                </a>
                            </li>
                            <li><a href="{{ route('services.office-flexi-desk-arrangement') }}">Office Flexi Desk Arrangement</a></li>
                            <li class="has-popup navbar-link">
                                <a href="#" class="popup-trigger">
                                    Labour/ Work Permit and Employment Services
                                    <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                </a>
                                <a href="{{ route('contact.index') }}">
                                    <div class="info-popup">
                                        <h4>Labour/ Work Permit and Employment Services</h4>
                                        <p>We handle work permit processing and employee visa formalities for seamless onboarding.</p>
                                    </div>
                                </a>
                            </li>
                            <li><a href="{{ route('services.corporate-pro-services') }}">Corporate PRO Services</a></li>
                            <li class="has-popup navbar-link">
                                <a href="#" class="popup-trigger">
                                    Legal Compliance Assistance
                                    <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                </a>
                                <a href="{{ route('contact.index') }}">
                                    <div class="info-popup">
                                        <h4>Legal Compliance Assistance</h4>
                                        <p>Stay compliant with UAE regulations through regular updates and expert advisory.</p>
                                    </div>
                                </a>
                            </li>
                            <li class="has-popup navbar-link">
                                <a href="#" class="popup-trigger">
                                    Trademark Registration Assistance
                                    <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                </a>
                                <a href="{{ route('contact.index') }}">
                                    <div class="info-popup">
                                        <h4>Trademark Registration Assistance</h4>
                                        <p>Protect your brand with full support for trademark search, filing, and registration.</p>
                                    </div>
                                </a>
                            </li>
                            <li class="has-popup navbar-link">
                                <a href="#" class="popup-trigger">
                                    Company Liquidation
                                    <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                </a>
                                <a href="{{ route('contact.index') }}">
                                    <div class="info-popup">
                                        <h4>Company Liquidation</h4>
                                        <p>End your business operations legally with clear steps and documentation handled for you.</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Financial Services Assistance -->
                <div class="compact-dropdown">
                    <a href="#" class="nav-link" onclick="toggleDropdown(event, 'financial-services')">
                        Financial Services Assistance
                        <svg class="mobile-dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                        <div class="underline-hover"></div>
                    </a>
                    <div class="dropdown-menu" id="financial-services">
                        <ul>
                            <li class="has-popup navbar-link">
                                <a href="#" class="popup-trigger">
                                    Accounting Service Assistance
                                    <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                </a>
                                <a href="{{ route('contact.index') }}">
                                    <div class="info-popup">
                                        <h4>Accounting Service Assistance</h4>
                                        <p>Professional accounting solutions tailored to your business needs in the UAE.</p>
                                    </div>
                                </a>
                            </li>
                            <li class="has-popup navbar-link">
                                <a href="#" class="popup-trigger">
                                    Bookkeeping
                                    <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                </a>
                                <a href="{{ route('contact.index') }}">
                                    <div class="info-popup">
                                        <h4>Bookkeeping</h4>
                                        <p>Accurate record-keeping of your financial transactions with ongoing support.</p>
                                    </div>
                                </a>
                            </li>
                            <li><a href="{{ route('services.corporate-tax-registration') }}">Corporate Tax Registration</a></li>
                            <li><a href="{{ route('services.tax-and-vat') }}">Tax and Vat</a></li>
                            <li class="has-popup navbar-link">
                                <a href="#" class="popup-trigger">
                                    Auditing
                                    <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                </a>
                                <a href="{{ route('contact.index') }}">
                                    <div class="info-popup">
                                        <h4>Auditing</h4>
                                        <p>Assistance in preparing and managing professional audit reports as per UAE law.</p>
                                    </div>
                                </a>
                            </li>
                            <li class="has-popup navbar-link">
                                <a href="#" class="popup-trigger">
                                    Legal Compliance
                                    <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                </a>
                                <a href="{{ route('contact.index') }}">
                                    <div class="info-popup">
                                        <h4>Legal Compliance</h4>
                                        <p>Stay compliant with UAE regulations through regular updates and expert advisory.</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Property consulting -->
                <div class="compact-dropdown">
                    <a href="#" class="nav-link" onclick="toggleDropdown(event, 'property-consulting')">
                        Property Consulting
                        <svg class="mobile-dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                        <div class="underline-hover"></div>
                    </a>
                    <div class="dropdown-menu" id="property-consulting">
                        <ul>
                            <li class="has-popup navbar-link">
                                <a href="#" class="popup-trigger">
                                    Property Investment Consulting
                                    <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                </a>
                                <a href="{{ route('contact.index') }}">
                                    <div class="info-popup">
                                        <h4>Property Investment Consulting</h4>
                                        <p>Make smart real estate investments with expert market insights and legal guidance.</p>
                                    </div>
                                </a>
                            </li>
                            <li class="has-popup navbar-link">
                                <a href="#" class="popup-trigger">
                                    Property Valuation Service
                                    <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                </a>
                                <a href="{{ route('contact.index') }}">
                                    <div class="info-popup">
                                        <h4>Property Valuation Service</h4>
                                        <p>We connect you with certified valuers to determine accurate property values in the UAE.</p>
                                    </div>
                                </a>
                            </li>
                            <li class="has-popup navbar-link">
                                <a href="#" class="popup-trigger">
                                    Mortgage Advice
                                    <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                </a>
                                <a href="{{ route('contact.index') }}">
                                    <div class="info-popup">
                                        <h4>Mortgage Advice</h4>
                                        <p>Expert assistance in finding the right mortgage plans and bank offers suited to your needs.</p>
                                    </div>
                                </a>
                            </li>
                            <li class="has-popup navbar-link">
                                <a href="#" class="popup-trigger">
                                    Advice on the Official MOU
                                    <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                </a>
                                <a href="{{ route('contact.index') }}">
                                    <div class="info-popup">
                                        <h4>Advice on the Official MOU</h4>
                                        <p>Ensure clarity and protection with professional guidance on property Memorandum of Understanding documents.</p>
                                    </div>
                                </a>
                            </li>
                            <li><a href="{{ route('services.the-will') }}">The Will</a></li>
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
                            <h4>Immigration Services</h4>
                            <ul>
                                <!-- <li><a href="{{ route('services.immigration-services') }}">Immigration Services</a></li> -->
                                <li class="has-popup navbar-link">
                                    <a href="#" class="popup-trigger">
                                        UAE Residence Visa
                                        <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                    </a>
                                    <a href="{{ route('contact.index') }}">
                                        <div class="info-popup">
                                            <h4>UAE Residence Visa</h4>
                                            <p>End-to-end support for obtaining a UAE residence visa for you and your dependents.</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="has-popup navbar-link">
                                    <a href="#" class="popup-trigger">
                                        UAE Residence Visa Fast Track
                                        <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                    </a>
                                    <a href="{{ route('contact.index') }}">
                                        <div class="info-popup">
                                            <h4>UAE Residence Visa Fast Track</h4>
                                            <p>Get your UAE residency visa processed faster with priority handling.</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="has-popup navbar-link">
                                    <a href="#" class="popup-trigger">
                                        Medical & Emirates ID
                                        <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                    </a>
                                    <a href="{{ route('contact.index') }}">
                                        <div class="info-popup">
                                            <h4>Medical & Emirates ID</h4>
                                            <p>We assist in completing medical tests and obtaining Emirates ID with minimal wait time.</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="has-popup navbar-link">
                                    <a href="#" class="popup-trigger">
                                        Entry Permit
                                        <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                    </a>
                                    <a href="{{ route('contact.index') }}">
                                        <div class="info-popup">
                                            <h4>Entry Permit</h4>
                                            <p>Support with entry permits, including special handling for restricted nationalities.</p>
                                        </div>
                                    </a>
                                </li>
                                <li><a href="{{ route('services.uae-golden-visa') }}">UAE Golden Visa</a></li>
                            </ul>
                        </div>
                        <div class="menu-column">
                            <h4>Documents Clearing Services</h4>
                            <ul>
                                <li class="has-popup navbar-link">
                                    <a href="#" class="popup-trigger">
                                        Tax Residency Certificate
                                        <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                    </a>
                                    <a href="{{ route('contact.index') }}">
                                        <div class="info-popup">
                                            <h4>Tax Residency Certificate</h4>
                                            <p>Apply for a TRC in the UAE with our guided documentation and application process.</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="has-popup navbar-link">
                                    <a href="#" class="popup-trigger">
                                        Police Clearance
                                        <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                    </a>
                                    <a href="{{ route('contact.index') }}">
                                        <div class="info-popup">
                                            <h4>Police Clearance</h4>
                                            <p>Get help with applying and receiving UAE police clearance certificates for legal or immigration needs.</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="has-popup navbar-link">
                                    <a href="#" class="popup-trigger">
                                        Power of Attorney
                                        <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                    </a>
                                    <a href="{{ route('contact.index') }}">
                                        <div class="info-popup">
                                            <h4>Power of Attorney</h4>
                                            <p>We assist in drafting and notarizing Power of Attorney documents legally accepted in the UAE.</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="has-popup navbar-link">
                                    <a href="#" class="popup-trigger">
                                        Notary Service Assistance
                                        <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                    </a>
                                    <a href="{{ route('contact.index') }}">
                                        <div class="info-popup">
                                            <h4>Notary Service Assistance</h4>
                                            <p>Support with preparing and notarizing official legal documents through UAE courts.</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="has-popup navbar-link">
                                    <a href="#" class="popup-trigger">
                                        UAE MOFA
                                        <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                    </a>
                                    <a href="{{ route('contact.index') }}">
                                        <div class="info-popup">
                                            <h4>UAE MOFA Attestation</h4>
                                            <p>Ensure your documents are attested by the UAE Ministry of Foreign Affairs smoothly.</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="has-popup navbar-link">
                                    <a href="#" class="popup-trigger">
                                        Embassy Attestation
                                        <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                    </a>
                                    <a href="{{ route('contact.index') }}">
                                        <div class="info-popup">
                                            <h4>Embassy Attestation</h4>
                                            <p>Fast-track embassy attestation for your business or personal documents.</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="has-popup navbar-link">
                                    <a href="#" class="popup-trigger">
                                        Consulate Attestation
                                        <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                    </a>
                                    <a href="{{ route('contact.index') }}">
                                        <div class="info-popup">
                                            <h4>Consulate Attestation</h4>
                                            <p>We manage document attestation through UAE consulates as per your needs.</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="menu-column">
                            <h4>Exclusive Services</h4>
                            <ul>
                                <li class="has-popup navbar-link">
                                    <a href="#" class="popup-trigger">
                                        UAE Bank Account Opening As
                                        <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                    </a>
                                    <a href="{{ route('contact.index') }}">
                                        <div class="info-popup">
                                            <h4>UAE Bank Account Opening As</h4>
                                            <p>Guidance and support for opening your UAE bank account efficiently.</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="has-popup navbar-link">
                                    <a href="#" class="popup-trigger">
                                        UAE Driving License
                                        <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                    </a>
                                    <a href="{{ route('contact.index') }}">
                                        <div class="info-popup">
                                            <h4>UAE Driving License</h4>
                                            <p>Get expert help to convert or apply for your UAE driving license in record time.</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="has-popup navbar-link">
                                    <a href="#" class="popup-trigger">
                                        UAE Tourist Visa
                                        <i class="fas fa-chevron-down popup-icon" style="margin-left: 4px; font-size: 0.75em;"></i>
                                    </a>
                                    <a href="{{ route('contact.index') }}">
                                        <div class="info-popup">
                                            <h4>UAE Tourist Visa</h4>
                                            <p>Fast and efficient processing of UAE tourist visas—approved in as little as 24 hours.</p>
                                        </div>
                                    </a>
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
                    <a href="{{ route('about.index') }}" class="nav-link">
                        About Us
                        <div class="underline-hover"></div>
                    </a>
                </div>
                <div class="compact-dropdown">
                    <a href="{{ route('contact.index') }}" class="nav-link">
                        Contact Us
                        <div class="underline-hover"></div>
                    </a>
                </div>

            </nav>
        </div>
    </div>
</div>
