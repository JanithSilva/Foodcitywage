<?php

namespace App\Http\Controllers;
use App\Centres;
use App\Employee;
use App\Inventory;
use Illuminate\Http\Request;
use App\Item;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Excel;


class ItemsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

        $data = [
            'items' => Item::all(),
            'inventories' => Inventory::all(),
            'centers' => Centres::all(),
            'max' => DB::table('items')->where('qty','=',Item::max('qty'))->pluck('name'),
            'min' => DB::table('items')->where('qty','=',Item::min('qty'))->pluck('name')
        ];

        return view('items.index')->with($data);

    }


    public function create()
    {
        $centres = Centres::all();
        return view('items.create')->with('centres',$centres);
    }


    public function store(Request $request)
    {

        //handle upload
        if($request->hasFile('item_image')){
            $filenameWithExt = $request->file('item_image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extention = $request->file('item_image')->getClientOriginalExtension();
            $fileNametoStore = $filename.'_'.time().'.'.$extention;

            $path = $request->file('item_image')->storeAs('public/item_images', $fileNametoStore);

        }else{
            $fileNametoStore = 'noimage.jpg';
        }


        $item = new Item();
        $item -> Name = $request -> input('Name');
        $item -> Dealer = $request -> input('dealer');
        $item -> Price = $request -> input('price');
        $item -> Qty = $request -> input('qty');
        $item -> Size = $request -> input('size');
       // $item -> Size = $request -> ;
        $item -> Item_image = $fileNametoStore;

        $item -> user_id = auth()->user()->id;
        $item -> save();

        return redirect('/items')->with('success', 'Item added');

    }


    public function show($id)
    {
       //
    }


    public function edit($id)
    {
        $data = [
        'item' => Item::find($id),
        'centres' => Centres::all()];

        return view('items.edit')->with($data);
    }


    public function update(Request $request, $id)
    {

        if($request->hasFile('item_image')){
            $filenameWithExt = $request->file('item_image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extention = $request->file('item_image')->getClientOriginalExtension();
            $fileNametoStore = $filename.'_'.time().'.'.$extention;

            $path = $request->file('item_image')->storeAs('public/item_images', $fileNametoStore);

        }

        $item = Item::find($id);
        $item -> Name = $request -> input('Name');
        $item -> Dealer = $request -> input('dealer');
        $item -> Price = $request -> input('price');
        $item -> Qty = $request -> input('qty');
        $item -> Size = $request -> input('size');
        if($request->hasFile('item_image')){
            $item -> Item_image = $fileNametoStore;
        }

        $item -> save();

        return redirect('/items')->with('success', 'Item updated');
    }


    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();
        return redirect('/items')->with('success', 'Post removed');
    }

    public function itemsCRUD(){
        return view('items.itemsCRUD');

    }

    function excel()
    {
        $item_data = DB::table('items')->get()->toArray();
        $item_array[] = array('Name', 'dealer', 'price', 'qty', 'size');
        foreach($item_data as $item)
        {
            $customer_array[] = array(
                'Item Name'  => $item->Name,
                'Dealer'   => $item->dealer,
                'Price'    => $item->price,
                'Quantity'  => $item->qty,
                'Size'   => $item->size
            );
        }
        Excel::create('Customer Data', function($excel) use ($item_array){
            $excel->setTitle('Item Data');
            $excel->sheet('Item Data', function($sheet) use ($item_array){
                $sheet->fromArray($item_array, null, 'A1', false, false);
            });
        })->download('xlsx');
    }

}
