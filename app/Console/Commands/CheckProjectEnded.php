<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use App\Models\Challengerpro;
use App\Models\ProjectConstuct;
use App\Notifications\ChallengerProNotify;

class CheckProjectEnded extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:project-expire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check if an project expired';

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
        $projects = ProjectConstuct::all();
        $now = Carbon::now();
        foreach ($projects as $project) {
            $date = Carbon::createFromFormat('d/m/Y H:i:s', $project->date_fin);
            if ($date->lt($now)) {
                $challs = Challengerpro::all(); // Get all users
                foreach ($challs as $chall) {
                    $chall->notify(new ChallengerProNotify($project)); // Send the notification to each user
                }
            }
        }
    }
}
