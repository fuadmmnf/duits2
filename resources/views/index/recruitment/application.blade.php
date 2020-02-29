@extends('layouts.index')
@section('title')
    Recruitment Application
@endsection

@section('css')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/stylesheet.css') }}">
  {!!Html::style('css/parsley.css')!!}
  <link rel="stylesheet" type="text/css" href="{{ asset('css/DateTimePicker.css') }}">
@stop

@section('content')
    <section class="content-top-margin page-title page-title-small border-bottom-light border-top-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 wow fadeInUp" data-wow-duration="300ms">
                    <h1 class="black-text">Recruitment Application</h1>
                </div>
                
            </div>
        </div>
    </section>
    <section class="wow fadeIn">
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="login-box">
                  <form action="{{ route('application.store') }}" method="post" enctype='multipart/form-data' data-parsley-validate="">
                      {!! csrf_field() !!}
                      <center>
                        <h2>Registration Form</h2><br/>
                      </center>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                              <label class="control-label">Name</label>
                              <input type="text" class="form-control" placeholder="Write Your Name" name="name" value="{{ old('name') }}" required="">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                              <label class="control-label">Department</label>
                              <input type="text" class="form-control" placeholder="Department (i.e Economics, Software Engineering)" name="dept" value="{{ old('dept') }}" required="">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="control-label">Hall</label>
                            <select class="form-control" id="hall" name="hall" required="">
                                <option value="" selected="" disabled="">Select Hall</option>
                                <option value="Amar Ekushey Hall">Amar Ekushey Hall</option>
                                <option value="Bangamata Sheikh Fazilatunnesa Mujib Hall">Bangamata Sheikh Fazilatunnesa Mujib Hall</option>
                                <option value="Bangladesh-Kuwait Friendship Hall">Bangladesh-Kuwait Friendship Hall</option>
                                <option value="Bijoy Ekattor Hall">Bijoy Ekattor Hall</option>
                                <option value="Dr. Muhammad Shahidullah Hall">Dr. Muhammad Shahidullah Hall</option>
                                <option value="Fazlul Huq Muslim Hall">Fazlul Huq Muslim Hall</option>
                                <option value="Haji Muhammad Mohsin Hall">Haji Muhammad Mohsin Hall</option>
                                <option value="Jagannath Hall">Jagannath Hall</option>
                                <option value="Bangabandhu Sheikh Mujibur Rahman Hall">Bangabandhu Sheikh Mujibur Rahman Hall</option>
                                <option value="Kobi Jasimuddin Hall">Kobi Jasimuddin Hall</option>
                                <option value="Kabi Sufia Kamal Hall">Kabi Sufia Kamal Hall</option>
                                <option value="Muktijoddha Ziaur Rahman Hall">Muktijoddha Ziaur Rahman Hall</option>
                                <option value="Ruqayyah Hall">Ruqayyah Hall</option>
                                <option value="Salimullah Muslim Hall">Salimullah Muslim Hall</option>
                                <option value="Shaheed Sergeant Zahurul Haque Hall">Shaheed Sergeant Zahurul Haque Hall</option>
                                <option value="Shamsun Nahar Hall">Shamsun Nahar Hall</option>
                                <option value="Sir A F Rahman Hall">Sir A F Rahman Hall</option>
                                <option value="Masterda Surja Sen Hall">Masterda Surja Sen Hall</option>
                                <option value="Sir P.J. Hartog International Hall">Sir P.J. Hartog International Hall</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="control-label">Residency</label>
                            <select class="form-control" id="residency" name="residency" required="">
                                <option value="" selected="" disabled="">Select Residency</option>
                                <option value="1">Resident</option>
                                <option value="0">Non-resident</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label class="control-label">Session</label>
                              <select class="form-control" id="session" name="session" required="">
                                  <option value="" selected="" disabled="">Select Session</option>
                                  @php
                                    $current_year = date('Y');
                                  @endphp
                                  @for($current_year; $current_year > 2000; $current_year--)
                                    <option value="{{ $current_year }}-{{ $current_year + 1 }}">{{ $current_year }}-{{ $current_year + 1 }}</option>
                                  @endfor
                              </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                              <label class="control-label">Email Address</label>
                              <input type="email" class="form-control" placeholder="Write Email Address" name="email" value="{{ old('email') }}" required="">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                              <label class="control-label">Contact No (11 digit number)</label>
                              <input type="text" class="form-control" placeholder="Write Your Contact No" name="contact1" value="{{ old('contact1') }}" required>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                              <label class="control-label">Alternative Contact No (11 digit number)</label>
                              <input type="text" class="form-control" placeholder="Write an Alternative Contact No" name="contact2" value="{{ old('contact2') }}" required>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                              <label class="control-label">Date of Birth</label>
                              <input type="text" class="form-control" placeholder="Date of Birth" id="dob" name="dob" data-field="date" value="{{ old('dob') }}" autocomplete="off" required>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4">
                          <label class="control-label">Blood Group</label>
                          <select class="form-control" id="bloodgroup" name="bloodgroup" required="">
                              <option value="" selected="" disabled="">Select Blood Group</option>
                              <option value="A+">A+</option>
                              <option value="A-">A-</option>
                              <option value="B+">B+</option>
                              <option value="B-">B-</option>
                              <option value="AB+">AB+</option>
                              <option value="AB-">AB-</option>
                              <option value="O+">O+</option>
                              <option value="O-">O-</option>
                          </select>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group no-margin-bottom">
                              <label><strong>Photo (300 X 300 &amp; 200Kb Max):</strong></label>
                              <input type="file" id="image" name="image" required="">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <img src="{{ asset('images/user.png')}}" id='img-upload' style="height: 80px; width: 80px; " />
                        </div>
                      </div>


                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                              <label class="control-label">Email Address</label>
                              <input type="email" class="form-control" placeholder="" required name="email" value="{{ old('email') }}">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <label class="control-label">Mobile No: (11 digit number)</label>
                              <input type="text" class="form-control" placeholder="" required name="mobile" value="{{ old('mobile') }}" pattern="\d*" maxlength="11">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                              <label class="control-label">Emergency Contact No: (11 digit number)</label>
                              <input type="text" class="form-control" placeholder="" required name="emergencycontact" value="{{ old('emergencycontact') }}" pattern="\d*" maxlength="11">
                          </div>
                        </div>
                        
                      </div>
                      <button class="btn highlight-button-dark btn-bg btn-round margin-five no-margin-right" type="submit"><i class="fa fa-arrow-right"></i> Next</button>
                  </form>
                </div>
              </div>
              {{-- <div class="col-md-4">
                <div class="login-box">
                  <center>
                    <h2>Call For Participation 2019</h2><br/>
                    <a href="{{ asset('files/Call_For_Participation_2019.pdf') }}" class="btn highlight-button btn-bg btn-round margin-five no-margin-right" download=""><i class="fa fa-download"></i> Download File</a>
                  </center>
                </div><br/>
                <div class="login-box">
                  <center>
                    <h2>Check Your Registration Status</h2><br/>
                  </center>
                  <input type="text" class="form-control" placeholder="Your Registration ID" id="id_to_check">
                  <center>
                    <button class="btn highlight-button-dark btn-bg btn-round margin-five" id="btn_check" type="button"><i class="fa fa-search"></i> Check Status</button>
                  </center>
                </div>
              </div> --}}
            </div>
        </div>
        <div id="dtBox"></div>
    </section>
