@extends('emails.local')

@section('content')
    <h2>
        Hello {{ $name ?? 'Superpreneur' }},
    </h2>

    Congratulations on being selected as an Intern at ConnectUp! We were impressed with your skills and we
    believe that you will be a valuable addition to our team.
    <br>
    <br>
    Before we proceed with the formalities, we would like to request you to share your ID proof, Address proof, A
    passport-sized photograph, Your full name, and address with us. This is required to complete the onboarding process.
    <br>
    <br>
    Please note that the joining date will be finalized at a later stage, depending on the completion of the formalities and
    other requirements. However, we would like to inform you that the first week of your tenure with us will be a
    probationary or testing period. During this time, we will assess your performance and suitability for the role. If you
    meet our expectations and pass the probationary period, you will be formally onboarded to the company, and we will issue
    your offer letter.
    <br>
    <br>
    Please send us the necessary documents and information as reply to this email. We will keep you updated on the next
    steps in the process.
    <br>
    <br>
    Thank you for your cooperation, and we look forward to having you on board
    <br>
    <br>
    Happy Hustling! <br>
    <b>Team ConnectUp</b>
@endsection
