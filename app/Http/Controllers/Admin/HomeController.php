<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Payment;
use App\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /** @var User $user */
    private $user;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();
            return $next($request);
        });
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = $this->user;
        $payments = Payment::where('status', '=', 'paid');
        $paymentsTotalAmount = $payments->sum('amount');
        $paymentsCount = $payments->count();
        $registeredUsersCount = User::count();
        $enroledUsersCount = User::whereHas('payments.courses', function ($q) {
            $q->whereDate('payments.created_at', '>=', Carbon::now()->subMonth(2)->format('Y-m-d'));
        })->orWhereHas('payments.trails', function ($q) {
            $q->whereDate('payments.created_at', '>=', Carbon::now()->subMonth(3)->format('Y-m-d'));
        })
            ->groupBy('users.id')
            ->count();
        return view('home',
            compact('user', 'paymentsCount', 'paymentsTotalAmount', 'registeredUsersCount', 'enroledUsersCount'));
    }
}
