<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\Type;

class EcommerceController extends Controller {
    
    /**
     * Display ecommerce products of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(){
        $title = "Ecommerce Products";
        $description = "Some description for the page";
        $documents = Document::all();
       // $docs_carousel = $documents->last()->get(1);
        //dd($docs_carousel);
        $cats = Categorie::all();
        return view('pages.applications.ecommerce.products',compact('cats','documents','title','description'));
    }

    /**
     * Display ecommerce product list of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function productList(){
        $title = "Ecommerce Product List";
        $description = "Some description for the page";
        return view('pages.applications.ecommerce.product_list',compact('title','description'));
    }

    /**
     * Display ecommerce product details of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function productDetail(Request $request){
        
        //dd($document);
        $document = Document::find($request->id);
        //dd($document->personnes->pivot->commentaire);
        return view('pages.applications.ecommerce.product_detail',compact('document'));
    }

    /**
     * Display ecommerce add product of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function addProduct(){
        $title = "Ecommerce Add Product";
        $description = "Some description for the page";
        $types = Type::all();
        return view('pages.applications.ecommerce.add_product',compact('types','title','description'));
    }

    public function storeProduct(Request $request){
       // dd($request->get('documenr_file'));
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'author' => 'required|max:255',
            'cover_image' => 'required|image|mimes:jpeg,png,webp,jpg,gif,svg|max:2048',
            'document_file' => 'required|mimes:pdf|max:5120',
        ]);
       //dd($validatedData);***************pourquoi pdf de grande taille nenregistre
        $document = new Document([
            'titre' => $request->get('title'),
            'description' => $request->get('content'),
            'person' => $request->get('author'),
            'type_id' => $request->get('type'),
        ]);

        // Traitement de l'upload de l'image du couvert
        if ($request->hasFile('cover_image')) {
            $coverImage = $request->file('cover_image');
            $coverImageName = time() . '_' . $coverImage->getClientOriginalName();
            $coverImage->storeAs('public/cover_images', $coverImageName);
            $document->cover_image = 'cover_images/' . $coverImageName;
        }

        // Traitement de l'upload du fichier PDF
        $documentFile = $request->file('document_file');
        $documentFileName = time() . '_' . $documentFile->getClientOriginalName();
        $documentFile->storeAs('public/document_files', $documentFileName);
        $document->document_file = 'document_files/' . $documentFileName;

        $document->save();
        
        // Création du document dans la base de données
        

        return redirect()->intended(route('ecommerce.products','en'));
    }

    /**
     * Display ecommerce cart of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function cart(){
        $title = "Ecommerce Cart";
        $description = "Some description for the page";
        return view('pages.applications.ecommerce.cart',compact('title','description'));
    }

    /**
     * Display ecommerce orders of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function orders(){
        $title = "Ecommerce Orders";
        $description = "Some description for the page";
        return view('pages.applications.ecommerce.orders',compact('title','description'));
    }

    /**
     * Display ecommerce sellers of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function sellers(){
        $title = "Ecommerce Sellers";
        $description = "Some description for the page";
        return view('pages.applications.ecommerce.sellers',compact('title','description'));
    }

    /**
     * Display ecommerce invoice of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function invoice(){
        $title = "Ecommerce Invoice";
        $description = "Some description for the page";
        return view('pages.applications.ecommerce.invoice',compact('title','description'));
    }


    public function showpdf(Request $request){

        $document = Document::find($request->id);

        $file = storage_path($document->document_file);
        //dd($file);

        // $headers = [
        //     'Content-Type' => 'application/pdf',
        //     //'Content-Disposition' => 'inline; filename="' . $document->document_file . '"',
        //     'Content-Disposition' => 'inline; '.$document->document_file,
        // ];

        // //return response()->streamDownload($file, $headers);

        // return response()->file($file, [
        //     'Content-Disposition' => 'inline; filename="'. $file .'"'
        //   ]);


        //   $file = public_path("/files/" . $nama_file);
        
        return view('pages.applications.ecommerce.afficher-pdf',compact('document'));
    }
}