<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Customers;
use PDF;

class CustomerController extends Controller
{
    //
    public function index(Request $request)
    {
        $awal = $request->awal;
        $akhir = $request->akhir;
        if(empty($awal) && empty($akhir)){
            $customer = Customers::paginate(10);
            return view('customer/index',['customer' => $customer]);
        }else{

        }
    }
    public function cari(Request $request)
    {
        $awal = $request->awal. " 00:00:00";
        $akhir = $request->akhir." 23:59:59";

        if(!empty($request->awal) && !empty($request->akhir)){
            $customer =Customers::whereBetween('tanggal_registrasi', [$awal, $akhir])->paginate(10);
        }else{
            $customer = Customers::paginate(10);
        }
        return view('customer/index',['customer' => $customer]);
      
    }
    public function tambah()
    {
        return view('customer/tambah');
    
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'telephone' => 'required'
        ]);
        Customers::insert([
            'nama' => $request->nama,
            'nomor_telephone' => $request->telephone,
            'alamat' => $request->alamat,
            'alamat' => $request->alamat
        ]);
        return redirect('customer/index');
    
    }
    public function edit($id)
    {

        $customer = Customers::where('id',$id)->get();
        return view('customer/edit',['customer' => $customer]);
    
    }
    public function update(Request $request)
    {

        $this->validate($request,[
            'nama' => 'required',
            'telephone' => 'required'
        ]);
        Customers::where('id',$request->id)->update([
            'nama' => $request->nama,
            'nomor_telephone' => $request->telephone,
            'alamat' => $request->alamat,
            'tanggal_registrasi' => $request->tanggal
        ]);
        return redirect('customer/index');
    }
    public function hapus($id)
    {
        Customers::where('id',$id)->delete();
        return response()->json([
            'message' => '200',
            'alert-type' => 'success'
            
        ]);
    }
    public function cetak_pdf()
    {
    
    	$customer = Customers::get();
        $pdf = PDF::loadview('customer/output/cek_pdf',['customer'=>$customer]);
        return $pdf->download('customer/output/laporan-companies-pdf');
    }
}
