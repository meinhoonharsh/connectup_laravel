<?php

namespace App\Http\Controllers;

use Mail;

class MailController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isSuperAdmin');
    }
    //
    public function teamjoin()
    {
        $usersjson = '[
            {
                "email": "kotadiya1015meet@gmail.com",
                "name": "Meet Kotadiya "
            },
            {
                "email": "cbablu30@gmail.com",
                "name": "Bablu Chaudhary "
            },
            {
                "email": "paalrahul2001@gmail.com",
                "name": "Rahul Pal"
            },
            {
                "email": "sagarporwal8966@gmail.com",
                "name": "Sagar porwal "
            },
            {
                "email": "pawan7628sanjitkumar@gmail.com",
                "name": "Pawan kumar "
            },
            {
                "email": "sourabhnamdev530@gmail.com",
                "name": "Sourabh Namdev "
            },
            {
                "email": "nayans0512@gmail.com",
                "name": "Amandeep Nayan Singh"
            },
            {
                "email": "ankitpatel162003@gmail.com",
                "name": "Ankit Kumar Patel"
            },
            {
                "email": "aaryanpatel683@gmail.com",
                "name": "Aaryan Patel"
            },
            {
                "email": "laxmiputrabirajdar1515@gmail.com",
                "name": "Laxmiputra Birajdar"
            },
            {
                "email": "bgrathore2002@gmail.com",
                "name": "Govind Kumar rathore "
            },
            {
                "email": "manojprajapati9984@gmail.com",
                "name": "Manoj Prajapati"
            },
            {
                "email": "akhildeshmukh69@gmail.com",
                "name": "Akhil Deshmukh "
            },
            {
                "email": "dasdikshita929@gmail.com",
                "name": "Dikshita Das "
            },
            {
                "email": "vishwakarmaayushi504@gmail.com",
                "name": "Ayushi Vishwakarma "
            },
            {
                "email": "harshprogrammer782@gmail.com",
                "name": "Harsh Vishwakarma"
            }
        ]';

        // $usersjson = '[
        //     {
        //         "email": "harshprogrammer782@gmail.com",
        //         "name": "Harsh Vishwakarma"
        //     }
        // ]';

        $users = json_decode($usersjson, true);
        // return $users;

        foreach ($users as $user) {
            $data = [
                'name' => $user['name'],
                'email' => $user['email'],
            ];
            // $data = [];
            Mail::send('emails.megaevent.schedulecall', $data, function ($message) use ($data) {
                $message->from('connectup.in@gmail.com', 'Team ConnectUp');
                $message->to($data['email'], $data['name']);
                $message->subject("Congratulations!!! [Final Round] Schedule your Interaction Call");
                // $message->subject("Time to shine: Complete Round II | Web Developer @ConnectUp");
                // $message->subject("Congratulations!!! Your application has been shortlisted for Round-I | Graphic Designer @ConnectUp");
                // $message->subject("[Action Required] Complete the Round-1 Test by deadline");
                // $message->subject(" [Reminder] Clock is Ticking: Submit your Web Development Round-2 Task ");
                // $message->subject(" [Update] Flexible deadline for Round - II | Web Developer @ConnectUp");

            });

            echo "Mail Sent to " . $user['name'] . " <" . $user['email'] . "> <BR>";
        }

        return 'Mail Sent';

    }
}
