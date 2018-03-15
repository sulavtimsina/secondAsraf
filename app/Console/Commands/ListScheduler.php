<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Console\Scheduling\Schedule;

class ListScheduler extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'schedule:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List all scheduled commands in the task scheduler';

    /**
     * @var Schedule
     */
    protected $schedule;

    /**
     * Create a new command instance.
     *
     * @param Schedule $schedule
     */
    public function __construct(Schedule $schedule)
    {
        parent::__construct();

        $this->schedule = $schedule;
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['cron', null, InputOption::VALUE_NONE, 'Show output cron style', null],
        ];
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $events = $this->schedule->events();
        if (count($events) == 0) {
            $this->info('No tasks scheduled');

            return;
        }
        if ($this->option('cron')) {
            $this->outputCronStyle($events);

            return;
        }
        $this->outputTableStyle($events);
    }

    /**
     * @param $events
     */
    protected function outputCronStyle($events)
    {
        /** @var Event $event */
        foreach ($events as $event) {
            $this->line($event->getExpression().' '.$event->buildCommand());
        }
    }

    /**
     * @param $events
     */
    protected function outputTableStyle($events)
    {
        $rows = [];
        /** @var Event $event */
        foreach ($events as $event) {
            $command = $event->buildCommand();
            $desc = $event->getSummaryForDisplay();
            // if php binary is present in string, it is a the actual command and not a description
            if (strpos($desc, PHP_BINARY) !== false) {
                $desc = '';
            }
            // remove php binary and std output from the command string
            if ($this->output->getVerbosity() == OutputInterface::VERBOSITY_NORMAL) {
                $command = substr($command, 0, strpos($command, '>'));
                $command = trim(str_replace([PHP_BINARY, 'artisan', '\'', '"'], '', $command));
            }
            $rows[] = [
                'expression'  => $event->getExpression(),
                'command'     => $command,
                'description' => $desc,
            ];
        }
        $headers = array_keys($rows[0]);
        $this->table($headers, $rows);
    }
}
