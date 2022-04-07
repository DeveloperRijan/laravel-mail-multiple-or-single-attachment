#Mail Class
public function build()
{
    $myEmail = $this->view('emails.welcome')->subject('Welcome');
    
    //for single attachment
    $myEmail->attach(public_path("your file path of under public dir"));//single file attachment
    
    // for multiple attachment
    $attachments = [
        // first attachment file info
        'path/to/file1' => [
            'as' => 'file1.pdf',
            'mime' => 'application/pdf',
        ],

        // second attachment file info
        'path/to/file12' => [
            'as' => 'file2.pdf',
            'mime' => 'application/pdf',
        ],

        ...
    ];
    //now attach one by one multiple files to mail
    foreach ($attachments as $filePath => $fileParameters) {
        $myEmail->attach($filePath, $fileParameters);//file parameters are optional
    }

    return $myEmail;
}
