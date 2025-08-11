<?php

namespace App\Http\Controllers;

use App\Models\Cms;

class ServiceController extends Controller
{
    public function business_setup()
    {
        return view('app.services.business-setup', [
            'cms' => Cms::where('page', 'services.business-setup')->orderBy('id', 'asc')->get(),
        ]);
    }

    public function company_registration_mainland()
    {
        return view('app.services.company-registration-mainland', [
            'cms' => Cms::where('page', 'services.company-registration-mainland')->orderBy('id', 'asc')->get(),
        ]);
    }

    public function company_registration_freezone()
    {
        return view('app.services.company-registration-freezone', [
            'cms' => Cms::where('page', 'services.company-registration-freezone')->orderBy('id', 'asc')->get(),
        ]);
    }

    public function office_flexi_desk_arrangement()
    {
        return view('app.services.office-flexi-desk-arrangement', [
            'cms' => Cms::where('page', 'services.office-flexi-desk-arrangement')->orderBy('id', 'asc')->get(),
        ]);
    }

    public function corporate_pro_services()
    {
        return view('app.services.corporate-pro-services', [
            'cms' => Cms::where('page', 'services.corporate-pro-services')->orderBy('id', 'asc')->get(),
        ]);
    }

    public function corporate_tax_registration()
    {
        return view('app.services.corporate-tax-registration', [
            'cms' => Cms::where('page', 'services.corporate-tax-registration')->orderBy('id', 'asc')->get(),
        ]);
    }

    public function tax_and_vat()
    {
        return view('app.services.tax-and-vat', [
            'cms' => Cms::where('page', 'services.tax-and-vat')->orderBy('id', 'asc')->get(),
        ]);
    }

    public function the_will()
    {
        return view('app.services.the-will', [
            'cms' => Cms::where('page', 'services.the-will')->orderBy('id', 'asc')->get(),
        ]);
    }

    public function immigration_services()
    {
        return view('app.services.immigration-services');
    }

    public function uae_golden_visa()
    {
        // $cms = Cms::where('page', 'services.uae-golden-visa')->orderBy('id', 'asc')->get();
        // dd($cms);
        return view('app.services.uae-golden-visa', [
            'cms' => Cms::where('page', 'services.uae-golden-visa')->orderBy('id', 'asc')->get(),
        ]);
    }
}
