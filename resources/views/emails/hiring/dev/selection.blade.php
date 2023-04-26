@extends('emails.local')

@section('content')
    <h2>
        Hello {{ $name ?? 'Superpreneur' }},
    </h2>

    We are pleased to inform you that your application at ConnectUp has been shortlisted for the next round.
    Congratulations!
    <br>
    <br>
    We would like to invite you for an interaction round with our team. This round will provide an opportunity for you to
    learn more about the company culture and for us to get to know you better.
    <br>
    <br>
    To schedule the interaction round, please click on the following <a
        href="https://calendly.com/meinhoonharsh/connectup-upcoming-mega-event-interaction-round">Calendly link</a>. Select
    a time slot that works best for you, and we'll take care of the rest.
    <br>
    <br>
    We look forward to meeting you and learning more about your experiences and qualifications.
    <br>
    <br>
    Happy Hustling! <br>
    <b>Team ConnectUp</b>
@endsection
