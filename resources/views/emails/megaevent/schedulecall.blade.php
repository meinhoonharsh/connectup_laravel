@extends('emails.local')

@section('content')
    <h2>
        Hello {{ $name ?? 'Superpreneur' }},
    </h2>
    We're excited to get to know you better and learn about your skills and interests.
    <br>
    To help us better understand your background and experience, we'd like to schedule an interaction round with you. This
    will give us a chance to learn more about you and discuss your role and responsibilities in the team.
    <br>
    <br>
    To schedule a meeting, please use the following <a
        href="https://calendly.com/meinhoonharsh/connectup-upcoming-mega-event-interaction-round">Calendly Link</a>
    <br>
    <br>
    We look forward to speaking with you soon and potentially welcoming you to the ConnectUp Mega Event team!
    <br>
    <br>
    Happy Hustling! <br>
    <b>Team ConnectUp</b>
@endsection
