<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Settings;
use App\Models\Plans;
use App\Models\Faq;
use App\Models\Testimony;
use App\Models\Deposit;
use App\Models\Withdrawal;
use App\Models\TermsPrivacy;
use Illuminate\Support\Facades\DB;
use App\Mail\NewNotification;
use Illuminate\Support\Facades\Mail;

class HomePageController extends Controller
{
    private function getSettings()
    {
        return Settings::where('id', '=', '1')->first() ?? (object)[
            'site_name' => 'Flutran Global Bank',
            'site_title' => 'Personal & Commercial Banking',
            'logo' => '',
            'favicon' => '',
            'contact_email' => 'support@flutranglobal.com',
            'site_address' => '',
        ];
    }

    public function index()
    {
        $settings = $this->getSettings();
        $total_deposits = Deposit::where('status', 'processed')->sum('amount');
        $total_withdrawals = Withdrawal::where('status', 'processed')->sum('amount');

        return view('home.index', [
            'settings' => $settings,
            'total_users' => User::count(),
            'plans' => Plans::all(),
            'total_deposits' => $total_deposits,
            'total_withdrawals' => $total_withdrawals,
            'faqs' => Faq::orderBy('id', 'desc')->get(),
            'test' => Testimony::orderBy('id', 'desc')->get(),
            'withdrawals' => Withdrawal::orderBy('id', 'DESC')->take(7)->get(),
            'deposits' => Deposit::orderBy('id', 'DESC')->take(7)->get(),
            'title' => $settings->site_title ?? 'Home',
            'mplans' => Plans::where('type', 'Main')->get(),
            'pplans' => Plans::where('type', 'Promo')->get(),
        ]);
    }

    public function about()
    {
        $settings = $this->getSettings();
        return view('home.about', [
            'settings' => $settings,
            'title' => 'About Us - ' . ($settings->site_name ?? 'Flutran Global'),
        ]);
    }

    public function accounts()
    {
        $settings = $this->getSettings();
        return view('home.accounts', [
            'settings' => $settings,
            'title' => 'Chequing & Savings Accounts',
        ]);
    }

    public function creditCards()
    {
        $settings = $this->getSettings();
        return view('home.credit-cards', [
            'settings' => $settings,
            'title' => 'Credit Cards & Rewards',
        ]);
    }

    public function cards()
    {
        return $this->creditCards();
    }

    public function mortgages()
    {
        $settings = $this->getSettings();
        return view('home.mortgages', [
            'settings' => $settings,
            'title' => 'Mortgages & Home Financing',
        ]);
    }

    public function loans()
    {
        $settings = $this->getSettings();
        return view('home.loans', [
            'settings' => $settings,
            'title' => 'Personal & Business Loans',
        ]);
    }

    public function investments()
    {
        $settings = $this->getSettings();
        return view('home.investments', [
            'settings' => $settings,
            'plans' => Plans::all(),
            'mplans' => Plans::where('type', 'Main')->get(),
            'pplans' => Plans::where('type', 'Promo')->get(),
            'title' => 'Investments & Wealth Management',
        ]);
    }

    public function business()
    {
        $settings = $this->getSettings();
        return view('home.business', [
            'settings' => $settings,
            'title' => 'Small Business Banking',
        ]);
    }

    public function commercial()
    {
        $settings = $this->getSettings();
        return view('home.commercial', [
            'settings' => $settings,
            'title' => 'Commercial & Corporate Banking',
        ]);
    }

    public function digitalBanking()
    {
        $settings = $this->getSettings();
        return view('home.digital-banking', [
            'settings' => $settings,
            'title' => 'Digital & Online Banking',
        ]);
    }

    public function rates()
    {
        $settings = $this->getSettings();
        return view('home.rates', [
            'settings' => $settings,
            'title' => 'Interest Rates & Foreign Exchange',
        ]);
    }

    public function calculators()
    {
        $settings = $this->getSettings();
        return view('home.calculators', [
            'settings' => $settings,
            'title' => 'Financial Calculators',
        ]);
    }

    public function locations()
    {
        $settings = $this->getSettings();
        return view('home.locations', [
            'settings' => $settings,
            'title' => 'Find a Branch or ATM',
        ]);
    }

    public function rewards()
    {
        $settings = $this->getSettings();
        return view('home.rewards', [
            'settings' => $settings,
            'title' => 'Avion & Banking Rewards',
        ]);
    }

