<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Client;
use Google\Service\Gmail;
use Google\Service\Gmail\Message;

class GmailController extends Controller
{
    public function redirectToGoogle()
    {
        $client = new Client();
        $client->setClientId(env('GMAIL_CLIENT_ID'));
        $client->setClientSecret(env('GMAIL_CLIENT_SECRET'));
        $client->setRedirectUri(env('GMAIL_REDIRECT_URI'));
        $client->addScope(Gmail::GMAIL_SEND);
        $client->setAccessType('offline');
        $client->setPrompt('select_account consent');

        $authUrl = $client->createAuthUrl();
        return redirect($authUrl);
    }

    public function handleGoogleCallback(Request $request)
    {
        $client = new Client();
        $client->setClientId(env('GMAIL_CLIENT_ID'));
        $client->setClientSecret(env('GMAIL_CLIENT_SECRET'));
        $client->setRedirectUri(env('GMAIL_REDIRECT_URI'));

        $token = $client->fetchAccessTokenWithAuthCode($request->code);

        // Save the token (e.g., in the database or session)
        session(['gmail_token' => $token]);

        return redirect('/')->with('success', 'Gmail OAuth successful!');
    }

    public function sendEmail()
    {
        $client = new Client();
        $client->setClientId(env('GMAIL_CLIENT_ID'));
        $client->setClientSecret(env('GMAIL_CLIENT_SECRET'));
        $client->setAccessToken(session('gmail_token'));

        // Refresh the token if it's expired
        if ($client->isAccessTokenExpired()) {
            $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
            session(['gmail_token' => $client->getAccessToken()]);
        }

        $service = new Gmail($client);
        $message = new Message();

        $rawMessage = "From: <your_email@gmail.com>\r\n";
        $rawMessage .= "To: <recipient@example.com>\r\n";
        $rawMessage .= "Subject: Test Email\r\n\r\n";
        $rawMessage .= "This is a test email.";

        $message->setRaw(base64_encode($rawMessage));
        $service->users_messages->send('me', $message);

        return 'Email sent!';
    }
}