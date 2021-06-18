<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Note;

class EmailNoti extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'noti:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Email Notification for My Notes';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $noties = Note::where('isnoti', 1)->get();
        foreach($noties as $note)
        {
            $currentTime = Carbon::now($note->user->timezone);
            $datetime = Carbon::parse($auction->datetime);
            $timediff = strtotime($datetime)- strtotime($currentTime);
            if( $timediff < 600 && $timediff > 0 && $note->isnoti == 1){
                $details = [
                    'title' => 'From Thetradingbuddy.com',
                    'user' => $note->user->firstname,
                    'title' => $note->title,
                    'description' => $note->description,
                    'time' => $note->datetime,
                    'image' => $note->image
                ];
                Mail::to($note->user->email)->send(new ReminderMail($details));
                Log::info($currentTime.'-> Message reminder sent to '.$user->name);
                $note->isnoti = 2;
                $note->save();
            }
        }
        $this->info('Successfully sent reminder to everyone.');
    }
}
