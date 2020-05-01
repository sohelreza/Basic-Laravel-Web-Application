@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut corrupti ea libero exercitationem quos. Ipsa, veritatis laborum voluptas amet, sint, natus eius nam cum asperiores dolor eum obcaecati ullam eligendi?</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended</p>
@endsection
