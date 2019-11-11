<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Models\Menu;
use App\Models\SubMenu;

class CustomServiceNotification extends Notification
{
    use Queueable;
    private $request;
    private $menu;
    private $subMenu;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->request = $request;
        $menu = Menu::where('id',$request->category_id)->first();
        $subMenu = SubMenu::where('id',$request->sub_category_id)->first();
        $this->menu = $menu->name;
        $this->subMenu = $subMenu->name;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        if($this->request->deliver_time_other == null){
            return (new MailMessage)
                    ->line("Description: {$this->request->description}")
                    ->line("Category: {$this->menu}")
                    ->line("Sub Category: {$this->subMenu}")
                    ->line("Delivery Time: {$this->request->deliver_time} days")
                    ->line("Budget: ${$this->request->budget}")
                    ->action('Attachment', url("public/storage/{$this->request->attachment}"))
                    ->line('Thank you for using our application!');
        }else{
            return (new MailMessage)
                    ->line("Description: {$this->request->description}")
                    ->line("Category: {$this->menu}")
                    ->line("Sub Category: {$this->subMenu}")
                    ->line("Delivery Time: {$this->request->deliver_time_other} days")
                    ->line("Budget: ${$this->request->budget}")
                    ->action('Attachment', url("public/storage/{$this->request->attachment}"))
                    ->line('Thank you for using our application!');

        }
        
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
