<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmailRequest;
use App\Models\MailSetting;
use Illuminate\Http\Request;

class EmailSettingController extends Controller
{
    public function index()
    {
        $data['dataInfo'] = MailSetting::find(1);
        $data['title'] = 'Email Setting';
        return view('backend.setting.email', $data);
    }

    public function addOrUpdateInfo(EmailRequest $request)
    {

        // dd($request->all());
        $validatedData = $request->validated();

        // Fetch the setting record or create a new one
        $dataInfo = MailSetting::find(1) ?? new MailSetting();

        // Update fields
        $dataInfo->fill($validatedData);


        // Save the settings
        if ($dataInfo->save()) {

            $path = base_path('.env');
            // dd($path);
            $searchArray = array('MAIL_DRIVER=' . env('MAIL_DRIVER') . '' ,'MAIL_HOST=' . env('MAIL_HOST') . '' , 'MAIL_PORT=' . env('MAIL_PORT') . '' , 'MAIL_USERNAME=' . env('MAIL_USERNAME') . '' , 'MAIL_PASSWORD=' . env('MAIL_PASSWORD') . '' , 'MAIL_FROM_ADDRESS=' . env('MAIL_FROM_ADDRESS') . '' , 'MAIL_FROM_NAME=' . env('MAIL_FROM_NAME') . '' , 'MAIL_ENCRYPTION=' . env('MAIL_ENCRYPTION') . '' );
            //    return $searchArray;
    
            $replaceArray = array('MAIL_DRIVER=' . $request['driver'] . '' ,'MAIL_HOST=' . $request['host'] . '' , 'MAIL_PORT=' . $request['port'] . '', 'MAIL_USERNAME=' . $request['user_name'] . '' , 'MAIL_PASSWORD=' . $request['password'] . '' , 'MAIL_FROM_ADDRESS=' . $request['sender_email']. ''  , 'MAIL_FROM_NAME=' . $request['sender_name'] . '', 'MAIL_ENCRYPTION=' . $request['encryption'] . '' );
            // return $replaceArray;
            file_put_contents($path, str_replace($searchArray, $replaceArray, file_get_contents($path)));

            return back()->with('message', 'Email Config successfully.');
        } else {
            return back()->with('message', 'Failed to update settings. Please try again.');
        }
    }

}
