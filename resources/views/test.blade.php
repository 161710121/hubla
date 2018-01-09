<center>
<br>@extends('layouts.master')
@section('konten')

Terdengar Seperti {{$jdl}} <br>
Pada Tanggal {{$tgl}} <br><br>
========Tanpa Escape========<br><br>
Terdengar Seperti {!!$jdl!!} <br>
Pada Tanggal {!!$tgl!!}

@endsection