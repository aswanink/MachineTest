<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function index()
    {

        return view('adminadd'); 
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'address' => 'nullable|string|max:255',
        ]);
  
        
        

        Store::create([
            'name' => $request->input('name'),
            'latitude' => $request->input('latitude'),
            'longitude' => $request->input('longitude'),
            'address' => $request->input('address'),
            
        ]);

        return redirect()->route('adminadd.view');
    }

    public function view()
    {
        $stores = Store::all();
        return view('adminview', compact('stores'));
    }

    public function edit($id)
    {
        $store = Store::findOrFail($id);
        return view('adminedit', compact('store'));
    }

    public function update(Request $request, $id)
    {
        $store = Store::findOrFail($id);
    
        $request->validate([
            'name' => 'required|string|max:255',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'address' => 'nullable|string|max:255',
        ]);
    
        
    
        $store->update([
            'name' => $request->input('name'),
            'latitude' => $request->input('latitude'),
            'longitude' => $request->input('longitude'),
            'address' => $request->input('address'),
        ]);
    
        return redirect()->route('adminadd.view')->with('success', 'Store updated successfully.');
    }
    

    public function destroy($id)
{
    $store = Store::findOrFail($id);

    $store->delete();

    return redirect()->route('adminadd.view')->with('success', 'item deleted successfully.');
}



private function getDistance($latitude1, $longitude1, $latitude2, $longitude2)
{
    $earthRadius = 6371; // Earth radius in km
    $latFrom = deg2rad($latitude1);
    $lonFrom = deg2rad($longitude1);
    $latTo = deg2rad($latitude2);
    $lonTo = deg2rad($longitude2);

    $latDelta = $latTo - $latFrom;
    $lonDelta = $lonTo - $lonFrom;

    $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) + cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
    return $angle * $earthRadius;
}

// Public method to display nearby stores
public function showNearbyStores(Request $request)
{
    $userLatitude = $request->latitude;
    $userLongitude = $request->longitude;

    $stores = Store::all();
    $storesWithDistance = $stores->map(function ($store) use ($userLatitude, $userLongitude) {
        $store->distance = $this->getDistance($userLatitude, $userLongitude, $store->latitude, $store->longitude);
        return $store;
    });

    $storesSortedByDistance = $storesWithDistance->sortBy('distance')->values();

    return response()->json($storesSortedByDistance);
}





}

