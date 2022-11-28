<?php

namespace App\Http\Controllers;

use App\Models\Receipt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PDF;

class HomeController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('guest')->except('logout');
//    }

    public function login(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect()->intended('/');
        } else {
            return redirect()->route('login.form')->with('fail', 'Email hoặc mật khẩu không chính xác');
        }
    }

    protected function logout()
    {
        Auth::logout();
        return redirect(route('login.form'));
    }

    public function store (Request $request) {
        $idProduct = $request->input('product');
        $product = DB::table('products')->find($idProduct);
        $random = random_int(0, 99999);
        $receipt = new Receipt();
        $receipt->code = $random;
        $receipt->name = 'HD' . $random;
        $receipt->created_by = Auth::user()->name;
        $receipt->money = $product->price;
        $receipt->product_id = $idProduct;

        $receipt->save();

        return redirect()->route('index');

    }

    public function index() {
        $receipts = Receipt::get();
        $products = DB::table('products')->get();

        return view('welcome')->with([
            'receipts' => $receipts,
            'products' => $products
        ]);
    }

    public function export(Request $request, $id) {
        $receipt = Receipt::find($id);
        $product = DB::table('products')->find($receipt->product_id);

        $data['receipt'] = $receipt;
        $data['receipt'] = $product;
//        $pdf = PDF::loadView('tcpdf', $data);
//        return $pdf->download('myPDF.pdf');

        $certificate = 'file://'.base_path().'/public/tcpdf.crt';
        $info = array(
            'Name' => 'TCPDF',
            'Location' => 'Xuất bởi '. Auth::user()->name,
            'Reason' => 'Hóa đơn '. $receipt->code,
            'ContactInfo' => 'http://www.tcpdf.org',
        );

        PDF::setSignature($certificate, $certificate, 'tcpdfdemo', '', 2, $info);
        PDF::SetFont('helvetica', '', 12);
        PDF::SetTitle('Hóa đơn '. $receipt->code);
        PDF::AddPage();

        $text = view('tcpdf');
        PDF::writeHTML($text, true, 0, true, 0);
//        PDF::Image('tcpdf.png', 180, 60, 15, 15, 'PNG');

        PDF::setSignatureAppearance(180, 60, 15, 15);

        PDF::Output(public_path('hello_world.pdf'), 'F');

        PDF::reset();


    }
}
