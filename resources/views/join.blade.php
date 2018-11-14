@extends('main')
@section('title') SheCode @endsection
@section('before-content')
@endsection @section('content')
<div class="section">
  <h1 class="title has-text-centered">Register Now</h1>
  <div class="columns is-mobile is-centered">
    <div class="column is-two-thirds-desktop">
    <p>SheCode will be on December 1st 2018, starting at 10:00 am and ending at 2:30 pm in the <a href="https://goo.gl/maps/y6jrS4WREQ72">SIUE Engineering
      Building</a>.
      All participants will need a permission form signed by a parent or guardian at the start of SheCode.</p>
      <a class="has-text-centered" href="/2018SheCodeMinorForm.pdf" target="_blank">Waiver for participant under 18-years of age</a>
      <br>
      <br>
      <p>If the participant is over 18 years of age, this form must be filled out and brought with you or uploaded below.</p>
        <a class="has-text-centered" href="/2018SheCodeAdultForm.pdf" target="_blank">Waiver for participant over 18-years of age</a>
    </div>
  </div>
</div>

<div class="columns" id="forms">
  <div class="column is-half is-offset-one-quarter">
    @if ($errors->any())
    <div class="content has-text-danger" id="errors-box">
      <ul id="errors-list" class="">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
@endif
    <form action="/join" class="" method="POST" enctype="multipart/form-data" id="form">
      {{ csrf_field() }}
      <!-- First Name Field -->
      <div class="field">
        <label class="label">Name</label>
        <div class="control">
          <input id="name" class="input" type="text" placeholder="First Name" name="name" onchange="hideErrors()" required>
        </div>
      </div>
      <!-- END First Name Field -->

      <!-- Last Name Field -->
      <div class="field">
        <label class="label">Last</label>
        <div class="control">
          <input id="last" class="input" type="text" placeholder="Last Name" name="last" onchange="hideErrors()" required>
        </div>
      </div>
      <!-- END Last Name Field -->

      <!-- Email Field -->
      <div class="field">
        <label class="label">Email</label>
        <p class="control has-icons-left">
          <input id="email" class="input" type="email" placeholder="Email" name="email" onchange="hideErrors()" required>
          <span class="icon is-small is-left">
        <i class="fa fa-envelope"></i>
      </span>
        </p>
      </div>
      <!-- END Email Field -->

      <!-- Guardian First Name Field -->
      <div class="field">
        <label class="label">Parent / Guardian First Name</label>
        <div class="control">
          <input id="guardianFirst" class="input" type="text" placeholder="Parent or Guardian First Name" name="guardianFirst" onchange="hideErrors()" required>
        </div>
      </div>
      <!-- END Guardian First Name Field -->

      <!-- Guardian Last Name Field -->
      <div class="field">
        <label class="label">Parent / Guardian Last Name</label>
        <div class="control">
          <input id="guardianLast" class="input" type="text" placeholder="Parent or Guardian Last Name" name="guardianLast" onchange="hideErrors()" required>
        </div>
      </div>
      <!-- END Guardian Last Name Field -->

      <!-- Guardian Phone Number -->
      <div class="field">
        <label class="label">Parent / Guardian Phone Number</label>
        <p class="control has-icons-left">
          <input id="guardianNumber" class="input" type="tel" placeholder="555-555-5555" name="guardianNumber" onchange="hideErrors()" required>
          <span class="icon is-small is-left">
        <i class="fa fa-phone" aria-hidden="true"></i>
      </span>
        </p>
      </div>
      <!-- END Guardian Phone Number -->

      <!-- Allergies Field -->
      <div class="field">
        <label class="label">Food Allergies</label>
        <div class="control">
          <textarea id="allergies" class="textarea" rows="5" placeholder="List All Allergies" name="allergies" onchange="hideErrors()"></textarea>
        </div>
      </div>
      <!-- END Allergies Field -->

      <!-- T-Shirt Size Field -->
      <div class="field">
        <label class="label">T-shirt Size</label>
        <p>
        <div class="control">
	  <select class="input" class="control" name="shirts" onchange="hideErrors()">
	    <option value="xs">XS</option>
	    <option value="s">S</option>
	    <option selected="selected" value="m">M</option>
	    <option value="l">L</option>
	    <option value="xl">XL</option>
	  </select>
          <span class="icon is-small is-left">
	</div>
        </p>
      </div>
      <!-- END T-Shirt Size Field -->

      <!-- Permission Form Field -->
      <div class="field">
        <label class="label">Upload completed waiver form (optional)</label>
        <label class="label">Please use .pdf or .doc format files</label>
        <label class="label">Images should be sent to <a href="mailto:she-code@siue.edu">she-code@siue.edu</a>
        <div class="file has-name">
          <label class="file-label">
            <input id="file" class="file-input" type="file" onchange="getFileName(this.files)" name="doc">
            <span class="file-cta">
              <span class="file-icon">
                <i class="fa fa-upload"></i>
              </span>
              <span class="file-label">
                Choose a file…
              </span>
            </span>
            <span class="file-name" id="filename">
            </span>
          </label>
        </div>
      </div>
      <!-- END Permission Form Field -->

      <div class="field is-grouped is-grouped-centered">
        <div class="control">
          <a href="/" class="button is-light">Cancel</a>
        </div>
        <div class="control">
          <button type="submit" class="button is-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection @section('javascript')
<script src="/js/jquery.min.js"></script>
<script>
  function getFileName(files) {
    document.getElementById('filename').innerHTML = files[0].name;
    hideErrors();
  }

  function hideErrors()
  {
    if(document.getElementById('errors-box'))
    {
      document.getElementById('errors-box').classList.add("is-hidden");
    }
  }
</script>
@endsection
