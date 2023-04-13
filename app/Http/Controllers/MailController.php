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
                    "email": "anekantjainsagar@gmail.com",
                    "name": "Anekant jain"
                },
                {
                    "email": "rishav098kumar@gmail.com",
                    "name": "Rishav kumar"
                },
                {
                    "email": "ambuj.kumar.7903@gmail.com",
                    "name": "Ambuj Kumar "
                },
                {
                    "email": "onkardhingra99@gmail.com",
                    "name": "ONKAR DHINGRA"
                },
                {
                    "email": "jaydeepdeshpande03@outlook.com",
                    "name": "Jaydeep Deshpande"
                },
                {
                    "email": "dharnishrs38@gmail.com",
                    "name": "Dharnish R S"
                },
                {
                    "email": "nayakarun02@gmail.com",
                    "name": "Arun G Nayak"
                },
                {
                    "email": "shivamjain7744@gmail.com",
                    "name": "Shivam Jain"
                },
                {
                    "email": "saxenavaibhav101@gmail.com",
                    "name": "Vaibhav Saxena"
                },
                {
                    "email": "jainakshali18@gmail.com",
                    "name": "Akshali Jain"
                },
                {
                    "email": "depnra1@gmail.com",
                    "name": "Deepnarayan Sett"
                },
                {
                    "email": "rahulkarda2002@gmail.com",
                    "name": "Rahul Karda"
                },
                {
                    "email": "himashunarware77@gmail.com",
                    "name": "Himanshu Narware"
                },
                {
                    "email": "rajkm9111@gmail.com",
                    "name": "RAJ MALPANI"
                },
                {
                    "email": "krishishah1211@gmail.com",
                    "name": "Krishi Shah"
                },
                {
                    "email": "shawaditya382@gmail.com",
                    "name": "Aditya Shaw"
                },
                {
                    "email": "addy2354@gmail.com",
                    "name": "Adeel Javed"
                },
                {
                    "email": "adityam874@gmail.com",
                    "name": "Aditya Mishra"
                },
                {
                    "email": "amanmishra151202@gmail.com",
                    "name": "Aman Mishra "
                },
                {
                    "email": "goyalkirtika.07@gmail.com",
                    "name": "Kirtika goyal"
                },
                {
                    "email": "its.adarshjaiss@gmail.com",
                    "name": "Adarsh jaiswal"
                },
                {
                    "email": "arsaluddin134@gmail.com",
                    "name": "Arsal uddin"
                },
                {
                    "email": "atreo973@gmail.com",
                    "name": "Atreo Pramanick"
                },
                {
                    "email": "prempandey812743@gmail.com",
                    "name": "Prem Prakash Pandey"
                },
                {
                    "email": "sambitm033@gmail.com",
                    "name": "Sambit Mazumder"
                },
                {
                    "email": "jaywardhan2020@gmail.com",
                    "name": "Jay Wardhan Mourya"
                },
                {
                    "email": "vegaanine@gmail.com",
                    "name": "Akshay Jain"
                },
                {
                    "email": "rajshree2003verma@gmail.com",
                    "name": "Rajshree Verma"
                },
                {
                    "email": "vaibhavguptawork01@gmail.com",
                    "name": "Vaibhav Gupta "
                },
                {
                    "email": "vaibhavguptawork01@gmail.com",
                    "name": "Vaibhav Gupta "
                },
                {
                    "email": "huzaifahvictor785@gmail.com",
                    "name": "Abu Bakar"
                },
                {
                    "email": "zanjabilabano@gmail.com",
                    "name": "Zanjabila Bano "
                },
                {
                    "email": "krishagrawal343@gmail.com",
                    "name": "Sneh Agrawal"
                },
                {
                    "email": "saib9564@gmail.com",
                    "name": "Saib"
                },
                {
                    "email": "vedantsrivastava42@gmail.com",
                    "name": "Vedant Srivastava "
                },
                {
                    "email": "gutkarshbalbir23@gmail.com",
                    "name": "Utkarsh Gupta"
                },
                {
                    "email": "psrcofficial10@gmail.com",
                    "name": "Pradeepto Sarkar"
                },
                {
                    "email": "prathameshbhor000@gmail.com",
                    "name": "Prathamesh Santosh Bhor"
                },
                {
                    "email": "sstymrj@gmail.com",
                    "name": "SATYAM RAJ"
                },
                {
                    "email": "kirtisaraf247@gmail.com",
                    "name": "Kirti Saraf"
                },
                {
                    "email": "email.priyanshu.events@gmail.com",
                    "name": "Priyanshu Tandon"
                },
                {
                    "email": "harshsoni.softvisionbca@gmail.com",
                    "name": "Harsh Soni"
                },
                {
                    "email": "amitsinghbadram@gmail.com",
                    "name": "Amit Kumar "
                },
                {
                    "email": "ayushgalphat@gmail.com",
                    "name": "Ayush Galphat "
                },
                {
                    "email": "diyabansal65@gmail.com",
                    "name": "Diya Bansal"
                },
                {
                    "email": "hargunbit1001@gmail.com",
                    "name": "Hargun Singh"
                },
                {
                    "email": "synosuid69@gmail.com",
                    "name": "deepanshu barve"
                },
                {
                    "email": "ameeshapatel105@gmail.com",
                    "name": "Ameesha Patel"
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
                $message->subject("[Final Round] Schedule your Interaction Call");
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
