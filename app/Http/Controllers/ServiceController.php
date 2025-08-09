<?php

namespace App\Http\Controllers;

class ServiceController extends Controller
{
    public function business_setup()
    {
        return view('app.services.business-setup');
    }

    public function company_registration_mainland()
    {
        return view('app.services.company-registration-mainland');
    }

    public function company_registration_freezone()
    {
        return view('app.services.company-registration-freezone');
    }

    public function office_flexi_desk_arrangement()
    {
        return view('app.services.office-flexi-desk-arrangement');
    }

    public function corporate_pro_services()
    {
        return view('app.services.corporate-pro-services');
    }

    public function corporate_tax_registration()
    {
        return view('app.services.corporate-tax-registration');
    }

    public function tax_and_vat()
    {
        return view('app.services.tax-and-vat');
    }

    public function the_will()
    {
        return view('app.services.the-will');
    }

    public function immigration_services()
    {
        return view('app.services.immigration-services');
    }

    public function uae_golden_visa()
    {
        return view('app.services.uae-golden-visa');
    }
}
