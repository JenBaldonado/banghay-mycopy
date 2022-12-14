@extends('layouts.app')

@section('content')



<div class="text-center">
  <h1>GRADE 1</h1>
  <h2>English</h2>
  @foreach($datas as $data)
  @if($data->subject == 'English')
  <div class=card-container>
    <div class="card-item">
      <div>Tittle: {{$data->name}}</div>
      <div>Subject: {{$data->subject}}</div>
      <div>Grade Level: {{$data->gradelevel}}</div>
      <a href="" data-bs-toggle="modal" data-bs-target="#{{'view',$data->id}}">View</a>
      <a href="{{url('/download', $data->file)}}">Download</a>
    </div>
  </div>
  <div class="modal fade" id="{{'view',$data->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xxl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Grade 1</h1>
          <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
        </div>
        <div class="modal-body text-center">
          <h5>Tittle:{{$data->name}}</h5>
          <h6>Subject:{{$data->subject}}</h6>
          <h6>Grade Level:{{$data->gradelevel}}</h6>
          <iframe src="/assets/{{$data->file}}"></iframe>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary upload" onclick="upload()">Upload</button>
        </div>
      </div>
    </div>
  </div>

  @endif

  @endforeach


  <h2>Math</h2>
  @foreach($datas as $data)
  @if($data->subject == 'Math')
  <div class=card-container>
    <div class="card-item">
      <div>Tittle: {{$data->name}}</div>
      <div>Subject: {{$data->subject}}</div>
      <div>Grade Level: {{$data->gradelevel}}</div>
      <a href="" data-bs-toggle="modal" data-bs-target="#{{'view',$data->id}}">View</a>
      <a href="{{url('/download', $data->file)}}">Download</a>
    </div>
  </div>
  <div class="modal fade" id="{{'view',$data->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xxl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Grade 1</h1>
          <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
        </div>
        <div class="modal-body text-center">
          <h5>Tittle:{{$data->name}}</h5>
          <h6>Subject:{{$data->subject}}</h6>
          <h6>Grade Level:{{$data->gradelevel}}</h6>
          <iframe src="/assets/{{$data->file}}"></iframe>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary upload" onclick="upload()">Upload</button>
        </div>
      </div>
    </div>
  </div>

  @endif

  @endforeach


  <h2>Science</h2>
  @foreach($datas as $data)
  @if($data->subject == 'Science')
  <div class=card-container>
    <div class="card-item">
      <div>Tittle: {{$data->name}}</div>
      <div>Subject: {{$data->subject}}</div>
      <div>Grade Level: {{$data->gradelevel}}</div>
      <a href="" data-bs-toggle="modal" data-bs-target="#{{'view',$data->id}}">View</a>
      <a href="{{url('/download', $data->file)}}">Download</a>
    </div>
  </div>
  <div class="modal fade" id="{{'view',$data->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xxl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Grade 1</h1>
          <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
        </div>
        <div class="modal-body text-center">
          <h5>Tittle:{{$data->name}}</h5>
          <h6>Subject:{{$data->subject}}</h6>
          <h6>Grade Level:{{$data->gradelevel}}</h6>
          <iframe src="/assets/{{$data->file}}"></iframe>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary upload" onclick="upload()">Upload</button>
        </div>
      </div>
    </div>
  </div>

  @endif

  @endforeach

  <h2>MAPEH</h2>
  @foreach($datas as $data)
  @if($data->subject == 'MAPEH')
  <div class=card-container>
    <div class="card-item">
      <div>Tittle: {{$data->name}}</div>
      <div>Subject: {{$data->subject}}</div>
      <div>Grade Level: {{$data->gradelevel}}</div>
      <a href="" data-bs-toggle="modal" data-bs-target="#{{'view',$data->id}}">View</a>
      <a href="{{url('/download', $data->file)}}">Download</a>
    </div>
  </div>

  <div class="modal fade" id="{{'view',$data->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xxl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Grade 1</h1>
          <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
        </div>
        <div class="modal-body text-center">
          <h5>Tittle:{{$data->name}}</h5>
          <h6>Subject:{{$data->subject}}</h6>
          <h6>Grade Level:{{$data->gradelevel}}</h6>
          <iframe src="/assets/{{$data->file}}"></iframe>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary upload" onclick="upload()">Upload</button>
        </div>
      </div>
    </div>
  </div>

  @endif

  @endforeach

  <h2>Araling Panlipunan</h2>
  @foreach($datas as $data)
  @if($data->subject == 'Araling Panlipunan')
  <div class=card-container>
    <div class="card-item">
      <div>Tittle: {{$data->name}}</div>
      <div>Subject: {{$data->subject}}</div>
      <div>Grade Level: {{$data->gradelevel}}</div>
      <a href="" data-bs-toggle="modal" data-bs-target="#{{'view',$data->id}}">View</a>
      <a href="{{url('/download', $data->file)}}">Download</a>
    </div>
  </div>
  <div class="modal fade" id="{{'view',$data->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xxl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Grade 1</h1>
          <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
        </div>
        <div class="modal-body text-center">
          <h5>Tittle:{{$data->name}}</h5>
          <h6>Subject:{{$data->subject}}</h6>
          <h6>Grade Level:{{$data->gradelevel}}</h6>
          <iframe src="/assets/{{$data->file}}"></iframe>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary upload" onclick="upload()">Upload</button>
        </div>
      </div>
    </div>
  </div>

  @endif

  @endforeach



</div>
@endsection