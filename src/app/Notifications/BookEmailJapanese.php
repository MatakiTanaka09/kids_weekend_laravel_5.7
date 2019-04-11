<?php

namespace App\Notifications;

use App;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Lang;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class BookEmailJapanese extends Notification
{
    /**
     * The callback that should be used to build the mail message.
     *
     * @var \Closure|null
     */
    public static $toMailCallback;

    /**
     * Get the notification's channels.
     *
     * @param  mixed  $notifiable
     * @return array|string
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Build the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        if (static::$toMailCallback) {
            return call_user_func(static::$toMailCallback, $notifiable);
        }

        return (new MailMessage)
            ->subject(Lang::getFromJson('【Kidsweekend】ご予約のお知らせ'))
            ->line(Lang::getFromJson("
                kidsweekendをご利用いただきまして、ありがとうございます。\n\n
                以下の情報でご予約を承りました。
            "))
            ->action(
                Lang::getFromJson('Kidsweekendで確認する'),
                $this->turnBackUrl($notifiable)
            )
            ->line(Lang::getFromJson('もしこのメールに覚えが無い場合は破棄してください。'));
    }

    /**
     * Get the verification URL for the given notifiable.
     *
     * @param  mixed  $notifiable
     * @return string
     */
    protected function turnBackUrl()
    {
        $prefix = config('frontend.url') .config('frontend.book_confirm_url');
        return $prefix;
    }

    /**
     * Set a callback that should be used when building the notification mail message.
     *
     * @param  \Closure  $callback
     * @return void
     */
    public static function toMailUsing($callback)
    {
        static::$toMailCallback = $callback;
    }
}
