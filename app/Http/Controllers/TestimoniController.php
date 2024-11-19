<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CodeReview;
use App\Models\Testimoni;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class TestimoniController extends Controller
{
    public function index(Request $request): View
    {
        $data = [
            'avgTestimoni' => round(Testimoni::avg('rating'), 2),
            'totalTestimoni' => Testimoni::count(),
            'testimoni' => Testimoni::orderBy('created_at', 'desc')->simplePaginate(10)
        ];
        return view('pages.testimoni', $data);
    }

    public function checkAccess(Request $request): RedirectResponse
    {
        $kodeReview = $request->post('kode_review');

        // Mengecek apakah kode review benar
        $trueCode = CodeReview::where([
            'code' => $kodeReview,
            'used' => 0
        ])->first();

        if (!$trueCode) {
            return back()->with('error', 'Kode akses salah!');
        }

        // Setting session untuk kode review
        $request->session()->put('code_review', $trueCode->code);

        return back();
    }

    public function storeTestimoni(Request $request): RedirectResponse
    {
        $newTesti = Validator::make(
            $request->all(),
            [
                'code_review' => ['required', Rule::exists('code_reviews', 'code')->where('used', 0)],
                'customer_name' => 'required|min:5',
                'comment' => 'required|min:6',
                'rating' => 'required|int'
            ],
            [
                'code_review' => 'Gagal menambah testimoni!',
                'customer_name.required' => 'Nama konsumen tidak boleh kosong!',
                'customer_name.min' => 'Nama konsumen minimal terdiri dari 5 huruf!',
                'comment.required' => 'Isian testimoni tidak boleh kosong!',
                'comment.min' => 'Komentar testimoni terdiri lebih dari 6 huruf!'
            ]
        )->validate();

        try {
            DB::beginTransaction();
            // Mengubah data code_review
            $code_review = CodeReview::where('code', $newTesti['code_review'])->first();
            $code_review->update(['used' => true, 'used_at' => Carbon::now()]);

            // Menghapus item code_review
            unset($newTesti['code_review']);

            // Menambahkan data testimoni
            Testimoni::create($newTesti);

            DB::commit();
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            return back()->with('error', 'Gagal menyimpan testimoni!');
        }


        // Menghapus data session
        $request->session()->forget('code_review');

        return back()->with('success', 'Terimakasih telah mengisi testimoni!');
    }
}
