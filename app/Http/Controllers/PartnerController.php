<?php

namespace App\Http\Controllers;

use App\Http\Requests\PartnerRequest;
use App\Models\Partner;
use App\Models\PartnerProduct;
use App\Models\PartnerType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        $partnerDiscount = [];

        foreach ($partners as $partner) {
            $totalQuantity = PartnerProduct::where('partner_id', $partner->id)->sum('quantity');

            $discount = 0;
            if ($totalQuantity >= 10000 && $totalQuantity < 50000) {
                $discount = 5;
            }
            else if ($totalQuantity >= 50000 && $totalQuantity < 300000) {
                $discount = 10;
            }
            else if ($totalQuantity >= 300000) {
                $discount = 15;
            }

            $partnerDiscount[$partner->id] = $discount;
        }

        return view('partners.index', compact('partners', 'partnerDiscount'));
    }

    public function create()
    {
        // Получаем список типов партнера и отдаём представление
        $types = PartnerType::all();

        return view('partners.create', compact('types'));
    }

    public function store(PartnerRequest $request) {
        $partner = Partner::create($request->validated());

        return redirect()->route('partners.index');
    }

    public function edit(Partner $partner)
    {
        $types = PartnerType::all();

        return view('partners.edit', compact('partner', 'types'));
    }

    public function update(PartnerRequest $request, Partner $partner) {
        $partner->update($request->validated());

        return redirect()->route('partners.index');
    }
}
