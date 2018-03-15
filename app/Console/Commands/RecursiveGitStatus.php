<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RecursiveGitStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'git:status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Recursive git status of all composer packages installed as source';

    /**
     * Create a new command instance.
     *
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $repos = [];
        exec('find . -type d -name .git | sed -e "s/\.git//"', $repos);
        foreach ($repos as $repo) {
            $status = shell_exec("cd $repo && git status");
            if (false == strpos($status, 'nothing to commit, working tree clean')) {
                echo "$repo\n".str_repeat('-', strlen($repo))."\n$status\n\n";
            }
        }
    }
}
