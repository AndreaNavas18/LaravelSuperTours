<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\NewCliente;
use Illuminate\Support\Facades\Hash;


class EncryptNewClientePasswords extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'NewClientes:encrypt-passwords';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Encrypts plain text passwords for all NewClientes';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $NewClientes = NewCliente::where('is_encrypted', false)->get();

        foreach ($NewClientes as $NewCliente) {
            $NewCliente->password = Hash::make($NewCliente->password);
            $NewCliente->is_encrypted = true;
            $NewCliente->save();
        }

        $this->info('All NewCliente passwords have been encrypted.');
        return 0;
    }
}
