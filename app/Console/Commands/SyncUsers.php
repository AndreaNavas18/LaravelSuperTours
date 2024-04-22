<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SyncUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:sync-users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync users from clientes and clientes2 tables to users_clients table';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try {
        // Consulta para obtener registros únicos de clientes y clientes2
        $uniqueUsers = DB::select("
            SELECT * FROM (
                SELECT *, ROW_NUMBER() OVER (PARTITION BY username ORDER BY id DESC) AS rn
                FROM (
                    SELECT * FROM clientes
                    UNION ALL
                    SELECT * FROM clientes2
                ) AS combined
            ) AS ranked
            WHERE rn = 1
        ");

        // Iterar sobre los resultados y guardarlos en users_clients
        foreach ($uniqueUsers as $user) {
            DB::table('users_clients')->insert((array) $user);
        }

        $this->info('Users synchronized successfully!');
    }catch (\Exception $e) {
        // Capturar y registrar la excepción
        $this->error('An error occurred while synchronizing users: ' . $e->getMessage());
        // Opcional: registrar la excepción en los logs de Laravel
        Log::error('Error while synchronizing users: ' . $e->getMessage());
    }
    }
}