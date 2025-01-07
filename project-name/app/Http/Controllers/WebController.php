<?php

namespace App\Http\Controllers;

use App\Mail\OrderMail;
use App\Models\Category;
use App\Models\Market;
use App\Models\Marketer;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WebController extends Controller
{

    public function index($marketerId)
    {
        Marketer::where('marketer_id', $marketerId)->firstOrFail();
        $latestProducts = Product::where('status', 1)
            ->orderBy('created_at', 'desc')
            ->take(10)  // Get only the latest 5 products
            ->get();



        $products = Product::where('status', 1) // Only active products
            ->orderBy('created_at', 'desc') // Sort by newest first
            ->take(12) // Limit to 12 products
            ->get();
        return view('website.home.index', compact('products', 'latestProducts', 'marketerId'));
    }






    public function productDetail($marketerId, $id)
    {
        Marketer::where('marketer_id', $marketerId)->firstOrFail();
        $product = Product::findOrFail($id);
        return view('website.product.detail', compact('product', 'marketerId'));
    }


    public function buyForm($marketerId, $productId)
    {
        Marketer::where('marketer_id', $marketerId)->firstOrFail();
        $product = Product::findOrFail($productId);
        return view('website.buyForm.index', compact('product', 'productId', 'marketerId'));
    }

    public function makeOrder(Request $request)
    {
        $validated = $request->validate([
            'amz_order_no' => 'required',
            'product_id' => 'required|numeric',
            'customer_email' => 'required|email',
            'buyer_profile' => 'nullable|string',
            'order_picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $marketer = Marketer::where('marketer_id', $request->marketer_id)->firstOrFail();
        $product = Product::findOrFail($request->product_id);
        $validated['manager_id'] = $product->manager_id;
        $validated['marketer_id'] = $marketer->id;
        $validated['external'] = 1;

        if ($request->hasFile('order_picture')) {
            $order_picture = $request->file('order_picture');
            $name_gen = hexdec(uniqid()) . '.' . $order_picture->getClientOriginalExtension();
            $order_picture->move(public_path('uploads/order/images/'), $name_gen);
            $validated['order_picture'] = $name_gen;
        }


        $order = Order::create($validated);

        Mail::to($marketer->email)->send(new OrderMail($order));

        return redirect($marketer->marketer_id . '/order-complete')->with('success', 'Order created successfully');
    }

    public function orderComplete($marketerId)
    {
        return view('website.order.complete', compact('marketerId'));
    }



    public function welcome()
    {
        return view('website.home.welcome');
    }

    public function product(Request $request, $marketerId)
    {
        Marketer::where('marketer_id', $marketerId)->firstOrFail();
        $productId = request()->get('product_id');
        $keyword = request()->get('keyword');
        $category = request()->get('category');
        $market = request()->get('market');


        // Start building the query
        $query = Product::query();

        // Apply filters if present
        if ($request->filled('product_id')) {
            $query->where('id', $request->input('product_id'));
        }

        if ($request->filled('keyword')) {
            $query->where('keyword', 'like', '%' . $request->input('keyword') . '%');
        }

        // Handle Category Filter
        if ($request->filled('category') && $request->get('category') !== 'all') {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('title', $request->input('category'));
            });
        }

        // Handle Market Filter
        if ($request->filled('market') && $request->get('market') !== 'all') {
            $query->whereHas('market', function ($q) use ($request) {
                $q->where('title', $request->input('market'));
            });
        }

        $query->orderBy('created_at', 'desc');

        // Get products with pagination
        $products = $query->paginate(12);


        // Get all categories and markets for the filter options
        $categories = Category::all();
        $markets = Market::all();



        return view('website.product.index', compact('products', 'marketerId', 'categories', 'markets'));
    }


    public function confirmation()
    {
        return view('website.confirmation.index');
    }
}
