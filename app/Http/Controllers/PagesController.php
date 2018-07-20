<?php

namespace App\Http\Controllers;

use DateTime;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;

class PagesController
{
    public function home()
    {
        $alternativeLocale = app()->getLocale() !== 'es' ? 'es' : 'en';

        return view('landing.landing', compact('alternativeLocale'));
    }

    public function locale($locale)
    {
        if ($locale === 'es') {
            session(['locale' => $locale]);
        } elseif ($locale === 'en') {
            session(['locale' => $locale]);
        }

        return redirect()->route('home');
    }

    public function contactUs(Request $request)
    {
        $name = $request->get('name', '');
        $email = $request->get('email', '');
        $phone = $request->get('phone', '');
        $subject = $request->get('subject', '');
        $content = $request->get('message', '');
        $schedule = (new DateTime('now'))->format('Y-m-d H:i:s');

        try {
            Mail::send(
                'emails.contact',
                [
                    'name'  => $name,
                    'email' => $email,
                    'phone' => $phone,
                    'subject'  => $subject,
                    'content'  => $content,
                    'schedule' => $schedule,
                ],
                function (Message $message) use ($email, $subject) {
                    $message->from($email);
                    $message->to('sales@kiwing.it', 'Kiwing Sales')
                        ->subject($subject);
                }
            );
        } catch (Exception $e) {
            logger()->error('[Failed Contact] ' . $name . ' (' . $email . ' - ' . $phone . '): ' . $content);
        }

        return 'success';
    }
}
