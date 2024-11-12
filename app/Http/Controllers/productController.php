<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Product;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // Build the query for search and sorting
        $query = Product::query();

        if ($request->has('search')) {
            $searchTerm = $request->search;

            $query->where('name', 'like', '%' . $searchTerm . '%')
                  ->orWhere('description', 'like', '%' . $searchTerm . '%');

            // Check if the search term is numeric to include `product_id`
            if (is_numeric($searchTerm)) {
                $query->orWhere('product_id', $searchTerm);
            }
        }

        // Sort by selected column and direction
        if ($request->has('sort_by') && $request->has('order')) {
            $query->orderBy($request->sort_by, $request->order);
        }

        $products = $query->paginate(10); // Paginate for better UX

        // Return the view and pass the products to it
        return view('pages.prodcut_management', compact('products'));
    }






    public function create()
    {
        return view('pages.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                "product_id" => "required",
                "name" => "required",
                "description" => "nullable",
                "price" => "nullable",
                "stock" => "nullable",
                "image" => "nullable|image|mimes:jpeg,png,jpg,gif|max:2048", // Validate image file
            ]);

            $input = $request->all();

            if ($image = $request->file('image')) {
                $destinationPath = 'images/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['image'] = "$profileImage";
            }

            // Product::create([
            //     "product_id" => $request->input('product_id'),
            //     "name" => $request->input('name'),
            //     "description" => $request->input('description'),
            //     "price" => $request->input('price'),
            //     "stock" => $request->input('stock'),
            //     "image" => $imagePath, // Save the file path
            // ]);

            Product::create($input);

            return redirect()->route('products.index')
                             ->with('success', 'Product created successfully.');





            // Toastr::success('Product Created successfully.');
            return redirect()->route('prodcut_management.index'); // Adjust this as needed
        } catch (Exception $e) {
            // Toastr::error('Something went wrong');
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        try {
            $product = Product::findOrFail($id);
            $product->delete();

            // Toastr::success('Product Deleted successfully.');
            return redirect()->back();
        } catch (Exception $e) {
            // Toastr::error('Error deleting product');
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