    public function security()
    {
        $settings = $this->getSettings();
        return view('home.security', [
            'settings' => $settings,
            'title' => '100% Security Guarantee & Protection',
        ]);
    }

    public function advice()
    {
        $settings = $this->getSettings();
        return view('home.advice', [
            'settings' => $settings,
            'title' => 'Financial Advice & Insights',
        ]);
    }

    public function help()
    {
        $settings = $this->getSettings();
        return view('home.help', [
            'settings' => $settings,
            'faqs' => Faq::orderBy('id', 'desc')->get(),
            'title' => 'Help Centre & FAQs',
        ]);
    }

    public function faq()
    {
        return $this->help();
    }

    public function contact()
    {
        $settings = $this->getSettings();
        return view('home.contact', [
            'settings' => $settings,
            'title' => 'Contact Us & Appointment Booking',
        ]);
    }

    public function careers()
    {
        $settings = $this->getSettings();
        return view('home.careers', [
            'settings' => $settings,
            'title' => 'Careers & Culture',
        ]);
    }

    public function newsroom()
    {
        $settings = $this->getSettings();
        return view('home.newsroom', [
            'settings' => $settings,
            'title' => 'Newsroom & Media',
        ]);
    }

    public function investors()
    {
        $settings = $this->getSettings();
        return view('home.investors', [
            'settings' => $settings,
            'title' => 'Investor Relations',
        ]);
    }

    public function accessibility()
    {
        $settings = $this->getSettings();
        return view('home.accessibility', [
            'settings' => $settings,
            'title' => 'Accessibility Commitment',
        ]);
    }

    public function privacy()
    {
        $settings = $this->getSettings();
        return view('home.privacy', [
            'settings' => $settings,
            'title' => 'Privacy Policy & Protection',
        ]);
    }

    public function terms()
    {
        $settings = $this->getSettings();
        return view('home.terms', [
            'settings' => $settings,
            'title' => 'Terms of Service & Agreements',
        ]);
    }

    public function sendMoney()
    {
        $settings = $this->getSettings();
        return view('home.send-money', [
            'settings' => $settings,
            'title' => 'Send Money Internationally & Locally',
        ]);
    }

    public function services()
    {
        $settings = $this->getSettings();
        return view('home.services', [
            'settings' => $settings,
            'title' => 'Banking Services Directory',
        ]);
    }

    public function alerts()
    {
        $settings = $this->getSettings();
        return view('home.alerts', [
            'settings' => $settings,
            'title' => 'Account & Security Alerts',
        ]);
    }

    public function apps()
    {
        $settings = $this->getSettings();
        return view('home.apps', [
            'settings' => $settings,
            'title' => 'Mobile Banking Application',
        ]);
    }

    public function chart()
    {
        $settings = $this->getSettings();
        return view('home.chart', [
            'settings' => $settings,
            'title' => 'Live Market & Exchange Rates',
        ]);
    }

    public function verify(Request $request)
    {
        $n1 = rand(0, 9);
        $n2 = rand(0, 9);
        $n3 = rand(0, 9);
        $n4 = rand(0, 9);
        $n5 = rand(0, 9);
        $n6 = rand(0, 9);

        $captcha = "$n1$n2$n3$n4$n5$n6";
        $request->session()->put('code', $captcha);

        return view('home.verify', [
            'captcha' => $captcha,
            'title' => 'Verify Code',
            'settings' => $this->getSettings(),
        ]);
    }

    public function codeverify(Request $request)
    {
        $code = $request->session()->get('code');
        if ($code == $request->code) {
            return redirect()->route('register');
        }

        return redirect()->back()->with('error', 'Invalid Code Supplied');
    }

    public function homesendcontact(Request $request)
    {
        $settings = $this->getSettings();
        $message = substr(wordwrap($request['message'] ?? '', 70), 0, 350);
        $subject = ($request->subject ?? 'Contact Message') . ", my email: " . ($request->email ?? '');

        try {
            if (!empty($settings->contact_email)) {
                Mail::to($settings->contact_email)->send(new NewNotification($message, $subject, 'Admin'));
            }
        } catch (\Exception $e) {
            // Log or fallback smoothly
        }

        return redirect()->back()->with('success', 'Your message was sent successfully! An advisor will reach out shortly.');
    }

    public function enquiryfront(Request $request)
    {
        if ($request->captcha !== $request->captcha_confirmation) {
            return back()->with('error', 'Captcha does not match. Please try again.');
        }

        return $this->homesendcontact($request);
    }
}