@endsection

@section('js')
  {!!Html::script('js/parsley.min.js')!!}
  <script type="text/javascript" src="{{ asset('js/DateTimePicker.min.js') }}"></script>
  <script type="text/javascript">
        $(document).ready(function() {
          $("#dtBox").DateTimePicker({
              mode:"date",
              dateFormat: "dd-MM-yyyy",
              titleContentDate: 'Select Your Date of Birth'
          });
        });
  </script>
  <script type="text/javascript">
  var _URL = window.URL || window.webkitURL;
  $(document).ready( function() {
    $(document).on('change', '.btn-file :file', function() {
      var input = $(this),
          label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
      input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function(event, label) {
        var input = $(this).parents('.input-group').find(':text'),
            log = label;
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#image").change(function(){
      readURL(this);
      var file, img;

      if ((file = this.files[0])) {
        img = new Image();
        img.onload = function() {
          var imagewidth = this.width;
          var imageheight = this.height;
          filesize = parseInt((file.size / 1024));
          if(filesize > 200) {
            $("#image").val('');
            toastr.warning('Filesize: '+filesize+' KB. Please upload within 200KB', 'WARNING').css('width', '400px;');
            setTimeout(function() {
              $("#img-upload").attr('src', '{{ asset('images/user.png') }}');
            }, 1000);
          }
          console.log(imagewidth/imageheight);
          if(((imagewidth/imageheight) < 0.9375) || ((imagewidth/imageheight) > 1.07142)) {
            $("#image").val('');
            toastr.warning('Raio of the photograph should be 1:1', 'WARNING').css('width', '400px;');
            setTimeout(function() {
              $("#img-upload").attr('src', '{{ asset('images/user.png') }}');
            }, 1000);
          }
        };
        img.onerror = function() {
          $("#image").val('');
          toastr.warning('Select a photograph please', 'WARNING').css('width', '400px;');
          setTimeout(function() {
            $("#img-upload").attr('src', '{{ asset('images/user.png') }}');
          }, 1000);
        };
        img.src = _URL.createObjectURL(file);
      }
    });
  });
  </script>
@endsection