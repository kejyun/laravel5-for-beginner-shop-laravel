<?php
// 檔案位置：app/Jobs/SendSignUpMailJob.php
namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Mail;

class SendSignUpMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $mail_binding;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($mail_binding)
    {
        $this->mail_binding = $mail_binding;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $mail_binding = $this->mail_binding;
        
        Mail::send(
            'email.signUpEmailNotification',
            $mail_binding,
            function($mail) use ($mail_binding)
        {
            $mail->to($mail_binding['email']);
            $mail->from('kejyun@gmail.com');
            $mail->subject('恭喜註冊 Shop Laravel 成功');
        });
    }
}
