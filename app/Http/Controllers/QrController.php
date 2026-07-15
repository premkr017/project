<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrController extends Controller
{
    public function index()
    {
        return view('qr.home');
    }

    public function generate(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'mobile' => ['required', 'string', 'max:30'],
            'email' => ['required', 'email', 'max:255'],
        ]);

        $escapeVcardValue = static fn (string $value): string => str_replace(
            ['\\', ';', ',', "\r", "\n"],
            ['\\\\', '\\;', '\\,', '', ''],
            $value,
        );

        $qrData = "BEGIN:VCARD\r\nVERSION:3.0\r\n";
        $qrData .= 'FN:' . $escapeVcardValue($validated['name']) . "\r\n";
        $qrData .= 'TEL:' . $escapeVcardValue($validated['mobile']) . "\r\n";
        $qrData .= 'EMAIL:' . $escapeVcardValue($validated['email']) . "\r\nEND:VCARD";

        // SVG works without the optional Imagick PHP extension and is lossless when downloaded.
        $qrCode = base64_encode(QrCode::format('svg')->size(300)->generate($qrData));

        return back()->with('qr', $qrCode)->with('data', $validated);
    }
}
