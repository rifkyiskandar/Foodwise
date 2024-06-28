<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Food;
use League\Csv\Reader;

class ImportFoods extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:foods {file}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import foods data from CSV file';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $file = $this->argument('file');

        // Validate if file exists
        if (!file_exists($file) || !is_readable($file)) {
            $this->error('File does not exist or is not readable.');
            return 1;
        }

        // Read CSV file
        $csv = Reader::createFromPath($file, 'r');
        $csv->setHeaderOffset(0); // Set the header offset
        $records = $csv->getRecords();

        foreach ($records as $record) {
            // Insert data into foods table
            Food::create([
                'name' => $record['Name'],
                'description' => '', // Set description as empty
                'carbohydrates' => $record['Data.Carbohydrate'],
                'protein' => $record['Data.Protein'],
                'fat' => $record['Data.Fat.Total Lipid'],
                'image_url' => '' // Set image_url as empty
            ]);
        }

        $this->info('Foods data imported successfully.');
        return 0;
    }
}
