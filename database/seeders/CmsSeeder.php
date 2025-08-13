<?php

namespace Database\Seeders;

use App\Models\Cms;
use Illuminate\Database\Seeder;

class CmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cmsItems = [

            /*
            |--------------------------------------------------------------------------
            | Business Setup page Content
            |--------------------------------------------------------------------------
            */

            [
                'page' => 'services.business-setup',
                'section' => 'aside content',
                'position' => 'first title',
                'content' => 'Overview',
            ],
            [
                'page' => 'services.business-setup',
                'section' => 'aside content',
                'position' => 'first paragraph',
                'content' => '- Free Consultation & Activity Selection
- Company Name Reservation
- License & Document Processing
- Office Setup & Bank Account
- Visa & Ongoing Compliance',
            ],
            [
                'page' => 'services.business-setup',
                'section' => 'aside content',
                'position' => 'second title',
                'content' => 'Why Register With Us?',
            ],
            [
                'page' => 'services.business-setup',
                'section' => 'aside content',
                'position' => 'second paragraph',
                'content' => '- Expert consultants with Dubai legal & business setup knowledge
- Transparent, step-by-step process
- Personalized business solutions
- End-to-end, ongoing support
- No hidden fees—clear communication',
            ],
            [
                'page' => 'services.business-setup',
                'section' => 'main content',
                'position' => 'top text',
                'content' => 'service',
            ],
            [
                'page' => 'services.business-setup',
                'section' => 'main content',
                'position' => 'first title',
                'content' => 'The Company Registration Process in Dubai',
            ],
            [
                'page' => 'services.business-setup',
                'section' => 'main content',
                'position' => 'first paragraph',
                'content' => 'Business setup made simple. Our expert team guides you from consultation to compliance, ensuring you start strong in Dubai',
            ],
            [
                'page' => 'services.business-setup',
                'section' => 'main content',
                'position' => 'second title',
                'content' => 'How Our Company Registration Process Works',
            ],
            [
                'page' => 'services.business-setup',
                'section' => 'main content',
                'position' => 'second paragraph',
                'content' => "1. **Free Consultation** – Understand your business idea, target market, and jurisdiction. We help you choose the best setup for your goals and budget.
2. **Business Activity Selection** – Select the right activity or combination as per licensing authority, determining your license type (commercial, professional, industrial, etc.).
3. **Company Name Reservation** – We help you select and reserve a unique, legally compliant company name.
4. **License Application** – Preparation and submission of all required documents to the relevant authority.
5. **Document Preparation & Signing** – Assistance with legal documentation, MOA, shareholder agreements, and notarization.
6. **Office Space & Location Setup** – Guidance on virtual, flexi-desk, or physical office solutions as per your needs.
7. **License Issuance** – Receive your trade license, registration documents, and legal paperwork.
8. **Bank Account Opening** – Support in preparing documents and liaising with banks for corporate account setup.
9. **Visa Processing (If Required)** – Complete handling of investor, partner, and employee visas, including medicals and Emirates ID.
10. **Ongoing Support & Compliance** – Continued assistance with renewals, bookkeeping, VAT registration, and more.",
            ],
            [
                'page' => 'services.business-setup',
                'section' => 'main content',
                'position' => 'third title',
                'content' => 'Why Choose Us for Your Business Registration in Dubai?',
            ],
            [
                'page' => 'services.business-setup',
                'section' => 'main content',
                'position' => 'third paragraph',
                'content' => "- **Expert Consultants** – Highly qualified team with deep knowledge of Dubai’s commercial laws and regulatory frameworks.
- **Transparent Process** – Full clarity at every stage. Access to all essential documents—no hidden fees.
- **Personalized Solutions** – Tailored guidance for any business type, from consultancy to international branch.
- **End-to-End Support** – We’re with you post-registration for PRO services, office arrangements, compliance, and more.",
            ],
            [
                'page' => 'services.business-setup',
                'section' => 'main content',
                'position' => 'fourth title',
                'content' => 'Key Documents We Provide Access To:',
            ],
            [
                'page' => 'services.business-setup',
                'section' => 'main content',
                'position' => 'fourth paragraph',
                'content' => "- Trade License
- Memorandum of Association (MOA)
- Share Certificates
- Certificate of Incorporation
- Lease Agreements
- Identification Documents
- Register of Members",
            ],
            [
                'page' => 'services.business-setup',
                'section' => 'main content',
                'position' => 'fifth title',
                'content' => 'Benefits of Registering a Business in the UAE:',
            ],
            [
                'page' => 'services.business-setup',
                'section' => 'main content',
                'position' => 'fifth paragraph',
                'content' => "- **100% Foreign Ownership** – Many business activities allow full foreign ownership, especially in Free Zones and with recent reforms in Mainland setups.
- **Tax Advantages** – Enjoy zero personal income tax and competitive corporate tax rates, making the UAE a globally attractive destination.
- **Strategic Global Location** – Situated between Europe, Asia, and Africa, the UAE is a gateway for international trade and investment.
- **World-Class Infrastructure** – From advanced digital platforms to modern office facilities, the UAE supports seamless business operations.
- **Business-Friendly Environment** – Quick setup processes, government support, and access to global markets make the UAE ideal for startups and large corporations alike.
- **Residency Options** – Business owners and investors can obtain UAE residency visas for themselves and their families.",
            ],
            [
                'page' => 'services.business-setup',
                'section' => 'main content',
                'position' => 'bottom text',
                'content' => "Start your business with confidence—choose Star Way LLC FZ for a smooth, reliable, and transparent setup in Dubai.",
            ],
            [
                'page' => 'services.business-setup',
                'section' => 'banner',
                'position' => 'image',
                'image' => 'images/pexels-fauxels-31827733.jpg',
                'dimension' => '1920x1080',
            ],

            /*
            |--------------------------------------------------------------------------
            | Company Registration Mainland page Content
            |--------------------------------------------------------------------------
            */

            [
                'page' => 'services.company-registration-mainland',
                'section' => 'aside content',
                'position' => 'first title',
                'content' => 'Overview',
            ],
            [
                'page' => 'services.company-registration-mainland',
                'section' => 'aside content',
                'position' => 'first paragraph',
                'content' => '- Expand to Local & International Markets
- Why Mainland company in Dubai?
- Mainland Licenses in Dubai
- Mainland Business License Setup
- Business Activity & Trade Name Support
- Legal Documentation & Office Solutions
- Visa & Bank Account Assistance
- Ongoing Compliance Support',
            ],
            [
                'page' => 'services.company-registration-mainland',
                'section' => 'aside content',
                'position' => 'second title',
                'content' => 'Why Choose Star Way?',
            ],
            [
                'page' => 'services.company-registration-mainland',
                'section' => 'aside content',
                'position' => 'second paragraph',
                'content' => '- Full-spectrum business setup support
- Expert DED compliance guidance
- Personalized office and licensing solutions
- Visa and banking facilitation
- Continued compliance and renewal assistance',
            ],
            [
                'page' => 'services.company-registration-mainland',
                'section' => 'main content',
                'position' => 'top text',
                'content' => 'service',
            ],
            [
                'page' => 'services.company-registration-mainland',
                'section' => 'main content',
                'position' => 'first title',
                'content' => 'Mainland Business License Coverage',
            ],
            [
                'page' => 'services.company-registration-mainland',
                'section' => 'main content',
                'position' => 'first paragraph',
                'content' => 'Beyond just a license—comprehensive support for your UAE business launch and operations.',
            ],
            [
                'page' => 'services.company-registration-mainland',
                'section' => 'main content',
                'position' => 'second title',
                'content' => 'Expand Without Limits – Your Gateway to Local & International Markets',
            ],
            [
                'page' => 'services.company-registration-mainland',
                'section' => 'main content',
                'position' => 'second paragraph',
                'content' => "Starting a business in Dubai Mainland allows you to trade anywhere in the UAE and internationally without restrictions. At Star Way LLC, we make the process simple and efficient, handling everything from legal structure to license issuance, local sponsor arrangements (if needed), and visa quotas.

With access to government projects, retail space, and full operational freedom, Mainland registration is ideal for businesses looking to grow fast and stay flexible. We handle everything: trade license, local approvals, tenant registration (Ejari), MoA drafting, and visa quotas-so your business starts fully compliant and operational.                ",
            ],
            [
                'page' => 'services.company-registration-mainland',
                'section' => 'main content',
                'position' => 'third title',
                'content' => 'Why Consider a Mainland Company in Dubai?',
            ],
            [
                'page' => 'services.company-registration-mainland',
                'section' => 'main content',
                'position' => 'third paragraph',
                'content' => "Setting up a mainland company in Dubai offers unmatched flexibility and growth potential. You can trade anywhere in the UAE and beyond, take on government contracts, and operate without limitations on location or client type. Mainland companies also offer full visa eligibility, no currency restrictions, and the option to open offices anywhere. Whether you're planning to scale, hire employees, or diversify your offerings-mainland setup gives you the legal and commercial freedom to do it all.",
            ],
            [
                'page' => 'services.company-registration-mainland',
                'section' => 'main content',
                'position' => 'fourth title',
                'content' => 'Types of Mainland Licenses in Dubai',
            ],
            [
                'page' => 'services.company-registration-mainland',
                'section' => 'main content',
                'position' => 'fourth paragraph',
                'content' => "Dubai Mainland offers different types of licenses to suit a wide range of business activities. Choosing the right one is essential for compliance and long-term success. At Star Way LLC, we help you identify and apply for the license that matches your goals.

- **Commercial License** : Perfect for businesses involved in trading, retail, and general commerce-enables importing, exporting, and selling goods.
- **Industrial License** : Tailored for manufacturing and production companies—grants permission to set up factories and industrial facilities.
- **Professional License** : Designed for service providers like consultants, IT firms, and healthcare professionals-allows full operational freedom in the UAE mainland.",
            ],
            [
                'page' => 'services.company-registration-mainland',
                'section' => 'main content',
                'position' => 'fifth title',
                'content' => 'What Our Mainland Business License Covers?',
            ],
            [
                'page' => 'services.company-registration-mainland',
                'section' => 'main content',
                'position' => 'fifth paragraph',
                'content' => "- **Business Activity Selection** – Guidance on choosing permitted activities as per DED.
- **Trade Name Registration** – Assistance with selecting and registering a unique trade name.
- **Legal Documentation** – Preparation and submission of MOA, Local Service Agent Agreement, license forms, and more.
- **Office Space Solutions** – Help securing physical or co-working space for DED approval.
- **Initial Approval & Licensing** – Managing initial approvals and ensuring timely license issuance.
- **UAE Resident Visa Services** – Investor, partner, and employee visa application and Emirates ID processing.
- **Bank Account Assistance** – Coordination with trusted banks for fast corporate account opening.
- **Ongoing Compliance Support** – License renewals, labor card registration, VAT advisory, and more.",
            ],
            [
                'page' => 'services.company-registration-mainland',
                'section' => 'main content',
                'position' => 'sixth title',
                'content' => 'Simple Steps for Free Zone Company Registration',
            ],
            [
                'page' => 'services.company-registration-mainland',
                'section' => 'main content',
                'position' => 'sixth paragraph',
                'content' => "1. **Activity and Structure** – Choose your business activity and structure (sole proprietorship, LLC, etc.) with expert guidance.
2. **Finalize Your Trade Name** – Pick and reserve a compliant, unique name.
3. **Application & Submission of Documents** – Prepare and submit all necessary paperwork, including passport copies and applications.
4. **License Notification & Corporate Account Formation** – Receive your business license and proceed to open your corporate bank account.",
            ],
            [
                'page' => 'services.company-registration-mainland',
                'section' => 'banner',
                'position' => 'image',
                'image' => 'images/dubai-1536x1024.jpg',
                'dimension' => '1920x1080',
            ],

            /*
            |--------------------------------------------------------------------------
            | Company Registration Freezone page Content
            |--------------------------------------------------------------------------
            */

            [
                'page' => 'services.company-registration-freezone',
                'section' => 'aside content',
                'position' => 'first title',
                'content' => 'Overview',
            ],
            [
                'page' => 'services.company-registration-freezone',
                'section' => 'aside content',
                'position' => 'first paragraph',
                'content' => '- Freezone Company Consultation
- License Selection
- Setup & Compliance
- Bank Account Assistance',
            ],
            [
                'page' => 'services.company-registration-freezone',
                'section' => 'aside content',
                'position' => 'second title',
                'content' => 'Why Free Zone?',
            ],
            [
                'page' => 'services.company-registration-freezone',
                'section' => 'aside content',
                'position' => 'second paragraph',
                'content' => '- 100% Foreign Ownership – No local partner required
- Zero Corporate & Income Tax
- Quick setup, licenses in days
- Access to world-class infrastructure
- Cost-effective for startups & SMEs
- Easy bank account opening',
            ],
            [
                'page' => 'services.company-registration-freezone',
                'section' => 'main content',
                'position' => 'top text',
                'content' => 'service',
            ],
            [
                'page' => 'services.company-registration-freezone',
                'section' => 'main content',
                'position' => 'first title',
                'content' => 'Company Registration - Freezone UAE',
            ],
            [
                'page' => 'services.company-registration-freezone',
                'section' => 'main content',
                'position' => 'first paragraph',
                'content' => 'Simplified Setup. Full Ownership. Zero Tax. We help you launch efficiently in a UAE Free Zone.',
            ],
            [
                'page' => 'services.company-registration-freezone',
                'section' => 'main content',
                'position' => 'second title',
                'content' => 'Overview',
            ],
            [
                'page' => 'services.company-registration-freezone',
                'section' => 'main content',
                'position' => 'second paragraph',
                'content' => 'Free Zones in the UAE offer one of the most attractive environments for entrepreneurs and foreign investors. With 100% foreign ownership, zero corporate tax, and no import/export duties, Free Zones are designed for smooth and fast company formation. Whether launching a consultancy, e-commerce venture, or logistics business, our team ensures your setup is efficient and compliant.',
            ],
            [
                'page' => 'services.company-registration-freezone',
                'section' => 'main content',
                'position' => 'third title',
                'content' => 'Why Consider a Free Zone Company?',
            ],
            [
                'page' => 'services.company-registration-freezone',
                'section' => 'main content',
                'position' => 'third paragraph',
                'content' => '- **100% Foreign Ownership** – No need for a local partner
- **Zero Corporate & Income Tax** – Maximize profitability
- **Quick Setup Process** – Licenses issued in a few days
- **Access to World-Class Infrastructure** – Offices, warehouses, ports
- **Ideal for Startups & SMEs** – Cost-effective packages
- **Easy Bank Account Opening** – With proper compliance',
            ],
            [
                'page' => 'services.company-registration-freezone',
                'section' => 'main content',
                'position' => 'fourth title',
                'content' => 'Types of Free Zone Licenses',
            ],
            [
                'page' => 'services.company-registration-freezone',
                'section' => 'main content',
                'position' => 'fourth paragraph',
                'content' => '- **Trading License**: For companies involved in importing, exporting, and general trading activities.
- **Commercial License**: For retail and wholesale businesses selling goods inside and outside the Free Zone.
- **Services License**: For consultancy, IT, marketing, legal, and other professional services.
- **Manufacturing License**: For production/manufacturing setup within the Free Zone.
- **Warehouse License**: For storage, distribution, and warehouse operations.
- **Industrial License**: For processing, packaging, and large-scale production.',
            ],
            [
                'page' => 'services.company-registration-freezone',
                'section' => 'main content',
                'position' => 'fifth title',
                'content' => 'The Process',
            ],
            [
                'page' => 'services.company-registration-freezone',
                'section' => 'main content',
                'position' => 'fifth paragraph',
                'content' => 'We guide you through every step: selecting the right Free Zone, choosing your license, preparing documents, securing approvals, and opening your UAE bank account—all with transparent support.',
            ],
            [
                'page' => 'services.company-registration-freezone',
                'section' => 'main content',
                'position' => 'sixth title',
                'content' => 'The End',
            ],
            [
                'page' => 'services.company-registration-freezone',
                'section' => 'main content',
                'position' => 'sixth paragraph',
                'content' => 'Ready to start your Free Zone company? Contact us for expert guidance and a hassle-free registration.',
            ],
            [
                'page' => 'services.company-registration-freezone',
                'section' => 'banner',
                'position' => 'image',
                'image' => 'images/dubai-freeland.webp',
                'dimension' => '1920x1080',
            ],

            /*
            |--------------------------------------------------------------------------
            | Office Flexi Desk Arrangement page Content
            |--------------------------------------------------------------------------
            */

            [
                'page' => 'services.office-flexi-desk-arrangement',
                'section' => 'aside content',
                'position' => 'first title',
                'content' => 'Overview',
            ],
            [
                'page' => 'services.office-flexi-desk-arrangement',
                'section' => 'aside content',
                'position' => 'first paragraph',
                'content' => '- Flexi Desk & Virtual Office Setup
- Location & Office Selection
- Utility Activation
- Registration & Compliance',
            ],
            [
                'page' => 'services.office-flexi-desk-arrangement',
                'section' => 'aside content',
                'position' => 'second title',
                'content' => 'Why Flexi Desk?',
            ],
            [
                'page' => 'services.office-flexi-desk-arrangement',
                'section' => 'aside content',
                'position' => 'second paragraph',
                'content' => '- Cost-effective workspace solution
- Official address for registration
- Flexible options: shared, private, virtual
- Full compliance with UAE regulations
- Quick setup & activation',
            ],
            [
                'page' => 'services.office-flexi-desk-arrangement',
                'section' => 'main content',
                'position' => 'top text',
                'content' => 'service',
            ],
            [
                'page' => 'services.office-flexi-desk-arrangement',
                'section' => 'main content',
                'position' => 'first title',
                'content' => 'Flexi Desk & Virtual Office Setup – Dubai',
            ],
            [
                'page' => 'services.office-flexi-desk-arrangement',
                'section' => 'main content',
                'position' => 'first paragraph',
                'content' => 'Official Address or Flexible Desk—Your Choice. Seamless workspace solutions for startups and established businesses.',
            ],
            [
                'page' => 'services.office-flexi-desk-arrangement',
                'section' => 'main content',
                'position' => 'second title',
                'content' => 'Overview',
            ],
            [
                'page' => 'services.office-flexi-desk-arrangement',
                'section' => 'main content',
                'position' => 'second paragraph',
                'content' => 'Whether you\'re a startup or an established business seeking cost-effective space, our Flexi Desk solutions offer a smart and compliant way to establish your presence in Dubai. We provide a seamless setup for virtual offices or physical workspaces with all the essentials.',
            ],
            [
                'page' => 'services.office-flexi-desk-arrangement',
                'section' => 'main content',
                'position' => 'third title',
                'content' => 'What We Offer',
            ],
            [
                'page' => 'services.office-flexi-desk-arrangement',
                'section' => 'main content',
                'position' => 'third paragraph',
                'content' => '- Assistance in choosing the ideal location and office type (Flexi Desk, Executive Desk, or Private Office)
- Full compliance with Free Zone or Mainland regulations
- DEWA, internet, and basic utilities (where applicable)
- Official address for business registration and communication',
            ],
            [
                'page' => 'services.office-flexi-desk-arrangement',
                'section' => 'main content',
                'position' => 'fourth title',
                'content' => 'Setup Process',
            ],
            [
                'page' => 'services.office-flexi-desk-arrangement',
                'section' => 'main content',
                'position' => 'fourth paragraph',
                'content' => '1. Choose Your Location – We help you select a zone that matches your business needs.
2. Select Office Type – Pick between shared desk, private space, or virtual options.
3. Document Preparation – We assist with all forms and approvals.
4. Sign Agreement – Finalize lease and service agreements.
5. Get Approval – We handle submissions and follow-ups with relevant authorities.
6. Office Activation – Begin using your office or flexi desk for licensing, operations, and correspondence.',
            ],
            [
                'page' => 'services.office-flexi-desk-arrangement',
                'section' => 'main content',
                'position' => 'fifth title',
                'content' => 'Required Documents',
            ],
            [
                'page' => 'services.office-flexi-desk-arrangement',
                'section' => 'main content',
                'position' => 'fifth paragraph',
                'content' => '- Passport copy of shareholders
- Visa copy (if applicable)
- Emirates ID (if available)
- Business license copy (for renewals)
- Company documents (for existing entities)',
            ],
            [
                'page' => 'services.office-flexi-desk-arrangement',
                'section' => 'main content',
                'position' => 'bottom text',
                'content' => 'Let us simplify your business journey with the right workspace—efficient, affordable, and fully compliant.',
            ],
            [
                'page' => 'services.office-flexi-desk-arrangement',
                'section' => 'banner',
                'position' => 'image',
                'image' => 'images/Office_Flexi_Desk_Arrangement.jpg',
                'dimension' => '1920x1080',
            ],

            /*
            |--------------------------------------------------------------------------
            | Corporate PRO Services page Content
            |--------------------------------------------------------------------------
            */

            [
                'page' => 'services.corporate-pro-services',
                'section' => 'aside content',
                'position' => 'first title',
                'content' => 'Overview',
            ],
            [
                'page' => 'services.corporate-pro-services',
                'section' => 'aside content',
                'position' => 'first paragraph',
                'content' => '- Corporate PRO Services
- Regulatory Compliance Management
- Government Approvals & Renewals
- Visa & Emirates ID Processing
- NOC & Document Attestation',
            ],
            [
                'page' => 'services.corporate-pro-services',
                'section' => 'aside content',
                'position' => 'second title',
                'content' => 'Why PRO Services?',
            ],
            [
                'page' => 'services.corporate-pro-services',
                'section' => 'aside content',
                'position' => 'second paragraph',
                'content' => '- Ensure regulatory compliance and avoid penalties
- Save time by outsourcing government paperwork
- Expert guidance on UAE procedures and documentation
- Minimize errors, delays, and rejections
- Peace of mind—focus on business growth',
            ],
            [
                'page' => 'services.corporate-pro-services',
                'section' => 'main content',
                'position' => 'top text',
                'content' => 'service',
            ],
            [
                'page' => 'services.corporate-pro-services',
                'section' => 'main content',
                'position' => 'first title',
                'content' => 'Corporate PRO Services – Dubai',
            ],
            [
                'page' => 'services.corporate-pro-services',
                'section' => 'main content',
                'position' => 'first paragraph',
                'content' => 'Enhance your business operations in Dubai with comprehensive PRO services—streamlining government documentation, approvals, and compliance.',
            ],
            [
                'page' => 'services.corporate-pro-services',
                'section' => 'main content',
                'position' => 'second title',
                'content' => 'Why PRO Services Are Essential for Your Business',
            ],
            [
                'page' => 'services.corporate-pro-services',
                'section' => 'main content',
                'position' => 'second paragraph',
                'content' => '- **Regulatory Compliance**: Ensure full adherence to UAE laws, avoiding penalties and legal complications.
- **Time Efficiency**: Let us handle paperwork and approvals while you focus on growing your business.
- **Expert Guidance**: Benefit from our in-depth knowledge of government procedures and documentation.
- **Minimized Errors & Delays**: Accurate document preparation and review for faster approvals and renewals.
- **Peace of Mind**: Trust Star Way LLC for reliable, professional PRO support.',
            ],
            [
                'page' => 'services.corporate-pro-services',
                'section' => 'main content',
                'position' => 'third title',
                'content' => 'Our PRO Service Offerings',
            ],
            [
                'page' => 'services.corporate-pro-services',
                'section' => 'main content',
                'position' => 'third paragraph',
                'content' => '- Trade License Renewal
- Visa Processing and Cancellation
- Emirates ID Application and Renewal
- Labor Card Processing
- No Objection Certificate (NOC) Issuance
- Document Attestation and Notarization
- Government Correspondence Management',
            ],
            [
                'page' => 'services.corporate-pro-services',
                'section' => 'main content',
                'position' => 'fourth title',
                'content' => 'Required Documents for PRO Services',
            ],
            [
                'page' => 'services.corporate-pro-services',
                'section' => 'main content',
                'position' => 'fourth paragraph',
                'content' => '- Copy of valid business license
- Trade name registration documents
- Shareholder information including passport copies
- Memorandum and Articles of Association (MOA/AOA)
- Valid lease agreement or proof of business address',
            ],
            [
                'page' => 'services.corporate-pro-services',
                'section' => 'main content',
                'position' => 'bottom text',
                'content' => 'We assist you in preparing and verifying all necessary paperwork. Partner with Star Way LLC for seamless, transparent, and expert PRO support—backed by trusted Free Zones, government departments, and banking institutions.',
            ],
            [
                'page' => 'services.corporate-pro-services',
                'section' => 'banner',
                'position' => 'image',
                'image' => 'images/rmirates-id.jpg',
                'dimension' => '1920x1080',
            ],

            /*
            |--------------------------------------------------------------------------
            | Corporate Tax Registration page Content
            |--------------------------------------------------------------------------
            */

            [
                'page' => 'services.corporate-tax-registration',
                'section' => 'aside content',
                'position' => 'first title',
                'content' => 'Overview',
            ],
            [
                'page' => 'services.corporate-tax-registration',
                'section' => 'aside content',
                'position' => 'first paragraph',
                'content' => '- Corporate Tax Registration
- Tax Compliance Guidance
- Return Filing & Submission
- Tax Audit Support',
            ],
            [
                'page' => 'services.corporate-tax-registration',
                'section' => 'aside content',
                'position' => 'second title',
                'content' => 'Why Corporate Tax?',
            ],
            [
                'page' => 'services.corporate-tax-registration',
                'section' => 'aside content',
                'position' => 'second paragraph',
                'content' => '- Stay compliant with UAE law
- Build trust and transparency
- Minimize risk of penalties
- Optimize your tax strategy
- Expert support in audits and filings',
            ],
            [
                'page' => 'services.corporate-tax-registration',
                'section' => 'main content',
                'position' => 'top text',
                'content' => 'service',
            ],
            [
                'page' => 'services.corporate-tax-registration',
                'section' => 'main content',
                'position' => 'first title',
                'content' => 'Corporate Tax Registration & Consulting – Dubai',
            ],
            [
                'page' => 'services.corporate-tax-registration',
                'section' => 'main content',
                'position' => 'first paragraph',
                'content' => 'Navigate the complexities of UAE corporate taxation with confidence—expert registration, compliance, and strategy.',
            ],
            [
                'page' => 'services.corporate-tax-registration',
                'section' => 'main content',
                'position' => 'second title',
                'content' => 'Overview',
            ],
            [
                'page' => 'services.corporate-tax-registration',
                'section' => 'main content',
                'position' => 'second paragraph',
                'content' => 'Our expert services help businesses register for corporate tax, remain fully compliant, and implement tax strategies that align with their goals while minimizing liabilities.',
            ],
            [
                'page' => 'services.corporate-tax-registration',
                'section' => 'main content',
                'position' => 'third title',
                'content' => 'Our Services Include',
            ],
            [
                'page' => 'services.corporate-tax-registration',
                'section' => 'main content',
                'position' => 'third paragraph',
                'content' => '- **Tax Registration**: Registration with the Federal Tax Authority (FTA) for legal compliance.
- **Tax Compliance**: Ongoing guidance on documentation, deadlines, and sector-specific tax rules.
- **Consulting Services**: Tailored tax strategies based on your corporate structure and operations.
- **Return Filing**: Accurate preparation and timely submission of tax returns to the FTA.
- **Audit Support**: Complete documentation and professional representation in case of audits.',
            ],
            [
                'page' => 'services.corporate-tax-registration',
                'section' => 'main content',
                'position' => 'fourth title',
                'content' => 'Why Corporate Tax Filing Matters',
            ],
            [
                'page' => 'services.corporate-tax-registration',
                'section' => 'main content',
                'position' => 'fourth paragraph',
                'content' => '- Legal obligation and compliance
- Builds trust and transparency
- Avoids penalties and operational restrictions
- Provides clarity for investors and authorities',
            ],
            [
                'page' => 'services.corporate-tax-registration',
                'section' => 'main content',
                'position' => 'fifth title',
                'content' => 'Essential Documents for Corporate Tax Services',
            ],
            [
                'page' => 'services.corporate-tax-registration',
                'section' => 'main content',
                'position' => 'fifth paragraph',
                'content' => '- **Business License**: Confirms company’s legal identity and activity
- **Financial Statements**: Balance sheets, income statements, and cash flow reports
- **Tax Records**: Past filings and supporting documents
- **Invoices & Receipts**: For income and expense tracking
- **Additional Documents**: Shareholder agreements, MoA, prior tax assessments (as needed)',
            ],
            [
                'page' => 'services.corporate-tax-registration',
                'section' => 'banner',
                'position' => 'image',
                'image' => 'images/coporate-tax-reg.jpg',
                'dimension' => '1920x1080',
            ],

            /*
            |--------------------------------------------------------------------------
            | Tax and Vat page Content
            |--------------------------------------------------------------------------
            */

            [
                'page' => 'services.tax-and-vat',
                'section' => 'aside content',
                'position' => 'first title',
                'content' => 'Overview',
            ],
            [
                'page' => 'services.tax-and-vat',
                'section' => 'aside content',
                'position' => 'first paragraph',
                'content' => '- VAT Registration & Filing
- Tax Compliance & Consultancy
- Refund Claims & Audit Support
- Corporate Tax Assistance',
            ],
            [
                'page' => 'services.tax-and-vat',
                'section' => 'aside content',
                'position' => 'second title',
                'content' => 'Why VAT & Tax?',
            ],
            [
                'page' => 'services.tax-and-vat',
                'section' => 'aside content',
                'position' => 'second paragraph',
                'content' => '- Ensure full legal compliance
- Accurate and timely filings
- Minimize risk of penalties
- Audit-ready documentation
- Optimize financial performance
- Expert support for disputes or audits',
            ],
            [
                'page' => 'services.tax-and-vat',
                'section' => 'main content',
                'position' => 'top text',
                'content' => 'service',
            ],
            [
                'page' => 'services.tax-and-vat',
                'section' => 'main content',
                'position' => 'first title',
                'content' => 'VAT & Tax Services – Dubai',
            ],
            [
                'page' => 'services.tax-and-vat',
                'section' => 'main content',
                'position' => 'first paragraph',
                'content' => 'Stay Compliant. Minimize Risk. Maximize Clarity. End-to-end support for UAE VAT & tax compliance.',
            ],
            [
                'page' => 'services.tax-and-vat',
                'section' => 'main content',
                'position' => 'second title',
                'content' => 'Overview',
            ],
            [
                'page' => 'services.tax-and-vat',
                'section' => 'main content',
                'position' => 'second paragraph',
                'content' => 'In today’s regulated UAE business environment, VAT and tax compliance is critical. Our expert team at Star Way LLC provides end-to-end VAT & tax services to ensure your business meets legal requirements, avoids penalties, and optimizes financial performance.',
            ],
            [
                'page' => 'services.tax-and-vat',
                'section' => 'main content',
                'position' => 'third title',
                'content' => 'Our Key Services Include',
            ],
            [
                'page' => 'services.tax-and-vat',
                'section' => 'main content',
                'position' => 'third paragraph',
                'content' => '- **VAT Registration**: Assessment and guidance through the Federal Tax Authority (FTA) registration process.
- **Periodic VAT Return Filing**: Timely and accurate return filing for ongoing compliance.
- **VAT & Tax Consultancy**: Interpretation of UAE tax laws and development of effective tax strategies.
- **VAT Refund Claims**: Assistance in claiming input VAT refunds, with full documentation support.
- **Tax Compliance & Optimization**: Corporate tax filing, residency certificates, and liability reduction.
- **Audit & Dispute Support**: Documentation and representation in case of audits or disputes.',
            ],
            [
                'page' => 'services.tax-and-vat',
                'section' => 'main content',
                'position' => 'fourth title',
                'content' => 'Why VAT & Tax Services Matter',
            ],
            [
                'page' => 'services.tax-and-vat',
                'section' => 'main content',
                'position' => 'fourth paragraph',
                'content' => '- Full legal compliance
- Accurate reporting and filings
- Strong audit preparation
- Time and cost efficiency
- Confidence in every transaction',
            ],
            [
                'page' => 'services.tax-and-vat',
                'section' => 'main content',
                'position' => 'fifth title',
                'content' => 'Essential Documents Required',
            ],
            [
                'page' => 'services.tax-and-vat',
                'section' => 'main content',
                'position' => 'fifth paragraph',
                'content' => '- **Financial Statements** – Income, expense, and balance details
- **Invoices & Receipts** – For accurate VAT input/output calculations
- **Bank Statements** – To reconcile transactions
- **Business Documents** – Trade license, MoA, and registration certificates
- **Identification** – Passport and Emirates ID copies for verification',
            ],
            [
                'page' => 'services.tax-and-vat',
                'section' => 'banner',
                'position' => 'image',
                'image' => 'images/vat-in-uae.webp',
                'dimension' => '1920x1080',
            ],

            /*
            |--------------------------------------------------------------------------
            | The Will page Content
            |--------------------------------------------------------------------------
            */

            [
                'page' => 'services.the-will',
                'section' => 'aside content',
                'position' => 'first title',
                'content' => 'Overview',
            ],
            [
                'page' => 'services.the-will',
                'section' => 'aside content',
                'position' => 'first paragraph',
                'content' => '- Will Drafting & Registration
- Inheritance Law Guidance
- Asset Protection Consulting
- Heir Documentation Support',
            ],
            [
                'page' => 'services.the-will',
                'section' => 'aside content',
                'position' => 'second title',
                'content' => 'Why Estate Planning?',
            ],
            [
                'page' => 'services.the-will',
                'section' => 'aside content',
                'position' => 'second paragraph',
                'content' => '- Protect your assets and legacy
- Avoid government claims and Sharia law distribution
- Prevent costly court proceedings
- Ensure smooth transfer to your heirs
- Peace of mind for your family’s future',
            ],
            [
                'page' => 'services.the-will',
                'section' => 'main content',
                'position' => 'top text',
                'content' => 'service',
            ],
            [
                'page' => 'services.the-will',
                'section' => 'main content',
                'position' => 'first title',
                'content' => 'Estate Planning & Will Registration – UAE',
            ],
            [
                'page' => 'services.the-will',
                'section' => 'main content',
                'position' => 'first paragraph',
                'content' => 'Secure Your Legacy with Confidence. Protect your assets and your family’s future with expert estate planning.',
            ],
            [
                'page' => 'services.the-will',
                'section' => 'main content',
                'position' => 'second title',
                'content' => 'Overview',
            ],
            [
                'page' => 'services.the-will',
                'section' => 'main content',
                'position' => 'second paragraph',
                'content' => 'Owning assets in the UAE comes with legal considerations that make estate planning essential—especially in the absence of a properly registered will. Without one, your estate may be distributed under Sharia law, even if you have direct heirs, and could potentially be claimed by the government.',
            ],
            [
                'page' => 'services.the-will',
                'section' => 'main content',
                'position' => 'third title',
                'content' => 'Our Estate Planning Services',
            ],
            [
                'page' => 'services.the-will',
                'section' => 'main content',
                'position' => 'third paragraph',
                'content' => '- Drafting legally valid wills tailored to UAE jurisdiction
- Guiding you and your family through inheritance laws
- Preventing costly court proceedings and delays
- Ensuring smooth transfer of ownership without legal conflicts
- Supporting both local and international clients with full documentation',
            ],
            [
                'page' => 'services.the-will',
                'section' => 'main content',
                'position' => 'fourth title',
                'content' => 'Why Estate Planning Matters',
            ],
            [
                'page' => 'services.the-will',
                'section' => 'main content',
                'position' => 'fourth paragraph',
                'content' => '- Protect your assets and legacy in the UAE
- Avoid government claims and Sharia law distribution
- Prevent costly legal disputes and court delays
- Ensure a smooth, conflict-free transfer to heirs
- Provide clarity and peace of mind for your family’s future',
            ],
            [
                'page' => 'services.the-will',
                'section' => 'main content',
                'position' => 'bottom text',
                'content' => 'Our experts provide complete support from consultation to registration—ensuring peace of mind and clarity for you and your heirs. Plan ahead. Protect your assets. Secure your family’s future with Star Way.',
            ],
            [
                'page' => 'services.the-will',
                'section' => 'banner',
                'position' => 'image',
                'image' => 'images/hero-bg.jpg',
                'dimension' => '1920x1080',
            ],

            /*
            |--------------------------------------------------------------------------
            | UAE Golden Visa page Content
            |--------------------------------------------------------------------------
            */

            [
                'page' => 'services.uae-golden-visa',
                'section' => 'aside content',
                'position' => 'first title',
                'content' => 'Overview',
            ],
            [
                'page' => 'services.uae-golden-visa',
                'section' => 'aside content',
                'position' => 'first paragraph',
                'content' => '- Golden Visa Eligibility Assessment
- Application Preparation & Submission
- Emirates ID & Medical Test Support
- Relocation & Activation Services',
            ],
            [
                'page' => 'services.uae-golden-visa',
                'section' => 'aside content',
                'position' => 'second title',
                'content' => 'Why Estate Planning?',
            ],
            [
                'page' => 'services.uae-golden-visa',
                'section' => 'aside content',
                'position' => 'second paragraph',
                'content' => '- 5 or 10-year UAE residency—no local sponsor required
- 100% business ownership
- Sponsor family & unlimited domestic staff
- No minimum stay requirement
- Multiple entry visas for easy relocation
- Access to banking, education, healthcare
- Path to long-term stability in the UAE',
            ],
            [
                'page' => 'services.uae-golden-visa',
                'section' => 'main content',
                'position' => 'top text',
                'content' => 'service',
            ],
            [
                'page' => 'services.uae-golden-visa',
                'section' => 'main content',
                'position' => 'first title',
                'content' => 'UAE Golden Visa',
            ],
            [
                'page' => 'services.uae-golden-visa',
                'section' => 'main content',
                'position' => 'first paragraph',
                'content' => 'Secure Long-Term Residency in the UAE—flexible, secure, and designed for outstanding professionals and investors.',
            ],
            [
                'page' => 'services.uae-golden-visa',
                'section' => 'main content',
                'position' => 'second title',
                'content' => 'Overview',
            ],
            [
                'page' => 'services.uae-golden-visa',
                'section' => 'main content',
                'position' => 'second paragraph',
                'content' => 'The UAE Golden Visa is a long-term residency visa for investors, entrepreneurs, skilled professionals, scientists, outstanding students, and exceptional talents. It grants 5 or 10 years of renewable residency, providing security, flexibility, and opportunity in one of the world’s most dynamic economies.',
            ],
            [
                'page' => 'services.uae-golden-visa',
                'section' => 'main content',
                'position' => 'third title',
                'content' => 'Benefits',
            ],
            [
                'page' => 'services.uae-golden-visa',
                'section' => 'main content',
                'position' => 'third paragraph',
                'content' => '- 5 or 10-Year Residency—no local sponsor required
- 100% business ownership in the UAE
- Sponsor family members (spouse & children)
- Sponsor unlimited domestic staff
- No minimum stay requirement in the UAE
- Multiple entry visas to simplify relocation
- Full access to banking, education, healthcare, and other local services
- Long-term business and personal stability',
            ],
            [
                'page' => 'services.uae-golden-visa',
                'section' => 'main content',
                'position' => 'fourth title',
                'content' => 'Process',
            ],
            [
                'page' => 'services.uae-golden-visa',
                'section' => 'main content',
                'position' => 'fourth paragraph',
                'content' => '1. **Initial Consultation & Eligibility Check** – We assess your profile for eligibility based on investment, profession, or achievements.
2. **Document Collection & Review** – Assistance in compiling and reviewing all required documents (passport, qualifications, bank statements, etc.).
3. **Application Submission** – We submit your application to the UAE authorities.
4. **Medical Test & Emirates ID** – After approval, complete your medical exam and biometric registration.
5. **Golden Visa Issuance** – Receive your 5 or 10-year Golden Visa depending on your eligibility category.
6. **Post-Issuance Support** – Full support with Emirates ID activation, local bank account setup, and relocation services.',
            ],
            [
                'page' => 'services.uae-golden-visa',
                'section' => 'main content',
                'position' => 'fifth title',
                'content' => 'Eligible Categories',
            ],
            [
                'page' => 'services.uae-golden-visa',
                'section' => 'main content',
                'position' => 'fifth paragraph',
                'content' => '- Real estate investors
- Entrepreneurs and business owners
- Professionals in medicine, science, and engineering
- Creative professionals in art and culture
- Outstanding students and researchers',
            ],
            [
                'page' => 'services.uae-golden-visa',
                'section' => 'banner',
                'position' => 'image',
                'image' => 'images/golden-visa.jpg',
                'dimension' => '1920x1080',
            ],

        ];

        foreach ($cmsItems as $cmsItem) {
            Cms::create($cmsItem);
        }
    }
}
