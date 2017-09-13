<?php
// 檔案位置：app/Jobs/SendMerchandiseNewsletterJob.php

namespace App\Jobs;

use App\Shop\Entity\User;
use Illuminate\Bus\Queueable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Mail;

class SendMerchandiseNewsletterJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $User;
    protected $MerchandiseCollection;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $User, Collection $MerchandiseCollection)
    {
        $this->User = $User;
        $this->MerchandiseCollection = $MerchandiseCollection;
        
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $mail_binding = [
            'User' => $this->User,
            'MerchandiseCollection' => $this->MerchandiseCollection,
        ];
        
        Mail::send(
            'email.merchandiseNewsletter',
            $mail_binding,
            function($mail) use ($mail_binding)
        {
            $mail->to($mail_binding['User']->email);
            $mail->from('kejyun@gmail.com');
            $mail->subject('Shop Laravel 最新商品電子報');
        });
    }
}
