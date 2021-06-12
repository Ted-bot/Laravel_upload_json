<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class UserDataProcess implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        // $contactInfo = Storage::disk('local')->exists('challenge.json') ? json_decode(Storage::disk('local')->get('challenge.json'), true) : [];
        
        //     $chunks = array_chunk($contactInfo, 1000);

        //     foreach ($chunks[0] as $contactDetail ){

        //         $contact = new User; // assumes you have a Model called Contact
                

        //         $contact->name = $contactDetail['name'];
        //         $contact->address = $contactDetail['address'];
        //         $contact->checked = (!$contactDetail['checked'] === false) ? $contactDetail['checked'] : 'false';
        //         $contact->description = $contactDetail['description'];
        //         $contact->interest = (!$contactDetail['interest'] === null) ? $contactDetail['interest'] : 'null';
        //         $contact->date_of_birth = (strlen($contactDetail->date_of_birth) == 10)
        //         ? Carbon::createFromFormat('d/m/Y', $contactDetail->date_of_birth)
        //         : $contactDetail->date_of_birth;
                
                
        //         // (!is_null($contactDetail['date_of_birth'])) 
        //         // ? 
        //         // substr(preg_replace("([^0-9/])", "", $contactDetail['date_of_birth']), 0, 8) 
        //         // : 
        //         // new DateTime('2000-01-01');
              
        //         $contact->email = (!$contactDetail['email'] === null) ? $contactDetail['email'] : 'null';
        //         $contact->account = $contactDetail['account'];
                
        //         $sensitive_data = new Creditcard;
        //         $sensitive_data->type = $contactDetail['credit_card']['type'];
        //         $sensitive_data->number = $contactDetail['credit_card']['number'];
        //         $sensitive_data->name = $contactDetail['credit_card']['name'];
        //         $sensitive_data->expirationDate = $contactDetail['credit_card']['expirationDate'];

                
        //         $contact->save();
        //         $sensitive_data->save();
        //         $contact->creditcards()->attach($sensitive_data->id);
        //     }
    }
}
