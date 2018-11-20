@extends('main')

@section('title')
SheCode
@endsection

@section('before-content')
<section class="hero is-medium is-primary is-bold">
  <div class="hero-body">
    <div class="container has-text-centered">
      <img class="is-hidden-mobile" src="/images/shecodeWhite.png" alt="SheCode" width="50%">
      <h2 class="subtitle">
        Saturday December 1st, 2018<br>
	<br>
	Shecode is a one day educational experience to introduce young women to computer science and problem solving
      </h2>
    </div>
  </div>
</section>
@endsection

@section('content')
<div class="section">
  <div class="columns">
    <div class="column">
      <h1 class="title has-text-centered">Sorry, registion is now closed!</h1>
      <div class="content is-medium">
        If you still need a copy of the permission form the can be found:
        <br>
        <br>
        <b>Waiver for participant under 18-years of age: </b><br>
        <a class="has-text-centered" href="/2018SheCodeMinorForm.pdf" target="_blank">Waiver for participant under 18-years of age</a>
        <br>
        <br>
        <b>If the participant is over 18 years of age: </b><br>
        <a class="has-text-centered" href="/2018SheCodeAdultForm.pdf" target="_blank">Waiver for participant over 18-years of age</a>
      </div>
    </div>
  </div>


<div class="section">
  <div class="columns">
    <div class="column">
      <h1 class="title has-text-centered">What is SheCode?</h1>
      <div class="content is-medium">
The field of Computer Science is an ever-growing field with growing numbers and variety of career opportunities. Even careers not normally associated with computing are increasingly making use of computing and technology. For a variety of reasons, women tend to participate in the study of computing and computing careers less than men.

At SheCode we aim to provide a way to get young women interested in the field before they even step foot on a college campus. The SheCode event invites female middle school and high school students to SIUE to participate in a programming project and learn more about computing. We will bring professional women in computing careers to SIUE to mentor the participants.

By providing the mentorship and experience to get started in computing we hope SheCode will give young women and chance to experience Computer Science.
      </div>
    </div>
  </div>
  <div class="columns">
    <div class="column">
  <h1 class="title has-text-centered">Why should I go?</h1>
      <div class="content is-medium">
        <p>Whether you're a master programmer or have never touched a computer you'll come away from SheCode with a new appreciation for the field of Computer Science. At SheCode you'll be working closely with a team of your peers and a mentor to create an app. Each of the mentors is an SIUE Computer Science Alumnae and a professional in the technology field. At the end of the day you will walk away with an app on your phone that you created from scratch. Show your friends and family what you have learned and continue to do it.</p>
      </div>
    </div>
    <div class="column">
      <h1 class="title has-text-centered">Why should my daughter go?</h1>
      <div class="content is-medium">
        <p>The field of Computer Science is an ever-growing field with limitless opportunities. However, there is great lack of women. This creates the perfect opportunity for women seeking to enter Computer Science but they still need the skills. At SheCode we aim to provide a way to get young women interested in the field before they even step foot on a college campus. By providing the mentorship and experience to get started we hope SheCode will give your daughter the push to consider Computer Science in the future.</p>
      </div>
    </div>
  </div>
</div>

<div class="section">
  <h1 class="title has-text-centered">Agenda</h1>
  <div class="content">
    <table class="table is-narrow is-fullwidth">
      <thead>
        <tr>
          <th>Start Time</th>
          <th>Description</th>
        </tr>

        <!--10 am check in

10:15 form teams (edited)
10:30 welcome/intro (edited)

Taylor Dowdy [5:38 PM]
10:45 start working on projects-->

      </thead>
      <tb>
        <tr>
          <td>10:00 am</td>
          <td>Check in begins</td>
        </tr>
        <tr>
          <td>10:15 am</td>
          <td>Form teams</td>
        </tr>
        <tr>
          <td>10:30 am</td>
          <td>Welcome/Introduction</td>
        </tr>
        <tr>
          <td>10:45 am</td>
          <td>Begin working on project</td>
        </tr>
        <tr>
          <td>12:15 pm</td>
          <td>Lunch on us</td>
        </tr>
        <tr>
          <td>12:45 pm</td>
          <td>Resume working on projects</td>
        </tr>
        <tr>
          <td>2:15 pm</td>
          <td>Closing ceremony begins</td>
        </tr>
        <tr>
          <td>2:30 pm</td>
          <td>Event ends</td>
        </tr>
      </tb>
    </table>
  </div>
</div>

@if(env('JOIN_ENABLE', false))
<div class="section">
  <h1 class="title has-text-centered">Click here to register</h1>
  <div class="columns is-mobile is-centered">
        <div class="column is-half-desktop is-narrow has-text-centered">
            <a class="button is-primary is-large" href="/register">Register Now!</a>
        </div>
      </div>
</div>
@endif
@endsection
